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

	if(/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		// // calculPos();
		// $('body').bind('touchmove', function(e) {
  //       e.preventDefault()
  //   });
	}

	if($('body').attr('data-template') == 'home' || $('body').attr('data-template') == 'default'){

		//FadeIn all sections    
		$body.imagesLoaded( function() {
			// setTimeout(function() {
			    // Resize sections
			    adjustWindow();
				  $body.removeClass('loading').addClass('loaded');
					$('.loading').fadeOut(500);
				  
			// }, 800);
		});


	// 	// Sauvegarde le scroll pour que quand on revient on soit au meme point
	// 	$(window).unload(function() {
	//     var scrollPosition = $("body").scrollTop();
	//     localStorage.setItem("scrollPosition", scrollPosition);
	// 	});
		
	// 	if(localStorage.scrollPosition) {
	// 	  $("body").scrollTop(localStorage.getItem("scrollPosition"));
	// 	}
	}

	// switch language
	$('.languages li').on('click', function(){
		var currentUrl = window.location.href ;
		var currentHash = window.location.hash;
		var langUrl = $(this).attr('data-language');
		window.location.replace(langUrl+currentHash)
	});

	// teaser
	$('.teaser .close-button').on('click', function(){
		$('.teaser').hide();
	});
	$('.teaser-button').on('click', function(){
		$('.teaser').show();
	});

	$(document).keyup(function(e) {
	  if (e.keyCode === 27) {
	  	$('.teaser').hide();
	  }
	});

	// Menu text decoration
	var hash = window.location.hash;
	$('.menu .menu-el a').on('click',function(){
		$('.menu .menu-el a').removeClass('active');
		$(this).addClass('active');
	});


	$('.menu .menu-el').each(function(){
		var $link = $(this).find('a');
		var id = $(this).find('a').attr("data-id");
		if(id == hash){
			$(this).find('a').addClass('active');
		}
		if(id == "project"){
			$(this).find('a').attr('data-menu-top', '5500');
		}
		if(id == "open-call"){
			$(this).find('a').attr('data-menu-top', '10500');
		}
		if(id == "partners"){
			$(this).find('a').attr('data-menu-top', '16000');
		}
		if(id == "supports"){
			$(this).find('a').attr('data-menu-top', '19000');
		}
		if(id == "planning"){
			$(this).find('a').attr('data-menu-top', '25500');
		}
		if(id == "contacts"){
			$(this).find('a').attr('data-menu-top', '28000');
		}
		//console.log($(this), id);
	});


	
	// Formulaire
	// Ajouter un lien
	var max_fields      = 5; //maximum input boxes allowed
  var wrapper         = $(".input_fields_wrap-links"); //Fields wrapper
  var add_button      = $(".add_links_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper)
          .append('<div class="small-14"><label for="links[]">Lien '+x+'</label><input type="text" name="links[]"/><a href="#" class="remove_field">remove</a></div>'); //add input box
      }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); $(this).parent('div').remove(); x--;
  });



	function adjustWindow(){
		
		var s = skrollr.init({
			//forceHeight: false,
		});

		skrollr.menu.init(s, {
			duration: function(currentTop, targetTop) {
				//By default, the duration is hardcoded at 500ms.
				return 2500;
				//But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
				//return Math.abs(currentTop - targetTop)/2;
			},
			// change: function(hash, top) {
			// 	console.log(hash, top);
			// }
		});

		if (s.isMobile()) {
		  s.destroy();
		}
		
		// get window size
	 //  winH = $window.height();
	    
	 //  if(winH <= 550) {
		// 	winH = 550;
		// } 
	    
  //   $slide.height(winH*2);
  //   $('#slide-2, #slide-3, #slide-4, #slide-5, #slide-6').height(winH*3);
    
  //   $(window).trigger('resize');
  // 	s.refresh();
    //s.refresh($('.homeSlide'));


	    
	}

}

function calculPos(){
	var newPosition = 112;
	$(".textCartel").each(function(){
		var $prev = $(this).prev('.textCartel').find('.inner-content');
		if($prev){
			//prevOffsetTop = $prev.offset();
			var prevHeight = $prev.height();
			var step = 1000;
			newPosition = newPosition + prevHeight + step;
			$(this).find('.inner-content').css('top', newPosition);

			console.log($prev, newPosition, prevHeight)
		}	
	});

}



