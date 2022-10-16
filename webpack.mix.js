// webpack.mix.js

let mix = require('laravel-mix');
mix.disableSuccessNotifications();

mix.js('src/js/main.js', 'js')
   .sass('src/scss/main.scss', 'css')
   .setPublicPath('dist');

mix.combine('path/to/dir', 'all-files.js');

