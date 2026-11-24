<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF - Modificar Docente - 
		<a href="?route=pnfTeachers&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=pnfTeachers&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="nombres">Nombre del Docente: * </label>
			<input type="text" name="nombres" id="nombres" class="form-control" readonly value="<?php echo $rows['nombres']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" readonly value="<?php echo $rows['apellidos']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="pnf_id">PNF: * </label>
			<select name="pnf_id" id="pnf_id" class="form-control" required value="<?php echo $rows['pnf_id']; ?>">
				<option></option>
				<option value="1">ADMINISTRACION</option>
				<option value="2">CONTADURIA</option>
				<option value="3">INFORMATICA</option>
				<option value="4">TURISMO</option>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<input type="hidden" name="docente_id" value="<?php echo $rows['docente_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>