<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Unidades Curriculares</h2>
</section>
<hr>
<section class="container">
	<a href="?route=subjects&method=create" class="btn btn-primary">Nueva Unidad Curricular</a>
	<!--<a href="?route=subjectsTeachers&method=index" class="btn btn-success">Administrar Docentes</a>
	<a href="?route=subjectStudents&method=index" class="btn btn-success" >Administrar Estudiantes</a> -->
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Unidad Curricular</th>
			<th>opciones</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['descripcion']; ?></td>
						<td class="text-right">
							<a href="?route=subjects&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<a href="?route=subjects&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>