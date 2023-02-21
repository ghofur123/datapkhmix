const mix = require('laravel-mix');
const $ = require('jquery');
require('datatables.net');

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
mix.js([
    'resources/js/app.js',
    'public/assets/vendor/jquery/jquery-3.6.3.min.js',
    // 'public/assets/vendor/apexcharts/apexcharts.min.js',
    'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    // 'public/assets/vendor/chart.js/chart.umd.js',
    // 'public/assets/vendor/echarts/echarts.min.js',
    // 'public/assets/vendor/quill/quill.min.js',
    'node_modules/datatables.net-dt/js/dataTables.dataTables.js',
    'public/assets/vendor/tinymce/tinymce.min.js',
    // 'public/assets/vendor/php-email-form/validate.js',
    'public/assets/js/main.js',
    // 'public/assets/js/upload.excel.js',
    'public/assets/js/dashboard.js',
    // 'public/assets/js/data.kpm.js',
    // 'public/assets/js/sppd.js',


], 'public/js/app.js').postCss('resources/css/app.css', 'public/css', []);

// load file css
mix.css('public/assets/vendor/bootstrap/css/bootstrap.min.css', 'public/css/app.css');
// mix.css('public/assets/vendor/jquery-datatable/jquery.dataTables.min.css', 'public/css/app.css');
// mix.css('public/assets/vendor/boxicons/css/boxicons.min.css', 'public/css/app.css');
// mix.css('public/assets/vendor/quill/quill.snow.css', 'public/css/app.css');
// mix.css('public/assets/vendor/quill/quill.bubble.css', 'public/css/app.css');
mix.css('public/assets/vendor/remixicon/remixicon.css', 'public/css/app.css');
mix.css('public/assets/css/style.css', 'public/css/app.css');
mix.css('node_modules/datatables.net-dt/css/jquery.dataTables.css', 'public/css/app.css');
