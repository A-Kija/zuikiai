let mix = require('laravel-mix');

mix.
js('src/js/app.js', 'public').
sass('src/scss/app.scss', 'public');
