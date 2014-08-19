(function($){
	$('.search a').click(function(){
		$('.search input').animate({
			width:'toggle'
		}, 'slow');
	});
	$('.user_avater').click(function(){
		$('.user_menu').fadeToggle('fast');
	});
	$(document).mouseup(function(){
		$('.user_menu').hide();
	});
})(jQuery);