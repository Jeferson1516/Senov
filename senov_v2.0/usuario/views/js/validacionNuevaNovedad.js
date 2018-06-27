/*=============================================
					AJAX
==============================================*/
function documentoExistente(documento){
	var datos = new FormData();
		datos.append('documento',documento);
/*
	$("#documentoNovedad").removeClass('successNovedad');
	$("#documentoNov #checkI").removeClass('checkISuccess');
	$("#documentoNov #checkI").removeClass('icon-check');

	$("#documentoNovedad").removeClass('dangerNovedad');
	$("#documentoNov #checkI").removeClass('checkIDanger');
	$("#documentoNov #checkI").removeClass('icon-circle-with-cross');
*/
	$.ajax({

		url:"views/ajax/nuevaNovedad.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			if (respuesta != ""){

				$("#documentoNovedad").addClass('dangerNovedad');
				$("#documentoNov #checkI").addClass('checkIDanger');
				$("#documentoNov #checkI").addClass('icon-circle-with-cross');
				alert(respuesta);

			}else if(respuesta == "" && $("#documentoNovedad").val() != ""){

				$("#documentoNovedad").addClass('successNovedad');
				$("#documentoNov #checkI").addClass('checkISuccess');
				$("#documentoNov #checkI").addClass('icon-check');

			}
		}

	});
}



/*================FIN_AJAX===================*/
// function limpiarClass(id){
// 	$(this).removeClass('dangerNovedad');
// 	$(this).removeClass('successNovedad');
// 	$(id+" #checkI").removeClass('checkIDanger');
// 	$(id+" #checkI").removeClass('icon-circle-with-cross');
// 	$(id+" #checkI").removeClass('checkISuccess');
// 	$(id+" #checkI").removeClass('icon-check');
// }

