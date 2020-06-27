require ('./career.js');
require ('./menu.js');

var app = {
  init: function() {

    let $window = $(window);

    $window.on('scroll resize', app.check_if_in_view);
    $window.trigger('scroll');
  },

  check_if_in_view: function () {
    let $animation_elements = $('.fadInBottom'); 
    let $window = $(window);

    let window_height = $window.height();
    let window_top_position = $window.scrollTop();
    let window_bottom_position = (window_top_position + window_height);

    $animation_elements.each(function() {
      let $element = $(this);
      let element_height = $element.outerHeight();
      let element_top_position = $element.offset().top;
      let element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view');
      } else {
        $element.removeClass('in-view');
      }
    });
  }
};

$(app.init);
