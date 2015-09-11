/**
 * Main application javascript file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

(function ($) {

  'use strict';

  require('./console');
  require('./notify-defaults');

  let Vue = require('vue');

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

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');

}(jQuery));
