<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container d-flex ">
	<h2 class="">Evaluación y seguimiento del rendimiento académico - Consulta
	</h2>
	<a href="?route=evaluacion&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
</section>
<hr>
<section class="container p-4 bg-white">
	<div class="">
		<span>DESCARGAS:</span>
			<Button class="btn btn-success">Historial Academico</Button>
			<Button class="btn btn-success">Expendiente Academico</Button>
			<Button class="btn btn-success">Record Academico</Button>
			</label>
		</div>
	<form class="row g-3" action="?route=analyst&method=update" method="POST">
	<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
		<div class="col-md-4 my-2">
			<label for="codigo">Codigo: </label>
			<input type="text" name="codigo" id="codigo" class="form-control" readonly value="<?php echo $key['codigo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="pnf_id">PNF: </label>
			<input type="text" name="pnf_id" id="pnf_id" class="form-control" readonly value="<?php echo $key['pnf_id']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="malla_id">Malla: </label>
			<input type="text" name="malla_id" id="malla_id" class="form-control" readonly value="<?php echo $key['malla']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="actividad_id">Actividad: </label>
			<input type="text" name="actividad_id" id="actividad_id" class="form-control" readonly value="<?php echo $key['actividad']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="periodo_ingreso">Periodo de Ingreso: </label>
			<input type="text" name="periodo_ingreso" id="periodo_ingreso" class="form-control" readonly value="<?php echo $key['periodo_ingreso']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_asignado">Grupo Asignado: </label>
			<input type="text" name="grupo_asignado" id="grupo_asignado" class="form-control" readonly value="<?php echo $key['grupo_asignado']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="retiro">Retiro: </label>
			<input type="text" name="retiro" id="retiro" class="form-control" readonly value="<?php echo $key['retiro']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="reincorporacion">Reincorporacion: </label>
			<input type="text" name="reincorporacion" id="reincorporacion" class="form-control" readonly value="<?php echo $key['reincorporacion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ultimo_periodo_cursado">Ultimo Periodo Cursado: </label>
			<input type="text" name="ultimo_periodo_cursado" id="ultimo_periodo_cursado" class="form-control" readonly value="<?php echo $key['ultimo_periodo_cursado']; ?>">
		</div>
		<div class="col-md-8 my-2">
			<label for="cambio_pnf">Cambio de PNF: </label>
			<input type="text" name="cambio_pnf" id="cambio_pnf" class="form-control" readonly value="<?php echo $key['cambio_pnf']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="promocion">Promocion: </label>
			<input type="text" name="promocion" id="promocion" class="form-control" readonly value="<?php echo $key['promocion']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="lapso_egreso">Lapso de Egreso: </label>
			<input type="text" name="lapso_egreso" id="lapso_egreso" class="form-control" readonly value="<?php echo $key['lapso_egreso']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="fecha_grado">Fecha de Grado: </label>
			<input type="date" name="fecha_grado" id="fecha_grado" class="form-control" readonly value="<?php echo $key['fecha_grado']; ?>">
		</div>
		<div class="col-md-3 my-2">
			<label for="posicion_promocion">Nº de Posicion de la Promo: </label>
			<input type="text" name="posicion_promocion" id="posicion_promocion" class="form-control" readonly value="<?php echo $key['posicion_promocion']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="ira">IRA: </label>
			<input type="text" name="ira" id="ira" class="form-control" readonly value="<?php echo $key['ira']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iraa">IRAA: </label>
			<input type="text" name="iraa" id="iraa" class="form-control" readonly value="<?php echo $key['iraa']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="iras">IRAS: </label>
			<input type="text" name="iras" id="iras" class="form-control" readonly value="<?php echo $key['iras']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="turno_id">Turno: </label>
			<input type="text" name="turno_id" id="turno_id" class="form-control" readonly value="<?php echo $key['turno']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="grupo_id">Grupo: </label>
			<input type="text" name="grupo_id" id="grupo_id" class="form-control" readonly value="<?php echo $key['grupo']; ?>">
		</div>
		<div class="col-md-4 my-2">
			<label for="modalidad_id">Modalidad: </label>
			<input type="text" name="modalidad_id" id="modalidad_id" class="form-control" readonly value="<?php echo $key['modalidad']; ?>">
		</div>
		<?php }?>
			<?php } ?>
	</form>

</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>

