require ('career.js');
require ('menu.js');

var app = {
  init: function() {

    let $window = $(window);

    $window.on('scroll resize', app.check_if_in_view);
    $window.trigger('scroll');

    app.displayModal();
    app.removeModal();
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
  },

  displayModal: function() {
    const $linkElement = $('.portfolio-link');
    let $body = $('body');

    $linkElement.each(function() {
      // Définition de l'élément
      let $element = $(this);

      // On récupère la valeur de l'attribut "href"
      let $linkElementAttr = "#" + $element.attr('href');

      $element.on('click', function() {

        event.preventDefault();

        // On sélectionne dans le DOM ce qui correspond à chaque attr href
        let $modalElement = $($linkElementAttr);

        // On ajoute la class qui va display la modale
        $modalElement.addClass('is-active');
        
        $body.css("overflow-y", "hidden");
      });
    });
  },

  removeModal: function() {

    const $removeIconElement = $('.modal__icon.remove > i');
    const $removeButtonElement = $('.modal-link');
    let $body = $('body');

    $removeIconElement.each(function() {

      // Définition de l'élément
      let $element = $(this);

      $element.on('click', function() {

        // On sélectionne dans le DOM la class "modal-wrap" la plus proche de l'élément courant et on obtient son id
        let $modalId = "#" + $(this).closest('.modal-wrap').attr('id');

        // On cible l'élément qui a l'id qu'on vient de récupérer
        let $currentModal = $($modalId);

        // On remove la class qui affiche la modale
        $currentModal.removeClass('is-active');

        $body.css("overflow-y", "auto");
      });
    });

    $removeButtonElement.each(function() {

      // Définition de l'élément
      let $element = $(this);  

      $element.on('click', function() {

        // On sélectionne dans le DOM la class "modal-wrap" la plus proche de l'élément courant et on obtient son id
        let $modalId = "#" + $(this).closest('.modal-wrap').attr('id');
       
        // On cible l'élément qui a l'id qu'on vient de récupérer
        let $currentModal = $($modalId); console.log($currentModal)

        // On remove la class qui affiche la modale
        $currentModal.removeClass('is-active');

        $body.css("overflow-y", "auto");
      });
    });
  }
};

$(app.init);
