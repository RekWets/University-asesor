<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes - Modificar - <a href="?route=students&method=create" class="btn"><i class="fa fa-arrow-left"></i> Regresar</a></h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=students&method=update" method="POST">
		<div class="form-group">
			<label for="data">Data: * </label>
			<input type="text" name="data" id="data" class="form-control" required placeholder="Añade algún dato..." value="<?php echo $rows['data']; ?>">
		</div>
		<hr>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>