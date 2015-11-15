// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	$('.module-testimonial blockquote').addClass('quote');
	var quotes = $('.module-testimonial .quote');
	var i = 0;
	var len = quotes.length;

	function showNextQuote(){
		$(quotes).removeClass('active');
		$(quotes[i]).addClass('active');
		i++; // increment
		if(i == len) i = 0; // reset at end of list
	}
	showNextQuote();
	setInterval(showNextQuote, 9000);


	$('.accordion li').click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass("active");
	});

	$('.show-hide-navigation').click( function(e){
		e.preventDefault();
		$('.main-nav').toggleClass('navigation-open');
	});

});



/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/