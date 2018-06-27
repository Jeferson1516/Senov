<style>
	.bg-green-low{
		background: #A2FFC2 !important;
	}

	.container-alert{
		z-index: 100;
		position: fixed;
		left: 40%;
		top: 40%;
		margin-top: -75px;
			margin-left: -75px;
		max-width: 500px !important;
		min-width: 500px;
		border-radius: 10px;
	}

	.btn-ok{
		background: #fff;
		border: 2px solid #43BF40;
		padding: 5px 15px;
		color: #43BF40;
		font-weight: bold;
		border-radius: 5px;
		cursor: pointer;
		margin: 5px;
	}

	.btn-ok:hover{
		transition: all ease 300ms;
		background: #43BF40;
		border: 2px solid #fff;
		color: #fff;
	}

	.filter-dark-low{
		z-index: 50;
		background-color:rgba(0,0,0,0.3);
		width: 100%;
		min-height: 100%;
		height: auto !important;
		position: fixed;
		top:0; 
		left:0;
	}

	#filderDark{display: none;}
	#myAlert{display: none;}
</style>
<div class="filter-dark-low" id="filderDark"></div>

<div class="container-alert" id="myAlert">
	<div class="row bg-primary">
		<div class="col">

			<div class="row bg-success">
				<div class="col">
					<h2 class="text-white">Mensaje</h2>
				</div>
				<div class="col">
					<button id="closeAlertX" class="btn btn-success btn-outline float-right">x</button>
				</div>
			</div>
			<div class="row bg-green-low h-75">
				<div class="col p-3" id="Texto-Alerta">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit mollitia, ipsam sit et sunt alias.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col bg-success">
					<button id="closeAlertOk" class="float-right btn-ok">¡Ok!</button>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Titulo</h2>
			<button class="btn btn-primary" id="openAlert">¡Click Me!</button>
		</div>
	</div>
</div>