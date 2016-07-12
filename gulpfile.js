var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


/*
 * Bower Root
 */
var bower = 'resources/assets/bower/';

/*
 * Assets Root
 */
var root = 'resources/assets/';

/**
 * App Source Files
 */
var source = '/src/';
var models =  source  + 'models/';
var components = source  + 'components/';

/*
 * Utilities Directory
 */
var utils = root  + 'js/utils/';

/*
 * Assets Output
 */
var css = 'public/assets/css/';
var js  = 'public/assets/js/';

/*
 *  Vendor output
 */
var react      = 'public/vendor/react/';
var babel      = 'public/vendor/babel/';
var jquery     = 'public/vendor/jquery/';
var backbone   = 'public/vendor/backbone/';
var remarkable = 'public/vendor/remarkable/';
var underscore = 'public/vendor/underscore/';



elixir(function(mix) {
    mix.sass('app.scss', css);

    mix.copy(bower + 'react/react.js', react)
   	   .copy(bower + 'react/react-dom.js', react)   	 
   	   .copy(bower + 'babel/browser.js', babel)
   	   .copy(bower + 'underscore/underscore.js', underscore)
   	   .copy(bower + 'backbone/backbone.js', backbone)
       .copy(bower + 'remarkable/dist/remarkable.js', remarkable)
   	   .copy(bower + 'jquery/dist/jquery.js', jquery);

   	       // dashboard js source.
    mix.scripts([
        utils+'utils.js',     
        models,
        components,      
        source+'app.js'] , js+'app.js');



});
