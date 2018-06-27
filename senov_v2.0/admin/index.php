<?php 
require_once "controllers/template.php";
require_once "controllers/ingreso.php";
require_once "controllers/enlaces.php";
require_once "controllers/reportar.php";
require_once "controllers/registrar.php";
require_once "controllers/tablaUsuarios.php";
require_once "controllers/inicio.php";

require_once "models/ingreso.php";
require_once "models/enlaces.php";
require_once "models/reportar.php";
require_once "models/registrar.php";
require_once "models/tablaUsuarios.php";
require_once "models/inicio.php";

require_once "config/config.php";



$template = new TemplateController();
$template -> template();

?>