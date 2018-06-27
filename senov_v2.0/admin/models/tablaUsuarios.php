<?php 
require_once "conexion.php";

class TablaUsuariosModels
{
	public function getDatosModels($inicio,$post_por_pagina,$tabla){

		$stmt = Conexion::conectar()->prepare("
			SELECT SQL_CALC_FOUND_ROWS * FROM $tabla ORDER BY nombre ASC LIMIT $inicio, $post_por_pagina");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function numero_paginasModels($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM $tabla");
	    $stmt->execute();
	    return $stmt->fetch();
	}

	public function getDataAllFilterModels($datos,$tabla){

		$stmt = Conexion::conectar()->prepare("
			SELECT * FROM $tabla WHERE 
			documento = ? or 
			nombre = ? or 
			apellido = ? or 
			email = ? or 
			telefono = ? or 
			cargo = ? ");

		$stmt->bindParam(1, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(2, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(3, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(4, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(5, $datos["search"], PDO::PARAM_STR);
		$stmt->bindParam(6, $datos["search"], PDO::PARAM_STR);
		
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function getDataByFilterModels($dato,$tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $datos[filter] = ? ");
		$stmt->bindParam(1, $datos["search"], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function eliminarRegistroModels($dato,$tabla){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE documento = ?");
		$stmt->bindParam(1, $dato, PDO::PARAM_STR);
		if ($stmt->execute()) {
			return "success";
		}else{
			return "danger";
		}
	}

}


?>