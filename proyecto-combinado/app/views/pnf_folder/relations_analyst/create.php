<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/pnf.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/analyst.php");?>
<section class="container">
	<h2>PNF - Registrar Analista -
		<a href="?route=pnfAnalyst&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
	<form class="row g-3" action="?route=pnfAnalyst&method=store" method="POST">
		<div class="col-md-4 my-2">
			<label for="pnf_id">PNF: * </label>
			<select name="pnf_id" id="pnf_id" class="form-control" required>
				<option value="0">Seleccionar PNF</option>
				<?php $pnf = new PNF(); ?>
				<?php $rows = $pnf->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['descripcion']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<div class="col-md-4 my-2">
			<label for="analista_id">Analista: * </label>
			<select name="analista_id" id="analista_id" class="form-control" required>
				<option value="0">Seleccionar PNF</option>
				<?php $analist = new Analyst(); ?>
				<?php $rows = $analist->get(); ?>
				<?php if (!empty($rows)){ ?>
				<?php 	foreach ($rows as $key){ ?>
						<option value="<?php echo($key['id']); ?>"><?php echo($key['nombres']); ?></option>
				<?php 	}?>
				<?php }?>
			</select>
		</div>
		<hr class="col-12 my-2">
		<div class="col-md-4 my-2">
			<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
		</div>
	</form>
</section>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>