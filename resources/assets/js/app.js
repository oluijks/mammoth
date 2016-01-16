/**
 * Main application javascript file
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

(function ($) {

  'use strict';

  require('./console');
  require('./notify-defaults');
  // require('./webfonts');

  let MAMMOTH = MAMMOTH || {};

  MAMMOTH.Version = '0.0.1';
  MAMMOTH.Url = 'http://mammoth.app';
  window.MAMMOTH = MAMMOTH;

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');

}(jQuery));
