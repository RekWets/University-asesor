<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");
?>
<section class="container">
	<h2>Gestion y recursos educativos</h2>
	
</section>
<hr>
<section class="container">
	<a href="?route=resources&method=create" class="btn btn-primary">Nuevo Recurso</a>
</section>
<div class="my-3"></div>
<section class="container p-4 bg-white">
<table class="table table-bordered">
		<thead>
			<th>Recurso</th>
			<th>PNF</th>
			<th>Unidad Curricular</th>
			<th>Descripcion</th>
			<th>Ruta</th>
			<th></th>
		</thead>
		<tbody id="tb-tables">
			<?php if (!empty($rows)){ 
				?>
			<?php 	foreach($rows as $key){ ?>
					<tr>
						<td><?php echo $key['Registro']; ?></td>
						<td><?php echo $key['PNF']; ?></td>
						<td><?php echo $key['Unidad_Curricular']; ?></td>
						<td><?php echo $key['Descripcion']; ?></td>
            <td>
    <?php if (substr($key['link'], -4) === '.pdf'): ?>
        <span><?php echo $key['link']; ?></span>
    <?php else: ?>
        <a href="<?php echo $key['link']; ?>"><?php echo $key['link']; ?></a>
    <?php endif; ?>
</td>



						<td style="display:flex;">
            <a href="#"  onclick="downloadFile(<?php echo $key['id']; ?>)"class="btn btn-info"><i class="fas fa-fw fa-download"></i></a>
							<a href="?route=resources&method=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning"><i class="fas fa-fw fa-pencil-alt"></i></a>
							<a href="?route=resources&method=destroy&id=<?php echo $key['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>

						</td>
					</tr>
			<?php 	}?>
			<?php } ?>
		</tbody>
	</table>	
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>
<script>

function downloadFile(id) {
    // Redirecciona a la URL del controlador con el ID del archivo para descargar
    window.location.href = '?route=resources&method=download&id=' + id;
}
</script>