(function($, document, window){

	$(document).ready(function(){

		// Cloning main navigation for mobile menu
		$(".mobile-navigation").append($(".main-navigation .menu").clone());

		// Mobile menu toggle
		$(".toggle-menu").click(function(){
			$(".mobile-navigation").slideToggle();
		});

		$(".home-slider").flexslider({
			controlNav: true,
			directionNav: false
		});

		$(".login-button").on("click",function(){
			$(".overlay").fadeIn();
			$(".auth-popup").toggleClass("active");
		});

        $(".register-button").on("click",function(){
            $(".overlayV2").fadeIn();
            $(".auth-popupV2").toggleClass("active");
        });

		$(".close, .overlay").on("click",function(){
			$(".overlay").fadeOut();
			$(".popup").toggleClass("active");
		});

        $(".closeV2, .overlayV2").on("click",function(){
            $(".overlayV2").fadeOut();
            $(".popupV2").toggleClass("active");
        });

		initLightbox({
	    	selector : '.product-images a',
	    	overlay: true,
	    	closeButton: true,
	    	arrow: true
	    });


		$(document).keyup(function(e) {
			if( $(".popup").hasClass("active")){
		  		if (e.keyCode === 27) {
		  			$(".overlay").fadeOut();
					$(".popup").toggleClass("active");
		  		}
			}

            if( $(".popupV2").hasClass("active")){
                if (e.keyCode === 27) {
                    $(".overlayV2").fadeOut();
                    $(".popupV2").toggleClass("active");
                }
            }
		});
	});

	$(window).load(function(){

	});

})(jQuery, document, window);
