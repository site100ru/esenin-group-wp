<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * @package WooCommerce\Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
    return;
}

// Генерируем массив страниц
$pages = array();
$end_size = 1;
$mid_size = 2;

// Prev button
if ( $current > 1 ) {
    $pages[] = array(
        'type' => 'prev',
        'url' => str_replace( '%#%', $current - 1, $base ),
    );
}

// Начальные страницы
for ( $i = 1; $i <= $end_size; $i++ ) {
    $pages[] = array(
        'type' => 'page',
        'page' => $i,
        'url' => str_replace( '%#%', $i, $base ),
        'current' => ( $i == $current )
    );
}

// Точки перед текущей страницей
if ( $current - $mid_size > $end_size + 1 ) {
    $pages[] = array( 'type' => 'dots' );
}

// Средние страницы
$start = max( $end_size + 1, $current - $mid_size );
$end = min( $total - $end_size, $current + $mid_size );

for ( $i = $start; $i <= $end; $i++ ) {
    if ( $i <= $end_size || $i > $total - $end_size ) {
        continue;
    }
    $pages[] = array(
        'type' => 'page',
        'page' => $i,
        'url' => str_replace( '%#%', $i, $base ),
        'current' => ( $i == $current )
    );
}

// Точки после текущей страницы
if ( $current + $mid_size < $total - $end_size ) {
    $pages[] = array( 'type' => 'dots' );
}

// Конечные страницы
for ( $i = $total - $end_size + 1; $i <= $total; $i++ ) {
    if ( $i <= $end_size ) {
        continue;
    }
    $pages[] = array(
        'type' => 'page',
        'page' => $i,
        'url' => str_replace( '%#%', $i, $base ),
        'current' => ( $i == $current )
    );
}

// Next button
if ( $current < $total ) {
    $pages[] = array(
        'type' => 'next',
        'url' => str_replace( '%#%', $current + 1, $base ),
    );
}
?>
<nav class="mt-5 woocommerce-pagination" aria-label="<?php esc_attr_e( 'Постраничная навигация по товарам', 'woocommerce' ); ?>">
    <ul class="pagination justify-content-center page-numbers flex-wrap">
        <?php foreach ( $pages as $page ) : ?>
            <?php if ( $page['type'] === 'prev' ) : ?>
        <li class="page-item"><a class="page-link" href="<?php echo esc_url( $page['url'] ); ?>" aria-label="Previous"><span aria-hidden="true">←</span></a></li>
            <?php elseif ( $page['type'] === 'next' ) : ?>
        <li class="page-item"><a class="page-link" href="<?php echo esc_url( $page['url'] ); ?>" aria-label="Next"><span aria-hidden="true">→</span></a></li>
            <?php elseif ( $page['type'] === 'dots' ) : ?>
        <li class="page-item disabled"><span class="page-link">...</span></li>
            <?php elseif ( $page['type'] === 'page' && $page['current'] ) : ?>
        <li class="page-item active"><span class="page-link" aria-current="page"><?php echo esc_html( $page['page'] ); ?></span></li>
            <?php elseif ( $page['type'] === 'page' ) : ?>
        <li class="page-item"><a class="page-link" href="<?php echo esc_url( $page['url'] ); ?>"><?php echo esc_html( $page['page'] ); ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>