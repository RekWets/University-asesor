<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trimestre</h2>
</section>
<hr>
<section class="container">
	<a href="?route=quarter&method=create" class="btn btn-primary">Nuevo Trimestre</a>
	<a href="?route=quarterStudents&method=index" class="btn btn-success" >Administrar Estudiantes</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Trimestre</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['trimestre']; ?></td>
						<?php /*?><td class="text-right">
							<a href="?route=quarter&method=show&id=<?php echo $key['id']; ?>" class="btn btn-success">Ver</a>
							<a href="?route=quarter&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Modificar</a>
							<a href="?route=quarter&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-outline-danger">Eliminar</a>
						</td><?php */?>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>