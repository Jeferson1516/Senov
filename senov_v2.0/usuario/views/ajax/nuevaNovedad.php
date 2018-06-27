<?php 
require_once "../../models/nuevaNovedad.php";
require_once "../../controllers/nuevaNovedad.php";


# CLASES y METODOS
#----------------------------------------------------

class Ajax{
	
	#VALIDAR DATOS
	#--------------------------
	public $documento;

	public function validarDocumentoAjax(){
		$dato = $this->documento;

		$respuesta = NuevaNovedad::validarDocumentoController($dato);
		
		echo $respuesta;			
	}

}

# OBJETOS
#----------------------------------------------------

if (isset($_POST["documento"])) {
	
	$a = new Ajax();
	$a->documento = $_POST["documento"];
	$a->validarDocumentoAjax();

}