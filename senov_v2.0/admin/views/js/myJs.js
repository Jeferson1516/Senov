/*====================AJAX=======================*/
function actualizarNovedad(datosActualizar){

	var datos = new FormData();
		datos.append('documento',datosActualizar[0]);
		datos.append('estado',datosActualizar[1]);

		// for (var value of datos.values()) {
		//    console.log("soy un dato de una funcion "+value); 
		// }
	$.ajax({

		url:"http://localhost:8080/senov_v2.0/admin/views/ajax/reportar.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			if (respuesta == "success"){

				alert("El cambio de estado ha sido un exito.");
				location.reload();

			}else if(respuesta == "danger" ){
				alert("El cambio de estado ha sido un exito.");
				location.reload();

			}else{
				alert("ERROR");
			}
		}

	});
}

function actualizarCamposNovedad(datosActualizar){

	var datos = new FormData();
		datos.append('nombre',datosActualizar[0]);
		datos.append('apellido',datosActualizar[1]);
		datos.append('email',datosActualizar[2]);
		datos.append('telefono',datosActualizar[3]);
		datos.append('ficha',datosActualizar[4]);
		datos.append('tipo',datosActualizar[5]);
		datos.append('estado',datosActualizar[6]);
		datos.append('documentoCampo',datosActualizar[7]);

		// for (var value of datos.values()) {
		//    console.log("soy un dato de una funcion "+value); 
		// }

	$.ajax({

		url:"views/ajax/reportar.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			if (respuesta == "success"){

				// $("div.tabla-nov").load(" div.tabla-nov");
				alert("La actualizacion ha sido un exito.");
				location.reload();

			}else if(respuesta == "danger" ){
				alert("Error no se pudo actualizar");
				location.reload();

			}else{
				location.reload();
				console.log("ERROR: al actualizar la base de datos ");
			}
		}

	});
}

function borrarCuenta(dato){

	var datos = new FormData();
		datos.append('documento',dato);

		// for (var value of datos.values()) {
		//    console.log("soy un dato de una funcion "+value); 
		// }
	$.ajax({

		url:"http://localhost:8080/senov_v2.0/admin/views/ajax/tablaUsuarios.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){


			alert("Se ha eleminidado con exito.");
			location.reload();

		}

	});
}





/*====================FIN-AJAX===================*/
function preAlerta(){
	return confirm("Esta seguro de hacer esta accion.");
}

