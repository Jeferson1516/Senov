<div class="container-fluid">

	<?php include_once "headerPanel.php"; ?>

	<div class="row">

		<?php include_once 'barraLateral.php'; ?>

		<main class="main col">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 mt-2 columna form_registro">
					<form method="post" class="form-registro" enctype="multipart/form-data" id="formNuevaNovedad">
						<div class="titulo_registro text-center">
							<span>Novedad</span>
						</div>

						<div class="text_info">
							<span>Informacion del aprendiz</span>
						</div>
						
						<div id="documentoNov">
							<div class="input-group my-3">
								<span class="input-group-addon" id="checkI"></span>
								<input type="text" class="form-control" placeholder="Documento" name="documentoNovedad" id="documentoNovedad" value="">
								<div id="smsDocumento" class=""></div>
							</div>
						</div>
						
						<div id="nombreNov">
							<div class="input-group my-3">
								<span class="input-group-addon" id="checkI"></span>
								<input type="text" class="form-control" placeholder="Nombre" name="nombreNovedad" id="nombreNovedad" value="">
								<div id="smsNombre" class=""></div>
							</div>
						</div>

						<div id="apellidoNov">
							<div class="input-group my-3">
								<span class="input-group-addon" id="checkI"></span>
								<input type="text" class="form-control" placeholder="Apellido" name="apellidoNovedad" id="apellidoNovedad" value="">
								<div id="smsApellido" class=""></div>
							</div>
						</div>
						
						<div id="emailNov">
							<div class="input-group my-3">
								<span class="input-group-addon" id="checkI"></span>
								<input type="text" class="form-control" placeholder="Correo" name="emailNovedad" id="emailNovedad" value="">
								<div id="smsEmail" class=""></div>
							</div>
						</div>

						<div id="telefonoNov">
							<div class="input-group my-3">
								<span class="input-group-addon" id="checkI"></span>
								<input type="text" class="form-control" placeholder="Telefono/Celular" name="telefonoNovedad" id="telefonoNovedad" value="">
								<div id="smsTelefono" class=""></div>
							</div>
						</div>

						<div id="fichaNov">
							<div class="input-group my-3">
								<select name="fichaNovedad" class="form-control" data-live-search="true" id="fichaNovedad">
									<option value="none" disabled selected>Ficha</option>
									<?php 
							
										$fichas = new NuevaNovedad();
										$fichas -> getFichas();
							
									?>
								</select>
								<div id="smsFicha" class=""></div>
							</div>
						</div>

						<div id="tipoNov">
							<div class="input-group my-3">
								<select name="tipoNovedad" class="form-control" data-live-search="true" id="tipoNovedad">
									<option value="null" disabled selected>Tipo de Novedad</option>
									<option value="aplazamineto">Aplazamineto</option>
									<option value="cambio-jornada">Cambio de jornada</option>
									<option value="cancelacion-matricula">Cancelación de matricula</option>
									<option value="desercion">Desercion</option>
									<option value="retiro-voluntario">Retiro Voluntario</option>
									<option value="traslado">Traslado</option>
								</select>
								<div id="smsTipo" class=""></div>
							</div>
						</div>

						<div id="fileNov">
							<div class="input-group my-4">
								<div class="fileInput">
									<label for="file1" class="btn-file icon-upload"></label>
									<div id="inputval" class="input-value"></div>
									<input id="file1" class="upload" type="file" name="fileNovedad">	
								</div>
								<div id="smsFile" class=""></div>
							</div>
						</div>


						<?php 

							$nuevaNovedad = new NuevaNovedad();
							$nuevaNovedad -> setDatosNovedadController();

						?>
	
						<div class="mb-4">
							<button class="btn btn-warning btn-block btn-lg botonregistro" title="Enviar Novedad" type="submit">Enviar</button>
						</div>
						
						<div id="alertNov" class='alert alert-danger alert-dismissible fade show' role='alert' style="display: none;">
				 			 
				   		</div>
						<!-- 
						<div>
							<span>¿No tienes el formato adecuado? <br><a href="listaNovedades.php" title="Ver Lista de Novedades">Ver lista de novedades</a></span>
						</div> -->
						<?php if (isset($_GET["estado"]) && $_GET["estado"] == "success"): ?>
						<script>
							alert("El usuario se registro con exito. ");
							setTimeout(function(){
								url = "http://localhost:8080/senov_v2.0/usuario/nuevaNovedad";
								$(location).attr('href',url);
							},1000);
						</script>	
					<?php endif ?>
					</form>
				</div>
			</div>
		</main>
	</div>
</div>
