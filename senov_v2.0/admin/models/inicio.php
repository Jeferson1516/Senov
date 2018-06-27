<?php 
require_once "conexion.php";

class InicioModels{

	public function cantidadNovedadesModels($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM $tabla WHERE estado = 1");
	    $stmt->execute();
	    return $stmt->fetch();
	}

}