$(document).ready(function(){


	$("button.cross-nov").on('click',function() {


		//Poner el estado en "No aprobado"

		// var a = $(this).parent();
		// console.log(a.parent());
		

		if(preAlerta()){
			var hermanos = $(this).siblings();
			var input = hermanos.val();
			var datosActualizar = [input,"3"]
			console.log(input);
			actualizarNovedad(datosActualizar);	
		}


	});

	$('button.check-nov').on('click',function() {

		// var hermanos = $(this).siblings();
		// var input = hermanos.val();
		// console.log(hermanos.val());
		if (preAlerta()){
			var hermanos = $(this).siblings();
			var input = hermanos.val();
			var datosActualizar = [input,"2"];
			actualizarNovedad(datosActualizar);
		}
	});

	$('button.modify-nov').on('click',function(){
		var a = confirm("¡Esta seguro de querer modificar este registro!");

		if (a){
			var hermanos = $(this).siblings();
			var input = hermanos.val();
			var padre = $(this).parent();
			var abuelo = $(padre).parent();
			var hijos = $(abuelo).children('td');
			// var input1 = hijos[0];

			console.log(abuelo);

			var valores = [];

			for(var i = 0; i < $(hijos).length; i++){
				valores[i] = $(hijos[i]).text();
			}

			// for(var i = 0; i < $(hijos).length; i++){
			// 	console.log(valores[i]);
			// }

			hijos.empty(); 
			$(hijos[0]).html(valores[0]); 

			for (var i = 1; i <= 4; i++){
				var inputID = $('<input>',{
				    'type' : 'text',
					'class' : 'input-modificar',
					'value' : valores[i]
				});     

				$(hijos[i]).append(inputID);
			}

			var selectTipo = $('<select>',{
				'name' : 'tipoActualizar',
				'class' : 'menu-busqueda borde-negro'
			})

			$(selectTipo).append('<option value="null" disabled selected>Tipo de Novedad</option>');
			$(selectTipo).append('<option value="aplazamineto">Aplazamineto</option>');
			$(selectTipo).append('<option value="cambio-jornada">Cambio de jornada</option>');
			$(selectTipo).append('<option value="cancelacion-matricula">Cancelación de matricula</option>');
			$(selectTipo).append('<option value="desercion">Desercion</option>');
			$(selectTipo).append('<option value="retiro-voluntario">Retiro Voluntario</option>');
			$(selectTipo).append('<option value="traslado">Traslado</option>');

			$(hijos[5]).append(selectTipo);

			$(hijos[6]).append('<span class="text-muted">Cambiar estado: </span>');

			var selectEstado = $('<select>',{
				'name' : 'estadoActualizar',
				'class' : 'menu-busqueda borde-negro'
			})

			if ($.trim(valores[8]) == "No aprobado"){
				$(selectEstado).append('<option class="bg-danger text-white" value="3" selected>No aprobado</option>');
			}else{
				$(selectEstado).append('<option class="bg-danger text-white" value="3">No aprobado</option>');
			}

			if ($.trim(valores[8]) == "Aprobado"){
				$(selectEstado).append('<option class="bg-success text-white" value="2" selected>Aprobado</option>');
			}else{
				$(selectEstado).append('<option class="bg-success text-white" value="2">Aprobado</option>');
			}			
			
			$(selectEstado).append('<option class="bg-muted text-muted" value="1">En tramite</option>');

			$(hijos[6]).append(selectEstado);



			var	buttonSubmit = $('<input>',{
				'type' : 'submit',
				'value' : 'Actualizar',
				'class' : 'enviarForm btn btn-info'
			});

			$(hijos[7]).append(buttonSubmit);
		}

		$(hijos[7]).on('click','input.enviarForm', function() {
			var tdHijos = $(hijos).children();
			var datosActualizar = []; 

			datosActualizar[0] = $(tdHijos[0]).val().split(" ")[0];
			datosActualizar[1] = $(tdHijos[0]).val().split(" ")[1];

		 	for(var i = 1; i < $(tdHijos).length+1; i++){
		 		datosActualizar[i+1] = $(tdHijos[i]).val();
			}


			if (datosActualizar[5] == null){
				datosActualizar[5] = valores[5];	
			}

			datosActualizar[6] = $(tdHijos[6]).val();
			datosActualizar[7] = valores[0];
			// for(var i = 0; i < $(tdHijos).length; i++){
		 // 		console.log(datosActualizar[i]);
			// }



			if (preAlerta()){
				actualizarCamposNovedad(datosActualizar);
			}
		});
		
	});

	// $('button.button-glass').click(function() {
	// 	divSelect = $('.menu-nov-list');
	// 	select = $('.menu-nov-list').children();
	// 	valor = $('.menu-nov-list').children().val();

	// 	hermano = divSelect.siblings('div.block-note.input-buscar');

	// 	if (valor == 'tipo'){
	// 		hermano.empty();
	// 		var selectTipo = $('<select>',{
	// 			'name' : 'busquedaTabla',
	// 			'class' : 'menu-busqueda'
	// 		});

	// 		$(selectTipo).append('<option value="null" disabled selected>Tipo de Novedad</option>');
	// 		$(selectTipo).append('<option value="aplazamineto">Aplazamineto</option>');
	// 		$(selectTipo).append('<option value="cambio-jornada">Cambio de jornada</option>');
	// 		$(selectTipo).append('<option value="cancelacion-matricula">Cancelación de matricula</option>');
	// 		$(selectTipo).append('<option value="desercion">Desercion</option>');
	// 		$(selectTipo).append('<option value="retiro-voluntario">Retiro Voluntario</option>');
	// 		$(selectTipo).append('<option value="traslado">Traslado</option>');

	// 		var btnTipo = $('<button>',{
	// 			'type' : 'submit',
	// 			'class' : 'icon-magnifying-glass button-glass'
	// 		});	

	// 		hermano.append(selectTipo);
	// 		hermano.append(btnTipo);

	// 	}
	// 	return false;
	// });

/*=======TABLAUSUARIO=========*/

	$("button.icon-trash").click(function(){

		if (preAlerta()){
			var hermanos = $(this).siblings();
			var documento = $(hermanos).val()

			var check = prompt("Porfavor ingrese el codigo de seguridad");

			if (check == "123"){
				borrarCuenta(documento);
			}else{
				alert("Error: codigo no valido.");
			}
		}
	});

	$("select.cambioDeAmbiente").change(function(){
		var a = confirm("Esta seguro de que quiere cambiar al modo de usuario.");

		if (a){

			// location.href = "localhost:8080/senov_v2.0/loading/admin";
			// setTimeout ("redireccionar()", 1000);

			setTimeout(function(){
				url = "http://localhost:8080/senov_v2.0/loading/admin";
				$(location).attr('href',url);
			},1000);

		}
	});

	// $("#closeAlertOk").click(function() {
	// 	$("#myAlert").toggle();
	// 	$("#filderDark").toggle();
		
	// });

	// $("#closeAlertX").click(function() {
	// 	$("#myAlert").toggle();
	// 	$("#filderDark").toggle();
	// });

	// $("#openAlert").click(function() {
	// 	console.log("ok");
	// 	$("#myAlert").toggle();
	// 	$("#filderDark").toggle()
	// });

});