<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>PNF - Docentes - 
		<a href="?route=pnf&method=index" class="btn">
			<i class="fa fa-arrow-left"></i>Regresar</a>
	</h2>
</section>
<hr>
<!--<section class="container">
	<a href="?route=pnf&method=create" class="btn btn-primary">Nuevo PNF</a>
</section>-->
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>PNF</th>
			<th>Docente</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['pnf_id']; ?></td>
						<td><?php echo $key['docente_id']; ?></td>
						<td class="text-right">
							<a href="?route=pnfTeachers&method=show&id=<?php echo $key['pnf_id']; ?>" class="btn btn-success">Ver</a>
							<a href="?route=pnfTeachers&method=edit&id=<?php echo $key['pnf_id']; ?>" class="btn btn-warning">Modificar</a>
							<a href="?route=pnfTeachers&method=destroy&id=<?php echo $key['pnf_id']; ?>" class="btn btn-outline-danger">Eliminar</a>
						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>