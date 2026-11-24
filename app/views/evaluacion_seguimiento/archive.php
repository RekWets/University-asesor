<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/header.php");?>

<section class="container d-flex">
    <h2>Carga de notas</h2>
    <a href="?route=evaluacion&method=index" class="btn">
        <style>
            input::file-selector-button {
                font-weight: bold;
                color: white;
                padding: 0.4em;
                border: thin solid #4e73df;
                border-radius:0.35rem;
                Background:rgba(78, 115, 223, 0.9);
            } 
            input::file-selector-button:hover{
                background:rgba(78, 115, 223,1);
            } 
            input::file-selector-button::-moz-selection{
                color:white
            }
        </style>
        <i class="fa fa-arrow-left"></i> Regresar
    </a>
</section>

<hr/>

<section class="container p-1 bg-white">
    <input type="file" id="inputFile" accept=".xlsx">
    <button id="sendData" method="POST" class="btn btn-success">Enviar Datos a MySQL</button>
</section>

<hr/>
<section class="container p-1 bg-white ml-2">
        <div>
    <span>COD:</span>
    <input ID='cod' style="width:80px;text-align:center;" disabled>
    <span>PERIODO :</span>
    <input id='periodo' disabled style="width:75px">
    <span>U.C:</span>
    <input id='uc' disabled style="width:50px">
    <span>CEDULA DOCENTE :</span>
    <input id='docente' style="width:100px" disabled>
    <span>NOMBRE:</span>
    <input id='nombre' disabled style="min-width:340px">
    </section>
<section class="container p-1 bg-white">

    <table id="dataTable" style="display:block;text-align:center;overflow-y:auto;height:360px">
        <thead>
            <tr>
                <th style="width: 240px;border:1px solid #858796;">Cedula Estudiante</th>
                <th style="width: 690px;border:1px solid #858796;">Nombre Estudiante</th>
                <th style="width: 120px;border:1px solid #858796;">Nota Definitiva</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/views/partials/footer.php");?>

<script src="public/js/xlsx.full.min.js"></script>
<script src="public/js/subirnotas.js"></script>
