<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/period.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/students.php");?>
<section class="container">
	<h2>Periodo - Trayecto - Registrar Estudiante -
		<a href="?route=periodStudents&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=periodStudents&method=store" method="POST">
		<div class="col-md-4 my-2">
			<label for="trayecto_id">Trayecto: * </label>
			<select type="text" name="trayecto_id" id="trayecto_id" class="form-control" required>
				<option value="0">Seleccionar Trayecto</option>
				<?php $period = new Period(); ?>
				<?php $rows = $period->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['trayecto']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="estudiante_id">Estudiante: * </label>
			<select type="text" name="estudiante_id" id="estudiante_id" class="form-control" required>
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
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>