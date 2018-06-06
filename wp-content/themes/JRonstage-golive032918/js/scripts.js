(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
		$('.header__mobile-nav a').on('click', function(){
			$('.main-nav').slideToggle('slow');
		 });
		
		var breakpoint = 700;
		
		$(window).resize(function() {
			if ($(document).width() <= breakpoint) {
				$('.main-nav').hide();

			} else{
                $('.main-nav').show();
			}		 
		});
				
		$('#feature').hover(function(){
			$('.feature').fadeIn(function(){
				$(this).toggleClass('active');
			});			
		});
						
	});	
})(jQuery, this);