<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Unidades Curriculares - Modificar - 
		<a href="?route=subjects&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=subjects&method=update" method="POST">
		<div class="col-md-4 my-2">
			<label for="descripcion">Unidad Curricular: * </label>
			<input type="text" name="descripcion" id="descripcion" class="form-control" required placeholder="Añade algún dato..." value="<?php echo $rows['descripcion']; ?>">
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
			<button type="submit" class="btn btn-info btn-lg"><i class="fa fa-check"></i> Finalizar modificación</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>