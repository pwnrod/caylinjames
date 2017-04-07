// Flex slider
//Box animation

$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
        directionNav: false,
        pauseOnHover: false,
        start: function(slider) {
          $('.slides li img', slider).click(function(event){
          event.preventDefault();
          slider.flexAnimate(slider.getTarget("next"));
          slider.pause();
          });
        },
        after: function(slider) {
          if (!slider.playing) {
            slider.play();
          }
        }
    });

    $('.box-content').hide();
    $('.slider-box a').click(function() {
        var x = $(this).attr("id");
        var $item = $('.' + x);
        if (!$item.is(":visible")) $('.box-content').hide('10', 'swing');
        $($item).slideToggle(400, 'jswing');
        return false;
    });

    if (getCookie("FlashMessage")) {
        jSuccess(
            'Thank you. Your message has been sent.', {
                autoHide: true, // added in v2.0
                clickOverlay: false, // added in v2.0
                MinWidth: 250,
                TimeShown: 3000,
                ShowTimeEffect: 200,
                HideTimeEffect: 200,
                LongTrip: 20,
                HorizontalPosition: 'center',
                VerticalPosition: 'top',
                ShowOverlay: true,
                ColorOverlay: '#000',
                OpacityOverlay: 0.3,
                onClosed: function() { // added in v2.0

                },
                onCompleted: function() { // added in v2.0

                }
            });
    }

});
