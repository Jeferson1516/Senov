<div class="container">
	<div class="caja_form row justify-content-center">

		<div class="col-sm-12 col-md-6">

			<form class="form-ingreso" method="post">

				<div class="tit-ingreso text-center">
					<span>Login</span>
				</div>

				<div class="content-form">

					<div class="input-group my-3">
						<span class="input-group-addon icon-user"></span>
						<input type="text" class="form-control" placeholder="Documento" name="nombreIngreso" id="documento" value="<?php if(isset($_POST["documentoIngreso"])){echo $_POST["documentoIngreso"];} ?>">
					</div>
					
					<div class="input-group my-3">
						<span class="input-group-addon icon-key"></span>
						<input type="password" class="form-control" placeholder="Contraseña" name="passwordIngreso" id="password">
					</div>
						<?php
							$ingreso = new Ingreso();
							$ingreso->ingresoController();
						?>
					<div class="mb-3">
						<button class="btn btnadminlogin btn-block btn-lg" type="submit">Enviar</button>
					</div>
					<div class="enlace_cN">
						<a href="recuperarC">¿Olvido su contraseña?</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


