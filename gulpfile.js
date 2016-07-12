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
/*
 * Assets Output
 */
var css = 'public/assets/css/';
var js  = 'public/assets/js/';

/*
 *  Vendor output
 */
var react = 'public/vendor/react/';
var babel = 'public/vendor/babel/';



elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy(bower + 'react/react.js', react)
   	   .copy(bower + 'react/react-dom.js', react)   	 
   	   .copy(bower + 'babel/browser.js', babel);

});
