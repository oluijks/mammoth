(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
/**
 * Main application javascript file
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

'use strict';

(function ($) {

  'use strict';

  require('./console');
  require('./notify-defaults');
  // require('./webfonts');

  var MAMMOTH = MAMMOTH || {};

  MAMMOTH.Version = '0.0.1';
  MAMMOTH.Url = 'http://mammoth.app';
  window.MAMMOTH = MAMMOTH;

  console.info('Mammoth App ' + MAMMOTH.Version + ' started...');
})(jQuery);

},{"./console":2,"./notify-defaults":3}],2:[function(require,module,exports){
/* Avoid `console` errors in browsers that lack a console. */
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

},{}],3:[function(require,module,exports){
/**
 * Notify configuration
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

'use strict';

$.notifyDefaults({
  allow_dismiss: false,
  newest_on_top: true,
  placement: {
    from: 'top',
    align: 'right'
  },
  offset: {
    x: 15,
    y: 150
  },
  z_index: 1031,
  delay: 5000,
  timer: 1000,
  mouse_over: 'pause',
  animate: {
    enter: 'animated fadeInRight',
    exit: 'animated fadeOutRight'
  }
});

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
