/**
 * Main application javascript file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

(function ($) {

  'use strict';

  require('../console');
  require('../notify-defaults');
  require('../webfonts');

  let Vue = require('vue');
  /* Vue.use(require('vue-resource')); */

  /*
  let copyright = new Vue({
    el: '#copyright',
    data: { copyright: 'Copyright &copy; 2015 Mammoth', done: true }
  });

  let madeBy = new Vue({
    el: '#made-by',
    data: { madeBy: 'Made with &hearts; by Olaf', done: true }
  });
  */

  let MAMMOTH = MAMMOTH || {};

  MAMMOTH.Version = '0.0.1';
  MAMMOTH.Url  = 'http://mammoth.app';
  window.MAMMOTH = MAMMOTH;
  /* window.Vue = Vue; */

  /*
  $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('meta[name=_token]').attr('content'),
    }
  });
  */

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');

}(jQuery));
