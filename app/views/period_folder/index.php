<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trayecto</h2>
</section>
<hr>
<section class="container">
	<a href="?route=period&method=create" class="btn btn-primary">Nuevo Trayecto</a>
	<a href="?route=periodStudents&method=index" class="btn btn-success" >Administrar Estudiantes</a>
	<a href="?route=periodSubjects&method=index" class="btn btn-success">Administrar UC</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Trayecto</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['id']; ?></td>
						<td><?php echo $key['trayecto']; ?></td>
						<?php /*?><td class="text-right">
							<a href="?route=period&method=show&id=<?php  echo $key['id']; ?>" class="btn btn-success">Ver</a>
							<a href="?route=period&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Modificar</a>
							<a href="?route=period&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-outline-danger">Eliminar</a>
						</td><?php	*/?>
					</tr>
			<?php	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>