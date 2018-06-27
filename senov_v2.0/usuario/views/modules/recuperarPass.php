<div class="container">
		<div class="caja_form row justify-content-center">
			<div class="formulario col-sm-12 col-md-6 col-lg-5 columna_form_registro">

				<form class="form-registro" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onsubmit="return validarLogin()">
						<div class="titulo_registro text-center">
						<span>Recuperar Contraseña</span>
						</div>
					<?php if (!isset($success)): ?>

						<div class="input-group my-3">
							<span class="input-group-addon mr-2">Documento</span>
							<input type="text" class="form-control" placeholder="Documento" name="documento" id="documento">
						</div>
					<?php endif ?>
					
					<?php if (isset($errores) && $errores != ''): ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<b>Espera!</b><br><span><?php echo $errores; ?></span>
						</div>
					<?php endif ?>
					<?php if (isset($success)): ?>
						<div class="alert alert-success alert-dismissible">
							<b>Enhorabuena!</b><br><span><?php echo $success; ?></span>
						</div>
					<?php endif ?>

					<?php if (isset($success)): ?>
						<div class="mb-3">
						<a href="https://www.gmail.com" target="_blank" class="btn btnadminlogin btn-block btn-lg">ir al correo</a>
						</div>
					<?php else: ?>
						<div class="mb-3">
						<button class="btn btnadminlogin btn-block btn-lg" type="submit">Enviar</button>
						</div>
					<?php endif ?>
						<div class="enlace_cN">
							<a href="index.php">Volver al inicio</a>
						</div>
				</form>

			</div>
		</div>
</div>