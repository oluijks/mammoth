/**
 * Notify configuration
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

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
