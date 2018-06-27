<?php 
require_once "conexion.php";

class ReportarModels
{
	public function getDatosModels($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY estado ASC");
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function getDataAllFilterModels($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("
			SELECT * FROM $tabla WHERE 
			documento = ? or 
			nombre = ? or 
			apellido = ? or 
			email = ? or 
			telefono = ? or 
			ficha = ? or 
			tipo = ? or 
			acta = ? or 
			fecha = ? or 
			estado = ? ");

		$stmt->bindParam(1, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(2, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(3, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(4, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(5, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(6, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(7, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(8, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(9, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(10, $datos["search"], PDO::PARAM_STR);
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function getDataByFilterModels($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $datos[filter] = ? ");
		$stmt->bindParam(1, $datos["search"], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function actualizarEstadoModels($datos,$tabla){
		$stmt = Conexion::conectar()->prepare("
			UPDATE $tabla
			SET estado = ?
			WHERE documento = ?");

		$stmt->bindParam(1, $datos["estado"], PDO::PARAM_STR);				
		$stmt->bindParam(2, $datos["documento"], PDO::PARAM_STR);				

		if ($stmt->execute()) {
			return "success";
		}else{
			return "danger";
		}

		$stmt->close();
	}

	public function actualizarCamposNovedadModels($datos,$tabla){
		$stmt = Conexion::conectar()->prepare("
			UPDATE $tabla
			SET 
			nombre = ?,
			apellido = ?,
			email = ?,
			telefono = ?,
			ficha = ?,
			tipo = ?,
			estado = ?
			WHERE documento = ?");

		$stmt->bindParam(1, $datos["nombre"], PDO::PARAM_STR);				
		$stmt->bindParam(2, $datos["apellido"], PDO::PARAM_STR);				
		$stmt->bindParam(3, $datos["email"], PDO::PARAM_STR);				
		$stmt->bindParam(4, $datos["telefono"], PDO::PARAM_STR);				
		$stmt->bindParam(5, $datos["ficha"], PDO::PARAM_STR);				
		$stmt->bindParam(6, $datos["tipo"], PDO::PARAM_STR);				
		$stmt->bindParam(7, $datos["estado"], PDO::PARAM_STR);				
		$stmt->bindParam(8, $datos["documento"], PDO::PARAM_STR);				

		if ($stmt->execute()) {
			return "success";
		}else{
			return "danger";
		}

		$stmt->close();
	}
}


?>