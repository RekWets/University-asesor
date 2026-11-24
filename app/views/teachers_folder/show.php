<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Docentes - Detalles del Registro - 
		<a href="?route=teachers&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=teachers&method=update" method="POST">
		<div class="col-12">
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-2 my-2">
			<label for="codigo">Codigo: </label>
			<input type="text" name="codigo" id="codigo" class="form-control" readonly value="<?php echo $rows['codigo']; ?>">
		</div>
		<div class="col-md-2 my-2">
			<label for="cedula">Cedula: </label>
			<input type="text" name="cedula" id="cedula" class="form-control" readonly value="<?php echo $rows['cedula']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="apellidos">Apellidos: </label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" readonly value="<?php echo $rows['apellidos']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="nombres">Nombres: </label>
			<input type="text" name="nombres" id="nombres" class="form-control" readonly value="<?php echo $rows['nombres']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="sexo_id">Sexo: </label>
			<input type="text" name="sexo_id" id="sexo_id" class="form-control" readonly value="<?php echo $rows['sexo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="fecha_nacimiento">Fecha de nacimiento: </label>
			<input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" readonly value="<?php echo $rows['fecha_nacimiento']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos de Contacto</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="telefono_movil">Telefono Movil: </label>
			<input type="text" name="telefono_movil" id="telefono_movil" class="form-control" readonly value="<?php echo $rows['telefono_movil']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="email">Email: </label>
			<input type="text" name="email" id="email" class="form-control" readonly value="<?php echo $rows['email']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Estado del Docente</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="linea_investigacion">Linea de Investigacion: *</label>
			<input type="text" name="linea_investigacion" id="linea_investigacion" class="form-control" readonly value="<?php echo $rows['linea_investigacion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="delegado_id">Delegado: * </label>
			<input type="text" name="delegado_id" id="delegado_id" class="form-control" readonly value="<?php echo $rows['delegado']; ?>">
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="cargo_coordinacion-id">Cargo de Coordinacion: * </label>
			<input type="text" name="cargo_coordinacion_id" id="cargo_coordinacion_id" class="form-control" readonly value="<?php echo $rows['cargo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="condicion_id">Condicion: * </label>
			<input type="text" name="condicion_id" id="condicion_id" class="form-control" readonly value="<?php echo $rows['condicion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="dedicacion_id">Dedicacion: * </label>
			<input type="text" name="dedicacion_id" id="dedicacion_id" class="form-control" readonly value="<?php echo $rows['dedicacion']; ?>">
		</div>
			<div class="col-md-4 my-2">
			<label for="docente_categoria_id">Categoria: * </label>
			<input type="text" name="docente_categoria_id" id="docente_categoria_id" class="form-control" readonly value="<?php echo $rows['categoria']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="modalidad_id">Modalidad: * </label>
			<input type="text" name="modalidad_id" id="modalidad_id" class="form-control" readonly value="<?php echo $rows['modalidad']; ?>">
		</div>	
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>