var menu = {
    init: function() {
        console.log('menu');

        var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

        // Si la viewport est inférieure à 768px 
        if (viewportWidth <= 768) {

            //on exécute les fonctions
            menu.displayMenu();
            menu.removeMenu();
        }

        menu.smoothScroll();
    },

    /* ---------------DISPLAY MENU--------------- */
    displayMenu: function() {
        $burgerButtonElement = $('.nav-link.burger');

        $burgerButtonElement.on('click', menu.handleDisplayMenu);
    },

    handleDisplayMenu: function() {
        // Définitions des elements
        $navElement = $('.nav-list');
        $removeElement = $('.remove');

        // Add class
        $navElement.addClass('is-active');
        $removeElement.addClass('is-active');

        // Css burger icon
        $burgerButtonElement = $('.nav-link.burger');
        $burgerButtonElement.css('display', 'none');
    },

    /* ---------------REMOVE MENU--------------- */
    removeMenu: function() {
        $removeButtonElement = $('.remove');
        $liElement = $('.nav-list > li > a');

        // Pour chaque élément li dans nav-list
        $liElement.each(function(index) {

            // Je retire la nav-list au clic
            $(this).on('click', menu.handleRemoveMenu);
        });

        // Au clic sur l'icone "remove" je retire la nav-list
        $removeButtonElement.on('click', menu.handleRemoveMenu);
    },

    handleRemoveMenu: function() {
        // Définitions des elements
        $navElement = $('.nav-list');
        $removeElement = $('.remove');

        // Remove class
        $navElement.removeClass('is-active');
        $removeElement.removeClass('is-active');

        // Css burger icon
        $burgerButtonElement = $('.nav-link.burger');
        $burgerButtonElement.css('display', 'inline');
    },

    smoothScroll: function() {

        $('a[href^="#"]').on('click', function(event) {

            let target = $(this.getAttribute('href')); 
            let fadInBottomElement = $('.fadInBottom');
            
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - $('.header').height()
                }, 1000);

                fadInBottomElement.css({transform : 'none', opacity : 1});
            }
        });
    }
};
  
  $(menu.init);