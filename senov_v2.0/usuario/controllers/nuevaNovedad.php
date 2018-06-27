<?php 

class NuevaNovedad
{
	public function setDatosNovedadController()
	{	
		// echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=nuevaNovedad?v=0'>";
		if (isset($_POST["documentoNovedad"])) {

			if (!empty($_POST["documentoNovedad"])	&& 
				!empty($_POST["nombreNovedad"])		&&
				!empty($_POST["apellidoNovedad"])	&&
				!empty($_POST["emailNovedad"])		&&
				!empty($_POST["telefonoNovedad"])	&&
				!empty($_POST["fichaNovedad"])		&&
				!empty($_FILES["fileNovedad"])){

				//Codigo
				$fechaActual = date('Y-m-d');
				$estado = "1";
				$tipo = NuevaNovedad::getEstado($_POST["tipoNovedad"]);
				$nombreArchivo = NuevaNovedad::generarNombreArchivo($_FILES["fileNovedad"]['name']);

				$nombre = NuevaNovedad::validarDato($_POST["nombreNovedad"]);
				$nombre = strtolower($nombre);
				$nombre = ucwords($nombre);

				$apellido = NuevaNovedad::validarDato($_POST["apellidoNovedad"]);
				$apellido = strtolower($apellido);
				$apellido = ucwords($apellido);


				$datosController = array(
					"documento" 	=> $_POST["documentoNovedad"],
					"nombre" 		=> $nombre,
					"apellido" 		=> $apellido,
					"email" 		=> $_POST["emailNovedad"],
					"telefono" 		=> $_POST["telefonoNovedad"],
					"ficha" 		=> $_POST["fichaNovedad"],
					"fileNovedad" 	=> $nombreArchivo,	
					"fechaActual" 	=> $fechaActual,	
					"tipoNovedad" 	=> $tipo,	
					"estado" 		=> $estado);


				$respuesta = NuevaNovedadModels::setDatosNovedadModels($datosController,"all_news");
				
				if ($respuesta == "success") {

					$subirArchivo = NuevaNovedad::subirArchivoNovedad($_FILES["fileNovedad"]["tmp_name"],$nombreArchivo);

					if ($subirArchivo) {

						// header("location: nuevaNovedad/success");
						echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=nuevaNovedad/success'>";

					}else{
						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
					 			 <b>¡Ops!</b> Error al Subir el archivo.
					 			 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					   			 <span aria-hidden='true'>&times;</span>
					  		</button>
				   		</div>";
					}

					
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

	public function generarNombreArchivo($archivo){
		
		do {

			$prefijo = substr(md5(uniqid(rand())),0,6);
			$nombreArchivo = $prefijo."_".$archivo;
			$respuesta = NuevaNovedadModels::generarNombreArchivoModels($nombreArchivo,"all_news");

		} while (!empty($respuesta));

		return $nombreArchivo;
	}

	public function subirArchivoNovedad($archivoTmp,$archivoName){

		$RUTA_DESTINO_FILE = "./../files/$archivoName";
		if (move_uploaded_file($archivoTmp, $RUTA_DESTINO_FILE)) {
			return true;
		}else{
			return false;
		}
	}

	public function getEstado($estado){
		if ($estado == "aplazamineto") {
			return "aplazamineto";

		}else if($estado == "cambio-jornada"){
			return "cambiojornada";

		}else if($estado == "cancelacion-matricula"){
			return "cancelacionmatricula";

		}else if($estado == "desercion"){
			return "deserciones";

		}else if($estado == "retiro-voluntario"){
			return "retirovoluntario ";
			
		}else if($estado == "traslado"){
			return "traslado";

		}

	}

	public function getFichas(){
		$myfile = fopen("./files/fichas.txt", "r") or die("Unable to open file!");

		while(!feof($myfile)) {
			$nameFicha = fgets($myfile);
			echo "<option value=\"".$nameFicha."\">".$nameFicha."</option>";
		}

		fclose($myfile);
	}

	public function validarDocumentoController($dato){
		$respuesta = NuevaNovedadModels::validarDocumentoModels($dato,"all_news");
		
		if ($respuesta != false) {
			echo "Ya hay un registro con la cedula: $dato";
		}
	}

}
?>