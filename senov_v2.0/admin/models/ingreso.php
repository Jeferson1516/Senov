<?php 

require_once "conexion.php";

class IngresoModels{

	public function ingresoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT documento, nombre, password, intentos FROM $tabla WHERE documento = ?");
		$stmt -> bindParam(1, $datosModel["documento"], PDO::PARAM_STR);	

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public function intentosModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = ? WHERE documento = ?");
		$stmt -> bindParam(1, $datosModel["actualizarIntentos"], PDO::PARAM_INT);	
		$stmt -> bindParam(2, $datosModel["documentoActual"], PDO::PARAM_STR);	

		if ($stmt->execute()) {
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();

	}
}