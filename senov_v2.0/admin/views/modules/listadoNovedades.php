<div class="container-fluid">

	<?php include_once "headerPanel.php"; ?>

	<div class="row">

		<?php include_once "barraLateral.php";?>

		<main class="main col">
			<div class="row my-5 mx-5">
				<div class="col-12">
					<table class="tabla_formato_novedades table table-sm table-striped table-hover">
						<thead class="thead-inverse">
							<tr>
								<th><span class="icon-clipboard"></span>Archivos</th>
								<th align="right">Descargar</th>
							</tr>
						</thead>
						<tbody>
							<!-- <?php foreach ($formatos as $formato): ?>
								<tr>
									<td>
										<span class="icon-text-document"></span>
										<a href="formularios/formatos/descargar.php?doc=<?php echo $formato['enlace_formato'] ?>"><?php echo $formato['nombre_novedad']; ?></a>
									</td>
									<td align="left" class="botones_form">
										<a href="formularios/formatos/descargar.php?doc=<?php echo $formato['enlace_formato'] ?>" class="btn btn-warning"><span class="icon-download"></span></a>	
									</td>
								</tr>
							<?php endforeach ?> -->
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</div>
</div>
