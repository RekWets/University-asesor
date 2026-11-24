<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/header.php"); $id = $_GET['id'];
?>

<section class="container">
	<h2>Recurso - Registrar -
		<a href="?route=resources&method=index" class="btn">
			<i class="fa fa-arrow-left"></i> Regresar</a>
	</h2>
</section>
<hr>
<section class="container p-4 bg-white">
<form class="row g-3" action="?route=resources&method=update" method="POST" enctype="multipart/form-data">  <div class="col-12">
<input name="id" id="id" class="form-control" hidden required value="<?php echo $rows['id'];?>">
            <h5>Tipo de Recurso</h5>
            <hr>
        </div>

        <div class="col-md-2 my-2">
            <label for="PNF">PNF: * </label>
            <input name="PNF" id="PNF" class="form-control"  required value="<?php echo $rows['PNF'];?>">
        </div>

        <div class="col-md-4 my-2">
            <label for="Registro">Titulo: * </label>
            <input type="text" name="Registro" id="Registro" class="form-control" required value="<?php echo $rows['Registro'];?>">
        </div>

        <div class="col-md-4 my-2">
            <label for="Unidad_Curricular">Unidad Curricular: * </label>
            <input type="text" name="Unidad_Curricular" id="Unidad_Curricular" class="form-control" required value="<?php echo $rows['Unidad_Curricular'];?>">
        </div>

        <div class="col-md-4 my-2">
            <label for="Descripcion">Descripcion: * </label>
            <input name="Descripcion" id="Descripcion" class="form-control" required value="<?php echo $rows['Descripcion'];?>"></input>
        </div>

        <div class="col-md-4 my-2">
			<label for="Tipo">Tipo: * </label>
			<select name="Tipo" id='tipo' class="form-control">
				<option value="0">Link</option>
				<option value="1">Video</option>
				<option value="2">Imagen</option>        
			</select>
            </div>
        <div class="col-md-4 my-2">
            <label for="">Archivo: * </label>
            <input name="link" id="link"  class="form-control" type="text" required placeholder="Archivo" value="<?php echo $rows['link'];?>"> </input>
            </div>
        <div class="col-md-4 my-2">
            <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Finalizar registro</button>
        </div>

    </form>
</section>
<script>
const tipoSelect = document.getElementById('tipo');
const archivoInput = document.getElementById('link');

function Tipochange() {
  const selectedValue = tipoSelect.value;

  switch (selectedValue) {
    case '0': 
      archivoInput.type = 'text';
      archivoInput.placeholder = 'Ingrese la URL del enlace';
      break;
    case '1': 
    case '2': 
      archivoInput.type = 'file';
      archivoInput.accept = (selectedValue === '1') ? 'video/*' : 'image/*';
      archivoInput.placeholder = 'Seleccione un archivo';
      break;
    default:
      archivoInput.type = 'text';
      archivoInput.placeholder = 'Archivo';
  }
}
Tipochange();
tipoSelect.addEventListener('change', Tipochange);
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/views/partials/footer.php");?>