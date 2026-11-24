<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/subjects.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/students.php");?>
<section class="container">
	<h2>Unidad Curricular - Registrar Estudiante-
		<a href="?route=students&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=subjectStudents&method=store" method="POST">
		<div class="col-md-4 my-2">
			<label for="unidad_curricular_id">Unidad Curricular: * </label>
			<select name="unidad_curricular_id" id="unidad_curricular_id" class="form-control" required>
				<option value="0">Seleccionar Unidad Curricular</option>
				<?php $subject = new Subjects(); ?>
				<?php $rows = $subject->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['descripcion']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="estudiante_id">Estudiante: * </label>
			<select name="estudiante_id" id="estudiante_id" class="form-control" required>
				<option value="0">Seleccionar Estudiante</option>
				<?php $estudiante = new Students(); ?>
				<?php $rows = $estudiante->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['nombres']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>