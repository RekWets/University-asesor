<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes</h2>
</section>
<hr>
<section class="container">
	<a href="?route=students&method=create" class="btn btn-primary">Nueva tabla</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Data</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['data']; ?></td>
						<td class="text-right">
							<a href="?route=students&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Modificar</a>
							<a href="?route=students&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-outline-danger">Eliminar</a>
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>