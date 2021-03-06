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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/Login-Form-Clean.scss', 'public/css')
    .sass('resources/sass/Register-Form-Clean.scss', 'public/css')
    .sass('resources/sass/Navigation-with-Button.scss', 'public/css')
    .sass('resources/sass/portada.scss', 'public/css')
    .sourceMaps();
