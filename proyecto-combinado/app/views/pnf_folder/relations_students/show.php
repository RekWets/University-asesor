<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF - Detalles - 
		<a href="?route=pnfStudents&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=analyst&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="pnf_id">ID: </label>
			<input type="text" name="pnf_id" id="pnf_id" class="form-control" readonly value="<?php echo $rows['pnf_id']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="estudiante_id">Estudiante: </label>
			<input type="text" name="estudiante_id" id="estudiante_id" class="form-control" readonly value="<?php echo $rows['estudiante_id']; ?>">
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>