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
				<a href="<?php echo $config->getSERVERURL(); ?>reportar" title="Ir a Diligenciar">
					<div class="barra"></div>
					<span>Reportar</span>
				</a>
			</li>
			<li>
				<a title="Ir a Estados" id="submenu-p">
					<div class="barra "></div>
					<span>Administracion <i class="icon-chevron-with-circle-down menu-d"></i></span>
				</a>
				<ul class="submenu-m" id="submenu-m">
					<li>
						<a href="<?php echo $config->getSERVERURL(); ?>registrar" title="Ir a Registrar">
							<span>Registrar</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $config->getSERVERURL(); ?>tablaUsuarios" title="Ir a Usuarios Registrados">
							<span>Usuarios Registrados</span>
						</a>
					</li>
				</ul>
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