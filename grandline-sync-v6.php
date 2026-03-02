<?php

/**
 * Plugin Name: Grand Line Sync v6
 * Plugin URI: https://grandline.ru
 * Description: Полная синхронизация с Grand Line API v2 (категории, атрибуты, товары, файлы, цены)
 * Version: 6.0.0
 * Author: Grand Line
 * Author URI: https://grandline.ru
 * Text Domain: grandline-sync-v6
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * WC requires at least: 5.0
 * WC tested up to: 8.5
 */

if (!defined('ABSPATH')) {
    exit;
}

// HPOS совместимость
add_action('before_woocommerce_init', function () {
    if (class_exists('\Automattic\WooCommerce\Utilities\FeaturesUtil')) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility('custom_order_tables', __FILE__, true);
    }
});

// Проверка WooCommerce
add_action('admin_init', 'gl_v6_check_woocommerce');
function gl_v6_check_woocommerce()
{
    if (!class_exists('WooCommerce')) {
        add_action('admin_notices', function () {
            echo '<div class="error"><p><strong>Grand Line Sync v6</strong> требует WooCommerce.</p></div>';
        });
        deactivate_plugins(plugin_basename(__FILE__));
    }
}

// Константы
define('GL_V6_VERSION', '6.0.0');
define('GL_V6_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('GL_V6_PLUGIN_URL', plugin_dir_url(__FILE__));
define('GL_V6_API_BASE', 'https://client.grandline.ru/api/public');
define('GL_V6_API_GO', 'https://client.grandline.ru/go/api/public');

// Лимиты
@ini_set('memory_limit', '512M');
@ini_set('max_execution_time', '300');
@set_time_limit(300);

/**
 * Главный класс плагина
 */
class GrandLine_Sync_V6
{

    private static $instance = null;
    private $temp_table = '';
    private $categories_table = '';
    private $images_queue_table = '';

    public static function get_instance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        global $wpdb;
        $this->temp_table = $wpdb->prefix . 'gl_temp_products_v6';
        $this->categories_table = $wpdb->prefix . 'gl_temp_categories_v6';
        $this->images_queue_table = $wpdb->prefix . 'gl_images_queue_v6';

        add_action('admin_menu', [$this, 'add_admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_assets']);

        // Отображение единиц измерения в админке товара
        add_action('woocommerce_product_options_general_product_data', [$this, 'display_amount_units']);

        // AJAX хуки
        add_action('wp_ajax_gl_v6_test_connection', [$this, 'ajax_test_connection']);
        add_action('wp_ajax_gl_v6_sync_categories', [$this, 'ajax_sync_categories']);
        add_action('wp_ajax_gl_v6_sync_attributes', [$this, 'ajax_sync_attributes']);
        add_action('wp_ajax_gl_v6_load_descriptions', [$this, 'ajax_load_descriptions']);
        add_action('wp_ajax_gl_v6_save_load_settings', [$this, 'ajax_save_load_settings']);
        add_action('wp_ajax_gl_v6_load_products', [$this, 'ajax_load_products']);
        add_action('wp_ajax_gl_v6_import_products', [$this, 'ajax_import_products']);
        add_action('wp_ajax_gl_v6_update_prices', [$this, 'ajax_update_prices']);
        add_action('wp_ajax_gl_v6_queue_files', [$this, 'ajax_queue_files']);
        add_action('wp_ajax_gl_v6_check_queue_status', [$this, 'ajax_check_queue_status']);
        add_action('wp_ajax_gl_v6_pause_queue', [$this, 'ajax_pause_queue']);
        add_action('wp_ajax_gl_v6_resume_queue', [$this, 'ajax_resume_queue']);
        add_action('wp_ajax_gl_v6_clear_queue', [$this, 'ajax_clear_queue']);

        // WP Cron для фоновой обработки изображений
        add_action('gl_v6_process_images_queue', [$this, 'process_images_queue']);

        // Регистрация кастомного интервала
        add_filter('cron_schedules', [$this, 'add_cron_interval']);
    }

    public function add_admin_menu()
    {
        add_menu_page(
            'Grand Line Sync v6',
            'Grand Line v6',
            'manage_woocommerce',
            'grandline-sync-v6',
            [$this, 'render_admin_page'],
            'dashicons-update',
            56
        );
    }

    public function enqueue_assets($hook)
    {
        if ($hook !== 'toplevel_page_grandline-sync-v6') {
            return;
        }

        wp_enqueue_style('gl-v6-admin', GL_V6_PLUGIN_URL . 'assets/admin.css', [], GL_V6_VERSION);
        wp_enqueue_script('gl-v6-admin', GL_V6_PLUGIN_URL . 'assets/admin.js', ['jquery'], GL_V6_VERSION, true);

        wp_localize_script('gl-v6-admin', 'glV6Ajax', [
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('gl_v6_nonce')
        ]);
    }

    /**
     * Отображение единиц измерения в админке товара
     */
    public function display_amount_units()
    {
        global $post;

        if (!$post) {
            return;
        }

        $product_id = $post->ID;

        // Получаем данные
        $amount_units = get_post_meta($product_id, '_gl_amount_units', true);
        $amount_unit = get_post_meta($product_id, '_gl_amount_unit', true);
        $quantity_unit = get_post_meta($product_id, '_gl_quantity_unit', true);
        $size_unit = get_post_meta($product_id, '_gl_size_unit', true);

        if (!$amount_units && !$amount_unit && !$quantity_unit && !$size_unit) {
            return; // Нет данных
        }

        echo '<div class="options_group" style="border-top: 1px solid #eee; padding-top: 10px;">';
        echo '<h3 style="padding-left: 12px;">📦 Единицы измерения Grand Line</h3>';

        // Доступные единицы мест (для калькулятора)
        if ($amount_units) {
            $units = json_decode($amount_units, true);
            if (is_array($units) && !empty($units)) {
                echo '<div style="padding: 12px;">';
                echo '<strong>Доступные единицы мест:</strong><br>';
                echo '<table style="margin-top: 5px; border-collapse: collapse;">';
                echo '<tr style="background: #f0f0f0;"><th style="padding: 5px; border: 1px solid #ddd;">Название</th><th style="padding: 5px; border: 1px solid #ddd;">Коэффициент</th><th style="padding: 5px; border: 1px solid #ddd;">ID 1C</th></tr>';
                foreach ($units as $unit) {
                    echo '<tr>';
                    echo '<td style="padding: 5px; border: 1px solid #ddd;"><strong>' . esc_html($unit['name']) . '</strong></td>';
                    echo '<td style="padding: 5px; border: 1px solid #ddd;">' . esc_html($unit['coefficient']) . '</td>';
                    echo '<td style="padding: 5px; border: 1px solid #ddd; font-size: 11px; color: #666;">' . esc_html($unit['id_1c']) . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '<p style="color: #666; font-size: 12px; margin-top: 5px;">Используйте для калькулятора упаковок/коробок/паллет</p>';
                echo '</div>';
            }
        }

        // Единица количества мест
        if ($amount_unit) {
            $unit = json_decode($amount_unit, true);
            if (is_array($unit)) {
                echo '<div style="padding: 12px;">';
                echo '<strong>Единица количества мест:</strong> ';
                echo esc_html($unit['name']) . ' (коэф: ' . esc_html($unit['coefficient']) . ')';
                echo '</div>';
            }
        }

        // Единица количества
        if ($quantity_unit) {
            $unit = json_decode($quantity_unit, true);
            if (is_array($unit)) {
                echo '<div style="padding: 12px;">';
                echo '<strong>Единица количества:</strong> ';
                echo esc_html($unit['name']);
                echo '</div>';
            }
        }

        // Единица размера
        if ($size_unit) {
            $unit = json_decode($size_unit, true);
            if (is_array($unit)) {
                echo '<div style="padding: 12px;">';
                echo '<strong>Единица размера:</strong> ';
                echo esc_html($unit['name']);
                echo '</div>';
            }
        }

        echo '</div>';
    }

    /**
     * Добавить кастомный интервал для cron (каждую минуту)
     */
    public function add_cron_interval($schedules)
    {
        $schedules['gl_v6_every_minute'] = [
            'interval' => 60,
            'display' => __('Каждую минуту (GL v6)')
        ];
        return $schedules;
    }

    public function render_admin_page()
    {
        $api_key = get_option('gl_v6_api_key', '');
        $branch_id = get_option('gl_v6_branch_id', '');
        $agreement_id = get_option('gl_v6_agreement_id', '');

        global $wpdb;
        $temp_count = $wpdb->get_var("SELECT COUNT(*) FROM {$this->temp_table}");
        $stats = get_option('gl_v6_stats', []);

?>
        <div class="wrap gl-v6-wrap">
            <h1>🚀 Grand Line Sync v6</h1>

            <!-- Настройки API -->
            <div class="gl-section">
                <h2>⚙️ Настройки API</h2>
                <form method="post" action="" id="gl-settings-form">
                    <?php wp_nonce_field('gl_v6_settings'); ?>
                    <table class="form-table">
                        <tr>
                            <th><label for="api_key">API ключ *</label></th>
                            <td>
                                <input type="text" id="api_key" name="api_key"
                                    value="<?php echo esc_attr($api_key); ?>"
                                    class="regular-text" required>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="branch_id">ID филиала</label></th>
                            <td>
                                <input type="text" id="branch_id" name="branch_id"
                                    value="<?php echo esc_attr($branch_id); ?>"
                                    class="regular-text">
                                <p class="description">Для цен и остатков (необязательно)</p>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="agreement_id">ID договора</label></th>
                            <td>
                                <input type="text" id="agreement_id" name="agreement_id"
                                    value="<?php echo esc_attr($agreement_id); ?>"
                                    class="regular-text">
                                <p class="description">Для цен (необязательно)</p>
                            </td>
                        </tr>
                    </table>

                    <p class="submit">
                        <button type="submit" class="button button-primary">💾 Сохранить настройки</button>
                        <button type="button" id="gl-test-connection" class="button">🔍 Проверить соединение</button>
                    </p>
                </form>

                <div id="gl-test-result"></div>
            </div>

            <!-- ШАГ 1: Структура -->
            <div class="gl-section">
                <h2>📁 Шаг 1: Создание структуры (категории + атрибуты)</h2>
                <p>Загрузка категорий из API и создание глобальных атрибутов</p>

                <p>
                    <button type="button" id="gl-sync-categories" class="button button-primary button-hero">
                        📂 Синхронизировать категории
                    </button>
                    <button type="button" id="gl-sync-attributes" class="button button-primary button-hero">
                        🏷️ Создать атрибуты
                    </button>
                    <button type="button" id="gl-load-descriptions" class="button button-hero">
                        📝 Загрузить описания
                    </button>
                </p>

                <div id="gl-structure-result"></div>

                <?php if (isset($stats['categories_synced'])): ?>
                    <div class="notice notice-success inline">
                        <p>✅ Категорий синхронизировано: <strong><?php echo $stats['categories_synced']; ?></strong></p>
                    </div>
                <?php endif; ?>

                <?php
                $descriptions_count = count(get_option('gl_v6_descriptions', []));
                if ($descriptions_count > 0):
                ?>
                    <div class="notice notice-info inline">
                        <p>📝 Описаний загружено: <strong><?php echo $descriptions_count; ?></strong></p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- ШАГ 2: Товары -->
            <div class="gl-section">
                <h2>📦 Шаг 2: Импорт товаров (двухэтапный)</h2>

                <h3>2.1: Загрузка из API во временную таблицу</h3>
                <?php if ($temp_count > 0): ?>
                    <div class="notice notice-info inline">
                        <p>📊 Во временной таблице: <strong><?php echo number_format($temp_count, 0, ',', ' '); ?></strong> товаров
                            <button type="button" id="gl-clear-temp" class="button button-small">🗑️ Очистить</button>
                        </p>
                    </div>
                <?php endif; ?>

                <table class="form-table">
                    <tr>
                        <th>Товаров за запрос:</th>
                        <td>
                            <input type="number" id="gl-load-limit" value="5000" min="1000" max="20000" step="1000" style="width: 120px;">
                            <p class="description">API поддерживает до 20 000 за раз</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Максимум товаров:</th>
                        <td>
                            <input type="number" id="gl-load-max" value="<?php echo get_option('gl_v6_load_max', ''); ?>" placeholder="Все товары" min="0" step="5000" style="width: 120px;">
                            <button type="button" id="gl-save-load-settings" class="button">💾 Сохранить</button>
                            <p class="description">Оставьте пустым для загрузки всех</p>
                        </td>
                    </tr>
                </table>

                <p>
                    <button type="button" id="gl-load-products" class="button button-primary button-hero">
                        ⬇️ Загрузить из API
                    </button>
                    <button type="button" id="gl-load-stop" class="button button-hero" style="display:none;">
                        ⏹️ Остановить
                    </button>
                </p>

                <div id="gl-load-progress" style="display:none;">
                    <div class="gl-progress-bar">
                        <div class="gl-progress-fill"></div>
                    </div>
                    <div class="gl-progress-text"></div>
                </div>

                <?php if ($temp_count > 0): ?>
                    <h3>2.2: Создание товаров в WooCommerce</h3>

                    <table class="form-table">
                        <tr>
                            <th>Товаров за пакет:</th>
                            <td>
                                <input type="number" id="gl-import-batch" value="50" min="10" max="200" step="10" style="width: 120px;">
                                <p class="description">Меньше = надёжнее, но медленнее</p>
                            </td>
                        </tr>
                    </table>

                    <p>
                        <button type="button" id="gl-import-products" class="button button-primary button-hero">
                            🚀 Создать товары
                        </button>
                        <button type="button" id="gl-import-stop" class="button button-hero" style="display:none;">
                            ⏹️ Остановить
                        </button>
                    </p>

                    <div id="gl-import-progress" style="display:none;">
                        <div class="gl-progress-bar">
                            <div class="gl-progress-fill"></div>
                        </div>
                        <div class="gl-progress-text"></div>
                    </div>
                <?php endif; ?>

                <div id="gl-import-result"></div>
            </div>

            <!-- ШАГ 3: Файлы (ФОНОВАЯ ОБРАБОТКА) -->
            <div class="gl-section">
                <h2>🖼️ Шаг 3: Загрузка файлов (фоновая обработка)</h2>
                <p><strong>НОВОЕ:</strong> Изображения загружаются в фоновом режиме через очередь. Не нужно держать страницу открытой!</p>

                <?php
                $queue_stats = $this->get_queue_stats();
                if ($queue_stats['total'] > 0):
                ?>
                    <div class="notice notice-info inline">
                        <p>
                            📊 <strong>Очередь:</strong>
                            Всего: <?php echo $queue_stats['total']; ?> |
                            Ожидают: <?php echo $queue_stats['pending']; ?> |
                            Обрабатывается: <?php echo $queue_stats['processing']; ?> |
                            Завершено: <?php echo $queue_stats['completed']; ?> |
                            Ошибки: <?php echo $queue_stats['failed']; ?>
                        </p>
                        <p>
                            <strong>Статус:</strong>
                            <?php if ($queue_stats['is_paused']): ?>
                                <span style="color: orange;">⏸️ Приостановлено</span>
                            <?php else: ?>
                                <span style="color: green;">▶️ Активно</span>
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <p>
                    <button type="button" id="gl-queue-files" class="button button-primary button-hero">
                        📥 Добавить файлы в очередь
                    </button>

                    <?php if ($queue_stats['total'] > 0): ?>
                        <?php if (!$queue_stats['is_paused']): ?>
                            <button type="button" id="gl-pause-queue" class="button button-hero">
                                ⏸️ Приостановить
                            </button>
                        <?php else: ?>
                            <button type="button" id="gl-resume-queue" class="button button-hero">
                                ▶️ Возобновить
                            </button>
                        <?php endif; ?>

                        <button type="button" id="gl-clear-queue" class="button button-hero">
                            🗑️ Очистить очередь
                        </button>
                    <?php endif; ?>
                </p>

                <div id="gl-files-result"></div>
            </div>

            <!-- ШАГ 4: Цены -->
            <div class="gl-section">
                <h2>💰 Шаг 4: Обновление цен</h2>
                <p>Требуется указать branch_id и agreement_id в настройках</p>

                <p>
                    <button type="button" id="gl-update-prices" class="button button-primary button-hero">
                        💵 Обновить цены
                    </button>
                    <button type="button" id="gl-prices-stop" class="button button-hero" style="display:none;">
                        ⏹️ Остановить
                    </button>
                </p>

                <div id="gl-prices-progress" style="display:none;">
                    <div class="gl-progress-bar">
                        <div class="gl-progress-fill"></div>
                    </div>
                    <div class="gl-progress-text"></div>
                </div>

                <div id="gl-prices-result"></div>
            </div>

            <!-- Статистика -->
            <div class="gl-section">
                <h2>📊 Статистика</h2>
                <?php $this->render_stats($stats); ?>
            </div>
        </div>

        <script>
            // Автообновление статуса очереди каждые 5 секунд
            <?php if ($queue_stats['total'] > 0 && !$queue_stats['is_paused']): ?>
                setInterval(function() {
                    jQuery.post(glV6Ajax.ajaxurl, {
                        action: 'gl_v6_check_queue_status',
                        nonce: glV6Ajax.nonce
                    }, function(response) {
                        if (response.success && response.data.has_changes) {
                            location.reload();
                        }
                    });
                }, 5000);
            <?php endif; ?>
        </script>
<?php

        // Обработка сохранения настроек
        if (isset($_POST['api_key']) && check_admin_referer('gl_v6_settings')) {
            update_option('gl_v6_api_key', sanitize_text_field($_POST['api_key']));
            update_option('gl_v6_branch_id', sanitize_text_field($_POST['branch_id']));
            update_option('gl_v6_agreement_id', sanitize_text_field($_POST['agreement_id']));
            echo '<div class="notice notice-success"><p>✅ Настройки сохранены!</p></div>';
        }
    }

    /**
     * Получить статистику очереди
     */
    private function get_queue_stats()
    {
        global $wpdb;

        $total = $wpdb->get_var("SELECT COUNT(*) FROM {$this->images_queue_table}");
        $pending = $wpdb->get_var("SELECT COUNT(*) FROM {$this->images_queue_table} WHERE status = 'pending'");
        $processing = $wpdb->get_var("SELECT COUNT(*) FROM {$this->images_queue_table} WHERE status = 'processing'");
        $completed = $wpdb->get_var("SELECT COUNT(*) FROM {$this->images_queue_table} WHERE status = 'completed'");
        $failed = $wpdb->get_var("SELECT COUNT(*) FROM {$this->images_queue_table} WHERE status = 'failed'");

        $is_paused = get_option('gl_v6_queue_paused', 0);

        return [
            'total' => intval($total),
            'pending' => intval($pending),
            'processing' => intval($processing),
            'completed' => intval($completed),
            'failed' => intval($failed),
            'is_paused' => (bool)$is_paused
        ];
    }

    private function render_stats($stats)
    {
        if (empty($stats)) {
            echo '<p>Статистика пока недоступна</p>';
            return;
        }

        echo '<table class="widefat"><tbody>';

        if (isset($stats['last_sync'])) {
            echo '<tr><td><strong>Последняя синхронизация:</strong></td><td>' . date('d.m.Y H:i:s', $stats['last_sync']) . '</td></tr>';
        }
        if (isset($stats['categories_synced'])) {
            echo '<tr><td><strong>Категорий:</strong></td><td>' . $stats['categories_synced'] . '</td></tr>';
        }
        if (isset($stats['products_imported'])) {
            echo '<tr><td><strong>Товаров импортировано:</strong></td><td>' . number_format($stats['products_imported'], 0, ',', ' ') . '</td></tr>';
        }
        if (isset($stats['files_loaded'])) {
            echo '<tr><td><strong>Файлов загружено:</strong></td><td>' . number_format($stats['files_loaded'], 0, ',', ' ') . '</td></tr>';
        }
        if (isset($stats['prices_updated'])) {
            echo '<tr><td><strong>Цен обновлено:</strong></td><td>' . number_format($stats['prices_updated'], 0, ',', ' ') . '</td></tr>';
        }

        echo '</tbody></table>';
    }

    // ============ AJAX МЕТОДЫ ============

    public function ajax_test_connection()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        $api_key = get_option('gl_v6_api_key');
        if (empty($api_key)) {
            wp_send_json_error(['message' => 'API ключ не указан']);
        }

        $url = GL_V6_API_BASE . '/nomenclatures?api_key=' . $api_key . '&limit=1';
        $response = $this->make_request($url);

        if (is_wp_error($response)) {
            wp_send_json_error(['message' => 'Ошибка: ' . $response->get_error_message()]);
        }

        $body = json_decode(wp_remote_retrieve_body($response), true);
        if (!isset($body['total'])) {
            wp_send_json_error(['message' => 'Неверный формат ответа']);
        }

        wp_send_json_success([
            'message' => '✅ Соединение успешно! Всего товаров в API: ' . number_format($body['total'], 0, ',', ' ')
        ]);
    }

    public function ajax_sync_categories()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');
        set_time_limit(0);

        $result = $this->sync_categories_from_api();

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_sync_attributes()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        $result = $this->create_global_attributes();

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_load_descriptions()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');
        set_time_limit(0);

        $result = $this->load_and_apply_descriptions();

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_save_load_settings()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        $max = isset($_POST['max']) ? intval($_POST['max']) : 0;
        update_option('gl_v6_load_max', $max);

        wp_send_json_success(['message' => '💾 Настройки сохранены']);
    }

    public function ajax_load_products()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');
        set_time_limit(0);

        $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 5000;
        $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

        $result = $this->load_products_to_temp($limit, $offset);

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_import_products()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');
        set_time_limit(0);

        $batch = isset($_POST['batch']) ? intval($_POST['batch']) : 50;
        $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

        $result = $this->import_products_from_temp($batch, $offset);

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_update_prices()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');
        set_time_limit(0);

        $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 5000;
        $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

        $result = $this->update_prices_batch($limit, $offset);

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    public function ajax_clear_temp()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        global $wpdb;
        $wpdb->query("TRUNCATE TABLE {$this->temp_table}");

        wp_send_json_success(['message' => '🗑️ Временная таблица очищена']);
    }

    /**
     * AJAX: Добавить файлы в очередь
     */
    public function ajax_queue_files()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        $result = $this->queue_files_for_processing();

        if (isset($result['error'])) {
            wp_send_json_error($result);
        }

        wp_send_json_success($result);
    }

    /**
     * AJAX: Проверить статус очереди
     */
    public function ajax_check_queue_status()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        $stats = $this->get_queue_stats();

        // Проверяем изменения
        $last_stats = get_transient('gl_v6_last_queue_stats');
        $has_changes = false;

        if ($last_stats === false || $stats != $last_stats) {
            $has_changes = true;
            set_transient('gl_v6_last_queue_stats', $stats, 300);
        }

        wp_send_json_success([
            'stats' => $stats,
            'has_changes' => $has_changes
        ]);
    }

    /**
     * AJAX: Приостановить очередь
     */
    public function ajax_pause_queue()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        update_option('gl_v6_queue_paused', 1);

        wp_send_json_success(['message' => '⏸️ Очередь приостановлена']);
    }

    /**
     * AJAX: Возобновить очередь
     */
    public function ajax_resume_queue()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        update_option('gl_v6_queue_paused', 0);

        wp_send_json_success(['message' => '▶️ Очередь возобновлена']);
    }

    /**
     * AJAX: Очистить очередь
     */
    public function ajax_clear_queue()
    {
        check_ajax_referer('gl_v6_nonce', 'nonce');

        if (!isset($_POST['confirm']) || $_POST['confirm'] !== 'yes') {
            wp_send_json_error(['message' => 'Требуется подтверждение']);
        }

        global $wpdb;
        $wpdb->query("TRUNCATE TABLE {$this->images_queue_table}");
        update_option('gl_v6_queue_paused', 0);

        wp_send_json_success(['message' => '🗑️ Очередь очищена']);
    }

    // ============ ОСНОВНЫЕ МЕТОДЫ ============

    /**
     * Слияние порции folder_contents с уже сохранёнными данными
     */
    private function merge_folder_contents($new_data)
    {
        $existing = get_option('gl_v6_folder_contents', []);

        foreach ($new_data as $folder_id => $products) {
            if (!isset($existing[$folder_id])) {
                $existing[$folder_id] = [];
            }
            $existing[$folder_id] = array_merge($existing[$folder_id], $products);
            $existing[$folder_id] = array_unique($existing[$folder_id]); // Удаляем дубли
        }

        update_option('gl_v6_folder_contents', $existing);
    }

    /**
     * Синхронизация категорий из API
     */
    private function sync_categories_from_api()
    {
        $api_key = get_option('gl_v6_api_key');

        // 1. Загрузить дерево папок
        $folders_url = GL_V6_API_BASE . '/folders/?api_key=' . $api_key;
        $response = $this->make_request($folders_url);

        if (is_wp_error($response)) {
            return ['error' => 'Ошибка загрузки категорий: ' . $response->get_error_message()];
        }

        $folders = json_decode(wp_remote_retrieve_body($response), true);
        if (!is_array($folders)) {
            return ['error' => 'Неверный формат данных категорий'];
        }

        // 2. Загрузить ВСЕ привязки товаров к папкам (с пагинацией и экономией памяти)
        $offset = 0;
        $limit = 20000;
        $total_loaded = 0;

        // Очищаем старые данные
        delete_option('gl_v6_folder_contents');

        $this->log_error("Начинаем загрузку folder_contents...");

        // Увеличиваем лимит памяти
        @ini_set('memory_limit', '1024M');

        $folder_contents = [];
        $save_every = 100000; // Сохраняем каждые 100k записей

        while (true) {
            $contents_url = GL_V6_API_BASE . '/folders-contents/?api_key=' . $api_key . '&limit=' . $limit . '&offset=' . $offset;
            $response2 = $this->make_request($contents_url);

            if (is_wp_error($response2)) {
                $this->log_error("Ошибка загрузки folder_contents на offset={$offset}");
                break;
            }

            $contents_data = json_decode(wp_remote_retrieve_body($response2), true);

            if (!is_array($contents_data) || empty($contents_data)) {
                $this->log_error("Загрузка folder_contents завершена. Всего: {$total_loaded}");
                break;
            }

            foreach ($contents_data as $item) {
                $nom_id = $item['nomenclature_id'];
                $folder_id = $item['folder_id'];

                if (!isset($folder_contents[$folder_id])) {
                    $folder_contents[$folder_id] = [];
                }
                $folder_contents[$folder_id][] = $nom_id;
                $total_loaded++;
            }

            $this->log_error("Загружено folder_contents: offset={$offset}, получено=" . count($contents_data) . ", всего={$total_loaded}");

            // Сохраняем порцию если накопилось много
            if ($total_loaded % $save_every === 0) {
                $this->merge_folder_contents($folder_contents);
                $folder_contents = []; // Очищаем память
                $this->log_error("Сохранена порция, память очищена");
                gc_collect_cycles(); // Принудительная сборка мусора
            }

            // Если получили меньше лимита - это последняя страница
            if (count($contents_data) < $limit) {
                break;
            }

            $offset += $limit;

            // Пауза между запросами
            sleep(1);
        }

        // Сохраняем остаток
        if (!empty($folder_contents)) {
            $this->merge_folder_contents($folder_contents);
        }

        $this->log_error("Итого загружено привязок товар→папка: {$total_loaded}");

        // Сохраняем все папки для быстрого доступа
        update_option('gl_v6_all_folders', $folders);

        // 2.1. Загрузить маркетинговые описания
        $descriptions_url = GL_V6_API_BASE . '/marketing-descriptions/?api_key=' . $api_key;
        $response_desc = $this->make_request($descriptions_url);

        $descriptions_by_id = [];
        if (!is_wp_error($response_desc)) {
            $descriptions_data = json_decode(wp_remote_retrieve_body($response_desc), true);
            if (is_array($descriptions_data)) {
                foreach ($descriptions_data as $desc) {
                    // Сохраняем только ID и текст
                    $descriptions_by_id[$desc['id_1c']] = $desc['description'];
                }
                $this->log_error("Загружено маркетинговых описаний: " . count($descriptions_by_id));
            }
        }

        // 2.2. Загрузить соответствия номенклатура → описание
        $content_url = GL_V6_API_BASE . '/marketing-descriptions-content/?api_key=' . $api_key;
        $response_content = $this->make_request($content_url);

        // Сохраняем ТОЛЬКО mapping ID → ID (экономим память)
        $nomenclature_to_desc_id = [];
        if (!is_wp_error($response_content)) {
            $content_data = json_decode(wp_remote_retrieve_body($response_content), true);
            if (is_array($content_data)) {
                foreach ($content_data as $item) {
                    $nom_id = $item['nomenclature_id'];
                    $desc_id = $item['marketingDescription_id'];

                    if (isset($descriptions_by_id[$desc_id])) {
                        $nomenclature_to_desc_id[$nom_id] = $desc_id;
                    }
                }
                $this->log_error("Создано соответствий номенклатура→описание: " . count($nomenclature_to_desc_id));
            }
        }

        // Сохраняем компактные данные
        update_option('gl_v6_descriptions_map', $nomenclature_to_desc_id); // только ID → ID
        update_option('gl_v6_descriptions_text', $descriptions_by_id); // только тексты описаний

        // 3. Заполняем временную таблицу категорий для быстрого поиска
        global $wpdb;
        $wpdb->query("TRUNCATE TABLE {$this->categories_table}");

        foreach ($folders as $folder) {
            $wpdb->insert(
                $this->categories_table,
                [
                    'folder_id' => $folder['id_1c'],
                    'folder_name' => $folder['name'],
                    'parent_folder_id' => $folder['folder_id'],
                    'level' => 0 // заполним потом
                ],
                ['%s', '%s', '%s', '%d']
            );
        }

        $this->log_error("Заполнена таблица категорий: " . count($folders) . " записей");

        $root_guid = '392b926e-19d3-4259-980a-1f3fb6354a20';

        // 3. Найти корневые категории (с префиксом a. b. c. или 1. 2. 3.)
        $root_categories = [];
        foreach ($folders as $folder) {
            if ($folder['folder_id'] == $root_guid) {
                $name = trim($folder['name']);
                // Проверяем префикс
                if (preg_match('/^([a-zA-Z]\.|[0-9]+\.)\s+/', $name)) {
                    $root_categories[] = $folder;
                }
            }
        }

        $this->log_error("Найдено корневых категорий с префиксом: " . count($root_categories));

        // 4. Создаём структуру: корневые → дети → внуки (максимум 3 уровня)
        $folder_map = []; // folder_id => term_id
        $created = 0;
        $updated = 0;

        // Создаём корневые категории (уровень 1)
        foreach ($root_categories as $folder) {
            $result = $this->create_category($folder, 0, $folder_map);
            if ($result['created']) {
                $created++;
            } else {
                $updated++;
            }
        }

        $this->log_error("Уровень 1 (корневые): создано={$created}, обновлено={$updated}");

        // Создаём дочерние категории (уровень 2)
        $level2_count = $this->create_children_categories($folders, $root_categories, $folder_map, $created, $updated, 2);
        $this->log_error("Уровень 2: создано={$level2_count['created']}, обновлено={$level2_count['updated']}");

        $created += $level2_count['created'];
        $updated += $level2_count['updated'];

        // Создаём внучатые категории (уровень 3)
        $level2_folders = [];
        foreach ($folders as $folder) {
            if (isset($folder_map[$folder['folder_id']])) {
                $level2_folders[] = $folder;
            }
        }

        $level3_count = $this->create_children_categories($folders, $level2_folders, $folder_map, 0, 0, 3);
        $this->log_error("Уровень 3: создано={$level3_count['created']}, обновлено={$level3_count['updated']}");

        $created += $level3_count['created'];
        $updated += $level3_count['updated'];

        // Сохраняем mapping для использования при импорте
        update_option('gl_v6_folder_map', $folder_map);

        // Обновляем статистику
        $stats = get_option('gl_v6_stats', []);
        $stats['categories_synced'] = count($folder_map);
        $stats['last_sync'] = time();
        update_option('gl_v6_stats', $stats);

        return [
            'message' => "✅ Категорий синхронизировано: {$created} создано, {$updated} обновлено (всего " . count($folder_map) . ")",
            'total' => count($folder_map),
            'created' => $created,
            'updated' => $updated
        ];
    }

    /**
     * Создание дочерних категорий для указанного уровня
     */
    private function create_children_categories($all_folders, $parent_folders, &$folder_map, $created, $updated, $level)
    {
        $result = ['created' => 0, 'updated' => 0];

        foreach ($parent_folders as $parent_folder) {
            $parent_folder_id = $parent_folder['id_1c'];

            // Если родитель не создан, пропускаем
            if (!isset($folder_map[$parent_folder_id])) {
                continue;
            }

            $parent_term_id = $folder_map[$parent_folder_id];

            // Ищем всех детей этого родителя
            foreach ($all_folders as $folder) {
                if ($folder['folder_id'] == $parent_folder_id) {
                    // Создаём дочернюю категорию
                    $child_result = $this->create_category($folder, $parent_term_id, $folder_map);

                    if ($child_result['created']) {
                        $result['created']++;
                    } else {
                        $result['updated']++;
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Создание одной категории
     */
    private function create_category($folder, $parent_term_id, &$folder_map)
    {
        $folder_id = $folder['id_1c'];
        $name = $this->clean_category_name($folder['name']);

        // Проверяем существование
        $existing = term_exists($name, 'product_cat', $parent_term_id);

        if ($existing) {
            $term_id = $existing['term_id'];
            $folder_map[$folder_id] = $term_id;
            update_term_meta($term_id, 'gl_folder_id', $folder_id);

            $this->log_error("Обновлена: {$name} (ID: {$term_id}, родитель: {$parent_term_id})");

            return ['created' => false, 'term_id' => $term_id];
        }

        $result = wp_insert_term($name, 'product_cat', ['parent' => $parent_term_id]);

        if (is_wp_error($result)) {
            $this->log_error("Ошибка создания категории: {$name} - " . $result->get_error_message());
            return ['created' => false, 'term_id' => null];
        }

        $term_id = $result['term_id'];
        $folder_map[$folder_id] = $term_id;
        update_term_meta($term_id, 'gl_folder_id', $folder_id);

        $this->log_error("Создана: {$name} (ID: {$term_id}, родитель: {$parent_term_id})");

        return ['created' => true, 'term_id' => $term_id];
    }

    /**
     * Очистка названия категории (убрать префикс)
     */
    private function clean_category_name($name)
    {
        // Убираем "a. ", "1. " и т.д. из начала
        $name = preg_replace('/^([a-zA-Z]\.|[0-9]+\.)\s+/', '', $name);
        return trim($name);
    }

    /**
     * Создание глобальных атрибутов
     */
    private function create_global_attributes()
    {
        $attributes = [
            'pa_color' => 'Цвет',
            'pa_coating' => 'Покрытие',
            'pa_thickness' => 'Толщина',
            'pa_weight' => 'Вес',
            'pa_size' => 'Размер'
        ];

        $created = 0;

        foreach ($attributes as $slug => $name) {
            $attr_id = wc_attribute_taxonomy_id_by_name($slug);

            if (!$attr_id) {
                $attr_id = wc_create_attribute([
                    'name' => $name,
                    'slug' => str_replace('pa_', '', $slug),
                    'type' => 'select',
                    'order_by' => 'menu_order',
                    'has_archives' => false
                ]);

                if (!is_wp_error($attr_id)) {
                    register_taxonomy($slug, ['product'], [
                        'hierarchical' => false,
                        'show_ui' => false,
                        'query_var' => true,
                        'rewrite' => false,
                    ]);

                    $created++;
                }
            }
        }

        return [
            'message' => "✅ Атрибутов создано: {$created}, всего: " . count($attributes),
            'created' => $created
        ];
    }

    /**
     * Загрузить описания из API и применить к существующим товарам
     */
    private function load_and_apply_descriptions()
    {
        $api_key = get_option('gl_v6_api_key');

        // 1. Загрузить маркетинговые описания
        $descriptions_url = GL_V6_API_BASE . '/marketing-descriptions/?api_key=' . $api_key;
        $response = $this->make_request($descriptions_url);

        if (is_wp_error($response)) {
            return ['error' => 'Ошибка загрузки описаний: ' . $response->get_error_message()];
        }

        $descriptions_data = json_decode(wp_remote_retrieve_body($response), true);

        if (!is_array($descriptions_data)) {
            return ['error' => 'Неверный формат данных описаний'];
        }

        // Индексируем описания по их ID (только текст!)
        $descriptions_by_id = [];
        foreach ($descriptions_data as $desc) {
            $descriptions_by_id[$desc['id_1c']] = $desc['description'];
        }

        $this->log_error("Загружено маркетинговых описаний: " . count($descriptions_by_id));

        // 2. Загрузить соответствия номенклатура → описание
        $content_url = GL_V6_API_BASE . '/marketing-descriptions-content/?api_key=' . $api_key;
        $response2 = $this->make_request($content_url);

        if (is_wp_error($response2)) {
            return ['error' => 'Ошибка загрузки соответствий: ' . $response2->get_error_message()];
        }

        $content_data = json_decode(wp_remote_retrieve_body($response2), true);

        if (!is_array($content_data)) {
            return ['error' => 'Неверный формат данных соответствий'];
        }

        // Создаём компактный mapping: nomenclature_id → description_id (только ID!)
        $nomenclature_to_desc_id = [];
        foreach ($content_data as $item) {
            $nom_id = $item['nomenclature_id'];
            $desc_id = $item['marketingDescription_id'];

            if (isset($descriptions_by_id[$desc_id])) {
                $nomenclature_to_desc_id[$nom_id] = $desc_id;
            }
        }

        // Сохраняем компактные данные
        update_option('gl_v6_descriptions_map', $nomenclature_to_desc_id); // только ID → ID
        update_option('gl_v6_descriptions_text', $descriptions_by_id); // только тексты

        $this->log_error("Создано соответствий номенклатура→описание: " . count($nomenclature_to_desc_id));

        // 3. Применить к существующим товарам
        $updated = 0;
        $skipped = 0;

        // Ищем все товары с _api_sku
        global $wpdb;
        $products = $wpdb->get_results("
            SELECT post_id, meta_value as sku 
            FROM {$wpdb->postmeta} 
            WHERE meta_key = '_api_sku'
            LIMIT 10000
        ");

        $this->log_error("Найдено товаров для обновления: " . count($products));

        $this->log_error("Найдено товаров для обновления: " . count($products));

        foreach ($products as $row) {
            $product_id = $row->post_id;
            $sku = $row->sku;

            // Используем метод для получения описания
            $description = $this->get_product_description($sku);

            if (!$description) {
                $skipped++;
                continue;
            }

            $first_sentence = $this->extract_first_sentence($description);

            // Обновляем товар
            $product = wc_get_product($product_id);
            if ($product) {
                $product->set_description($description);
                $product->set_short_description($first_sentence);
                $product->save();
                $updated++;

                if ($updated % 100 === 0) {
                    $this->log_error("Обновлено товаров: {$updated}");
                }
            }
        }

        $this->log_error("Завершено. Обновлено товаров: {$updated}, пропущено: {$skipped}");

        return [
            'message' => "✅ Соответствий загружено: " . count($nomenclature_to_desc_id) . ", товаров обновлено: {$updated}, пропущено: {$skipped}",
            'loaded' => count($nomenclature_to_desc_id),
            'updated' => $updated,
            'skipped' => $skipped
        ];
    }

    /**
     * Загрузка товаров во временную таблицу
     */
    private function load_products_to_temp($limit, $offset)
    {
        global $wpdb;

        if (!$wpdb->check_connection(false)) {
            return ['error' => 'Нет соединения с БД'];
        }

        $api_key = get_option('gl_v6_api_key');
        $url = GL_V6_API_BASE . '/nomenclatures?api_key=' . $api_key . '&limit=' . $limit . '&offset=' . $offset;

        $response = $this->make_request($url, 60);

        if (is_wp_error($response)) {
            return ['error' => 'Ошибка API: ' . $response->get_error_message()];
        }

        $body = json_decode(wp_remote_retrieve_body($response), true);

        // API возвращает МАССИВ напрямую, а не объект с items!
        if (!is_array($body)) {
            $this->log_error("Неверный формат. Получено: " . substr(json_encode($body), 0, 200));
            return ['error' => 'Неверный формат данных'];
        }

        $items = $body;

        // Общее количество - получаем из заголовков или примерно
        $total = count($items) > 0 ? 200000 : 0; // Примерное значение

        $this->log_error("Загружено товаров из API: " . count($items));

        if (empty($items)) {
            return [
                'loaded' => 0,
                'total' => $total,
                'hasMore' => false
            ];
        }

        // Вставка в таблицу
        $loaded = 0;
        $errors = 0;

        foreach ($items as $item) {
            try {
                $result = $wpdb->replace(
                    $this->temp_table,
                    [
                        'id_1c' => $item['id_1c'],
                        'full_name' => $item['full_name'],
                        'nomenclature_group_id' => $item['nomenclature_group_id'] ?? null,
                        'data_json' => json_encode($item, JSON_UNESCAPED_UNICODE)
                    ],
                    ['%s', '%s', '%s', '%s']
                );

                if ($result) {
                    $loaded++;
                } else {
                    $errors++;
                }
            } catch (Exception $e) {
                $errors++;
            }
        }

        $temp_total = $wpdb->get_var("SELECT COUNT(*) FROM {$this->temp_table}");

        return [
            'loaded' => $loaded,
            'errors' => $errors,
            'temp_total' => intval($temp_total),
            'api_total' => $total,
            'offset' => $offset + $limit,
            'hasMore' => ($offset + $limit) < $total
        ];
    }

    /**
     * Импорт товаров из временной таблицы
     */
    private function import_products_from_temp($batch, $offset)
    {
        global $wpdb;

        if (!$wpdb->check_connection(false)) {
            return ['error' => 'Нет соединения с БД'];
        }

        $items = $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM {$this->temp_table} ORDER BY id LIMIT %d OFFSET %d",
            $batch,
            $offset
        ), ARRAY_A);

        if (empty($items)) {
            // Очищаем таблицу
            $wpdb->query("TRUNCATE TABLE {$this->temp_table}");

            return [
                'message' => '✅ Импорт завершён, таблица очищена',
                'hasMore' => false
            ];
        }

        // Загружаем mapping категорий
        $folder_map = get_option('gl_v6_folder_map', []);
        $folder_contents = get_option('gl_v6_folder_contents', []);

        $created = 0;
        $updated = 0;
        $skipped = 0;
        $errors = 0;

        foreach ($items as $item) {
            // Проверка соединения
            if (($created + $skipped) % 50 === 0) {
                if (!$wpdb->check_connection(false)) {
                    sleep(2);
                    $wpdb->check_connection(true);
                }
            }

            try {
                $data = json_decode($item['data_json'], true);
                if (!$data) {
                    $errors++;
                    continue;
                }

                $result = $this->create_simple_product($data, $folder_map, $folder_contents);

                if ($result === 'created') {
                    $created++;
                } elseif ($result === 'updated') {
                    $updated++;
                } else {
                    $skipped++;
                }
            } catch (Exception $e) {
                $errors++;
            }
        }

        $temp_total = $wpdb->get_var("SELECT COUNT(*) FROM {$this->temp_table}");
        $remaining = $temp_total - ($offset + $batch);

        // Обновляем статистику
        $stats = get_option('gl_v6_stats', []);
        $stats['products_imported'] = ($stats['products_imported'] ?? 0) + $created;
        update_option('gl_v6_stats', $stats);

        return [
            'created' => $created,
            'updated' => $updated,
            'skipped' => $skipped,
            'errors' => $errors,
            'remaining' => max(0, $remaining),
            'offset' => $offset + $batch,
            'hasMore' => $remaining > 0
        ];
    }

    /**
     * Создание простого товара или вариативного (если есть размеры)
     */
    private function create_simple_product($data, $folder_map, $folder_contents)
    {
        $sku = $data['id_1c'];

        // Проверка существования - просто пропускаем
        $existing_id = wc_get_product_id_by_sku($sku);
        if ($existing_id) {
            return 'skipped';
        }

        // Проверяем, типоразмерный ли товар
        $is_size_based = !empty($data['type_size_id']);

        if ($is_size_based) {
            // Загружаем размеры из API
            $sizes = $this->get_product_sizes($sku);

            if (!empty($sizes) && count($sizes) > 1) {
                // Создаём вариативный товар
                return $this->create_variable_product_with_sizes($data, $sizes, $folder_map, $folder_contents);
            }
        }

        // Создаём простой товар (если размеров нет или всего 1)
        $product = new WC_Product_Simple();

        // Основные данные
        $product->set_sku($sku);
        $product->set_name($data['full_name']);
        $product->set_status('publish');
        $product->set_catalog_visibility('visible');

        // Категории из API
        $category_ids = $this->get_product_categories($sku, $folder_map, $folder_contents);
        if (!empty($category_ids)) {
            $product->set_category_ids($category_ids);
        }

        // Атрибуты из структурированных данных API
        $attributes = $this->extract_attributes_from_data($data);
        if (!empty($attributes)) {
            $product->set_attributes($attributes);
        }

        // Описание из marketing-descriptions
        $description = $this->get_product_description($sku);

        if ($description) {
            // Полное описание
            $product->set_description($description);

            // Краткое описание - первое предложение
            $first_sentence = $this->extract_first_sentence($description);
            $product->set_short_description($first_sentence);
        }

        $product_id = $product->save();

        if (!$product_id) {
            return 'skipped';
        }

        // Мета данные
        update_post_meta($product_id, '_api_raw_name', $data['full_name']);
        update_post_meta($product_id, '_api_sku', $sku);
        update_post_meta($product_id, '_needs_files', 1);
        update_post_meta($product_id, '_needs_price', 1);

        // Сохраняем add_amount_units (для калькулятора)
        if (!empty($data['add_amount_units'])) {
            update_post_meta($product_id, '_gl_amount_units', json_encode($data['add_amount_units'], JSON_UNESCAPED_UNICODE));
        }

        // Сохраняем другие единицы измерения
        if (!empty($data['amount_unit'])) {
            update_post_meta($product_id, '_gl_amount_unit', json_encode($data['amount_unit'], JSON_UNESCAPED_UNICODE));
        }
        if (!empty($data['quantity_unit'])) {
            update_post_meta($product_id, '_gl_quantity_unit', json_encode($data['quantity_unit'], JSON_UNESCAPED_UNICODE));
        }
        if (!empty($data['size_unit'])) {
            update_post_meta($product_id, '_gl_size_unit', json_encode($data['size_unit'], JSON_UNESCAPED_UNICODE));
        }

        return 'created';
    }

    /**
     * Получить описание товара через компактный mapping
     */
    private function get_product_description($sku)
    {
        static $desc_map = null;
        static $desc_text = null;

        // Загружаем один раз
        if ($desc_map === null) {
            $desc_map = get_option('gl_v6_descriptions_map', []);
            $desc_text = get_option('gl_v6_descriptions_text', []);
        }

        // Проверяем есть ли описание для этого товара
        if (isset($desc_map[$sku])) {
            $desc_id = $desc_map[$sku];

            if (isset($desc_text[$desc_id])) {
                return $desc_text[$desc_id];
            }
        }

        return null;
    }

    /**
     * Извлечь первое предложение из текста
     */
    private function extract_first_sentence($text)
    {
        if (empty($text)) {
            return '';
        }

        // Ищем точку, восклицательный или вопросительный знак
        if (preg_match('/^[^.!?]+[.!?]/', $text, $matches)) {
            return trim($matches[0]);
        }

        // Если нет знаков препинания - берём первые 150 символов
        return mb_substr($text, 0, 150) . '...';
    }

    /**
     * Получить доступные размеры товара из API
     */
    private function get_product_sizes($sku)
    {
        $api_key = get_option('gl_v6_api_key');
        $branch_id = get_option('gl_v6_branch_id');

        // Если нет branch_id, пропускаем
        if (empty($branch_id)) {
            return [];
        }

        $url = GL_V6_API_BASE . "/nomenclature_sizes/?api_key={$api_key}&nom_id_1c={$sku}&branch={$branch_id}";

        $response = $this->make_request($url, 15, 2);

        if (is_wp_error($response)) {
            return [];
        }

        $body = wp_remote_retrieve_body($response);
        $sizes = json_decode($body, true);

        // API возвращает false для не типоразмерных или массив размеров
        if ($sizes === false || !is_array($sizes)) {
            return [];
        }

        return $sizes;
    }

    /**
     * Создание вариативного товара по размерам
     */
    private function create_variable_product_with_sizes($data, $sizes, $folder_map, $folder_contents)
    {
        $base_sku = $data['id_1c'];

        $this->log_error("Создание вариативного товара: {$data['full_name']} с " . count($sizes) . " размерами");

        // 1. Создаём родительский товар
        $parent = new WC_Product_Variable();
        $parent->set_name($data['full_name']);
        $parent->set_status('publish');
        $parent->set_catalog_visibility('visible');

        // Категории
        $category_ids = $this->get_product_categories($base_sku, $folder_map, $folder_contents);
        if (!empty($category_ids)) {
            $parent->set_category_ids($category_ids);
        }

        // Описание из marketing-descriptions
        $description = $this->get_product_description($base_sku);

        if ($description) {
            // Полное описание
            $parent->set_description($description);

            // Краткое описание - первое предложение
            $first_sentence = $this->extract_first_sentence($description);
            $parent->set_short_description($first_sentence);
        }

        $parent_id = $parent->save();

        if (!$parent_id) {
            $this->log_error("Ошибка создания родительского товара");
            return 'skipped';
        }

        // Мета данные родителя
        update_post_meta($parent_id, '_api_raw_name', $data['full_name']);
        update_post_meta($parent_id, '_api_base_sku', $base_sku);
        update_post_meta($parent_id, '_is_variable_by_size', 1);

        // Сохраняем add_amount_units
        if (!empty($data['add_amount_units'])) {
            update_post_meta($parent_id, '_gl_amount_units', json_encode($data['add_amount_units'], JSON_UNESCAPED_UNICODE));
        }

        // Сохраняем другие единицы измерения
        if (!empty($data['amount_unit'])) {
            update_post_meta($parent_id, '_gl_amount_unit', json_encode($data['amount_unit'], JSON_UNESCAPED_UNICODE));
        }
        if (!empty($data['quantity_unit'])) {
            update_post_meta($parent_id, '_gl_quantity_unit', json_encode($data['quantity_unit'], JSON_UNESCAPED_UNICODE));
        }
        if (!empty($data['size_unit'])) {
            update_post_meta($parent_id, '_gl_size_unit', json_encode($data['size_unit'], JSON_UNESCAPED_UNICODE));
        }

        $this->log_error("Родительский товар создан: ID={$parent_id}");

        // 2. Создаём атрибут "Размер" для родителя
        $size_attribute = new WC_Product_Attribute();
        $size_attribute->set_id(wc_attribute_taxonomy_id_by_name('pa_size'));
        $size_attribute->set_name('pa_size');
        $size_attribute->set_options($sizes); // Массив значений
        $size_attribute->set_visible(true);
        $size_attribute->set_variation(true); // ВАЖНО: для вариаций!

        $parent->set_attributes([$size_attribute]);
        $parent->save();

        // 3. Создаём вариации для каждого размера
        $created_variations = 0;

        foreach ($sizes as $size) {
            // SKU вариации = базовый SKU + размер
            $variation_sku = $base_sku . '_' . sanitize_title($size);

            // Проверяем существование вариации - пропускаем если есть
            $existing_var_id = wc_get_product_id_by_sku($variation_sku);
            if ($existing_var_id) {
                $this->log_error("Вариация уже существует: {$variation_sku}");
                continue;
            }

            // Создаём вариацию
            $variation = new WC_Product_Variation();
            $variation->set_parent_id($parent_id);
            $variation->set_sku($variation_sku);
            $variation->set_status('publish');
            $variation->set_manage_stock(false);
            $variation->set_stock_status('instock');

            // ВАЖНО: Устанавливаем атрибуты вариации
            $variation->set_attributes([
                'pa_size' => sanitize_title($size)
            ]);

            $variation_id = $variation->save();

            if (!$variation_id) {
                $this->log_error("Ошибка создания вариации для размера: {$size}");
                continue;
            }

            // Мета данные вариации
            update_post_meta($variation_id, '_api_raw_name', $data['full_name'] . ' - ' . $size);
            update_post_meta($variation_id, '_api_sku', $variation_sku);
            update_post_meta($variation_id, '_api_size', $size);
            update_post_meta($variation_id, '_needs_files', 1);
            update_post_meta($variation_id, '_needs_price', 1);

            $created_variations++;
            $this->log_error("Создана вариация: размер={$size}, ID={$variation_id}");
        }

        $this->log_error("Создано вариаций: {$created_variations}");

        // 4. Обновляем родителя после создания всех вариаций
        WC_Product_Variable::sync($parent_id);

        return 'created';
    }

    /**
     * Получить категории товара из mapping
     */
    private function get_product_categories($sku, $folder_map, $folder_contents)
    {
        $category_ids = [];

        // Ищем в каких папках есть этот товар
        foreach ($folder_contents as $folder_id => $products) {
            if (in_array($sku, $products)) {
                // Получаем ВСЕ родительские категории этой папки
                $all_parents = $this->get_all_parent_categories($folder_id, $folder_map);

                if (!empty($all_parents)) {
                    $category_ids = array_merge($category_ids, $all_parents);
                }
            }
        }

        return array_unique($category_ids);
    }

    /**
     * Получить ВСЕ родительские категории (до 3 уровня включительно)
     */
    private function get_all_parent_categories($folder_id, $folder_map)
    {
        global $wpdb;

        $result = [];
        $current_folder_id = $folder_id;
        $max_depth = 10; // защита от бесконечного цикла
        $depth = 0;

        while ($depth < $max_depth) {
            // Проверяем, есть ли эта папка в mapping (до 3 уровня)
            if (isset($folder_map[$current_folder_id])) {
                $result[] = $folder_map[$current_folder_id];
            }

            // Ищем родителя из временной таблицы
            $parent_folder_id = $wpdb->get_var($wpdb->prepare(
                "SELECT parent_folder_id FROM {$this->categories_table} WHERE folder_id = %s",
                $current_folder_id
            ));

            if (!$parent_folder_id) {
                break;
            }

            // Проверка на ROOT
            if ($parent_folder_id === '392b926e-19d3-4259-980a-1f3fb6354a20') {
                break;
            }

            $current_folder_id = $parent_folder_id;
            $depth++;
        }

        return $result;
    }

    /**
     * Извлечение атрибутов из структурированных данных API
     */
    private function extract_attributes_from_data($data)
    {
        $attributes = [];

        // Цвет
        if (!empty($data['color'])) {
            $attr = $this->create_product_attribute('pa_color', $data['color']);
            if ($attr) {
                $attributes[] = $attr;
            }
        }

        // Покрытие
        if (!empty($data['surface'])) {
            $attr = $this->create_product_attribute('pa_coating', $data['surface']);
            if ($attr) {
                $attributes[] = $attr;
            }
        }

        // Толщина
        if (!empty($data['thickness'])) {
            $attr = $this->create_product_attribute('pa_thickness', $data['thickness']);
            if ($attr) {
                $attributes[] = $attr;
            }
        }

        // Вес
        if (!empty($data['weight'])) {
            $attr = $this->create_product_attribute('pa_weight', $data['weight']);
            if ($attr) {
                $attributes[] = $attr;
            }
        }

        return $attributes;
    }

    /**
     * Создание атрибута товара
     */
    private function create_product_attribute($taxonomy, $value)
    {
        $value = trim($value);
        if (empty($value)) {
            return null;
        }

        $slug = sanitize_title($value);

        // Проверяем/создаем термин
        $term = term_exists($slug, $taxonomy);
        if (!$term) {
            $term = wp_insert_term($value, $taxonomy);
            if (is_wp_error($term)) {
                return null;
            }
        }

        $attr = new WC_Product_Attribute();
        $attr->set_id(wc_attribute_taxonomy_id_by_name($taxonomy));
        $attr->set_name($taxonomy);
        $attr->set_options([$slug]);
        $attr->set_visible(true);
        $attr->set_variation(false);

        return $attr;
    }

    /**
     * Добавить файлы всех товаров в очередь
     */
    private function queue_files_for_processing()
    {
        global $wpdb;

        // Получаем все товары, которым нужны файлы
        $products = $wpdb->get_results("
            SELECT post_id, meta_value as sku 
            FROM {$wpdb->postmeta} 
            WHERE meta_key = '_api_sku' 
            AND post_id IN (
                SELECT post_id FROM {$wpdb->postmeta} 
                WHERE meta_key = '_needs_files' AND meta_value = '1'
            )
        ");

        if (empty($products)) {
            return ['message' => 'Нет товаров для обработки'];
        }

        $queued = 0;
        $skipped = 0;

        foreach ($products as $product) {
            // Проверяем, нет ли уже в очереди
            $exists = $wpdb->get_var($wpdb->prepare(
                "SELECT id FROM {$this->images_queue_table} WHERE product_id = %d AND status != 'failed'",
                $product->post_id
            ));

            if ($exists) {
                $skipped++;
                continue;
            }

            // Определяем, это вариация или обычный товар
            $wc_product = wc_get_product($product->post_id);
            $sku_for_files = $product->sku;
            $target_product_id = $product->post_id;

            if ($wc_product && $wc_product->is_type('variation')) {
                $parent_id = $wc_product->get_parent_id();
                $base_sku = get_post_meta($parent_id, '_api_base_sku', true);

                if ($base_sku) {
                    $sku_for_files = $base_sku;
                    $target_product_id = $parent_id;
                }
            }

            // Добавляем в очередь
            $inserted = $wpdb->insert(
                $this->images_queue_table,
                [
                    'product_id' => $product->post_id,
                    'target_product_id' => $target_product_id,
                    'sku' => $sku_for_files,
                    'status' => 'pending',
                    'created_at' => current_time('mysql'),
                    'attempts' => 0
                ],
                ['%d', '%d', '%s', '%s', '%s', '%d']
            );

            if ($inserted) {
                $queued++;
            }
        }

        return [
            'message' => "✅ Добавлено в очередь: {$queued}, пропущено: {$skipped}",
            'queued' => $queued,
            'skipped' => $skipped
        ];
    }

    /**
     * Обработка очереди изображений (запускается по CRON)
     */
    public function process_images_queue()
    {
        // Проверяем, не приостановлена ли очередь
        if (get_option('gl_v6_queue_paused', 0)) {
            return;
        }

        global $wpdb;

        // Получаем следующую задачу
        $task = $wpdb->get_row("
            SELECT * FROM {$this->images_queue_table} 
            WHERE status = 'pending' 
            ORDER BY id ASC 
            LIMIT 1
        ", ARRAY_A);

        if (!$task) {
            return; // Нет задач
        }

        $task_id = $task['id'];
        $product_id = $task['product_id'];
        $target_product_id = $task['target_product_id'];
        $sku = $task['sku'];

        // Помечаем как обрабатываемую
        $wpdb->update(
            $this->images_queue_table,
            [
                'status' => 'processing',
                'started_at' => current_time('mysql'),
                'attempts' => intval($task['attempts']) + 1
            ],
            ['id' => $task_id],
            ['%s', '%s', '%d'],
            ['%d']
        );

        $api_key = get_option('gl_v6_api_key');

        try {
            // Загружаем файлы
            $result = $this->attach_files_to_product($target_product_id, $sku, $api_key);

            if ($result) {
                // Успех
                $wpdb->update(
                    $this->images_queue_table,
                    [
                        'status' => 'completed',
                        'completed_at' => current_time('mysql')
                    ],
                    ['id' => $task_id],
                    ['%s', '%s'],
                    ['%d']
                );

                // Удаляем флаг _needs_files
                delete_post_meta($product_id, '_needs_files');

                // Если это родитель вариаций, удаляем флаг у всех вариаций
                $wc_product = wc_get_product($target_product_id);
                if ($wc_product && $wc_product->is_type('variable')) {
                    $children = $wc_product->get_children();
                    foreach ($children as $child_id) {
                        delete_post_meta($child_id, '_needs_files');
                    }
                }

                // Обновляем статистику
                $stats = get_option('gl_v6_stats', []);
                $stats['files_loaded'] = ($stats['files_loaded'] ?? 0) + 1;
                update_option('gl_v6_stats', $stats);
            } else {
                // Ошибка, но не критичная (нет файлов)
                $wpdb->update(
                    $this->images_queue_table,
                    [
                        'status' => 'completed',
                        'completed_at' => current_time('mysql'),
                        'error_message' => 'No files found'
                    ],
                    ['id' => $task_id],
                    ['%s', '%s', '%s'],
                    ['%d']
                );

                delete_post_meta($product_id, '_needs_files');
            }
        } catch (Exception $e) {
            // Критическая ошибка
            $attempts = intval($task['attempts']) + 1;

            if ($attempts >= 3) {
                // Слишком много попыток - помечаем как failed
                $wpdb->update(
                    $this->images_queue_table,
                    [
                        'status' => 'failed',
                        'error_message' => $e->getMessage()
                    ],
                    ['id' => $task_id],
                    ['%s', '%s'],
                    ['%d']
                );
            } else {
                // Вернём в pending для повторной попытки
                $wpdb->update(
                    $this->images_queue_table,
                    [
                        'status' => 'pending',
                        'error_message' => $e->getMessage()
                    ],
                    ['id' => $task_id],
                    ['%s', '%s'],
                    ['%d']
                );
            }
        }

        // Очищаем память
        wp_cache_flush();
    }

    /**
     * Прикрепление файлов к товару
     */
    private function attach_files_to_product($product_id, $sku, $api_key)
    {
        // Проверяем, это вариация или обычный товар
        $product = wc_get_product($product_id);

        if ($product && $product->is_type('variation')) {
            // Это вариация - ищем базовый SKU родителя
            $parent_id = $product->get_parent_id();
            $base_sku = get_post_meta($parent_id, '_api_base_sku', true);

            if ($base_sku) {
                // Используем базовый SKU для загрузки файлов
                $sku = $base_sku;
                // Прикрепляем файлы к родителю
                $product_id = $parent_id;
            }
        }

        // Используем метод для получения файлов
        $url = GL_V6_API_GO . "/catalog/get-nomenclature-files/{$sku}/?api_key={$api_key}";

        $response = $this->make_request($url, 30);

        if (is_wp_error($response)) {
            return false;
        }

        $files = json_decode(wp_remote_retrieve_body($response), true);
        if (!is_array($files) || empty($files)) {
            return true; // Нет файлов - не ошибка
        }

        $main_image = null;
        $gallery_images = [];
        $documents = [];

        foreach ($files as $file) {
            if (!isset($file['link']) || !filter_var($file['link'], FILTER_VALIDATE_URL)) {
                continue;
            }

            $type = $file['file_type_name'] ?? '';
            $master_type = $file['master_object_type'] ?? '';

            // Изображение товара
            if ($type === 'Изображение товара' || $master_type === 'nomenclatures') {
                if (!$main_image) {
                    $main_image = $file;
                } else {
                    $gallery_images[] = $file;
                }
            }
            // Прочие изображения
            elseif (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file['link'])) {
                $gallery_images[] = $file;
            }
            // Документы (PDF)
            elseif (preg_match('/\.pdf$/i', $file['link'])) {
                $documents[] = $file;
            }
        }

        // Загрузка главного изображения
        if ($main_image) {
            $image_id = $this->upload_optimized_image($main_image['link'], $product_id);
            if ($image_id) {
                set_post_thumbnail($product_id, $image_id);
            }
        }

        // Галерея 
        $gallery_ids = [];
        $gallery_limit = 5;
        $count = 0;

        foreach ($gallery_images as $img) {
            if ($count >= $gallery_limit) {
                break;
            }

            $image_id = $this->upload_optimized_image($img['link'], $product_id);
            if ($image_id) {
                $gallery_ids[] = $image_id;
                $count++;
            }

            // Принудительно очищаем память после каждого изображения
            wp_cache_flush();
            gc_collect_cycles();
        }

        if (!empty($gallery_ids)) {
            $product_obj = wc_get_product($product_id);
            if ($product_obj) {
                $product_obj->set_gallery_image_ids($gallery_ids);
                $product_obj->save();
            }
        }

        // PDF документы
        $doc_ids = [];
        foreach ($documents as $doc) {
            $doc_id = $this->upload_pdf($doc['link'], $product_id, $doc['file_type_name'] ?? '');
            if ($doc_id) {
                $doc_ids[] = $doc_id;
            }
        }

        if (!empty($doc_ids)) {
            update_post_meta($product_id, '_gl_documents', $doc_ids);
        }

        // Если это родитель вариаций, помечаем все вариации как обработанные
        $product_obj = wc_get_product($product_id);
        if ($product_obj && $product_obj->is_type('variable')) {
            $children = $product_obj->get_children();
            foreach ($children as $child_id) {
                delete_post_meta($child_id, '_needs_files');
            }
        }

        return true;
    }

    /**
     * Загрузка и оптимизация изображения в WebP
     */
    private function upload_optimized_image($url, $product_id)
    {
        $tmp = download_url($url, 30);
        if (is_wp_error($tmp)) {
            return false;
        }

        $image_info = @getimagesize($tmp);
        if (!$image_info) {
            @unlink($tmp);
            return false;
        }

        list($width, $height, $type) = $image_info;

        $create_funcs = [
            IMAGETYPE_JPEG => 'imagecreatefromjpeg',
            IMAGETYPE_PNG => 'imagecreatefrompng',
            IMAGETYPE_GIF => 'imagecreatefromgif'
        ];

        if (!isset($create_funcs[$type])) {
            @unlink($tmp);
            return false;
        }

        $source = @$create_funcs[$type]($tmp);
        if (!$source) {
            @unlink($tmp);
            return false;
        }

        // Ресайз
        $max_w = 1920;
        $max_h = 1920;
        $ratio = min($max_w / $width, $max_h / $height, 1);

        $new_w = round($width * $ratio);
        $new_h = round($height * $ratio);

        $resized = imagecreatetruecolor($new_w, $new_h);

        if ($type == IMAGETYPE_PNG) {
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            $transparent = imagecolorallocatealpha($resized, 255, 255, 255, 127);
            imagefilledrectangle($resized, 0, 0, $new_w, $new_h, $transparent);
        }

        imagecopyresampled($resized, $source, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
        imagedestroy($source);

        // WebP конвертация
        if (function_exists('imagewebp')) {
            $temp_webp = sys_get_temp_dir() . '/' . uniqid('gl_', true) . '.webp';
            $saved = imagewebp($resized, $temp_webp, 85);
            imagedestroy($resized);
            @unlink($tmp);

            if (!$saved) {
                @unlink($temp_webp);
                return false;
            }

            require_once(ABSPATH . 'wp-admin/includes/media.php');
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            $file_array = [
                'name' => sanitize_file_name(pathinfo(basename($url), PATHINFO_FILENAME) . '.webp'),
                'tmp_name' => $temp_webp
            ];

            $attachment_id = media_handle_sideload($file_array, $product_id);
            @unlink($temp_webp);

            return is_wp_error($attachment_id) ? false : $attachment_id;
        } else {
            imagedestroy($resized);
            return $this->upload_standard($tmp, $product_id, $url);
        }
    }

    /**
     * Стандартная загрузка без WebP
     */
    private function upload_standard($tmp, $product_id, $url)
    {
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $file_array = [
            'name' => basename(parse_url($url, PHP_URL_PATH)),
            'tmp_name' => $tmp
        ];

        $attachment_id = media_handle_sideload($file_array, $product_id);
        @unlink($tmp);

        return is_wp_error($attachment_id) ? false : $attachment_id;
    }

    /**
     * Загрузка PDF
     */
    private function upload_pdf($url, $product_id, $description = '')
    {
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        $tmp = download_url($url, 30);
        if (is_wp_error($tmp)) {
            return false;
        }

        $file_array = [
            'name' => basename(parse_url($url, PHP_URL_PATH)),
            'tmp_name' => $tmp
        ];

        $attachment_id = media_handle_sideload($file_array, $product_id, $description);
        @unlink($tmp);

        return is_wp_error($attachment_id) ? false : $attachment_id;
    }

    /**
     * Обновление цен пакетом
     */
    private function update_prices_batch($limit, $offset)
    {
        global $wpdb;

        if (!$wpdb->check_connection(false)) {
            return ['error' => 'Нет соединения с БД'];
        }

        $api_key = get_option('gl_v6_api_key');
        $branch_id = get_option('gl_v6_branch_id');
        $agreement_id = get_option('gl_v6_agreement_id');

        $url = GL_V6_API_BASE . '/v2/prices/?api_key=' . $api_key . '&limit=' . $limit . '&offset=' . $offset;

        if (!empty($branch_id)) {
            $url .= '&branch_id_1c=' . urlencode($branch_id);
        }
        if (!empty($agreement_id)) {
            $url .= '&agreement_id_1c=' . urlencode($agreement_id);
        }

        $response = $this->make_request($url, 60);

        if (is_wp_error($response)) {
            return ['error' => 'Ошибка API: ' . $response->get_error_message()];
        }

        $body = json_decode(wp_remote_retrieve_body($response), true);

        // API может вернуть массив или объект с items
        $items = is_array($body) && isset($body[0]) ? $body : ($body['items'] ?? []);

        if (!is_array($items)) {
            return ['error' => 'Неверный формат данных'];
        }

        $updated = 0;
        $not_found = 0;
        $errors = 0;

        foreach ($items as $item) {
            if (($updated + $not_found) % 500 === 0) {
                if (!$wpdb->check_connection(false)) {
                    sleep(2);
                    $wpdb->check_connection(true);
                }
            }

            try {
                $sku = $item['nomenclature_id'];
                $product_id = wc_get_product_id_by_sku($sku);

                // Если не найден простой товар, ищем вариацию
                if (!$product_id) {
                    // Ищем вариацию по маске SKU
                    $variation_ids = $wpdb->get_results($wpdb->prepare(
                        "SELECT post_id FROM {$wpdb->postmeta} 
                        WHERE meta_key = '_sku' 
                        AND meta_value LIKE %s",
                        $sku . '_%'
                    ));

                    if (!empty($variation_ids)) {
                        // Обновляем все найденные вариации
                        foreach ($variation_ids as $row) {
                            $this->update_product_price($row->post_id, $item);
                            $updated++;
                        }
                        continue;
                    }

                    $not_found++;
                    continue;
                }

                // Обновляем обычный товар
                if ($this->update_product_price($product_id, $item)) {
                    $updated++;
                } else {
                    $errors++;
                }
            } catch (Exception $e) {
                $errors++;
            }
        }

        // Обновляем статистику
        $stats = get_option('gl_v6_stats', []);
        $stats['prices_updated'] = ($stats['prices_updated'] ?? 0) + $updated;
        update_option('gl_v6_stats', $stats);

        $hasMore = count($items) >= $limit;

        return [
            'updated' => $updated,
            'not_found' => $not_found,
            'errors' => $errors,
            'offset' => $offset + $limit,
            'hasMore' => $hasMore
        ];
    }

    /**
     * Обновление цены товара или вариации
     */
    private function update_product_price($product_id, $price_data)
    {
        $product = wc_get_product($product_id);
        if (!$product) {
            return false;
        }

        $regular = floatval($price_data['price'] ?? 0);
        $sale = floatval($price_data['discountPrice'] ?? 0);

        if ($regular > 0) {
            $product->set_regular_price($regular);

            if ($sale > 0 && $sale < $regular) {
                $product->set_sale_price($sale);
            } else {
                $product->set_sale_price('');
            }

            $product->save();
            delete_post_meta($product_id, '_needs_price');
            return true;
        }

        return false;
    }

    /**
     * Выполнение API запроса с повторами
     */
    private function make_request($url, $timeout = 30, $retries = 3)
    {
        $attempt = 0;

        while ($attempt < $retries) {
            $response = wp_remote_get($url, [
                'timeout' => $timeout,
                'sslverify' => false
            ]);

            if (!is_wp_error($response)) {
                $code = wp_remote_retrieve_response_code($response);
                if ($code === 200) {
                    return $response;
                }
            }

            $attempt++;
            if ($attempt < $retries) {
                sleep(2 * $attempt);
            }
        }

        return $response;
    }

    /**
     * Логирование для отладки
     */
    private function log_error($message)
    {
        error_log('GL Sync v6: ' . $message);
    }
}

// Инициализация
add_action('plugins_loaded', function () {
    GrandLine_Sync_V6::get_instance();
});

// Активация: создание таблицы
register_activation_hook(__FILE__, 'gl_v6_activate');
function gl_v6_activate()
{
    global $wpdb;
    $charset = $wpdb->get_charset_collate();
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    // Таблица для товаров 2520 строка
    $table_products = $wpdb->prefix . 'gl_temp_products_v6';
    $sql_products = "CREATE TABLE IF NOT EXISTS $table_products (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        id_1c varchar(255) NOT NULL,
        full_name text NOT NULL,
        nomenclature_group_id varchar(255) DEFAULT NULL,
        data_json longtext DEFAULT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY id_1c (id_1c)
    ) $charset;";

    // Таблица для категорий
    $table_categories = $wpdb->prefix . 'gl_temp_categories_v6';
    $sql_categories = "CREATE TABLE IF NOT EXISTS $table_categories (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        folder_id varchar(255) NOT NULL,
        folder_name varchar(500) NOT NULL,
        parent_folder_id varchar(255) DEFAULT NULL,
        level int DEFAULT 0,
        PRIMARY KEY (id),
        UNIQUE KEY folder_id (folder_id),
        KEY parent_folder_id (parent_folder_id)
    ) $charset;";

    // Таблица для очереди изображений
    $table_images_queue = $wpdb->prefix . 'gl_images_queue_v6';
    $sql_images_queue = "CREATE TABLE IF NOT EXISTS $table_images_queue (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        product_id bigint(20) NOT NULL,
        target_product_id bigint(20) NOT NULL,
        sku varchar(255) NOT NULL,
        status varchar(20) DEFAULT 'pending',
        attempts int DEFAULT 0,
        error_message text DEFAULT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        started_at datetime DEFAULT NULL,
        completed_at datetime DEFAULT NULL,
        PRIMARY KEY (id),
        KEY product_id (product_id),
        KEY status (status)
    ) $charset;";

    dbDelta($sql_products);
    dbDelta($sql_categories);
    dbDelta($sql_images_queue);

    // ПОСЛЕ создания таблицы регистрируем CRON
    if (!wp_next_scheduled('gl_v6_process_images_queue')) {
        wp_schedule_event(time(), 'gl_v6_every_minute', 'gl_v6_process_images_queue');
    }
}

// Удаление при деинсталляции
register_uninstall_hook(__FILE__, 'gl_v6_uninstall');
function gl_v6_uninstall()
{
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}gl_temp_products_v6");
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}gl_temp_categories_v6");
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}gl_images_queue_v6");

    // Очистка cron
    wp_clear_scheduled_hook('gl_v6_process_images_queue');

    // Очистка опций очереди
    delete_option('gl_v6_queue_paused');
    delete_option('gl_v6_api_key');
    delete_option('gl_v6_branch_id');
    delete_option('gl_v6_agreement_id');
    delete_option('gl_v6_stats');
    delete_option('gl_v6_folder_map');
    delete_option('gl_v6_folder_contents');
}
