<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Docentes - Registrar -
		<a href="?route=teachers&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=teachers&method=store" method="POST">
		<div class="col-12">
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-2 my-2">
			<label for="codigo">Codigo: * </label>
			<input type="number" name="codigo" id="codigo" class="form-control" required placeholder="Codigo de Docente">
		</div>
		<div class="col-md-2 my-2">
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
		<div class="col-md-4 my-2">
			<label for="sexo_id">Sexo: * </label>
			<select name="sexo_id" id="sexo_id" class="form-control" required>
				<option value="0">Selecionar Sexo</option>
				<?php $sexo = new Sexos(); ?>
				<?php $rows = $sexo->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['sexo']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="fecha_nacimiento">Fecha de Nacimiento: * </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos de Contacto</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="telefono_movil">Telefono Movil: * </label>
			<input type="number" name="telefono_movil" id="telefono_movil" class="form-control" required placeholder="04161234567">
		</div>
		<div class="col-md-4 my-2">
			<label for="email">Email: *</label>
			<input type="email" name="email" id="email" class="form-control" required placeholder="example@example.com">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Estado del Docente</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="linea_investigacion">Linea de Investigacion: *</label>
			<input type="text" name="linea_investigacion" id="linea_investigacion" class="form-control" required placeholder="Linea de Investigacion del docente">
		</div>
		<div class="col-md-4 my-2">
			<label for="delegado_id">Delegado: * </label>
			<select name="delegado_id" id="delegado_id" class="form-control">
				<option></option>
				<option value="1">PSIT</option>
				<option value="2">Areas de Conocimiento</option>
				<option value="3">Linea de Investigacion</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="cargo_coordinacion_id">Cargo de Coordinacion: * </label>
			<select name="cargo_coordinacion_id" id="cargo_coordinacion_id" class="form-control" required>
				<option></option>
				<option value="1">SECRETARIA/O</option>
				<option value="2">ADMINISTRADOR(A)</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="condicion_id">Condicion: * </label>
			<select name="condicion_id" id="condicion_id" class="form-control">
				<option></option>
				<option value="1">Fijo</option>
				<option value="2">Contratado</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="dedicacion_id">Dedicacion: * </label>
			<select name="dedicacion_id" id="dedicacion_id" class="form-control">
				<option></option>
				<option value="1">Convencional</option>
				<option value="2">Medio Tiempo</option>
				<option value="2">Tiempo Completo</option>
				<option value="2">Dedicacion Exclusiva</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="docente_categoria_id">Categoria: * </label>
			<select name="docente_categoria_id" id="docente_categoria_id" class="form-control">
				<option></option>
				<option value="1">Instructor</option>
				<option value="2">Asistente</option>
				<option value="3">Agregado</option>
				<option value="4">Asociado</option>
				<option value="5">Titular</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="modalidad_id">Modalidad: * </label>
			<select name="modalidad_id" id="modalidad_id" class="form-control">
				<option></option>
				<option value="1">Entre Semana</option>
				<option value="2">Fin de Semana</option>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>