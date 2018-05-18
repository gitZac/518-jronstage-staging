(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
		$('.mobile-nav a').on('click', function(){
			$('.main-nav').slideToggle('slow');
		 });
		
		var breakpoint = 1190;
		
		$(window).resize(function() {
			if ($(document).width() >= breakpoint) {

				$('.main-nav').show();
			} else{
				$('.main-nav').hide();
			}		 
		});
				
		$('#feature').hover(function(){
			$('.feature').fadeIn(function(){
				$(this).toggleClass('active');
			});			
		});
				
		
		
		
		
		
		
	});	
})(jQuery, this);
