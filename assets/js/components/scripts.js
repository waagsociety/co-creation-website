jQuery(document).ready( function( $ )  {

/* Custom scripts for the Co-Creation Website! 1,2,3 Go! */

//this adds unique identifiers and classes to each section on the Static Home Page Template
	$( ".slide" ).each(function( index ) {
		$( this ).addClass( "group"+(index+1) );
		$( this  ).attr("id", "group"+(index+1));
		$( this  ).attr("name", "group"+(index+1));
	});

//this adds unique identifiers and classes to each section on the Static Home Page Template
	$( ".data-slide" ).each(function( index ) {
		$( this  ).attr("data-slide-index", +(index+1));
	});


//Enanles the Bx Slider from http://bxslider.com/
	$('.bxslider').bxSlider({
	  mode: 'fade'
	});

//Dynamic padding depending on height of sticky nav. 

	//compensates for logo's height on load
 		var height = $('#main').height(); 
 		var imageHeight = $('#logo').height();
 		var halfHeight = imageHeight * .5 ; 
        
		$( "main" ).css('padding-top', + height + halfHeight);

	//on resize
	$( window ).resize(function() {
		var height = $('#main').height();
		var imageHeight = $('#logo').height();
 		var halfHeight = imageHeight * .5 ;  
		$( "main" ).css('padding-top', + height + halfHeight);
	});


//Adds class "home" to homepage for styling
	if($( "main" ).hasClass( "home" )) {
		$( "body" ).addClass( "home" );	
		$( "html" ).addClass( "home" );	
	}

//Adds smooth scroll (from CSS Tricks)

	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: (target.offset().top - 80)
					}, 1000);
					return false;
				}
			}
		});
	});

// Adds menu toggle	


	$("#nav-toggle").click(function() {
	  $("#navbar-nav").toggleClass("menu-hidden");
	});






}); /* END DOC READY*/