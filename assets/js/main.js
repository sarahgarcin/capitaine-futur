$(document).ready(function(){
	
	$(document).foundation();
	init();

});

function init(){

	if($('body').attr('data-template') == 'home'){
		const hours = new Date().getHours()
		const isDayTime = hours > 6 && hours < 20
		if(!isDayTime){
			$('main').addClass('night-mode');
		}
		else{
			$('main').removeClass('night-mode');
		}
	}

	// open menu
	$('header nav > ul > li').on('click', function(e){
		var $el = $(this).find('ul');
		var $allEl = $('header nav > ul > li > ul');
		$('header nav > ul > li > a').removeClass('active');
		if($el.hasClass('active')){
			$el.fadeOut(400);
			$el.removeClass('active');
			$(this).children('a').removeClass('active');
			$('.page-overlay').fadeOut(400);
		}
		else{
			$allEl.fadeOut(400);
			$allEl.removeClass('active');
			$(this).find('ul').fadeIn(400);
			$el.addClass('active');
			$(this).children('a').addClass('active');
			$('.page-overlay').fadeIn(400);
		}
	});


	$('.page-overlay').on('click', function(e){
		var $sub = $('header nav .submenu');
		$('header nav > ul > li > a').removeClass('active');
		$sub.removeClass('active');
		$sub.fadeOut(400);
		$('.page-overlay').fadeOut(400);
	})

		//init slider
	$('.slider').slick({  
		dots: true,
	  infinite: false,
	  speed: 400,
	  // centerMode: true,
  	// centerPadding: '60px',
  	// variableWidth: true;
	  slidesToShow: 1,
	  prevArrow: '<button type="button" class="slick-prev hidden"><</button>',
	  nextArrow: '<button type="button" class="slick-next">></button>'
	});

	var numberOfSlides = $('.slider .slider-image').length;
	console.log(numberOfSlides);
	$('.slider').on('afterChange', function (event, slick, currentSlide) {

    if(currentSlide === numberOfSlides-1) {
      $('.slick-next').addClass('hidden');
    }
    else {
      $('.slick-next').removeClass('hidden');
    }

    if(currentSlide === 0) {
      $('.slick-prev').addClass('hidden');
    }
    else {
      $('.slick-prev').removeClass('hidden');
    }  
  })

}




