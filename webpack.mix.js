const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .browserSync({
     proxy: 'http://localhost:8000',
     files: [
       'app/**/*.php',
       'resources/views/**/*.blade.php',
       'resources/js/**/*.js',
       'resources/css/**/*.css',
     ],
   });
