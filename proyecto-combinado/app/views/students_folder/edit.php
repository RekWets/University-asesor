<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes - Modificar -
		<a href="?route=students&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-4" action="?route=picture&method=store" method="POST" enctype="multipart/form-data">
		<div class="col-12 my-2">
			<h5>Foto</h5>
			<hr>
		</div>
		<div class="col-12 my-2">
			<div class="card" style="width: 18rem;">
				<img src="public/img/img_folders/student_img/<?php echo $rows['foto']; ?>" class="card-img-top" alt="..." width="100%" height="100%">
				<div class="card-body">
					<p class="card-text"><?php echo $rows['foto']; ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 my-2">
			<label for="foto">Foto: * </label>
			<input type="file" name="foto" id="foto" class="form-control-sm" value="<?php echo $rows['foto']; ?>">
		</div>
		<div class="col-md-4 my-5">
			<input type="hidden" name="estudiante_id" id="estudiante_id" value="<?php echo $rows['estudiante_id']; ?>">
			<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Guardar</button>
		</div>
	</form>
	<form class="row g-3" action="?route=students&method=update" method="POST">
		<div class="col-12">
			<hr>
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="cedula">Cedula: * </label>
			<input type="text" name="cedula" id="cedula" class="form-control" required placeholder="Cedula de Identidad" value="<?php echo $rows['cedula']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="apellidos">Apellidos: * </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" required placeholder="Apellidos" value="<?php echo $rows['apellidos']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="nombres">Nombres: * </label>
			<input type="text" name="nombres" id="nombres" class="form-control" required placeholder="Nombres" value="<?php echo $rows['nombres']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="fecha_nacimiento">Fecha de Nacimiento: * </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required value="<?php echo $rows['fecha_nacimiento']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="edad">Edad: * <span id="edad"></span></label>
			<input type="text" name="edad" id="edad" class="form-control" required placeholder="Edad" value="<?php echo $rows['edad']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="sexo_id">Sexo: * </label>
			<select name="sexo_id" id="sexo_id" class="form-control" required>
				<option value="<?php echo($rows['sexo_id']); ?>"><?php echo($rows['sexo']); ?></option>
				<?php $sexo = new Sexos(); ?>
				<?php $field = $sexo->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['sexo']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-3 my-2">
			<label for="estado_civil_id">Estado Civil: * </label>
			<select name="estado_civil_id" id="estado_civil_id" class="form-control" required>
				<option value="<?php echo($rows['estado_civil_id']); ?>"><?php echo($rows['edo_civil']); ?></option>
				<?php $edo_civil = new EstadoCivil(); ?>
				<?php $field = $edo_civil->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['edo_civil']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="estado_natal_id">Estado de Nacimiento: * </label>
			<select name="estado_natal_id" id="estado_natal_id" class="form-control" required>
				<option value="<?php echo($rows['estado_natal_id']); ?>"><?php echo($rows['estado']); ?></option>
				<?php $estado = new Estados(); ?>
				<?php $field = $estado->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['estado']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="municipio_natal_id">Municipio de Nacimiento: * </label>
			<select name="municipio_natal_id" id="municipio_natal_id" class="form-control" required>
				<option value="<?php echo($rows['municipio_natal_id']); ?>"><?php echo($rows['municipio']); ?></option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="parroquia_natal_id">Parroquia de Nacimiento: * </label>
			<select name="parroquia_natal_id" id="parroquia_natal_id" class="form-control" required>
				<option value="<?php echo($rows['parroquia_natal_id']); ?>"><?php echo($rows['parroquia']); ?></option>
			</select>
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos de Contacto</h5>
			<hr>
		</div>
		<div class="col-md-3 my-2">
			<label for="email">Email: *</label>
			<input type="email" name="email" id="email" class="form-control" required placeholder="example@example.com" value="<?php echo $rows['email']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_movil">Telefono Movil: * </label>
			<input type="text" name="telefono_movil" id="telefono_movil" class="form-control" required placeholder="04161234567" value="<?php echo $rows['telefono_movil']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_resd">Telefono Residencial: * </label>
			<input type="text" name="telefono_resd" id="telefono_resd" class="form-control" required placeholder="02721234567" value="<?php echo $rows['telefono_resd']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="otro_telefono">Otro Telefono: * </label>
			<input type="text" name="otro_telefono" id="otro_telefono" class="form-control" required placeholder="04261234567" value="<?php echo $rows['otro_telefono']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Direccion</h5>
			<hr>
		</div>
		<div class="col-md-9 my-2">
			<label for="direccion_resd">Direccion de Residencia: * </label>
			<input type="text" name="direccion_resd" id="direccion_resd" class="form-control" required placeholder="Av. La paz, Calle principal, Casa #4" value="<?php echo $rows['direccion_resd']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="pais_id">País: * </label>
			<select name="pais_id" id="pais_id" class="form-control" required>
				<option value="<?php echo($rows['pais_id']); ?>"><?php echo($rows['pais']); ?></option>
				<?php $pais = new Pais(); ?>
				<?php $field = $pais->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['pais']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<hr class="col-12">
		<div class="col my-2">
			<input type="hidden" name="id" id="id" value="<?php echo $rows['estudiante_id']; ?>">
			<a href="?route=studentsAcademic&method=edit&id=<?php echo $rows['estudiante_id']; ?>" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Modificar Datos Academicos</a>
		</div>
		<div class="col my-2">
			<input type="hidden" name="est_id" id="est_id" value="<?php echo $rows['estudiante_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>