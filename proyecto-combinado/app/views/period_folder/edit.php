<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Modificar Periodo - 
		<a href="?route=period&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=period&method=update" method="POST">
		<div class="form-group">
			<label for="id">ID: * </label>
			<input type="text" name="id" id="id" class="form-control" required value="<?php echo $rows['id']; ?>">
		</div>
		<div class="form-group">
			<label for="trayecto">Trayecto: * </label>
			<input type="text" name="trayecto" id="trayecto" class="form-control" required value="<?php echo $rows['trayecto']; ?>">
		</div>
		<hr>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>