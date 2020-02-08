const webpack = require('webpack');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-brotli');

mix
    .extract([
      'vue',
      'axios',
    ])

   //  .copy('node_modules/rellax/rellax.js', 'public/js')

    .js('resources/js/homepage.js', 'public/js')
    
    .sass('resources/sass/homepage.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js')],
      })


    .brotli();