<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Analistas - Registrar -
		<a href="?route=analyst&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=analyst&method=store" method="POST">
		<div class="col-12">
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-2 my-2">
			<label for="codigo">Codigo: * </label>
			<input type="number" name="codigo" id="codigo" class="form-control" required placeholder="Codigo">
		</div>
		<div class="col-md-2 my-2">
			<label for="cedula">Cedula: * </label>
			<input type="number" name="cedula" id="cedula" class="form-control" required placeholder="Cedula">
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
			<select name="sexo_id" id="sexo_id" class="form-control" required aria-placeholder="seleccione una opcion">
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
			<h5>Estado</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="condicion_id">Condicion: * </label>
			<select name="condicion_id" id="condicion_id" class="form-control">
				<option value="0">Seleccionar Condicion</option>
				<option value="1">Fijo</option>
				<option value="2">Contratado</option>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="categoria_analista_id">Categoria: * </label>
			<select name="categoria_analista_id" id="categoria_analista_id" class="form-control">
				<option value="0">Seleccionar Categoria</option>
				<option value="1">P1</option>
				<option value="2">P2</option>
				<option value="3">P3</option>
				<option value="4">P4</option>
				<option value="5">P5</option>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>