<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trimestre - Estudiantes - 
		<a href="?route=quarter&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container">
	<a href="?route=quarterStudents&method=create" class="btn btn-primary">Registrar</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>Trimestre</th>
			<th>Cedula</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['trimestre']; ?></td>
						<td><?php echo $key['cedula']; ?></td>
						<td><?php echo $key['apellidos']; ?></td>
						<td><?php echo $key['nombres']; ?></td>
						<td class="text-right">
							<a href="?route=students&method=show&id=<?php echo $key['estudiante_id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-book-open"></i></a>
							<!-- <a href="?route=quarterStudents&method=edit&id=<?php echo $key['r_id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a> -->
							<!-- <a href="?route=quarterStudents&method=destroy&id=<?php echo $key['r_id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a> -->
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>