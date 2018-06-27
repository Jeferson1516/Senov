<?php 

class EnlacesModels{
	
	function enlacesPaginasModel($enlaces){
		
		if ($enlaces == "inicio"){
			
			$module = "views/modules/".$enlaces.".php";

		}else if($enlaces == "index"){
		
			$module = "views/modules/inicio.php";
		
		}else if($enlaces == "novedades"){

			$module = "views/modules/infoNovedades.php";
		
		}else if($enlaces == "acceder"){
			header("location: usuario/ingreso");
		}else if($enlaces == "loading"){
			$module = "views/modules/tiempo-cargar.php";
		}

		return $module;

	}
}