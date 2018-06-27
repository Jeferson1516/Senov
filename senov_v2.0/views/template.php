<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>					
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="http://localhost:8080/senov_v2.0/img/logo.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/senov_v2.0/views/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/senov_v2.0/views/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/senov_v2.0/views/css/fonts/style.css">
	<title>SENOV</title>
</head>
<body>
	<!-- ====================================
					NAVEGACION
	====================================== -->


	<?php include "modules/navegacion.php"; ?>

	<!-- ===========FIN NAVEGACION============== -->

	<!-- ====================================
					CONTENIDO
	====================================== -->

	<?php 
		$enlace = new Enlaces();
		$enlace->enlacesController();	
	?>

	<!-- ===========FIN CONTENIDO============== -->

	<?php include "modules/creditos.php"; ?>

	<script type="text/javascript" src="http://localhost:8080/senov_v2.0/views/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:8080/senov_v2.0/views/js/validacion_panel.js"></script>
	<script type="text/javascript" src="http://localhost:8080/senov_v2.0/views/js/validarLogin.js"></script>
	<script type="text/javascript" src="http://localhost:8080/senov_v2.0/views/js/bootstrap.min.js"></script>
</body>
</html>	