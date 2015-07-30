(function($) { 
/*===================================================================================*/
/*	NP Custom Scripts
/*===================================================================================*/


$(document).ready(function(){
    
    
    function loadingMask(){
        $('.loadingContainer').css('display','none');
    }
    
    setTimeout(loadingMask, 2500);
    
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

    $( window ).resize(function() {
        console.log('we are resizing');
        
        var bgimage = $('#bgImage').height();
        console.log('bgimage', bgimage);

        $('.navbar').css('margin-top', bgimage);
    });

    var npViewPort = $(window).height() - 35;

    console.log('npViewPort:', npViewPort);

    var bgimage = $('#bgImage').height();

    console.log('bgimage', bgimage);

   var styleBarH = $('.callOut').height();    
	$('.navbar').css('margin-top', bgimage);

    

	$(function(){
	        // Check the initial Poistion of the Sticky Header
	        var stickyHeaderTop = $('.navbar').offset().top;

            console.log(stickyHeaderTop);
	 
	        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.navbar').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');

                        // TODO need to get the hieght of the image instead so this can be responsive
                        $('#stickyalias').css('margin-top', bgimage + 35 );
                        $('.navbar').css('margin-top', 0);
                        // Hide Callout BG on scroll down
                       // $('.callOut').css('display', 'none');
					} else {
                        $('.navbar').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                        $('.navbar').css('margin-top', styleBarH);
                        // Show Callout background on scroll up
                       // $('.callOut').css('display', 'block');
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