<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF - Registrar -
		<a href="?route=pnfTeachers&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=pnfTeachers&method=store" method="POST">
		<div class="form-group">
			<label for="pnf_id">PNF: * </label>
			<input type="text" name="pnf_id" id="pnf_id" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="docente_id">Docente: * </label>
			<input type="text" name="docente_id" id="docente_id" class="form-control" required>
		</div>
		<hr>
		<div class="form-group">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>