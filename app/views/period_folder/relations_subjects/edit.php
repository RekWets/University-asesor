<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trayecto - Unidad Curricular - Modificar - 
		<a href="?route=periodSubjects&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=periodSubjects&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="trayecto">Trayecto: * </label>
			<input type="text" name="trayecto" id="trayecto" class="form-control" readonly value="<?php echo $rows['trayecto']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="unidad_curricular_id">Unidad Curricular: * </label>
			<input type="text" name="unidad_curricular_id" id="unidad_curricular_id" class="form-control" required value="<?php echo $rows['descripcion']; ?>">
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<input type="hidden" name="trayecto_id" value="<?php echo $rows['trayecto_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>