# Сборка Gulp

## Структура каталогов стилей и скриптов:
>./src/styles/\*\*/\*.less  
>./src/scripts/\*\*/\*.js   
>./src/img/\*\*/\*.png/.jpg/.jpeg

## Инструкция
1. Скачать файлы в любую директоию
2. Ввести в терминале команду: npm i (должен быть установлен node.js)
3. Выполнить команду gulp
4. Писать свой код

## Дополнительные таски 
gulp clean - удаляет дерикторию dist  
gulp styles - конвертирует LESS в CSS, минифицирует его и обьединяет в один файл (main.min.css)  
gulp scripts - конвертирует JS в стандарт ES5, минифицирует и объединяет в один файл (main.min.js)  
gulp img - уменьшает размер картинок  
gulp watch - запуск автоматического выполнения styles и scripts при изменениях в них  
gulp build - является дефортным таском   

## Установленные NPM пакеты
[gulp](https://www.npmjs.com/package/gulp) - Сборщик Gulp  
[gulp-less](https://www.npmjs.com/package/gulp-less) - Компиляция LESS файлов в CSS    
[gulp-babel](https://www.npmjs.com/package/gulp-babel) - Компиляция новых стандартов JS в более старые    
[@babel/preset-env](https://www.npmjs.com/package/@babel/preset-env) - Файл для работы babel  
[@babel/core](https://www.npmjs.com/package/@babel/core) - Файл для работы babel  
[gulp-concat](https://www.npmjs.com/package/gulp-concat) - Обединение нескольких файлов в один    
[gulp-terser](https://www.npmjs.com/package/gulp-terser) - Сжатие и оптимизация JS кода    
[gulp-clean-css](https://www.npmjs.com/package/gulp-clean-css) - минификация и оптимизация CSS файлов    
[del](https://www.npmjs.com/package/del) - Удаление каталогов и файлов  
[gulp-sourcemaps](https://www.npmjs.com/search?q=gulp-sourcemaps) - Создаёт sourcemaos  
[gulp-autoprefixer](https://www.npmjs.com/package/gulp-autoprefixer) - Добавляет префиксы для CSS свойств  
[gulp-imagemin](https://www.npmjs.com/package/gulp-imagemin) -  Уменьшает размер картинок  
[gulp-size](https://www.npmjs.com/package/gulp-size) -  Выводит размер файлов  
[browser-sync](https://www.npmjs.com/package/browser-sync) - Автообновление браузера  
[gulp-newer](https://www.npmjs.com/package/gulp-newer) - Плагин для передачи только тех исходных файлов, которые новее соответствующих файлов назначения.  
