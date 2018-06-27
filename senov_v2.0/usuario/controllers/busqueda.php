<?php 

class Busqueda
{
	public function filterSearch(){
		if (isset($_POST["filterTabla"]) &&
			isset($_POST["busquedaTabla"])) {
			echo $_POST["filterTabla"] ."-".$_POST["busquedaTabla"];
		}
	}
}













?>