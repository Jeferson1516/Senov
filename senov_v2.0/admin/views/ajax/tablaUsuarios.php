<?php 
require_once "../../models/tablaUsuarios.php";
require_once "../../controllers/tablaUsuarios.php";


# CLASES y METODOS
#----------------------------------------------------

class Ajax{
	
	#VALIDAR DATOS
	#--------------------------
	public $documento;

	public function eliminarRegistro(){
		$datos = $this->documento;

		$respuesta = TablaUsuarios::eliminarRegistro($datos);
		
		echo $respuesta;			
	}

}

# OBJETOS
#----------------------------------------------------

if (isset($_POST["documento"])) {
	
	$a = new Ajax();
	$a->documento = $_POST["documento"];
	$a->eliminarRegistro();

}



