<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<section class="container">
	<h2>Lapso Academico</h2>
</section>
<hr>
<section class="container">
	<a href="?route=quarter&method=create" class="btn btn-primary">Generar Lapso Academico</a>
	<a href="?route=quarterStudents&method=create" class="btn btn-success" >Lapso Academico</a>


</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
	<table class="table table-bordered">
		<thead>
			<th>#</th>
			<th>Lapso</th>
			<th>Opciones</th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ ?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['ID']; ?></td>
						<td><?php echo $key['descripcion']; ?></td>
						<?php ?><td class="text-right">
							<a href="?route=quarter&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Modificar</a>
						<?php if($key['status']==1){?>
							<a href="?route=quarter&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-danger">Desactivar</a>
						<?php }else{?>
							<a href="?route=quarter&method=active&id=<?php echo $key['id']; ?>" class="btn btn-success">Activar</a>
							<?php }?>
						</td><?php ?>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section> -->
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>