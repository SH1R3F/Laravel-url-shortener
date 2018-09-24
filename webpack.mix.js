let mix = require('laravel-mix');

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

    // App Js file
mix.js('resources/assets/js/app.js', 'public/js')
   // // App Scss file
   // .sass('resources/assets/sass/app.scss', 'public/css')
   // // jQuery
   // .js('resources/assets/js/jquery.js', 'public/js')
   // // Bootstrap
   // .js('resources/assets/js/bootstrap.js', 'public/js')
   // .sass('resources/assets/sass/bootstrap.scss', 'public/css')
   // // Axios
   // .js('resources/assets/js/axios.js', 'public/js')
   // // Main
   // .sass('resources/assets/sass/main.scss', 'public/css')
   // // Admin
   .sass('resources/assets/sass/admin.scss', 'public/css');
