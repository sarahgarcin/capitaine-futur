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

	$("#arbre .anim").css({"-webkit-animation-play-state":"paused","animation-play-state":"paused"});
	$("#arbre .anim").hover(function(){
		console.log($(this));
		$(this).css({"-webkit-animation-play-state":"running","animation-play-state":"running"});
	}, function(){
		$(this).css({"-webkit-animation-play-state":"paused","animation-play-state":"paused"});
	});

	$('.menu .menu-el').each(function(){
		var $link = $(this).find('a');
		var id = $(this).find('a').attr("href");
		if(id == "#pourquoi"){
			$(this).find('a').attr('data-menu-top', '120p');
		}
		if(id == "#resume-du-projet"){
			$(this).find('a').attr('data-menu-top', '600p');
		}
		if(id == "#partenaires"){
			$(this).find('a').attr('data-menu-top', '1200p');
		}
		if(id == "#calendrier"){
			$(this).find('a').attr('data-menu-top', '1500p');
		}
		if(id == "#contact"){
			$(this).find('a').attr('data-menu-top', '1900p');
		}
		if(id == "#appel-a-projets"){
			$(this).find('a').attr('data-menu-top', '2800p');
		}
		console.log($(this), id);
	});

	
    //FadeIn all sections    
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
		    // Resize sections
		    adjustWindow();
		      
			  $body.removeClass('loading').addClass('loaded');

		  	// header bar
				var bar = $('#bar'),
				docHeight = $('body').height(),
				baseX = $window.height() / docHeight * 100;

				console.log( $window.height() );
				console.log( docHeight );
				console.log( baseX );

				bar.css('background', '-webkit-linear-gradient(left, green '+ baseX +'%, transparent '+ baseX +'%)');

				$window.scroll(function(e) {      

				  var x = $window.scrollTop() / docHeight * 100 + baseX;
				  bar.css('background', '-webkit-linear-gradient(left, green '+ x +'%, transparent '+ x +'%)');
				});
			  
		}, 800);
	});

	$('header .name a').click(function(){
    $('html, body').animate({
        scrollTop: 0
    }, 500);
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
	
	function adjustWindow(){
		
		var s = skrollr.init();

		skrollr.menu.init(s, {
			duration: function(currentTop, targetTop) {
				//By default, the duration is hardcoded at 500ms.
				return 1000;

				//But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
				//return Math.abs(currentTop - targetTop) * 1000;
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
	    $('#slide-2, #slide-3').height(winH*3);
	    
	    s.refresh($('.homeSlide'));


	    
	}

}