<?php 
require_once "controllers/template.php";
require_once "controllers/ingreso.php";
require_once "controllers/enlaces.php";
require_once "controllers/estadoNovedad.php";
require_once "controllers/nuevaNovedad.php";
require_once "controllers/busqueda.php";

require_once "models/ingreso.php";
require_once "models/enlaces.php";
require_once "models/estadoNovedad.php";
require_once "models/nuevaNovedad.php";
require_once "models/busqueda.php";

require_once "config/config.php";



$template = new TemplateController();
$template -> template();

?>