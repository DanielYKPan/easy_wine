$(document).ready(function(){


/*****************************For All Account Pages****************************************************/

	/*
	|--------------------------------------------------------------------------
	| Change the carousel label content when hover to different icon
	|--------------------------------------------------------------------------
	*/
		$('.icon').hover(
			function(){
				$('.carousel-label-caption').text($(this).data('description'));
			},
			function(){
				$('.carousel-label-caption').text($('.carousel-label-caption').data('original'));
			}
		);
});