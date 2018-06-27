<?php 

class Inicio{

	public function cantidadNovedades(){
		$respuesta = InicioModels::cantidadNovedadesModels("all_news");
		echo (!empty($respuesta)) ? $respuesta[0] : 0;
	}
	
}







