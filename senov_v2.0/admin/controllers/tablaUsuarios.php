<?php 
include_once './config/config.php';

class TablaUsuarios
{	
	public $post_por_pagina = 5; 
	public $ruta;

	public function __construct(){
		$c = new Config();
		$this->ruta = $c->getSERVERURL();
	} 

	// public function getDatosController(){

	// 	$respuesta = TablaUsuariosModels::getDatosModels("usuarios_admin");
	// 	TablaUsuarios::printData($respuesta);

	// }	

	public function getDataFilterController($filter = null,$search = null){
		switch ($filter) {
			case 'todo':
				$datos = array("search" => $search);
				$respuesta = TablaUsuariosModels::getDataAllFilterModels($datos,"usuarios_admin");
			break;
			
			default:
				$datos = array("filter" => $filter,"search" => $search);
				$respuesta = TablaUsuariosModels::getDataByFilterModels($datos,"usuarios_admin");
			break;
		}
		
		if(!empty($filter) && empty($search)){
			header("Location: $this->ruta/tablaUsuarios");
		}else if (empty($respuesta)) {
			echo "<tr>
				<td colspan='10'> <h4 class='text-muted'>No hay resultado</h4> </td>
			</tr>";
		}else{
			TablaUsuarios::printData($respuesta);
		}
	}

	public function printData($respuesta){

		foreach ($respuesta as $res){

			echo "<tr>
					<td>".	$res["documento"] 	."</td>
					<td>".	$res["nombre"] 		." ". $res["apellido"] ."</td>
					<td>".	$res["email"] 		."</td>
					<td>".	$res["telefono"] 	."</td>
					<td>";	
					if($res["cargo"] == "1") {
						echo "Instructor";
					}else{
						echo "Apoyo administrativo";
					} 		
					echo "</td>
					<td>
					<input type='hidden' value='".$res["documento"]."'>
					<button class='icon-trash'></button>
					</td>";

			echo "</tr>";

		}
	}

	public function listFilter(){
		$filters = array("documento","nombre","correo","telefono","cargo");
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
		$respuesta = TablaUsuariosModels::actualizarEstadoModels($datos,"usuarios_admin");
		return $respuesta;
	}

	public function actualizarCamposNovedad($datos){
		$respuesta = TablaUsuariosModels::actualizarCamposNovedadModels($datos,"usuarios_admin");
		return $respuesta;
	}

	public function getDatosController(){
	    $paginaActual = TablaUsuarios::pagina_actual();
	    $limitePagina = TablaUsuarios::numero_paginas();

	    if ($paginaActual <= $limitePagina) {
	    	
	    $inicio = ($paginaActual > 1) ? $paginaActual * $this->post_por_pagina - $this->post_por_pagina : 0;
	    
	    }else{
	    	$inicio = 0;
	    }

	    // echo $inicio." - ".$paginaActual." - ".$limitePagina;

	    $respuesta = TablaUsuariosModels::getDatosModels($inicio,$this->post_por_pagina,"usuarios_admin");

	    TablaUsuarios::printData($respuesta);
	}

	public function pagina_actual(){
	    return isset($_GET['estado']) ? (int)$_GET['estado'] : 1;
	}

	public function numero_paginas(){
	    $total_registros = TablaUsuariosModels::numero_paginasModels('usuarios_admin');
	    $numero_paginas = ceil($total_registros[0] / $this->post_por_pagina);
	    return $numero_paginas;
	}

	public function eliminarRegistro($dato){
		$respuesta = TablaUsuariosModels::eliminarRegistroModels($dato,"usuarios_admin");
		return $respuesta;
	}
	

}



?>