var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | FRONT-END DIRECTIONS:
 |--------------------------------------------------------------------------
 |
 | 1. Run 'npm install' to install Gulp && Elixir
 | 2. Create '.bowerrc' in root directory, see (https://gist.github.com/alexhernandez/c3b0d97538f5869d7f86)
 | 3. Create 'elixir.json' in root directory, see (https://gist.github.com/alexhernandez/963c188f23e14e33929e)
 | 4. Run 'bower init' followed by "bower install {package-name} --save"
 | 5. Run any of the following: 'gulp', 'gulp watch', 'gulp --production'
 |
 */

// Get Bower Directory Path (elixir.json)
var components = elixir.config.bowerDir;

// Get Bower Package Paths
var paths = {
   'jquery': components + 'bower_components/jquery/dist/',
   'bootstrap': components + 'bower_components/bootstrap/',
   'wysihtml': components + 'bower_components/wysihtml/',
   'fontawesome': components + 'bower_components/font-awesome/'
}
// Begin Elixir Project
elixir(function(mix) {

  // Add Styles to project
  mix.copy(paths.bootstrap + 'stylesheets', 'resourcesscss/bootstrap.scss')
     .copy(paths.fontawesome + 'css/font-awesome.css', 'resources/css/font-awesome.css');

  // Add Fonts to project
  mix.copy(paths.fontawesome + 'fonts', 'public/fonts');

  // Add Scripts to project
  mix.copy(paths.jquery + 'jquery.js', 'resources/js/jquery.js')
     .copy(paths.wysihtml + 'parser_rules/advanced_and_extended.js', 'resources/js/advanced_and_extended.js')
     .copy(paths.wysihtml + 'dist/wysihtml-toolbar.js', 'resources/js/toolbar.js')
     .copy(paths.bootstrap + 'dist/js/bootstrap.js', 'resources/js/bootstrap.js');

  // Merge Styles
  mix.styles([
    'font-awesome.css'
  ],'public/css/components.css', 'resources/css');

  // Merge Scripts
  mix.scripts([
    // 'toolbar.js',
    'jquery.js', 
    'bootstrap.js',
    // 'advanced_and_extended.js',
    // 'editor.js',
  ],'public/js/app.js', 'resources/js');

  // Compile SASS
  mix.sass('app.scss');

});