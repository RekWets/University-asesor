<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Registrar Periodo -
		<a href="?route=period&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=period&method=store" method="POST">
		<div class="form-group">
			<label for="id">ID: * </label>
			<input type="text" name="id" id="id" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="trayecto">Trayecto: * </label>
			<input type="text" name="trayecto" id="trayecto" class="form-control" required>
		</div>
		<hr>
		<div class="form-group">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>