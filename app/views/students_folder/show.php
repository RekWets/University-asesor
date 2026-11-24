<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes - Detalles del Registro - 
		<a href="?route=students&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=analyst&method=update" method="POST">
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
		<div class="col-12">
			<hr>
			<h5>Datos Personales</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
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
		<div class="col-md-3 my-2">
			<label for="fecha_nacimiento">Fecha de nacimiento: </label>
			<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" readonly value="<?php echo $rows['fecha_nacimiento']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="edad">Edad: </label>
			<input type="text" name="edad" id="edad" class="form-control" readonly value="<?php echo $rows['edad']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="sexo_id">Sexo: </label>
			<input type="text" name="sexo_id" id="sexo_id" class="form-control" readonly value="<?php echo $rows['sexo']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="estado_civil_id">Estado Civil: </label>
			<input type="text" name="estado_civil_id" id="estado_civil_id" class="form-control" readonly value="<?php echo $rows['edo_civil']; ?>">
		</div>
		<div class="col-md-4 my-2">
				<label for="estado_natal_id">Estado Natal: </label>
				<input type="text" name="estado_natal_id" id="estado_natal_id" class="form-control" readonly value="<?php echo $rows['estado']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="municipio_natal_id">Municipio Natal: </label>
			<input type="text" name="municipio_natal_id" id="municipio_natal_id" class="form-control" readonly value="<?php echo $rows['municipio']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="parroquia_natal_id">Parroquia Natal: </label>
			<input type="text" name="parroquia_natal_id" id="parroquia_natal_id" class="form-control" readonly value="<?php echo $rows['parroquia']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos de Contacto</h5>
			<hr>
		</div>
		<div class="col-md-3 my-2">
			<label for="email">Email: </label>
			<input type="text" name="email" id="email" class="form-control" readonly value="<?php echo $rows['email']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_movil">Telefono Movil: </label>
			<input type="text" name="telefono_movil" id="telefono_movil" class="form-control" readonly value="<?php echo $rows['telefono_movil']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="telefono_resd">Telefono Residencial: </label>
			<input type="text" name="telefono_resd" id="telefono_resd" class="form-control" readonly value="<?php echo $rows['telefono_resd']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="otro_telefono">Otro Telefono: </label>
			<input type="text" name="otro_telefono" id="otro_telefono" class="form-control" readonly value="<?php echo $rows['otro_telefono']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Direccion</h5>
			<hr>
		</div>
		<div class="col-md-9 my-2">
			<label for="direccion_resd">Direccion de Residencia: </label>
			<input type="text" name="direccion_resd" id="direccion_resd" class="form-control" readonly value="<?php echo $rows['direccion_resd']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="pais_id">País: </label>
			<input type="text" name="pais_id" id="pais_id" class="form-control" readonly value="<?php echo $rows['pais']; ?>">
		</div>
		<div class="col-12 my-2">
			<hr>
			<h5>Datos Academicos</h5>
			<hr>
		</div>
		<div class="col-md-4 my-2">
			<label for="codigo">Codigo: </label>
			<input type="text" name="codigo" id="codigo" class="form-control" readonly value="<?php echo $rows['codigo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="pnf_id">PNF: </label>
			<input type="text" name="pnf_id" id="pnf_id" class="form-control" readonly value="<?php echo $rows['pnf_id']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="malla_id">Malla: </label>
			<input type="text" name="malla_id" id="malla_id" class="form-control" readonly value="<?php echo $rows['malla']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="actividad_id">Actividad: </label>
			<input type="text" name="actividad_id" id="actividad_id" class="form-control" readonly value="<?php echo $rows['actividad']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="periodo_ingreso">Periodo de Ingreso: </label>
			<input type="text" name="periodo_ingreso" id="periodo_ingreso" class="form-control" readonly value="<?php echo $rows['periodo_ingreso']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="tipo_ingreso_id">Tipo de ingreso: </label>
			<input type="text" name="tipo_ingreso_id" id="tipo_ingreso_id" class="form-control" readonly value="<?php echo $rows['t_ingreso']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="dir_titulo">Titulo de Bachiller: </label>
			<input type="file" name="dir_titulo" id="dir_titulo" class="form-control" readonly >
		</div>
		<div class="col-md-4 my-2">
			<label for="graduacion_bachiller">Año de Graduacion del Bachiller: </label>
			<input type="year" name="graduacion_bachiller" id="graduacion_bachiller" class="form-control" readonly value="<?php echo $rows['graduacion_bachiller']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="liceo_colegio">Nombre del Liceo o Colegio: </label>
			<input type="text" name="liceo_colegio" id="liceo_colegio" class="form-control" readonly value="<?php echo $rows['liceo_colegio']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="tipo_institucion_id">Tipo de Institucion: </label>
			<input type="text" name="tipo_institucion_id" id="tipo_institucion_id" class="form-control" readonly value="<?php echo $rows['t_institucion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="procedencia_institucion">Estado de Procedencia del Liceo/Colegio: </label>
			<input type="text" name="procedencia_institucion" id="procedencia_institucion" class="form-control" readonly value="<?php echo $rows['procedencia_institucion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="posicion_opsu">Posicion de la Seleccion en la OPSU: </label>
			<input type="text" name="posicion_opsu" id="posicion_opsu" class="form-control" readonly value="<?php echo $rows['posicion_opsu']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="nse_id">Nivel Socio Economico: </label>
			<input type="text" name="nse_id" id="nse_id" class="form-control" readonly value="<?php echo $rows['nse']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="trabaja">Trabaja: </label>
			<input type="text" name="trabaja" id="trabaja" class="form-control" readonly value="<?php echo $rows['trabaja']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="direccion_trabajo">Direccion de Trabajo: </label>
			<input type="text" name="direccion_trabajo" id="direccion_trabajo" class="form-control" readonly value="<?php echo $rows['direccion_trabajo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_asignado">Grupo Asignado: </label>
			<input type="text" name="grupo_asignado" id="grupo_asignado" class="form-control" readonly value="<?php echo $rows['grupo_asignado']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="retiro">Retiro: </label>
			<input type="text" name="retiro" id="retiro" class="form-control" readonly value="<?php echo $rows['retiro']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="reincorporacion">Reincorporacion: </label>
			<input type="text" name="reincorporacion" id="reincorporacion" class="form-control" readonly value="<?php echo $rows['reincorporacion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ultimo_periodo_cursado">Ultimo Periodo Cursado: </label>
			<input type="text" name="ultimo_periodo_cursado" id="ultimo_periodo_cursado" class="form-control" readonly value="<?php echo $rows['ultimo_periodo_cursado']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="cambio_pnf">Cambio de PNF: </label>
			<input type="text" name="cambio_pnf" id="cambio_pnf" class="form-control" readonly value="<?php echo $rows['cambio_pnf']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="promocion">Promocion: </label>
			<input type="text" name="promocion" id="promocion" class="form-control" readonly value="<?php echo $rows['promocion']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="lapso_egreso">Lapso de Egreso: </label>
			<input type="text" name="lapso_egreso" id="lapso_egreso" class="form-control" readonly value="<?php echo $rows['lapso_egreso']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="fecha_grado">Fecha de Grado: </label>
			<input type="date" name="fecha_grado" id="fecha_grado" class="form-control" readonly value="<?php echo $rows['fecha_grado']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="posicion_promocion">Nº de Posicion de la Promo: </label>
			<input type="text" name="posicion_promocion" id="posicion_promocion" class="form-control" readonly value="<?php echo $rows['posicion_promocion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ira">IRA: </label>
			<input type="text" name="ira" id="ira" class="form-control" readonly value="<?php echo $rows['ira']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iraa">IRAA: </label>
			<input type="text" name="iraa" id="iraa" class="form-control" readonly value="<?php echo $rows['iraa']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iras">IRAS: </label>
			<input type="text" name="iras" id="iras" class="form-control" readonly value="<?php echo $rows['iras']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="turno_id">Turno: </label>
			<input type="text" name="turno_id" id="turno_id" class="form-control" readonly value="<?php echo $rows['turno']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_id">Grupo: </label>
			<input type="text" name="grupo_id" id="grupo_id" class="form-control" readonly value="<?php echo $rows['grupo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="modalidad_id">Modalidad: </label>
			<input type="text" name="modalidad_id" id="modalidad_id" class="form-control" readonly value="<?php echo $rows['modalidad']; ?>">
		</div>
	</form>
	<hr>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>