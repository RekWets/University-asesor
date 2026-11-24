<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF</h2>
</section>
<hr>
<section class="container">
	<a href="?route=pnf&method=create" class="btn btn-primary">Nuevo PNF</a>
	<!--<a href="?route=pnfTeachers&method=index" class="btn btn-success">Administrar Docentes</a>
	<a href="?route=pnfAnalyst&method=index" class="btn btn-success">Administrar Analistas</a>
	<a href="?route=pnfStudents&method=index" class="btn btn-success" >Administrar Estudiantes</a> -->
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>PNF</th>
			<th>opciones</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['descripcion']; ?></td>
						<td class="text-right">
							<a href="?route=pnf&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<a href="?route=pnf&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>