<div class="row header-panel">

	<div class="col-12 col-sm-12 col-md-2 logo">
		<span>SENOV</span>
		<i id="open" class="icon-menu"></i>
	</div>

	<div class="col-9 header-p">
		<?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true): ?>
			<select name="cambioDeAmbiente" class="cambioDeAmbiente">
				<option>Usuario</option>
				<option>Admin</option>
			</select>
		<?php endif ?>
	</div>
	
</div>