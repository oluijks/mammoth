(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
/**
 * Main application javascript file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

// Avoid `console` errors in browsers that lack a console.
'use strict';

(function () {
  var method;
  var noop = function noop() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = window.console = window.console || {};

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
})();

(function () {
  'use strict';

  var MAMMOTH = MAMMOTH || {};

  MAMMOTH.Version = '0.0.1';
  MAMMOTH.Url = 'http://mammoth.app';

  window.MAMMOTH = MAMMOTH;

  window.setTimeout(function () {
    $('.alert-dismissible').fadeTo(500, 0).slideUp(500, function () {
      $(this).remove();
    });
  }, 5000);

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');
})();

},{}]},{},[1]);
