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
	$slideshow = $('.slider').slick({  
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

	$('.slider-image').click(function() {
    $slideshow.slick('slickGoTo', parseInt($slideshow.slick('slickCurrentSlide'))+1);
   });

	var numberOfSlides = $('.slider .slider-image').length;
	
	// $('.slider').on('afterChange', function (event, slick, currentSlide) {

 //    if(currentSlide === numberOfSlides-1) {
 //      $('.slick-next').addClass('hidden');
 //    }
 //    else {
 //      $('.slick-next').removeClass('hidden');
 //    }

 //    if(currentSlide === 0) {
 //      $('.slick-prev').addClass('hidden');
 //    }
 //    else {
 //      $('.slick-prev').removeClass('hidden');
 //    }  
 //  })

  // CALENDAR
  if($('body').attr('data-template') == 'calendrier'){
	  var container = document.getElementById('calendar');

	  // Create a DataSet (allows two way data-binding)
	  var items = new vis.DataSet([
	    // {id: 1, content: 'item 1', start: '2013-04-20'},
	    // {id: 2, content: 'item 2', start: '2013-04-14'},
	    // {id: 3, content: 'item 3', start: '2013-04-18'},
	    // {id: 4, content: 'item 4', start: '2013-04-16', end: '2013-04-19'},
	    // {id: 5, content: 'item 5', start: '2013-04-25'},
	    // {id: 6, content: 'item 6', start: '2013-04-27'}
	  ]);
	  // var items = [];

	  $("#calendar .calendar-event").each(function(i){
	  	var evTitle = $(this).attr("data-content");
	  	var evLink = $(this).attr("data-link");
	  	var evStart = $(this).attr("data-start");
	  	var evEnd = $(this).attr("data-end");
	  	var evStartFormat = $(this).attr("data-start-format");
	  	var evEndFormat = $(this).attr("data-end-format");
	  	
	  	var evContent = '<a href="'+evLink+'" title="'+evTitle+'">'+evStartFormat+' — '+evEndFormat+'<br>'+evTitle+'</a>'

	  	if(evEnd != undefined){
				var objectToAdd = {id: i+1, content: evContent, start: evStart, end: evEnd};
	  	}
	  	else{
	  		var objectToAdd = {id: i+1, content: evContent, start: evStart};
	  	}
	  	items.add(objectToAdd);
	  	//items[i] = objectToAdd;
	  	console.log(i);
	  });

	  // Configuration for the Timeline
	  var options = {
	  	height: "300px",
	  	horizontalScroll: true,

	  };

	  // Create a Timeline
	  var timeline = new vis.Timeline(container, items, options);
	}

}




