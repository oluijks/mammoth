/**
 * Elixir Asset Management
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

var elixir = require('laravel-elixir');

elixir(function(mix) {

  mix.sass('app.scss');

  mix.browserify([
    'app.js'
  ], 'public/js/app.js');

  mix.scripts([
    '/../../../node_modules/jquery/dist/jquery.js',
    '/../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
    '/../../../bower_components/remarkable-bootstrap-notify/bootstrap-notify.js'
  ], 'public/js/vendor/vendors.js');

  mix.version(['css/app.css', 'js/app.js', 'js/vendor/vendors.js']);

});
