$(document).ready(function(){
	$(this).scrollTop(0);
	
	$(document).foundation();
	init();

});

function init(){

	$window = $(window);
	$htmlbody = $('html,body');
	$slide = $('.homeSlide');
	$body = $('body');

	
    //FadeIn all sections    
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
		      // Resize sections
		      adjustWindow();
		      
			  $body.removeClass('loading').addClass('loaded');
			  
		}, 800);
	});
	
	function adjustWindow(){
		
		var s = skrollr.init();
		
		// get window size
	  winH = $window.height();
	    
	  if(winH <= 550) {
			winH = 550;
		} 
	    
	    $slide.height(winH*2);
	    $('#slide-2, #slide-3').height(winH*3);
	    
	    s.refresh($('.homeSlide'));
	    
	}

}