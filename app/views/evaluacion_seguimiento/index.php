<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
</section>
<h2>Evaluación y seguimiento del rendimiento académico</h2>
<hr/>
<div>
    <a href="?route=evaluacion&method=archive" class="btn btn-primary">Carga de notas</a>
</div>
</section>
<hr/>
<h3>Lista de Consultas</h3>
<section class="d-flex">
			<form action="?route=evaluacion&method=informacion" method="POST" class="d-flex justify-content-center" style="height:35px">
				<input  type="text" name="clave" size="20" class="form-control form-control-sm mr-1 " value="" required  style="height:35px;" autocomplete="off">	
					<button type="submit" class="btn btn-primary">Buscar</button>
			</form>
</section>
	<table>
		<section class="container p-1 bg-white">
	<table class="table-bordered" style="width: 100%;margin-bottom: 1rem;color: #858796;" >
		<thead>
			<th>#</th>
			<th>Cedula</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Consultas</th>
		</thead>	
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>
<script src="public/js/ConsultasEstadisticas.js"></script>
