$( document ).ready(function() {

	$(window).scroll(function(){

		if($(window).scrollTop() > 600) {
			$('.navbar').fadeIn(300);
		} else {
			$('.navbar').fadeOut(300);
		}

		if ($(window).scrollTop() <= 0) {
			$('#moreInfoArrow').addClass('animated bounceInDown');
		} else {
			$('#moreInfoArrow').removeClass('animated bounceInDown');
		}
		
		if($(window).width() > 767) {
			if ($(this).scrollTop() > 600) {
				$('.scroll-up').fadeIn(300);
			} else {
				$('.scroll-up').fadeOut(300);
			}		
		}
	});	

});

