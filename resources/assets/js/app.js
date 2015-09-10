/**
 * Main application javascript file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

(function ($) {
  'use strict';

  let MAMMOTH = MAMMOTH || {};

  MAMMOTH.Version = '0.0.1';
  MAMMOTH.Url  = 'http://mammoth.app';

  $.notifyDefaults({
    allow_dismiss: true,
    newest_on_top: true,
    placement: {
      from: "top",
      align: "right"
    },
    offset: {
      x: 15,
      y: 70
    },
    spacing: 10,
    z_index: 1031,
    delay: 5000,
    timer: 1000,
    animate: {
      enter: 'animated fadeInRight',
      exit: 'animated fadeOutRight'
    }
  });

  window.MAMMOTH = MAMMOTH;

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');
}(jQuery));
