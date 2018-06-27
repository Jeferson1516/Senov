<?php 

class EnlacesModels{
	
	function enlacesPaginasModel($enlaces){
		
		if ($enlaces == "inicio" ||
			$enlaces == "nuevaNovedad" ||
			$enlaces == "estadoNovedad" ||
			$enlaces == "ingreso" ||
			$enlaces == "salir"){
			
			$module = "views/modules/".$enlaces.".php";

		}else if($enlaces == "index"){
		
			$module = "views/modules/ingreso.php";
		
		}else if($enlaces == "recuperarC"){
		
			$module = "views/modules/recoverPassword.php";
		
		}else{

			$module = "views/modules/ingreso.php";
		
		}
		return $module;

	}
}