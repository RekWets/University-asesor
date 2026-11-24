<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF - Modificar Docente - 
		<a href="?route=pnfTeachers&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=pnfTeachers&method=update" method="POST">
		<div class="form-group">
			<label for="pnf_id">PNF: * </label>
			<input type="text" name="pnf_id" id="pnf_id" class="form-control" readonly value="<?php echo $rows['pnf_id']; ?>">
		</div>
		<div class="form-group">
			<label for="docente_id">Docente: * </label>
			<input type="text" name="docente_id" id="docente_id" class="form-control" required value="<?php echo $rows['docente_id']; ?>">
		</div>
		<hr>
		<div class="form-group">
			<input type="hidden" name="pnf_id" value="<?php echo $rows['pnf_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>