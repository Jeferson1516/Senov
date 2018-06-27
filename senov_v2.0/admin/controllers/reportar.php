<?php 

class Reportar
{
	public function getDatosController(){

		$respuesta = ReportarModels::getDatosModels("all_news");
		Reportar::printData($respuesta);

	}	

	public function getDataFilterController($filter = null,$search = null){
		$_SESSION["resultado"] = "0";
		switch ($filter) {
			case 'todo':
				$datos = array("search" => $search);
				$respuesta = ReportarModels::getDataAllFilterModels($datos,"all_news");
			break;
			
			default:
				$datos = array("filter" => $filter,"search" => $search);
				$respuesta = ReportarModels::getDataByFilterModels($datos,"all_news");
			break;
		}
		
		if(!empty($filter) && empty($search)){
			$respuesta = ReportarModels::getDatosModels("all_news");
		}

		if (empty($respuesta)) {
			echo "<tr>
				<td colspan='10'> <h4 class='text-muted'>No hay resultado</h4> </td>
			</tr>";
		}else{
			Reportar::printData($respuesta);
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

						echo "<td>"."
						<input type='hidden' name='doc' value='".$res["documento"]."'>
						<button class='btn btn-success icon-check check-nov'></button>
						<button class='btn btn-danger icon-cross cross-nov'></button>
						"."</td>";

					}else 

					if($res['estado'] == 2){

						echo "<td>"."
						<input type='hidden' name='doc' value='".$res["documento"]."'>
						<span class='text-success'>Aprobado</span>
						<button class='btn btn-info icon-cog modify-nov'></button>
						"."</td>";

					}else 

					if($res['estado'] == 3){

						echo "<td>"."
						<input type='hidden' name='doc' value='".$res["documento"]."'>
						<span class='text-danger'>No aprobado</span>
						<button class='btn btn-info icon-cog modify-nov'></button>
						"."</td>";

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

	public function actualizarEstado($datos){
		$respuesta = ReportarModels::actualizarEstadoModels($datos,"all_news");
		return $respuesta;
	}

	public function actualizarCamposNovedad($datos){
		$respuesta = ReportarModels::actualizarCamposNovedadModels($datos,"all_news");
		return $respuesta;
	}

	

}



?>