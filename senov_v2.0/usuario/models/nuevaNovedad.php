<?php 

require_once "conexion.php";

class NuevaNovedadModels
{
	public function setDatosNovedadModels($datosModels,$tabla)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla VALUES (?,?,?,?,?,?,?,?,?,?)");

		$stmt->bindParam(1, $datosModels["documento"], 		PDO::PARAM_STR);
		$stmt->bindParam(2, $datosModels["nombre"], 		PDO::PARAM_STR);
		$stmt->bindParam(3, $datosModels["apellido"], 		PDO::PARAM_STR);
		$stmt->bindParam(4, $datosModels["email"],			PDO::PARAM_STR);
		$stmt->bindParam(5, $datosModels["telefono"], 		PDO::PARAM_STR);
		$stmt->bindParam(6, $datosModels["ficha"], 			PDO::PARAM_STR);
		$stmt->bindParam(7, $datosModels["tipoNovedad"], 	PDO::PARAM_STR);
		$stmt->bindParam(8, $datosModels["fileNovedad"], 	PDO::PARAM_STR);
		$stmt->bindParam(9, $datosModels["fechaActual"], 	PDO::PARAM_STR);
		$stmt->bindParam(10, $datosModels["estado"], 		PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "success";
		}else{
			return "error";
		}

		$stmt->close();

	}

	public function validarDocumentoModels($dato,$tabla){
		$stmt = Conexion::conectar()->prepare("SELECT documento FROM $tabla WHERE documento = ?");
		$stmt->bindParam(1, $dato, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();	
	}

	public function generarNombreArchivoModels($nombreArchivo,$tabla){
		$stmt = Conexion::conectar()->prepare("SELECT acta FROM $tabla WHERE acta = ?");
		$stmt->bindParam(1, $nombreArchivo, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();
	}

}
?>