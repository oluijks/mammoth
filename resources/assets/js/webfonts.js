/**
 * Load webfonts javascript file
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

let WebFontConfig = WebFontConfig || {};
WebFontConfig = {
  // google: { families: ['Roboto:400,400italic,500,500italic:latin'] },
  google: { families: ['Lato:300,400,700'] },
  classes: true,
  timeout: 1500
};
window.WebFontConfig = WebFontConfig;
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
}());
