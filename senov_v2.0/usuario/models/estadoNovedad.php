<?php 
require_once "conexion.php";

class EstadoNovedadModels
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
}


?>