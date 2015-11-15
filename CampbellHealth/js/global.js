$(document).ready( function(){

	$('.module-testimonial blockquote').addClass('quote');
	var quotes = $('.module-testimonial .quote');
	var i = 0;
	var len = quotes.length;

	function showNextQuote(){
		$(quotes).removeClass('active');
			quotes[i].addClass('active');
			i++; // increment
			if(i == len) i = 0; // reset at end of list
		}
	}
	setInterval(showNextQuote, 3000);
	
});

$("#toggleButton").click(function(){
    $(this).toggleClass("running");

    var loop = function(){
        if ($("#toggleButton").hasClass("running")){
            $("#buttonbar .bar").each(function(){
                $(this).css("height", Math.round(Math.random() * 99 + 1) + "%");
            });
            setTimeout(doAnim, 250);
        }
    };
    doAnim();
});
$('.accordion li').click(function(){
	$(this).siblings().removeClass('active');
	$(this).toggleClass("active");
});