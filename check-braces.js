const fs = require('fs');

// Укажите путь к вашему PHP файлу
const filePath = './grandline-sync-v6.php';

try {
    const content = fs.readFileSync(filePath, 'utf8');
    const lines = content.split('\n');
    
    let braceBalance = 0;
    let braceStack = [];
    let errors = [];
    
    lines.forEach((line, index) => {
        const lineNum = index + 1;
        
        // Убираем комментарии и строки
        let cleanLine = line
            .replace(/\/\/.*$/, '')           // однострочные комментарии
            .replace(/\/\*[\s\S]*?\*\//g, '') // многострочные комментарии
            .replace(/'[^']*'/g, '')          // одинарные кавычки
            .replace(/"[^"]*"/g, '');         // двойные кавычки
        
        // Считаем скобки
        for (let char of cleanLine) {
            if (char === '{') {
                braceBalance++;
                braceStack.push({ line: lineNum, text: line.trim() });
            } else if (char === '}') {
                braceBalance--;
                if (braceBalance < 0) {
                    errors.push(`Строка ${lineNum}: Лишняя закрывающая скобка`);
                }
                braceStack.pop();
            }
        }
    });
    
    console.log('=== АНАЛИЗ ФАЙЛА ===');
    console.log(`Файл: ${filePath}`);
    console.log(`Всего строк: ${lines.length}`);
    console.log('');
    
    // Подсчет скобок
    const openBraces = (content.match(/{/g) || []).length;
    const closeBraces = (content.match(/}/g) || []).length;
    
    console.log('=== БАЛАНС СКОБОК ===');
    console.log(`Открывающих { : ${openBraces}`);
    console.log(`Закрывающих } : ${closeBraces}`);
    console.log(`Разница: ${openBraces - closeBraces}`);
    console.log('');
    
    if (braceBalance > 0) {
        console.log('❌ ОШИБКА: Не хватает закрывающих скобок!');
        console.log(`Незакрытых скобок: ${braceBalance}`);
        console.log('');
        console.log('Последние незакрытые скобки:');
        braceStack.slice(-5).forEach(item => {
            console.log(`  Строка ${item.line}: ${item.text}`);
        });
    } else if (braceBalance < 0) {
        console.log('❌ ОШИБКА: Лишние закрывающие скобки!');
    } else {
        console.log('✅ Баланс скобок в порядке');
    }
    
    if (errors.length > 0) {
        console.log('');
        console.log('=== НАЙДЕННЫЕ ОШИБКИ ===');
        errors.forEach(err => console.log(err));
    }
    
    // Поиск класса и его закрытия
    console.log('');
    console.log('=== СТРУКТУРА КЛАССА ===');
    
    const classStart = lines.findIndex(line => line.includes('class GrandLine_Sync_V6'));
    if (classStart !== -1) {
        console.log(`Класс начинается на строке: ${classStart + 1}`);
        
        // Ищем где должен закрываться класс (перед add_action)
        const addActionLine = lines.findIndex(line => line.includes("add_action('plugins_loaded'"));
        if (addActionLine !== -1) {
            console.log(`add_action находится на строке: ${addActionLine + 1}`);
            
            // Показываем 10 строк ДО add_action
            console.log('');
            console.log('Строки перед add_action:');
            for (let i = Math.max(0, addActionLine - 10); i < addActionLine; i++) {
                const lineNum = i + 1;
                const indent = '  ';
                console.log(`${indent}${lineNum}: ${lines[i]}`);
            }
        }
    }
    
} catch (error) {
    console.error('Ошибка чтения файла:', error.message);
}