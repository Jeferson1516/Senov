<?php  

class Ingreso{

	public function ingresoController(){

		if (isset($_POST["documentoIngreso"]) && isset($_POST["passwordIngreso"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["documentoIngreso"]) && 
			   preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordIngreso"])){

				// $encriptar = crypt($_POST['passwordIngreso'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datosController = array(
					"documento" => $_POST["documentoIngreso"],
					"password" => $_POST["passwordIngreso"]);

				$respuesta = IngresoModels::ingresoModel($datosController, "usuarios_admin");

				// print_r($respuesta);
				$intentos = $respuesta["intentos"];
				$documentoActual = $respuesta["documento"];
				$maxIntentos = 2;

				if ($intentos < $maxIntentos){
					
					if($respuesta["documento"] == $_POST["documentoIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]) {

						$intentos = 0;

						$datosController = array(
							"documentoActual"=>$documentoActual,
							"actualizarIntentos" => $intentos
						);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios_admin");

						session_start();

						$_SESSION["validar"] = true;
						$_SESSION["usuario"] = $respuesta["nombre"];

						header("location:inicio");
					}else{

						++$intentos;

						$datosController = array(
							"documentoActual"=>$documentoActual,
							"actualizarIntentos" => $intentos
						);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios_admin");

						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							  <b>¡Error!</b> Al ingresar.
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							    <span aria-hidden='true'>&times;</span>
							  </button>
							</div>";
					}

				}else{

					$intentos = 0;

					$datosController = array(
						"documentoActual"=>$documentoActual,
						"actualizarIntentos" => $intentos
					);

					$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios_admin");

					echo "<div class='alert alert-danger'>Ha superado el limite de intentos, demuestre que no es un robot</div>";
					// header("Location:index.php?action=fallo3intenos");

				}
			}
		}	


	}
}