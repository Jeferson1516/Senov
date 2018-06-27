<?php 
$config = new Config();

if (!$_SESSION["validar"]) {
	header("location:ingreso");
}

?>
<div class="col-2 barra-lateral p-0">
	<nav id ="" class="menu-lateral">
		<ul>
			<li>
				<a href="<?php echo $config->getSERVERURL(); ?>inicio" title="Ir al Inicio">
					<div class="barra"></div>
					<span>Inicio</span>
				</a>
			</li>
			<li>
				<a href="<?php echo $config->getSERVERURL(); ?>nuevaNovedad" title="Ir a Diligenciar">
					<div class="barra"></div>
					<span>Nueva Novedad</span>
				</a>
			</li>
			<li>
				<a href="<?php echo $config->getSERVERURL(); ?>estadoNovedad" title="Ir a Estados">
					<div class="barra"></div>
					<span>Estados de Novedad</span>
				</a>
			</li>
			<li>
				<a href="<?php echo $config->getSERVERURL(); ?>salir" title="Salir">
					<div class="barra"></div>
					<span>Salir</span>
				</a>
			</li>
		</ul>
	</nav>
</div>