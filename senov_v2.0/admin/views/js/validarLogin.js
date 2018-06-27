function validarLogin(){
	var documento = document.getElementById("documento").value;
	var password = document.getElementById("password").value;
	
	console.log(documento);
	console.log(password);
/*------------Validacion Documento------------*/
	if (documento != "") {

		var caracteres = documento.length;
		var expresion = /^[0-9]*$/;	

		if (caracteres != 10) {
			
			document.getElementById("mensajeError").innerHTML += ('<b>Espera!</b> Digite una cedula valida. <br />');
			console.log("E1");
			return false;
		}

		if (!expresion.test(documento)) {
			
			document.getElementById("mensajeError").innerHTML += ('<b>Espera!</b> La cedula No debe contener letras. <br />');

			return false;
		}


	}
/*------------Validacion Password------------*/
	if (password != "") {

		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]*$/;	

		if (caracteres > 20) {
			
			document.getElementById("mensajeError").innerHTML += ('<b>Espera!</b> has exedido el limite de caracteres de la contraseña. <br />');

			return false;
		}

		if (!expresion.test(password)) {
			
			document.getElementById("mensajeError").innerHTML += ('<b>Espera!</b> La Contraseña No debe contener caracteres especiales (@ <> ! ...). <br />');

			return false;
		}


	}
	
return false;	
}	
