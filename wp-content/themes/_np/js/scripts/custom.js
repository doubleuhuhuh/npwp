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
					} else {
                        $('.navbar').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                        $('.navbar').css('margin-top', styleBarH);
                        //$('.intro-copy').css('margin-top', 0):
                	}
	        });
	  });
});








})(jQuery);