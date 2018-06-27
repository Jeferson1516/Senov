<?php 

class EnlacesModels{
	
	function enlacesPaginasModel($enlaces){
		
		if ($enlaces == "inicio" ||
			$enlaces == "reportar" ||
			$enlaces == "estadoNovedad" ||
			$enlaces == "ingreso" ||
			$enlaces == "registrar" ||
			$enlaces == "tablaUsuarios" ||
			$enlaces == "salir"){
			
			$module = "views/modules/".$enlaces.".php";

		}else if($enlaces == "index"){
		
			$module = "views/modules/inicio.php";
		
		}else if($enlaces == "recuperarC"){
		
			$module = "views/modules/recoverPassword.php";
		
		}else{

			$module = "views/modules/inicio.php";
		
		}
		return $module;

	}
}