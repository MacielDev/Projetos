const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('node_modules/jquery/dist/jquery.js','public/site/assets/js/jquery.js');


mix.js('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/site/assets/js/bootstrap.js');

//imports do bootstrap 'scss' - Para poder criar temas personalizados no bootstrap

mix.sass('node_modules/bootstrap/scss/bootstrap.scss','public/site/assets/css/bootstrap.css')

