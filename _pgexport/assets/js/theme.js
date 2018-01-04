jQuery(function() {
  'use strict';

  var rotator_element = jQuery("#js-rotating").html();
  var rotator_text = jQuery("#js-rotating").text(rotator_element);
  jQuery("#js-rotating").css('display', 'block');
  rotator_text.Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "bounceIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 2500,
    complete: function() {
      // Called after the entrance animation is executed.
    }
  });

  if(typeof(Storage)!=="undefined" && localStorage.getItem('textRotatorShow')) {
        var textRotatorShow = localStorage.getItem('textRotatorShow');
        /*Hide all pages first */
         jQuery('#text-rotator').addClass('hide');
        /* Show the page whose link was clicked */
        if (textRotatorShow != 'false') {
         jQuery('#text-rotator').removeClass('hide');
       }
        /* Also set this page to session storage */
    }
    jQuery('.close-text-rotator').click(function(){
        /* Get the Page to Show */
        /* Hide text rotator first */
         jQuery('#text-rotator').addClass('hide');
        //if(typeof(Storage)!=="undefined") {
            localStorage.setItem('textRotatorShow', 'false');
        //}
    });

});
