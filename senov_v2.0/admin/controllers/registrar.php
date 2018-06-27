<?php 

class Registrar
{
	public function setDatosNovedadController()
	{	
		// echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=Registrar?v=0'>";
		// header("location: registrar/success");
		if (isset($_POST["documentoRegistrar"])) {

			if (!empty($_POST["documentoRegistrar"])&& 
				!empty($_POST["nombreRegistrar"])	&&
				!empty($_POST["apellidoRegistrar"])	&&
				!empty($_POST["emailRegistrar"])	&&
				!empty($_POST["telefonoRegistrar"])	&&
				!empty($_POST["tipoCargo"])){

				//Codigo

				$nombre = Registrar::validarDato($_POST["nombreRegistrar"]);
				$nombre = strtolower($nombre);
				$nombre = ucwords($nombre);

				$apellido = Registrar::validarDato($_POST["apellidoRegistrar"]);
				$apellido = strtolower($apellido);
				$apellido = ucwords($apellido);
				$password = Registrar::generaPass();

				if ($_POST["tipoCargo"] == "Aadmin") {
					$cargo = "2";
				}else if ($_POST["tipoCargo"] == "instructor") {
					$cargo = "1";
				}

				$datosController = array(
					"documento" 	=> $_POST["documentoRegistrar"],
					"nombre" 		=> $nombre,
					"apellido" 		=> $apellido,
					"email" 		=> $_POST["emailRegistrar"],
					"telefono" 		=> $_POST["telefonoRegistrar"],
					"tipoCargo" 	=> $cargo,
					"password"      => $password,
					"intentos"      => 0);
				$respuesta = RegistrarModels::setDatosRegistroModels($datosController,"usuarios_admin");
				if ($respuesta == "success") {
						// header("location: registrar/success");
						echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=registrar/success'>";
				}else{
					echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					 			 <b>¡Ops!</b> Hubo un error verifique la informacion antes de volver a enviar el formulario.
					 			 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					   			 <span aria-hidden='true'>&times;</span>
					  		</button>
				   		</div>";
				}

				//Fin Codigo


			}else{
				echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					 			 <b>¡Ops!</b> Debes llenar todos los campos.
					 			 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					   			 <span aria-hidden='true'>&times;</span>
					  		</button>
				   		</div>";
			}

		}
	}

	public function validarDato($dato){
		$dato = trim($dato);
		$dato = strip_tags($dato);
		return $dato;
	}

	public function generaPass(){
	    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	    $longitudCadena=strlen($cadena);
	     
	    $pass = "";
	    $longitudPass=10;
	     
	    for($i=1 ; $i<=$longitudPass ; $i++){
	        $pos=rand(0,$longitudCadena-1);
	        $pass .= substr($cadena,$pos,1);
	    }
	    return $pass;
	}


	public function validarDocumentoController($dato){
		$respuesta = RegistrarModels::validarDocumentoModels($dato,"usuarios_admin");
		
		if ($respuesta != false) {
			echo "Ya hay un registro con la cedula: $dato";
		}
	}

}
?>