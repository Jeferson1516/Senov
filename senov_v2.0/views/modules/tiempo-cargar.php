<div class="fonto-loading">
	<img src="http://localhost:8080/senov_v2.0/views/img/load3.gif">
</div>
<?php
ob_start(); 
session_start();

if ($_GET["estado"] == "admin") {
	if (isset($_SESSION["validar"])) {
		if (!isset($_SESSION["admin"])) {
			$_SESSION["admin"] = true;
		}

		if (isset($_SESSION["admin"])) {
			// header("location: http://localhost/senov_v2.0/loading/admin");
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://localhost:8080/senov_v2.0/usuario/inicio">';

		}
	}
}else if($_GET["estado"] == "user"){
	if (!isset($_SESSION["admin"])) {
			$_SESSION["admin"] = true;
		}

		if (isset($_SESSION["admin"])) {
			// header("location: http://localhost/senov_v2.0/loading/admin");
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://localhost:8080/senov_v2.0/admin/inicio">';

		}
}

ob_end_flush();



?>