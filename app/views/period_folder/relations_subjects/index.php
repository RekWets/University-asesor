<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>
<section class="container">
	<h2>Periodo - Trayecto - Unidades Curriculares - 
		<a href="?route=period&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<section class="container">
	<a href="?route=periodSubjects&method=create" class="btn btn-primary">Agregar UC</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>Trayecto</th>
			<th>Unidad Curricular</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['trayecto']; ?></td>
						<td><?php echo $key['descripcion']; ?></td>
						<td class="text-right">
							<!-- <a href="?route=periodSubjects&method=show&id=<?php echo $key['trayecto_id']; ?>" class="btn btn-success"><i class="fas fa-fw fa-book-open"></i></a> -->
							<!-- <a href="?route=periodSubjects&method=edit&id=<?php echo $key['r_id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a> -->
							<a href="?route=periodSubjects&method=destroy&id=<?php echo $key['r_id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>