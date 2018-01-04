(function($) {
  //'use strict';

  // var entityMap = {
  //   '&': '&amp;',
  //   '<': '&lt;',
  //   '>': '&gt;',
  //   '"': '&quot;',
  //   "'": '&#39;',
  //   '/': '&#x2F;',
  //   '`': '&#x60;',
  //   '=': '&#x3D;'
  // };
  //
  // function escapeHtml(string) {
  //   return String(string).replace(/[&<>"'`=\/]/g, function(s) {
  //     return entityMap[s];
  //   });
  // }
  var rotator_element = $("#js-rotating").html();
  var rotator_text = $("#js-rotating").text(rotator_element);
  $("#js-rotating").css('display', 'block');
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

})( jQuery );
