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
mix.js('resources/js/app.js', 'public/assets/js')
    .extract([
        'axios',
        'bootstrap',
        // 'mdbootstrap',
        // 'wowjs',
        'jquery',
    ]).js('resources/js/admin.js', 'public/assets/js')
    .copy('node_modules/mdbootstrap/js/mdb.min.js', 'public/assets/js/vendor/mdb/mdb.min.js')
    .copy('node_modules/mdbootstrap/js/addons/datatables.min.js', 'public/assets/js/vendor/mdb/datatables.min.js')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    })
    .sass('resources/sass/frontend.scss', 'public/assets/css')
    .sass('resources/sass/backend.scss', 'public/assets/css');
