<?php 
	$config = new Config();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>					
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="<?php echo $config->getSERVERURL();
 ?>views/img/logo.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->getSERVERURL();
 ?>views/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->getSERVERURL();
 ?>views/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->getSERVERURL();
 ?>views/css/fonts/style.css">


	<title>SENOV</title>
</head>
<body>
	<!-- Contenido -->


	<?php 
		session_start();
		$modulos = new Enlaces();
		$modulos->enlacesController();	
	?>
	

	<!-- FIn Contenido -->
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/abrir.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/fileName.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/script.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/validacion_panel.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/validacionNuevaNovedad.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();
 ?>views/js/validarLogin.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();?>views/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $config->getSERVERURL();?>views/js/script.js"></script>

</body>
</html>	