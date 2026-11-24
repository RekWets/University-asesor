<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/views/partials/header.php"); ?>
<section class="container">
    <h2>Recurso - Registrar -
        <a href="?route=resources&method=index" class="btn">
            <i class="fa fa-arrow-left"></i> Regresar</a>
    </h2>
</section>
<hr>
<section class="container p-4 bg-white">
    <form class="row g-3" action="?route=resources&method=store" method="POST" enctype="multipart/form-data">
        <div class="col-md-4">
            <span>PNF:</span>
            <select class="custom-select custom-select-sm form-control form-control-sm" name="PNF" id="PNF">
                <?php if (!empty($PNF)) { ?>
                    <?php foreach ($PNF as $key) { ?>
                        <Option value='<?php echo $key['descripcion']; ?>'><?php echo $key['descripcion']; ?></Option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-4">
            <span style="font-size: 14px">UNIDAD CURRICULAR: </span>
            <select class="custom-select custom-select-sm form-control form-control-sm" name="Unidad_Curricular" id="Unidad_Curricular">
                <?php if (!empty($unidad_curricular)) { ?>
                    <?php foreach ($unidad_curricular as $key) { ?>
                        <Option value='<?php echo $key['descripcion']; ?>'><?php echo $key['descripcion']; ?></Option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-4">
            <span for="Tipo">Tipo: * </span>
            <select name="Tipo" id='tipo' class="custom-select custom-select-sm form-control form-control-sm">
                <option value="0">link</option>
                <option value="1">Libros</option>
                <option value="1">Cursos</option>
                <option value="2">Videos</option>
            </select>
        </div>
        <div class="col-md-4 my-2">
            <label for="Registro">Titulo: * </label>
            <input type="text" name="Registro" id="Registro" class="form-control" required placeholder="Titulo">
        </div>

        <div class="col-md-4 my-2">
            <label for="">Ruta: * </label>
            <input name="link" id="link" class="form-control" type="text" required placeholder="Archivo"> </input>
        </div>
        <div class="col-md-4 my-2">
            <label for="Descripcion">Descripcion: * </label>
            <textarea name="Descripcion" id="Descripcion" class="form-control" required placeholder="Descripcion"></textarea>
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
                archivoInput.type = 'file';
                archivoInput.accept = (selectedValue === '1') ? 'pdf/*' : 'image/*';
                archivoInput.placeholder = 'Seleccione un archivo';
                break;
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
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/views/partials/footer.php"); ?>