<?php 
session_start();
$_SESSION["usuario"] = array();
$_SESSION["validar"] = array();
session_destroy();
header("location:ingreso");
?>