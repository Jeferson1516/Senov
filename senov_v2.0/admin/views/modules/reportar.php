<?php $registro = new Reportar(); ?>
<div class="container-fluid">
	
	<?php include_once "headerPanel.php"; ?>

	<div class="row">
		
		<?php include_once "barraLateral.php";?>
		<main class="main col">
			<div class="row ml-1">
				<div class="col-12 mr-3">
					<div class="table-responsive tabla-nov" id="tabla-p">
						<table class="table table-striped table-hover tabla table-condensed">
							<tr>
								<td colspan="5" class="busqueda"></td>
								<td colspan="5" class="busqueda">
									<form class="form-inline busqueda-container" method="post"> 
										<div class="block-note menu-nov-list">
											<?php 

												$registro->listFilter();	

											?>
										</div>
										<div class="block-note input-buscar">
											<input type="text" name="busquedaTabla" id="busqueda" placeholder="<?php echo (isset($_POST["busquedaTabla"])) ? ucwords(strtolower($_POST["filterTabla"])) : "Busqueda...";  ?>">
											<button class="icon-magnifying-glass button-glass" type="submit"></button>
										</div>
									</form>
								</td>
							</tr>
							<tr class="headerTable">
								<th>Identificación</th>
								<th>Nombre completo</th>
								<th>Correo</th>
								<th>Tel / Cel</th>
								<th>Ficha</th>
								<th>Tipo</th>
								<th>Acta</th>
								<th>Fecha</th>
								<th>Estado</th>
							</tr>
								<?php 
								
									if (!isset($_POST["busquedaTabla"])) {
										$registro->getDatosController();	
									}else{
										$registro->getDataFilterController($_POST["filterTabla"],$_POST["busquedaTabla"]);
									}
								
								?>
									
						</table>
					</div>

				</div>
			</div>
		</main>
	</div>
</div>