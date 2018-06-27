<?php  
include_once "./config/config.php";

class Ingreso{

	public function ingresoController(){

		if (isset($_POST["nombreIngreso"]) && isset($_POST["passwordIngreso"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["nombreIngreso"]) && 
			   preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordIngreso"])){

				// $encriptar = crypt($_POST['passwordIngreso'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				
				if (!isset($_SESSION["intentos"])) {
					$_SESSION["intentos"] == 0;
				}
 				$con = new	Config();
				$admin_user = $con->get_admin_user(); 
				$maxIntentos = 2;

				if ($_SESSION["intentos"] < $maxIntentos){
					
					if($admin_user[0] == $_POST["nombreIngreso"] && 
					   $admin_user[1] == $_POST["passwordIngreso"]) {
	
						$_SESSION["intentos"] = 0;

						$_SESSION["validar"] = true;
						$_SESSION["usuario"] = $admin_user[0];

						header("location:inicio");

					}else{

						$_SESSION["intentos"]++;

						echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
							  <b>¡Error!</b> Usuario no valido.
							  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							    <span aria-hidden='true'>&times;</span>
							  </button>
							</div>";
					}

				}else{

					$_SESSION["intentos"] = 0;

					echo "<div class='alert alert-danger'>Ha superado el limite de intentos, demuestre que no es un robot</div>";
					// header("Location:index.php?action=fallo3intenos");

				}
			}
		}	


	}
}