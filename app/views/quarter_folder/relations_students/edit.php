<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trimestre - Modificar Estudiante - 
		<a href="?route=quarterStudents&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=quarterStudents&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="nombres">Nombres del Estudiante: * </label>
			<input type="text" name="nombres" id="nombres" class="form-control" readonly value="<?php echo $rows['nombres']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="apellidos">Estudiante: * </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" readonly value="<?php echo $rows['apellidos']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="trimestre_id">Trimestre: * </label>
			<select name="trimestre_id" id="trimestre_id" class="form-control" required value="<?php echo $rows['descripcion']; ?>">
				<option></option>
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<input type="hidden" name="estudiante_id" value="<?php echo $rows['estudiante_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>