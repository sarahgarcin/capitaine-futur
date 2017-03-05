$(document).ready(function(){
	$(document).foundation();
	init();

});

function init(){

	//night mode
	$('.night-mode').on('click',function(){
		if($('body').hasClass('night-active'))
			$('body').removeClass('night-active');
		else $('body').addClass('night-active');
		
	});

}