<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/pnf.php");?>
<section class="container">
	<h2>Estudiantes - Datos Academicos - Modificar -
		<a href="?route=students&method=edit&id=<?php echo $rows['estudiante_id']; ?>" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-4" action="?route=degree&method=store" method="POST" enctype="multipart/form-data">
		<div class="col-12 my-2">
			<h5>Titulo de Bachillerato</h5>
			<hr>
		</div>
		<div class="col-12 my-2">
			<div class="card" style="width: 18rem;">
				<img src="public/img/img_folders/degree_img/<?php echo $rows['dir_titulo']; ?>" class="card-img-top" alt="..." width="100%" height="100%">
				<div class="card-body">
					<p class="card-text"><?php echo $rows['dir_titulo']; ?></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 my-2">
			<label for="dir_titulo">Foto del Titulo: * </label>
			<input type="file" name="dir_titulo" id="dir_titulo" class="form-control-sm" value="<?php echo $rows['dir_titulo']; ?>">
		</div>
		<div class="col-md-4 my-5">
			<input type="hidden" name="estudiante_id" id="estudiante_id" value="<?php echo $rows['estudiante_id']; ?>">
			<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Guardar</button>
		</div>
	</form>
	<form class="row g-3" action="?route=studentsAcademic&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="codigo">Codigo: *</label>
			<input type="text" name="codigo" id="codigo" class="form-control" required value="<?php echo $rows['codigo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="pnf_id">PNF: * </label>
			<select name="pnf_id" id="pnf_id" class="form-control" required>
				<option><?php echo $rows['pnf_id']; ?></option>
				<?php $pnf = new PNF(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option><?php echo($key['descripcion']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="malla_id">Malla: * </label>
			<select name="malla_id" id="malla_id" class="form-control" required>
				<option value="<?php echo($rows['malla_id']); ?>"><?php echo($rows['malla']); ?></option>
				<?php $pnf = new Malla(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['malla']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="actividad_id">Actividad: * </label>
			<select name="actividad_id" id="actividad_id" class="form-control" required>
				<option value="<?php echo($rows['actividad_id']); ?>"><?php echo($rows['actividad']); ?></option>
				<?php $pnf = new Actividad(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['actividad']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="periodo_ingreso">Periodo de Ingreso: *</label>
			<input type="text" name="periodo_ingreso" id="periodo_ingreso" class="form-control" required value="<?php echo $rows['periodo_ingreso']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="tipo_ingreso_id">Tipo de Ingreso: * </label>
			<select name="tipo_ingreso_id" id="tipo_ingreso_id" class="form-control">
				<option value="<?php echo($rows['tipo_ingreso_id']); ?>"><?php echo($rows['t_ingreso']); ?></option>
				<?php $pnf = new TipoIngreso(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['t_ingreso']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="graduacion_bachiller">Año de Graduacion del Bachiller: *</label>
			<input type="year" name="graduacion_bachiller" id="graduacion_bachiller" class="form-control" required value="<?php echo $rows['graduacion_bachiller']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="liceo_colegio">Nombre del Liceo o Colegio: *</label>
			<input type="text" name="liceo_colegio" id="liceo_colegio" class="form-control" required value="<?php echo $rows['liceo_colegio']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="tipo_institucion_id">Tipo de Institucion: *</label>
			<select name="tipo_institucion_id" id="tipo_institucion_id" class="form-control" required>
				<option value="<?php echo($rows['tipo_institucion_id']); ?>"><?php echo($rows['t_institucion']); ?></option>
				<?php $pnf = new TipoInstitucion(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['t_institucion']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-5 my-2">
			<label for="procedencia_institucion">Estado de Procedencia del Liceo/Colegio: *</label>
			<input type="text" name="procedencia_institucion" id="procedencia_institucion" class="form-control" required value="<?php echo $rows['procedencia_institucion']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="nse_id">Nivel Socio Economico: * </label>
			<select name="nse_id" id="nse_id" class="form-control" required>
				<option value="<?php echo($rows['nse_id']); ?>"><?php echo($rows['nse']); ?></option>
				<?php $pnf = new NSE(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['nse']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="posicion_opsu">Posicion de la Seleccion en la OPSU: *</label>
			<input type="text" name="posicion_opsu" id="posicion_opsu" class="form-control" required value="<?php echo $rows['posicion_opsu']; ?>">
		</div>
		<div class="col-md-2 my-2">
			<label for="trabaja">Trabaja: *</label>
			<select name="trabaja" id="trabaja" class="form-control" required>
				<option><?php echo($rows['trabaja']); ?></option>
				<option value="SI">SI</option>
				<option value="NO">NO</option>
			</select>
		</div>
		<div class="col-md-6 my-2">
			<label for="direccion_trabajo">Direccion de Trabajo: *</label>
			<input type="text" name="direccion_trabajo" id="direccion_trabajo" class="form-control" required value="<?php echo $rows['direccion_trabajo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_asignado">Grupo Asignado: *</label>
			<input type="text" name="grupo_asignado" id="grupo_asignado" class="form-control" required value="<?php echo $rows['grupo_asignado']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="retiro">Retiro: *</label>
			<input type="text" name="retiro" id="retiro" class="form-control" value="<?php echo $rows['retiro']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="reincorporacion">Reincorporacion: *</label>
			<input type="text" name="reincorporacion" id="reincorporacion" class="form-control" value="<?php echo $rows['reincorporacion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ultimo_periodo_cursado">Ultimo Periodo Cursado: *</label>
			<input type="text" name="ultimo_periodo_cursado" id="ultimo_periodo_cursado" class="form-control" required value="<?php echo $rows['ultimo_periodo_cursado']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="cambio_pnf">Cambio de PNF: *</label>
			<input type="text" name="cambio_pnf" id="cambio_pnf" class="form-control" value="<?php echo $rows['cambio_pnf']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="promocion">Promocion: *</label>
			<input type="text" name="promocion" id="promocion" class="form-control" value="<?php echo $rows['promocion']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="lapso_egreso">Lapso de Egreso: *</label>
			<input type="text" name="lapso_egreso" id="lapso_egreso" class="form-control" value="<?php echo $rows['lapso_egreso']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="fecha_grado">Fecha de Grado: *</label>
			<input type="date" name="fecha_grado" id="fecha_grado" class="form-control" value="<?php echo $rows['fecha_grado']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="posicion_promocion">Nº de Posicion de la Promo: *</label>
			<input type="text" name="posicion_promocion" id="posicion_promocion" class="form-control" value="<?php echo $rows['posicion_promocion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ira">IRA: *</label>
			<input type="text" name="ira" id="ira" class="form-control" required value="<?php echo $rows['ira']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iraa">IRAA: *</label>
			<input type="text" name="iraa" id="iraa" class="form-control" required value="<?php echo $rows['iraa']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iras">IRAS: *</label>
			<input type="text" name="iras" id="iras" class="form-control" required value="<?php echo $rows['iras']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="turno_id">Turno: *</label>
			<select name="turno_id" id="turno_id" class="form-control" required>
				<option value="<?php echo($rows['turno_id']); ?>"><?php echo($rows['turno']); ?></option>
				<?php $pnf = new Turno(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['turno']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_id">Grupo: *</label>
			<select name="grupo_id" id="grupo_id" class="form-control">
				<option value="<?php echo($rows['grupo_id']); ?>"><?php echo($rows['grupo']); ?></option>
				<?php $pnf = new Grupo(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['grupo']); ?></option>
				<?php 	}?>
				<?php }?>
			</select> 
		</div>
		<div class="col-md-4 my-2">
			<label for="modalidad_id">Modalidad: *</label>
			<select name="modalidad_id" id="modalidad_id" class="form-control" required>
				<option value="<?php echo($rows['modalidad_id']); ?>"><?php echo($rows['modalidad']); ?></option>
				<?php $pnf = new Modalidad(); ?>
				<?php $field = $pnf->get(); ?>
				<?php if (!empty($field)){ ?>
				<?php 	foreach ($field as $key){ ?>
							<option value="<?php echo($key['id']); ?>"><?php echo($key['modalidad']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col my-2">
			<input type="hidden" name="estudiante_id" id="estudiante_id" value="<?php echo $rows['estudiante_id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>