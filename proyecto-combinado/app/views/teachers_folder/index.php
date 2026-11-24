<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Docentes</h2>
</section>
<hr>
<section class="container">
	<a href="?route=teachers&method=create" class="btn btn-primary">Nuevo Docente</a>
	<a href="?route=subjectsTeachers&method=create" class="btn btn-success">Asignar Unidad Curricular</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Codigo</th>
			<th>Cedula</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th>Correo electronico</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['codigo']; ?></td>
						<td><?php echo $key['cedula']; ?></td>
						<td><?php echo $key['apellidos']; ?></td>
						<td><?php echo $key['nombres']; ?></td>
						<td><?php echo $key['email']; ?></td>
						<td class="text-right">
							<a href="?route=teachers&method=show&id=<?php echo $key['id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-book-open"></i></a>
							<a href="?route=teachers&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<!-- <a href="?route=teachers&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a> -->
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>