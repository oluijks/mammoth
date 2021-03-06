/**
 * Elixir Asset Management
 *
 * Copyright © 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

var elixir = require('laravel-elixir');

elixir(function(mix) {

  mix.sass('app.scss');

  mix.sass(['admin/app.scss'], 'public/css/admin/app.css');

  mix.browserify('app.js');

  /*
  mix.browserify([
    'admin/app.js'
  ], 'public/js/admin/app.js');
  */

  mix.scripts([
    // '/../../../node_modules/jquery/dist/jquery.js',
    // '/../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
    '/../../../bower_components/remarkable-bootstrap-notify/bootstrap-notify.js',
    // 'vendor/Chart.js'
  ], 'public/js/vendor/vendors.js');

  //mix.scripts([
  //  './../../../bower_components/remarkable-bootstrap-notify/bootstrap-notify.js',
  //], 'public/js/app.js');

  // Todo copy bootstrap fonts
  mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
  mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap');

  // mix.version(['css/app.css', 'css/admin/app.css', 'js/app.js', 'js/vendor/vendors.js']);

  /** Admin */
  // mix.version(['css/admin/app.css', 'js/app.js', 'js/vendor/vendors.js']);

});
