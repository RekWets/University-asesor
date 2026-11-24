<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/period.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/subjects.php");?>
<section class="container">
	<h2>Periodo - Trayecto - Unidad Curricular - Registro - 
		<a href="?route=periodSubjects&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=periodSubjects&method=store" method="POST">
	<div class="col-md-4 my-2">
			<label for="trayecto_id">Trayecto: * </label>
			<select name="trayecto_id" id="trayecto_id" class="form-control" required>
				<option value="0">Seleccionar Trayecto</option>
				<?php $tray = new Period(); ?>
				<?php $rows = $tray->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['trayecto']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="unidad_curricular_id">Unidad Curricular: * </label>
			<select type="text" name="unidad_curricular_id" id="unidad_curricular_id" class="form-control" required>
				<option value="0">Seleccionar Unidad Curricular</option>
				<?php $materia = new Subjects(); ?>
				<?php $rows = $materia->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['descripcion']); ?></option>
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