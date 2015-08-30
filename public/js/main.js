$(document).ready(function($){

	$('#grades').on('hidden.bs.collapse', function () {
		$('#readmore-button').text('Read More ');
		$('#readmore-button').append('<span id="readmore-chevron" class="glyphicon glyphicon-chevron-down" style="top: 3px;"></span>');
	});
	
	$('#grades').on('shown.bs.collapse', function () {
		$('#readmore-button').text('Read Less ');
		$('#readmore-button').append('<span id="readmore-chevron" class="glyphicon glyphicon-chevron-up" style="top: 3px;"></span>');
	});

	$('#contactAlert').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
		setTimeout(function() {
			$('#contactAlert').addClass('animated hinge');
			$('#contactAlert').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
				function() {
					$('#contactAlert').fadeOut();
				}
			);
		}, 3000 );
	});

});
