<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Inscripcion- Estudiantes - Nuevo Ingreso -
		<a href="?route=students&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=students&method=store" method="POST">
		<div class="col-12">
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="cedula">Cedula: * </label>
			<input type="number" name="cedula" id="cedula" class="form-control" required placeholder="Cedula de Identidad">
		</div>
		<div class="col-md-4 my-2">
			<label for="apellidos">Apellidos: * </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" required placeholder="Apellidos">
		</div>
		<div class="col-md-4 my-2">
			<label for="nombres">Nombres: * </label>
			<input type="text" name="nombres" id="nombres" class="form-control" required placeholder="Nombres">
		</div>
		<div class="col-md-3 my-2">
			<label for="fecha_nacimiento">Fecha de Nacimiento: * </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
		</div>
		<div class="col-md-3 my-2">
			<label for="edad">Edad: <span id="edad"></span></label>
			<input type="number" name="edad" id="edad" class="form-control" required>
		</div>
		<div class="col-md-3 my-2">
			<label for="sexo_id">Sexo: * </label>
			<select name="sexo_id" id="sexo_id" class="form-control" required>
				<option value="0">Seleccionar Sexo</option>
				<?php $sexo = new Sexos(); ?>
				<?php $rows = $sexo->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['sexo']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-3 my-2">
			<label for="estado_civil_id">Estado Civil: * </label>
			<select name="estado_civil_id" id="estado_civil_id" class="form-control" required>
				<option value="0">Seleccionar Estado Civil</option>
				<?php $edo_civil = new EstadoCivil(); ?>
				<?php $rows = $edo_civil->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['edo_civil']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="estado_natal_id">Estado de Nacimiento: * </label>
			<select name="estado_natal_id" id="estado_natal_id" class="form-control">
				<option value="0">Seleccionar Estado</option>
				<?php $estado = new Estados(); ?>
				<?php $rows = $estado->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['estado']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="municipio_natal_id">Municipio de Nacimiento: * </label>
			<select name="municipio_natal_id" id="municipio_natal_id" class="form-control"></select>
		</div>
		<div class="col-md-4 my-2">
			<label for="parroquia_natal_id">Parroquia de Nacimiento: * </label>
			<select name="parroquia_natal_id" id="parroquia_natal_id" class="form-control"></select>
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos de Contacto</h5>
			<hr>
		</div>
		<div class="col-md-3 my-2">
			<label for="email">Email: *</label>
			<input type="email" name="email" id="email" class="form-control" required placeholder="example@example.com">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_movil">Telefono Movil: * </label>
			<input type="number" name="telefono_movil" id="telefono_movil" class="form-control" required placeholder="04161234567">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_resd">Telefono Residencial: * </label>
			<input type="number" name="telefono_resd" id="telefono_resd" class="form-control" required placeholder="02721234567">
		</div>
		<div class="col-md-3 my-2">
			<label for="otro_telefono">Otro Telefono: * </label>
			<input type="number" name="otro_telefono" id="otro_telefono" class="form-control" required placeholder="04261234567">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Direccion</h5>
			<hr>
		</div>
		<div class="col-md-9 my-2">
			<label for="direccion_resd">Direccion de Residencia: * </label>
			<input type="text" name="direccion_resd" id="direccion_resd" class="form-control" required placeholder="Av. La paz, Calle principal, Casa #4">
		</div>
		<div class="col-md-3 my-2">
			<label for="pais_id">País: * </label>
			<select name="pais_id" id="pais_id" class="form-control">
				<option value="0">Seleccionar País</option>
				<?php $pais = new Pais(); ?>
				<?php $rows = $pais->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['pais']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-12 my-2" hidden>
			<label for="foto">Foto: *</label>
			<input type="file" name="foto" id="foto" class="form-control-sm">
		</div>
		<hr class="col-12">
		<div class="col my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-arrow-right"></i> Siguiente</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>