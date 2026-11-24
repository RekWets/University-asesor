<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/quarter.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/students.php");?>
<section class="container">
	<h2>Nuevo Lapso Academico
		<a href="?route=quarter&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=pnf&method=store" method="POST">
		<div class="col-md-4 my-2">
			<label for="descripcion">Lapso</label>
			<input type="text" name="descripcion" id="descripcion" class="form-control" required placeholder="Añade algún dato...">
		</div>
<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>