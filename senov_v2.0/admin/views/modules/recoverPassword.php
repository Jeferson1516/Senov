<div class="container">
	<div class="caja_form row justify-content-center">

		<div class="col-sm-12 col-md-6">

			<form class="form-ingreso" method="post">

				<div class="tit-ingreso text-center">
					<span>Recuperar Contraseña</span>
				</div>

				<div class="content-form">

					<div class="input-group my-3">
						<span class="input-group-addon icon-user"></span>
						<input type="text" class="form-control" placeholder="Documento" name="documentoIngreso" id="documento" value="<?php if(isset($_POST["documentoIngreso"])){echo $_POST["documentoIngreso"];} ?>">
					</div>
					

					<div class="mb-3">
						<button class="btn btnadminlogin btn-block btn-lg" type="submit">Enviar</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>


