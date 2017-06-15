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

	if($('body').attr('data-template') == 'home'){
		// Sauvegarde le scroll pour que quand on revient on soit au meme point
		$(window).unload(function() {
	    var scrollPosition = $("body").scrollTop();
	    localStorage.setItem("scrollPosition", scrollPosition);
		});
		
		if(localStorage.scrollPosition) {
		  $("body").scrollTop(localStorage.getItem("scrollPosition"));
		}
	}


	$("#arbre .anim").css({"-webkit-animation-play-state":"paused","animation-play-state":"paused"});
	$("#arbre .anim").hover(function(){
		console.log($(this));
		$(this).css({"-webkit-animation-play-state":"running","animation-play-state":"running"});
	}, function(){
		$(this).css({"-webkit-animation-play-state":"paused","animation-play-state":"paused"});
	});

	var hash = window.location.hash;
	$('.menu .menu-el a').on('click',function(){
		// var hash = window.location.hash;
		// var id = $(this).find('a').attr("href");
		$('.menu .menu-el a').removeClass('active');
		// if(id == hash){
			$(this).addClass('active');
		// }
		// $('.menu .menu-el a').css('text-decoration', 'none');
		// $(this).css('text-decoration', 'underline');
	});

	// $('.menu .menu-el a').hover('text-decoration', 'underline');

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
			$(this).find('a').attr('data-menu-top', '7000');
		}
		if(id == "#partenaires"){
			$(this).find('a').attr('data-menu-top', '8000');
		}
		if(id == "#soutiens"){
			$(this).find('a').attr('data-menu-top', '9000');
		}
		if(id == "#calendrier"){
			$(this).find('a').attr('data-menu-top', '12500');
		}
		if(id == "#contact"){
			$(this).find('a').attr('data-menu-top', '15500');
		}
		//console.log($(this), id);
	});

	
    //FadeIn all sections    
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
		    // Resize sections
		    adjustWindow();

		    //Position the sections
		    // calculPos();

		      
			  $body.removeClass('loading').addClass('loaded');

		  	// header bar
				// var bar = $('#bar'),
				// docHeight = $('body').height(),
				// baseX = $window.height() / docHeight * 100;

				// // console.log( $window.height() );
				// // console.log( docHeight );
				// // console.log( baseX );

				// bar.css('background', '-webkit-linear-gradient(left, green '+ baseX +'%, transparent '+ baseX +'%)');

				// $window.scroll(function(e) {      

				//   var x = $window.scrollTop() / docHeight * 100 + baseX;
				//   bar.css('background', '-webkit-linear-gradient(left, green '+ x +'%, transparent '+ x +'%)');
				// });
			  
		}, 800);
	});

	// $('header .name a').click(function(){
 //    $('html, body').animate({
 //        scrollTop: 0
 //    }, 2000);
	// });

	$("#partenaires .see-more").on('click',function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).next('.more-text').slideUp(400);
			$(this).parent().find('.inner-content').animate({
		    left: "-100%"
		  }, 500 );
		}
		else{
			$(this).addClass('active');
			$('#partenaires .more-text').slideUp(400);
			$('.partenaire-el .inner-content').animate({
		    left: "-100%"
		  }, 500 );
			$(this).next('.more-text').slideDown(400);
			$(this).parent().find('.inner-content').animate({
		    left: "10%"
		  }, 500 );
		}
		// $(this).next('.more-text').slideToggle(400);
		// $(this).parent().find('.inner-content').animate({
	 //    left: "55%"
	 //  }, 1000 );

	});  


	//slider 
	$('.slider').slick({  
		dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  prevArrow: '<button type="button" class="slick-prev"><</button>',
	  nextArrow: '<button type="button" class="slick-next">></button>'
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
			if($(this).attr('id') == 'resume-du-projet'){
				$("#resume-du-projet-slider").find('.inner-content').css('top', newPosition);
			}

			console.log($prev, newPosition, prevHeight);
		}	
	});

}



