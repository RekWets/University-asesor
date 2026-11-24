<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trimestre - Modificar -  
		<a href="?route=quarter&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form action="?route=quarter&method=update" method="POST">
		<div class="form-group">
			<label for="id">ID: * </label>
			<input type="text" name="id" id="id" class="form-control" readonly value="<?php echo $rows['id']; ?>">
		</div>
		<div class="form-group">
			<label for="trimestre">Trimestre: * </label>
			<input type="text" name="trimestre" id="trimestre" class="form-control" required value="<?php echo $rows['trimestre']; ?>">
		</div>
		<hr>
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>