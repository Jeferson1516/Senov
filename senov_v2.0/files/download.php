<?php
if (isset($_GET['doc'])) {	
	$doc = $_GET['doc'];
	if (file_exists($doc)) {
		header("Content-disposition: attachment; filename= $doc");
		header("Content-type: application/msword");
		readfile("$doc");
	}else{
		header("Location: ../usuario/estadoNovedad/nofile");
	}
}
?>