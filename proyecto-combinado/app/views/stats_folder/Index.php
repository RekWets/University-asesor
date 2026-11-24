<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/views/partials/header.php"); ?>

<section class="container">
	<h2>Informes y Estadisticas</h2>
</section>
<hr>
<section class="col-md-2 h-100 d-column  float-right">
	<span>PNF:</span>
	<select class="custom-select custom-select-sm form-control form-control-sm" id="pnf"> 
		<?php if (!empty($PNF)) { ?>
			<?php foreach ($PNF as $key) { ?>
				<Option value='<?php echo $key['id']; ?>'><?php echo $key['descripcion']; ?></Option>
			<?php } ?>
		<?php } ?>
	</select>
	<span>TRAYECTO:</span>
	<select class="custom-select custom-select-sm form-control form-control-sm" id="trayecto">
		<?php if (!empty($trayecto)) { ?>
			<?php foreach ($trayecto as $key) { ?>
				<Option value='<?php echo $key['id']; ?>'><?php echo $key['trayecto']; ?></Option>
			<?php } ?>
		<?php } ?>
	</select>
	<span>TRIMESTRE:</span>
	<select class="custom-select custom-select-sm form-control form-control-sm" id="trimestre">
		<?php if (!empty($trimestre)) { ?>
			<?php foreach ($trimestre as $key) { ?>
		<Option value='<?php echo $key['id']; ?>'><?php echo $key['trimestre']; ?></Option>
			<?php } ?>
		<?php } ?>
	</select>
	<span style="font-size: 14px">UNIDAD CURRICULAR: </span>
	<select class="custom-select custom-select-sm form-control form-control-sm" id="UC">
		<?php if (!empty($UC)) { ?>
			<?php foreach ($UC as $key) { ?>
				<Option value='<?php echo $key['id']; ?>'><?php echo $key['descripcion']; ?></Option>
			<?php } ?>
		<?php } ?>
	</select>
	<span>VER:</span>
	<select id='ver' class="custom-select custom-select-sm form-control form-control-sm">
				<Option value="1">Asistencias</Option>
				<Option value="2">Evolucion Matricula</Option>
				<Option value="3">Rendimiento Academico</Option>
	</select>
	<span>DESDE:</span>
  
	<input type="date" id="desde" name="desde"  class="form-control form-control-sm">
	<span>HASTA:</span>
	<input type="date" id="hasta" name="hasta"  class="form-control form-control-sm">
	<div class="my-2">
		<span style="font-size: 14px">TIPO DE DESCARGAS:</span>
		<!-- <Button class="rounded-0 border-0 bg-white"> <img src='/php/uptt-project/public/img/excel.svg' width="24px" height="24px"></Button> -->
		<Button onclick="donwloadpdf()"ID="downloadPdf"class="rounded-0 border-0 bg-white"> <img src='/php/uptt-project/public/img/pdf.svg' width="24px" height="24px"></Button>



	</div>
</section>
<section class=" rounded-1 border-0 col-md-10 justify-content-center align-items-center d-flex" style="height:auto">
	<canvas id="myChart" width="auto" height="auto"></canvas>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/views/partials/footer.php"); ?>
<script src="/php/uptt-project/public/js/statsinfo.js"></script>
<script src="/php/uptt-project/public/js/jspdf.debug.js"></script>
<script src="/php/uptt-project/public/js/jspdf.umd.min.js"></script>

