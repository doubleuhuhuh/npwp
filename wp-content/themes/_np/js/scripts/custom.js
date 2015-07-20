(function($) { 
/*===================================================================================*/
/*	NP Custom Scripts
/*===================================================================================*/


$(document).ready(function(){ 	

	var styleBarH = $('.callOut').height()-145;    
	$('.navbar').css('margin-top', styleBarH);
    
    var navHeight = $('nav').height();
    console.log(navHeight)


	$(function(){
	        // Check the initial Poistion of the Sticky Header
	        var stickyHeaderTop = $('.navbar').offset().top;
	 
	        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.navbar').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');
                        $('#stickyalias').css('margin-top', styleBarH + 70);
                        $('.navbar').css('margin-top', 0);
                        // Hide Callout BG on scroll down
                        $('.callOut').css('display', 'none');
					} else {
                        $('.navbar').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                        $('.navbar').css('margin-top', styleBarH);
                        // Show Callout background on scroll up
                        $('.callOut').css('display', 'block');
                        //$('.intro-copy').css('margin-top', 0):
                	}
	        });
	  });


    $("#egTruck").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $("#egShirt").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true


        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $("#egStationary").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true


        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
});








})(jQuery);