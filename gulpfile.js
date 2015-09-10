/**
 * Elixir Asset Management
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

var elixir = require('laravel-elixir');

elixir(function(mix) {

  mix.sass('app.scss');
  mix.sass('welcome.scss');

  mix.browserify([
    'app.js'
  ], 'public/js/app.js');

  mix.scripts([
    '/../../../node_modules/jquery/dist/jquery.js',
    '/../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
  ], 'public/js/vendor/vendors.js');

});