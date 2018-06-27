$(document).ready(function(){
	$('.menu_panel li:has(ul)').click(function(e){

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}else{
			$('.menu_panel ul li ul').slideUp();
			$('.menu_panel ul li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});
});

