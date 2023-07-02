// webpack.mix.js

let mix = require('laravel-mix');

// mix.js('src/app.js', 'dist').setPublicPath('public');
mix.js('src/app.js', 'dist/js')
   .postCss('src/app.css', 'dist/css',[
      require("tailwindcss"),
   ])
   .setPublicPath('public')
   .options({
      processCssUrls: false,
   });