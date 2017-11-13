$(document).ready(function(){
	
	$(document).foundation();
	init();

});

function init(){

	// open menu
	$('header nav > ul > li').on('click', function(e){
		var $el = $(this).find('ul');
		var $allEl = $('header nav > ul > li > ul');
		$('header nav > ul > li > a').removeClass('active');
		$(this).children('a').addClass('active');
		if($el.hasClass('active')){
			$el.fadeOut(400);
			$el.removeClass('active');
		}
		else{
			$allEl.fadeOut(400);
			$allEl.removeClass('active');
			$(this).find('ul').fadeIn(400);
			$el.addClass('active');
		}
	})

		//init slider
	$('.slider').slick({  
		dots: true,
	  infinite: true,
	  speed: 400,
	  // centerMode: true,
  	// centerPadding: '60px',
  	// variableWidth: true;
	  slidesToShow: 1,
	  prevArrow: '<button type="button" class="slick-prev"><</button>',
	  nextArrow: '<button type="button" class="slick-next">></button>'
	});

}




