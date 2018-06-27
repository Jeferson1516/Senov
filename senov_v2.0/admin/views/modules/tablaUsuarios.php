<?php $tablaUsuarios = new TablaUsuarios(); ?>
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
								<td colspan="2" class="busqueda"></td>
								<td colspan="5" class="busqueda">
									<form class="form-inline busqueda-container" method="post"> 
										<div class="block-note menu-nov-list">
											<?php 

											 $tablaUsuarios->listFilter();	

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
								<th>Cargo</th>
								<th></th>
							</tr>
								<?php 
								
									if (!isset($_POST["busquedaTabla"])) {
										$tablaUsuarios->getDatosController();	
									}else{
										$tablaUsuarios->getDataFilterController($_POST["filterTabla"],$_POST["busquedaTabla"]);
									}
								
								?>
									
						</table>
					</div>

						<!--  -->
<?php if (!isset($_POST["busquedaTabla"])): ?>
							
<?php $numero_paginas = $tablaUsuarios->numero_paginas();?>
<nav aria-label="Page navigation example">
  <ul class="pagination">

  	<?php if ($tablaUsuarios->pagina_actual() === 1): ?>
    <li class="page-item disabled"><a class="page-link">Anterior</a></li>
	<?php else: ?>
    <li class="page-item"><a class="page-link" href="<?php echo $tablaUsuarios->ruta."tablaUsuarios/"; echo $tablaUsuarios->pagina_actual() - 1?>">Anterior</a></li>
    <?php endif ?>	

    <?php  for ($i = 1; $i <= $numero_paginas; $i++): ?>

			<?php if ($tablaUsuarios->pagina_actual() === $i): ?>
				<li class="page-item disabled"><a class="page-link"><?php echo $i; ?></a></li>
			<?php else: ?>
				<li class="page-item"><a class="page-link" href="<?php echo $tablaUsuarios->ruta."tablaUsuarios/".$i; ?>"><?php echo $i; ?></a></li>	
			<?php endif; ?>

	<?php endfor; ?>

    <?php if ($tablaUsuarios->pagina_actual() == $numero_paginas): ?>
    <li class="page-item disabled"><a class="page-link">Siguente</a></li>
	<?php else: ?>
    <li class="page-item"><a class="page-link" href="<?php echo $tablaUsuarios->ruta."tablaUsuarios/"; echo $tablaUsuarios->pagina_actual() + 1?>">Siguente</a></li>
    <?php endif ?>
  </ul>
</nav>					
<?php endif ?>						







					<!--  -->
				</div>
			</div>
		</main>
	</div>
</div>