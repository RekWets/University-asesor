<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/pnf.php");?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<section class="container">
	<h2>Generar
		<a href="?route=quarter&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
	
<select class="form-select" aria-label="Default select example">
  <option selected>Lapso Academico</option>
  <option value="1">2024-01</option>
  <option value="2">2024 -02</option>
  <option value="3">2024-03</option>
</select>
<select class="form-select" aria-label="Default select example">
  <option selected>PNF</option>
  <option value="1">Informatica</option>
  <option value="2">Administracion</option>
  <option value="3">Contaduria</option>
  <option value="4">Turismo</option>
</select>
<select class="form-select" aria-label="Default select example">
  <option selected>Trayecto</option>
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>

</select>
<select class="form-select" aria-label="Default select example">
  <option selected>Trimestre</option>
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
</select>
		

<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"><a href="?route=quarter&method=index" class="btn"></i>Generar Reporte</button>
		</div>
	</form>
</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>