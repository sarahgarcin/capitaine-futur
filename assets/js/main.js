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

	// if($('body').attr('data-template') == 'home'){
	// 	// Sauvegarde le scroll pour que quand on revient on soit au meme point
	// 	$(window).unload(function() {
	//     var scrollPosition = $("body").scrollTop();
	//     localStorage.setItem("scrollPosition", scrollPosition);
	// 	});
		
	// 	if(localStorage.scrollPosition) {
	// 	  $("body").scrollTop(localStorage.getItem("scrollPosition"));
	// 	}
	// }

	// teaser
	$('.teaser .close-button').on('click', function(){
		$('.teaser').hide();
	});
	$('.teaser-button').on('click', function(){
		$('.teaser').show();
	});

	// Menu text decoration
	var hash = window.location.hash;
	$('.menu .menu-el a').on('click',function(){
		$('.menu .menu-el a').removeClass('active');
		$(this).addClass('active');
	});


	$('.menu .menu-el').each(function(){
		var $link = $(this).find('a');
		var id = $(this).find('a').attr("href");
		if(id == hash){
			$(this).find('a').addClass('active');
		}
		if(id == "#resume-du-projet"){
			$(this).find('a').attr('data-menu-top', '5500');
		}
		if(id == "#appel-a-projets"){
			$(this).find('a').attr('data-menu-top', '8500');
		}
		if(id == "#partenaires"){
			$(this).find('a').attr('data-menu-top', '6500');
		}
		if(id == "#soutiens"){
			$(this).find('a').attr('data-menu-top', '12000');
		}
		if(id == "#calendrier"){
			$(this).find('a').attr('data-menu-top', '14500');
		}
		if(id == "#contact"){
			$(this).find('a').attr('data-menu-top', '18000');
		}
		//console.log($(this), id);
	});

	
    //FadeIn all sections    
	$body.imagesLoaded( function() {
		setTimeout(function() {
		    // Resize sections
		    adjustWindow();
			  $body.removeClass('loading').addClass('loaded');
			  
		}, 800);
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
		
		var s = skrollr.init();

		skrollr.menu.init(s, {
			duration: function(currentTop, targetTop) {
				//By default, the duration is hardcoded at 500ms.
				return 1500;

				//But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
				//return Math.abs(currentTop - targetTop);
			},
			change: function(hash, top) {
				console.log(hash, top);
			}
		});
		
		// get window size
	  winH = $window.height();
	    
	  if(winH <= 550) {
			winH = 550;
		} 
	    
    $slide.height(winH*2);
    $('#slide-2, #slide-3, #slide-4, #slide-5, #slide-6').height(winH*3);
    
    $(window).trigger('resize');
  	s.refresh();
    //s.refresh($('.homeSlide'));


	    
	}

}



