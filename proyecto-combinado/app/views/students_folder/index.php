<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Estudiantes</h2>
</section>
<hr>
<section class="container">
	<button class="dropdown-toggle btn btn-primary" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Registrar
	</button>
		<!-- Dropdown - User Information -->
	<div class="dropdown-menu dropdown-menu" aria-labelledby="userDropdown">
		<a class="dropdown-item" href="?route=students&method=create">
			<i class="mr-2 text-gray-400"></i>
			Nuevo Ingreso
		</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">
			<i class="mr-2 text-gray-400"></i>
			Regular
		</a>
	</div>
	<a href="?route=subjectStudents&method=create" class="btn btn-success">Asignar Unidad Curricular</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Cedula</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th>opciones</th>
		</thead>
		<tbody id="tb-tables">
					<tr>
						<td>1</td>
						<td>23233445</td>
						<td>Mendoza</td>
						<td>Luis</td>
						<td class="text-right">
							<a href="?route=students&method=show&id=<?php echo $key['id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-book-open"></i></a>
							<a href="?route=students&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<!-- <a href="?route=students&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a> -->
						</td>
					</tr>
		</tbody>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['cedula']; ?></td>
						<td><?php echo $key['apellidos']; ?></td>
						<td><?php echo $key['nombres']; ?></td>
						<td class="text-right">
							<a href="?route=students&method=show&id=<?php echo $key['id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-book-open"></i></a>
							<a href="?route=students&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<!-- <a href="?route=students&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a> -->
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>