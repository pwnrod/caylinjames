//Box animation

$(document).ready(function() {
    $('.box-content').hide();
    $('.slider-box a').click(function() {
        var x =  $(this).attr("id");
        var $item = $('.' + x);
        if (!$item.is(":visible")) $('.box-content').hide('10','swing');
		$($item).slideToggle(400,'jswing');
        return false;
    });

	if(getCookie("FlashMessage")){
		jSuccess(
		'Thank you. Your message has been sent.',
		{
		  autoHide : true, // added in v2.0
		  clickOverlay : false, // added in v2.0
		  MinWidth : 250,
		  TimeShown : 3000,
		  ShowTimeEffect : 200,
		  HideTimeEffect : 200,
		  LongTrip :20,
		  HorizontalPosition : 'center',
		  VerticalPosition : 'top',
		  ShowOverlay : true,
   		  ColorOverlay : '#000',
		  OpacityOverlay : 0.3,
		  onClosed : function(){ // added in v2.0

		  },
		  onCompleted : function(){ // added in v2.0

		  }
		});
	 }

});
