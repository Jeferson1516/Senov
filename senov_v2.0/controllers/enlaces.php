<?php 

class Enlaces{
	
	function enlacesController(){
	
		if(isset($_GET["action"])){
			
			$enlaces = $_GET["action"];	

		}else{

			$enlaces = "index";	

		}

		$respuesta = EnlacesModels::enlacesPaginasModel($enlaces);

		include $respuesta;
	}
}