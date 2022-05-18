const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(['resources/views/wilsardcar/css/style.css'],'public/wilsardcar/css/style.css').js(['resources/views/wilsardcar/js/script.js'],'public/wilsardcar/js/script.js').styles(['resources/views/wilsardcar/css/all.css'],'public/wilsardcar/css/all.css');
