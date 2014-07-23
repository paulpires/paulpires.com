

/* 
 * After the grades section has CLOSED or OPENED change the appearance of the button
 * Check bootstrap API for info on events fired using this collapsable animation/feature
*/
$(document).ready(function($){

	$('#grades').on('hidden.bs.collapse', function () {
		$('#readmore-button').text('Read More ');
		$('#readmore-button').append('<span id="readmore-chevron" class="glyphicon glyphicon-chevron-down" style="top: 3px;"></span>');
	});
	
	$('#grades').on('shown.bs.collapse', function () {
		$('#readmore-button').text('Read Less ');
		$('#readmore-button').append('<span id="readmore-chevron" class="glyphicon glyphicon-chevron-up" style="top: 3px;"></span>');
	});

});

// setTimeout(function() {
// 	// $('#contactAlert').addClass('animated bounceIn');
	$('#contactAlert').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
		function() {
			setTimeout(function() {
				$('#contactAlert').addClass('animated hinge');
				$('#contactAlert').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
					function() {
						$('#contactAlert').fadeOut();
					}
				);
			}, 3000 );
		}
	);
// }, 0);

