<div class="container-fluid">

	<?php include_once "headerPanel.php"; ?>

	<div class="row">
		
		<?php include_once "barraLateral.php"; ?>

		<main class="col main col1">
			<div class="row justify-content-around">
				<div class="col-sm-12 col-md-4 mt-1 columna">
					<a href="registrar" title="Ir a Diligenciar Novedad" class="caja_iconos">
						<div>
							<h4>Registrar Usuario</h4>
							<span class="icon-v-card"></span>
						</div>
					</a>
				</div>

				<div class="col-sm-12 col-md-4 mt-1 columna">
					<a href="reportar" title="Ir a Diligenciar Novedad" class="caja_iconos">
						<div>
							<h4>Novedades sin Revisar</h4>
							<span class="">
								<?php 
									$inicio = new Inicio();
									$inicio->cantidadNovedades();

								?>
							</span>
						</div>
					</a>
				</div>

				<div class="col-sm-12 col-md-4 mt-1 columna">
					<a href="tablaUsuarios" title="Ir a Ver estado de Novedad" class="caja_iconos">
						<div>
							<h4>Ver lista de usuarios</h4>
							<span class="icon-magnifying-glass"></span>
						</div>
					</a>
				</div>
			</div>
		</main>
	</div>

</div>