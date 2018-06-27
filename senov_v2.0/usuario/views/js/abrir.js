$(document).ready(function(){
	$("#open").click(function(){

		
		if ($(".barra-lateral").hasClass('abrir') && $(".main").hasClass('abrir-main')) {			
			$(".barra-lateral").removeClass('abrir');
			$(".main").removeClass('abrir-main');
		}else{
			$(".barra-lateral").addClass('abrir');
			$(".main").addClass('abrir-main');
		}

		// var ventana_ancho = $(window).width();
		// if (ventana_ancho > 800){
		// 	/*ABRIR MENU*/
		// 	if ($(".barra-lateral").hasClass('abrir') && $(".main").hasClass('abrir-main')) {			
		// 		$(".barra-lateral").removeClass('abrir');
		// 	}else{
		// 		$(".barra-lateral").addClass('abrir');
		// 	}

		// 	/*ABRIR MAIN*/
		// 	if ($(".main").hasClass('abrir-main')) {
		// 		$(".main").removeClass('abrir-main');
		// 	}else{
		// 		$(".main").addClass('abrir-main');
		// 	}

		// }else{

		// 	if ($(".barra-lateral").hasClass('abrir')) {
		// 		$(".barra-lateral").removeClass('abrir');
		// 	}else{
		// 		$(".barra-lateral").addClass('abrir');
		// 	}
			
		// }


	});
});



