<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes - Datos Academicos - 
		<a href="?route=students&method=show&id=<?php echo $rows['id'] ?>" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=analyst&method=update" method="POST">
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
			<label for="titulo_bachillerato">Titulo de Bachiller: </label>
			<input type="file" name="titulo_bachillerato" id="titulo_bachillerato" class="form-control" readonly value="<?php echo $rows['titulo_bachillerato']; ?>">
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
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>