<?php
    if (isset($_POST['id'])){
        include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/lists.php");

        $mcpios = new Municipios();
        $rows = $mcpios->get("municipio_natal","estado_id = ".$_POST['id'],"municipio");
        $html = "<option value='0'>Seleccionar Municipio</option>";
        if (!empty($rows)) {
            echo $html;
            foreach ($rows as $key) {
                $html="<option value='".$key['id']."'>".$key['municipio']."</option>";
                echo $html;
            }
        }
    }
    else {
        echo "No Hay Registros";
    }
?>