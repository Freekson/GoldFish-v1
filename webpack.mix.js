const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
    
mix.less('resources/less/main.less', 'public/css')
    .less('resources/less/_header.less', 'public/css')
    .less('resources/less/_footer.less', 'public/css')
    .less('resources/less/_desktop.less', 'public/css')
    .less('resources/less/_laptop.less', 'public/css')
    .less('resources/less/_tablet.less', 'public/css')
    .less('resources/less/_mobile.less', 'public/css');
