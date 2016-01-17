$(document).ready(function() { 

	$(".timeline-item").hover(function () {
	    $(".timeline-item").removeClass("active");
	    $(this).toggleClass("active");
	    $(this).prev(".timeline-item").toggleClass("close");
	    $(this).next(".timeline-item").toggleClass("close");
	});

	$(".nav a").on("click", function(){
	   $(".nav").find(".active").removeClass("active");
	   $(this).parent().addClass("active");
	});

});