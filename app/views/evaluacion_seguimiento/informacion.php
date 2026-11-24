<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
</section>
<h2>Evaluación y seguimiento del rendimiento académico - Consulta
<a href="?route=evaluacion&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
</h2>

</section>
<hr/>
<h3>Lista de Consultas</h3>
	<table>
		<section class="container p-1 bg-white">
	<table class="table table-bordered" >
		<thead>
			<th>#</th>
			<th>Cedula</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Consultas</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['cedula']; ?></td>
						<td><?php echo $key['nombres']; ?></td>
						<td><?php echo $key['apellidos']; ?></td>
						<td class="text-center">
                        <form method="POST" action="?route=evaluacion&method=consulta">
    <input type="hidden" name="clave" value="<?php echo $key['cedula']; ?>">
    <button type="submit" class="btn btn-info">Consultar</button>
</form>
						</td>
					</tr>
			<?php }?>
			<?php } ?>

		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>
<script src="public/js/ConsultasEstadisticas.js"></script>
