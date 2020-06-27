var career = {

    init: function() {
      console.log('career');
      career.displayExperience();
    },

    displayExperience : function() {

        let $xpButtonElement = $('#experience-link');
        let $educationButtonElement = $('#education-link');
        
        // Event Experience
        $xpButtonElement.on('click', career.handleDisplayExperience);

        // Event Education
        $educationButtonElement.on('click', career.handleDisplayEducation);

    },

    handleDisplayExperience : function() {
        
        // Experience display
        let $xpElement = $('#experience');
        let $xpButtonElement = $('#experience-link');
        let $wrapElement = $('.career-wrap');

        $xpButtonElement.addClass('is-active');
        $xpElement.addClass('is-active');
        $wrapElement.addClass('experience');

        // Education remove
        let $educationElement = $('#education');
        let $educationButtonElement = $('#education-link');

        $wrapElement.removeClass('education');
        $educationButtonElement.removeClass('is-active');
        $educationElement.removeClass('is-active');
    },

    handleDisplayEducation : function() {

        // Education display
        let $educationElement = $('#education');
        let $educationButtonElement = $('#education-link');
        let $wrapElement = $('.career-wrap');

        $educationButtonElement.addClass('is-active');
        $educationElement.addClass('is-active');
        $wrapElement.addClass('education');

        // Experience remove
        let $xpElement = $('#experience');
        let $xpButtonElement = $('#experience-link');

        $wrapElement.removeClass('experience');
        $xpButtonElement.removeClass('is-active');
        $xpElement.removeClass('is-active');
    }
};
  
$(career.init);