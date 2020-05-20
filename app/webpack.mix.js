const webpack = require('webpack');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-brotli');

mix
    .extract([
      'vue',
      'axios',
    ])

    .copy('node_modules/rellax/rellax.min.js', 'public/js')
    // .copy('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/js')
    // .copyDirectory('node_modules/@fortawesome/fontawesome-free/svgs', 'public/svgs')

    // .js('resources/js/homepage.js', 'public/js')
    .js('resources/js/site.js', 'public/js')
    
    .sass('resources/sass/site.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js')],
      })


    .brotli();