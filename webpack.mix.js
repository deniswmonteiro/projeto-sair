const mix = require("laravel-mix");

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

mix
  .js("resources/js/app-scripts.js", "public/js/app.js")
  .js(
    "resources/js/app-conexao-nuvem.js",
    "public/js/gerenciamento-luminarias.js"
  )
  .sass("resources/sass/app.scss", "public/css/app.css")
  .styles("node_modules/uikit/dist/css/uikit.css", "public/css/uikit.css")
  .styles(
    "node_modules/nouislider/distribute/nouislider.css",
    "public/css/nouislider.css"
  )
  .babel(
    [
      "node_modules/uikit/dist/js/uikit.js",
      "node_modules/uikit/dist/js/uikit-icons.js"
    ],
    "public/js/uikit.js"
  )
  .babel(
    [
      "node_modules/jquery/dist/jquery.js",
      "node_modules/jquery-mask-plugin/dist/jquery.mask.js",
      "node_modules/nouislider/distribute/nouislider.js",
      "node_modules/wnumb/wNumb.js"
    ],
    "public/js/plugins.js"
  );