$(document).ready(function(){

	$("#documentoNovedad").change(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		$("#documentoNov #checkI").removeClass('checkIDanger');
		$("#documentoNov #checkI").removeClass('icon-circle-with-cross');
		$("#documentoNov #checkI").removeClass('checkISuccess');
		$("#documentoNov #checkI").removeClass('icon-check');

		var documento = $.trim($(this).val());
		var expresionNumeros = /^[0-9]*$/;
		var smsError = "";

		if (documento != ""){

			if (documento.length > 15 || documento.length < 6){

				$(this).addClass('dangerNovedad');
				$("#documentoNov #checkI").addClass('checkIDanger');
				$("#documentoNov #checkI").addClass('icon-circle-with-cross');	
				smsError = "<b>¡Ops!</b> El Tamaño del documento no es valido"; 

			}else if (!expresionNumeros.test(documento)){

				$(this).addClass('dangerNovedad');
				$("#documentoNov #checkI").addClass('checkIDanger');
				$("#documentoNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b>El documento solo debe contener numeros"; 

			}else{
				documentoExistente(documento);
			}

		}

		

		//-----

		$("#smsDocumento").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsDocumento").addClass('smsDanger');
			$("#smsDocumento").append(smsError);

		}else{

			$("#smsDocumento").removeClass('smsDanger');
			$("#smsDocumento").empty();

		}
	});

	//------------------------------

	$("#nombreNovedad").change(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		$("#nombreNov #checkI").removeClass('checkIDanger');
		$("#nombreNov #checkI").removeClass('icon-circle-with-cross');
		$("#nombreNov #checkI").removeClass('checkISuccess');
		$("#nombreNov #checkI").removeClass('icon-check');

		var nombre = $.trim($(this).val())
		var expresion = /^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]*$/;
		var smsError = "";

		if (nombre != ""){
			if (nombre.length > 15 || nombre.length < 4){

				$(this).addClass('dangerNovedad');
				$("#nombreNov #checkI").addClass('checkIDanger');
				$("#nombreNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b> El tamaño del <u>nombre</u> no es valido"; 

			}else if (!expresion.test(nombre)){

				$(this).addClass('dangerNovedad');
				$("#nombreNov #checkI").addClass('checkIDanger');
				$("#nombreNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b>El <u>nombre</u> solo debe contener letras";

			}else{

				$(this).addClass('successNovedad');
				$("#nombreNov #checkI").addClass('checkISuccess');
				$("#nombreNov #checkI").addClass('icon-check');

			}
		}

		

		//----

		$("#smsNombre").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsNombre").addClass('smsDanger');
			$("#smsNombre").append(smsError);

		}else{

			$("#smsNombre").removeClass('smsDanger');
			$("#smsNombre").empty();

		}
	});

	//------------------------------

	$("#apellidoNovedad").change(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		$("#apellidoNov #checkI").removeClass('checkIDanger');
		$("#apellidoNov #checkI").removeClass('icon-circle-with-cross');
		$("#apellidoNov #checkI").removeClass('checkISuccess');
		$("#apellidoNov #checkI").removeClass('icon-check');

		var apellido = $.trim($(this).val())
		var expresion = /^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ ]*$/;
		var smsError = "";

		if (apellido != ""){

			if (apellido.length > 15 || apellido.length < 4){

				$(this).addClass('dangerNovedad');
				$("#apellidoNov #checkI").addClass('checkIDanger');
				$("#apellidoNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b> El tamaño del <u>apellido</u> no es valido"; 	

			}else if (!expresion.test(apellido)){

				$(this).addClass('dangerNovedad');
				$("#apellidoNov #checkI").addClass('checkIDanger');
				$("#apellidoNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b>El <u>Apellido</u> solo debe contener letras"; 

			}else{

				$(this).addClass('successNovedad');
				$("#apellidoNov #checkI").addClass('checkISuccess');
				$("#apellidoNov #checkI").addClass('icon-check');	

			}

		}

		

		//----

		$("#smsApellido").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsApellido").addClass('smsDanger');
			$("#smsApellido").append(smsError);

		}else{

			$("#smsApellido").removeClass('smsDanger');
			$("#smsApellido").empty();

		}
	});
	//------------------------------

	$("#emailNovedad").change(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		$("#emailNov #checkI").removeClass('checkIDanger');
		$("#emailNov #checkI").removeClass('icon-circle-with-cross');
		$("#emailNov #checkI").removeClass('checkISuccess');
		$("#emailNov #checkI").removeClass('icon-check');

		var email = $.trim($(this).val())
		var expresion =  /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
		var smsError = "";

		if (email != ""){

			if (email.length > 30 ){

				$(this).addClass('dangerNovedad');
				$("#emailNov #checkI").addClass('checkIDanger');
				$("#emailNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b> El tamaño del <u>Correo</u> no es valido"; 	

			}else if (!expresion.test(email)){

				$(this).addClass('dangerNovedad');
				$("#emailNov #checkI").addClass('checkIDanger');
				$("#emailNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b>El <u>Correo</u> no es valido"; 

			}else{

				$(this).addClass('successNovedad');
				$("#emailNov #checkI").addClass('checkISuccess');
				$("#emailNov #checkI").addClass('icon-check');	
	
			}

		}
		

		//----

		$("#smsEmail").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsEmail").addClass('smsDanger');
			$("#smsEmail").append(smsError);

		}else{

			$("#smsEmail").removeClass('smsDanger');
			$("#smsEmail").empty();

		}
	});
	//------------------------------

	$("#telefonoNovedad").focusout(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		$("#telefonoNov #checkI").removeClass('checkIDanger');
		$("#telefonoNov #checkI").removeClass('icon-circle-with-cross');
		$("#telefonoNov #checkI").removeClass('checkISuccess');
		$("#telefonoNov #checkI").removeClass('icon-check');

		var telefono = $.trim($(this).val());
		var expresion =  /^[0-9]*$/;
		var smsError = "";

		if (telefono != ""){

			if (telefono.length > 11 || telefono.length < 5){

				$(this).addClass('dangerNovedad');
				$("#telefonoNov #checkI").addClass('checkIDanger');
				$("#telefonoNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b> El tamaño del <u>telefono</u> no es valido";

			}else if (!expresion.test(telefono)){

				$(this).addClass('dangerNovedad');
				$("#telefonoNov #checkI").addClass('checkIDanger');
				$("#telefonoNov #checkI").addClass('icon-circle-with-cross');
				smsError = "<b>¡Ops!</b>El <u>telefono</u> no es valido"; 

			}else{

				$(this).addClass('successNovedad');
				$("#telefonoNov #checkI").addClass('checkISuccess');
				$("#telefonoNov #checkI").addClass('icon-check');	

			}
		
		}
		

		//----

		$("#smsTelefono").empty();
		if ($(this).hasClass('dangerNovedad')){

			$("#smsTelefono").addClass('smsDanger');
			$("#smsTelefono").append(smsError);

		}else{

			$("#smsTelefono").removeClass('smsDanger');
			$("#smsTelefono").empty();

		}
	});	

	//------------------------------
	
	$("#fichaNovedad").focusout(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		
		var ficha = $.trim($(this).val());
		
		if (ficha == null || ficha == ""){

			$(this).addClass('dangerNovedad');
			smsError = "<b>¡Ops!</b> Por favor seleccione una ficha";

		}else{
			$(this).addClass('successNovedad');	
		}

		
		$("#smsFicha").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsFicha").addClass('smsDanger');
			$("#smsFicha").append(smsError);

		}else{

			$("#smsFicha").removeClass('smsDanger');
			$("#smsFicha").empty();

		}	

		

	});

	//---------------------------


	$("#tipoNovedad").focusout(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');
		
		var ficha = $.trim($(this).val());
		
		if (ficha == null || ficha == ""){

			$(this).addClass('dangerNovedad');
			smsError = "<b>¡Ops!</b> Por favor seleccione un tipo de <u>novedad</u>";

		}else{
			$(this).addClass('successNovedad');	
		}

		
		$("#smsTipo").empty();
		if ($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsTipo").addClass('smsDanger');
			$("#smsTipo").append(smsError);

		}else{

			$("#smsTipo").removeClass('smsDanger');
			$("#smsTipo").empty();

		}	

		

	});
	//---------------------------

	$("#file1").change(function(){

		$(this).removeClass('dangerNovedad');
		$(this).removeClass('successNovedad');

		var archivo = $(this).val();
		var extensiones = archivo.substring(archivo.lastIndexOf("."));
		
		if(extensiones != ".doc" && extensiones != ".docx"){
			$(this).addClass('dangerNovedad');
			smsError = "<b>¡Ops!</b> El archivo de tipo <b>" + extensiones + "</b> no es válido";
		}else{
			$('#inputval').text( $(this).val());
		}

		$("#smsFile").empty();
		if($(this).hasClass('dangerNovedad') && smsError != ""){

			$("#smsFile").addClass('smsDanger');
			$("#smsFile").append(smsError);

		}else{

			$("#smsFile").removeClass('smsDanger');
			$("#smsFile").empty();

		}

	});

	$("#formNuevaNovedad").submit(function(){

		if ($("#documentoNovedad").val() == "" ||
			$("#apellidoNovedad").val() == "" ||
			$("#emailNovedad").val() == "" ||
			$("#telefonoNovedad").val() == "" ||
			$("#fichaNovedad").val() == "" ||
			$("#tipoNovedad").val() == "" ||
			$("#file1").val() == ""){
			$("#alertNov").html('<b>¡Ops!</b> revisa bien antes de enviar la novedad.');
			$("#alertNov").toggle();
			return false;
		}

		if ($("#documentoNovedad").hasClass('dangerNovedad') ||
			$("#apellidoNovedad").hasClass('dangerNovedad') ||
			$("#emailNovedad").hasClass('dangerNovedad') ||
			$("#telefonoNovedad").hasClass('dangerNovedad') ||
			$("#fichaNovedad").hasClass('dangerNovedad') ||
			$("#tipoNovedad").hasClass('dangerNovedad') ||
			$("#file1").hasClass('dangerNovedad')){
			$("#alertNov").html('<b>¡Ops!</b> revisa bien antes de enviar la novedad');
			$("#alertNov").toggle();
			return false;
		}
		return true;
	});

});
	
	

