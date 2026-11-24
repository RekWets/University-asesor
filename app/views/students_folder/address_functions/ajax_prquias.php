<?php
    if (isset($_POST['id'])){
        include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/lists.php");

        $mcpios = new Parroquias();
        $rows = $mcpios->get("parroquia_natal","mcpio_id = ".$_POST['id'],"parroquia");
        $html = "<option value='0'>Seleccionar Parroquia</option>";
        if (!empty($rows)) {
            echo $html;
            foreach ($rows as $key) {
                $html="<option value='".$key['id']."'>".$key['parroquia']."</option>";
                echo $html;
            }
        }
    }
    else {
        echo "No Hay Registros";
    }
?>