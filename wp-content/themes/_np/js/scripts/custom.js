(function($) { 
/*===================================================================================*/
/*	NP Custom Scripts
/*===================================================================================*/


$(document).ready(function(){
    
    
    function loadingMask(){
        $('.loadingContainer').css('display','none');
    
    }
    setTimeout(loadingMask, 2500);
    // $( ".loadingMask" ).fadeOut( "slow")
    
    function callOutText() {

        $('.callOut-copy').css('display','block');

        $('.flipx').textillate({
            in: {
                effect: 'flipInX',
                //delayScale: 2,
                delay: 23,
                shuffle: false,
                sync: false
            },
            out: {
                effect: 'FadeOutRightBig',
                shuffle: false,
                sync: true
            }
        });
        $('.flipy').textillate({
            in: {
                effect: 'fadeInUp',
                //delayScale: 2,
                delay: 25,
                shuffle: false,
                sync: false
            },
            out: {
                effect: 'FadeOutRightBig',
                shuffle: false,
                sync: true
            }
        }) 	
    }

    setTimeout(callOutText, 3510);


    

    var landingImage = document.getElementById('#bgImage');

    var width = landingImage.naturalHeight;

    console.log(landingImage)
    console.log(width)

    var styleBarH = $('.callOut').height();    
	$('.navbar').css('margin-top', styleBarH);

    

	$(function(){
	        // Check the initial Poistion of the Sticky Header
	        var stickyHeaderTop = $('.navbar').offset().top;

            console.log(stickyHeaderTop);
	 
	        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.navbar').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');

                        // TODO need to get the hieght of the image instead so this can be responsive
                        $('#stickyalias').css('margin-top', styleBarH + 35 );
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
  

    $("#egRebrand").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true


    });

});


$( window ).resize(function() {
    
    var styleBarH = $('.callOut').height()-145;    
    $('.navbar').css('margin-top', styleBarH);
    
    console.log('resizing')

});





})(jQuery);