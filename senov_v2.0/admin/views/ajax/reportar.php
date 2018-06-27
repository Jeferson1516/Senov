<?php 
require_once "../../models/reportar.php";
require_once "../../controllers/reportar.php";


# CLASES y METODOS
#----------------------------------------------------

class Ajax{
	
	#VALIDAR DATOS
	#--------------------------
	public $nombre;
	public $apellido;
	public $email;
	public $telefono;
	public $ficha;
	public $tipo;
	public $estado;
	public $documento;

	public function actualizarEstadoAjax(){
		$datos = array("documento" => $this->documento,"estado" => $this->estado,);

		$respuesta = Reportar::actualizarEstado($datos);
		
		echo $respuesta;			
	}

	public function actualizarCamposNovedadAjax(){
		$datos = array(
			"nombre" => $this->nombre,
			"apellido" => $this->apellido,
			"email" => $this->email,
			"telefono" => $this->telefono,
			"ficha" => $this->ficha,
			"tipo" => $this->tipo,
			"estado" => $this->estado,
			"documento" => $this->documento);
		// print_r($datos);
		$respuesta = Reportar::actualizarCamposNovedad($datos);
		
		echo $respuesta;			
	}

}

# OBJETOS
#----------------------------------------------------

if (isset($_POST["documento"]) && isset($_POST["estado"])) {
	
	$a = new Ajax();
	$a->documento = $_POST["documento"];
	$a->estado = $_POST["estado"];
	$a->actualizarEstadoAjax();

}

if (isset($_POST["nombre"]) &&
isset($_POST["apellido"]) &&
isset($_POST["email"]) &&
isset($_POST["telefono"]) &&
isset($_POST["ficha"]) &&
isset($_POST["tipo"]) &&
isset($_POST["estado"]) &&
isset($_POST["documentoCampo"])) {

	$b = new Ajax();
	$b->nombre = $_POST["nombre"];
	$b->apellido = $_POST["apellido"];
	$b->email = $_POST["email"];
	$b->telefono = $_POST["telefono"];
	$b->ficha = $_POST["ficha"];
	$b->tipo = $_POST["tipo"];
	$b->estado = $_POST["estado"];
	$b->documento = $_POST["documentoCampo"];
	$b->actualizarCamposNovedadAjax();

}

