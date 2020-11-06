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
mix.webpackConfig({
  resolve:{
      extensions: ['.js','.vue'],
      alias:{
          '@': __dirname+'/resources/assets'
      }
  }
});

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix
  .js('resources/assets/js/app.js', 'public/js')
  .postCss('resources/assets/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
  ]);

if (mix.inProduction()) {
  mix
    .version();
}
