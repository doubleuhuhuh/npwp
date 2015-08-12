(function($) { 
/*===================================================================================*/
/*	NP Custom Scripts
/*===================================================================================*/


$( window ).load(function() {
    // Get image height on LOAD
    var bgimage = $('#bgImage').height();
    // Set top margin
    $('.navwrap').css('margin-top', bgimage);

    // NAV Business 
    $(function(){
            // Check the initial Poistion of the Sticky Header
            var stickyHeaderTop = $('.navbar').offset().top;

            console.log('stickyHeaderTop',stickyHeaderTop);
     
            $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.navbar').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');

                        $('#stickyalias').css('margin-top', bgimage + 35 );
                        $('.navbar').css('margin-top', 0);
                        
                    } else {
                        $('.navbar').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                        $('.navbar').css('margin-top', bgimage);
                    }
            });
      });
});


$(document).ready(function(){

   //Get Image Height again when page is ready
   var bgimage = $('#bgImage').height(); 
   // User Image Height to set margin
   $('.navwrap').css('margin-top', bgimage);
  
   // Fade out Loading Overlay 
   $('.loadingContainer').delay(2000).fadeOut('xslow'); 

  
    // Landing Text Load
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

    setTimeout(callOutText, 2510);

   

    

    
 //    // NAV Business 
	// $(function(){
	//         // Check the initial Poistion of the Sticky Header
	//         var stickyHeaderTop = $('.navbar').offset().top;

 //            console.log('stickyHeaderTop',stickyHeaderTop);
	 
	//         $(window).scroll(function(){
 //                if( $(window).scrollTop() > stickyHeaderTop ) {
 //                        $('.navbar').css({position: 'fixed', top: '0px'});
 //                        $('#stickyalias').css('display', 'block');

 //                        $('#stickyalias').css('margin-top', bgimage + 35 );
 //                        $('.navbar').css('margin-top', 0);
                        
	// 				} else {
 //                        $('.navbar').css({position: 'static', top: '0px'});
 //                        $('#stickyalias').css('display', 'none');
 //                        $('.navbar').css('margin-top', bgimage);
 //                    }
	//         });
	//   });

     // Animate Scroll
    $('a[href*=#]:not([href=#myCarousel])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
  
    //Image Carousel
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



// $( window ).resize(function() {
    
//     var styleBarH = $('.callOut').height()-145;    
//     $('.navbar').css('margin-top', styleBarH);
    
//     console.log('resizing')

// });

 // $( window ).resize(function() {
 //        console.log('we are resizing');
        
 //        var bgimage = $('#bgImage').height();
 //        console.log('bgimage', bgimage);

 //        $('.navbar').css('margin-top', bgimage);
 //    });




})(jQuery);