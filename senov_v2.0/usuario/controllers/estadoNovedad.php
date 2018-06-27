<?php 

class EstadoNovedad
{
	public function getDatosController(){

		$respuesta = EstadoNovedadModels::getDatosModels("all_news");
		EstadoNovedad::printData($respuesta);

	}	

	public function getDataFilterController($filter = null,$search = null){
		$_SESSION["resultado"] = "0";
		switch ($filter) {
			case 'todo':
				$datos = array("search" => $search);
				$respuesta = EstadoNovedadModels::getDataAllFilterModels($datos,"all_news");
			break;
			
			default:
				$datos = array("filter" => $filter,"search" => $search);
				$respuesta = EstadoNovedadModels::getDataByFilterModels($datos,"all_news");
			break;
		}
		
		if(!empty($filter) && empty($search)){
			$respuesta = EstadoNovedadModels::getDatosModels("all_news");
		}

		if (empty($respuesta)) {
			echo "<tr>
				<td colspan='10'> <h4 class='text-muted'>No hay resultado</h4> </td>
			</tr>";
		}else{
			EstadoNovedad::printData($respuesta);
		}


	}

	public function printData($respuesta){

		foreach ($respuesta as $res){

			echo "<tr>
					<td>".	$res["documento"] 	."</td>
					<td>".	$res["nombre"] 		." ". $res["apellido"] ."</td>
					<td>".	$res["email"] 		."</td>
					<td>".	$res["telefono"] 	."</td>
					<td>".	$res["ficha"] 		."</td>
					<td>".  $res["tipo"]		."</td>
					<td>
						<a href='http://localhost:8080/senov_v2.0/files/download.php?doc=".$res['acta']."'><span class='icon-download'>"." ".substr($res['acta'],7)."</span></a>
					</td>
					<td>".	$res['fecha']		."</td>";

					if ($res['estado'] == 1) {

						echo "<td>"."<span class='text-muted'>En tramite...</span>"."</td>";

					}else 

					if($res['estado'] == 2){

						echo "<td>"."<span class='text-success'>Aprobado</span>"."</td>";

					}else 

					if($res['estado'] == 3){

						echo "<td>"."<span class='text-danger'>No aprobado</span>"."</td>";

					}
			echo "</tr>";
		}

	}

	public function listFilter(){
		$filters = array("documento","nombre","tipo","estado","fecha");
		echo '<select name="filterTabla" class="menu-busqueda">';
		echo '<option value="todo" selected>Buscar en todo...</option>';
		foreach ($filters as $filter) {

			if (isset($_POST["filterTabla"]) && $_POST["filterTabla"] == $filter) {
				echo '<option value="'.$filter.'" selected>'.ucwords(strtolower($filter)).'</option>';
			}else{
				echo '<option value="'.$filter.'">'.ucwords(strtolower($filter)).'</option>';
			}
		}
		echo '</select>';
	}	

	

}



?>