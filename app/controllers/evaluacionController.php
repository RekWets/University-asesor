<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/evaluacion.php");
class evaluacionController{
    private $model;

    public function __construct()
    {
        $this->model = new evaluacion();

    }

    public function index()
    {
        $title = "evaluacion";
        $rows = $this->model->get();
        include('app/views/evaluacion_seguimiento/index.php');
    }

    public function consulta($form)
    {
        $title = "Evaluación y seguimiento del rendimiento académico - Consultar";
        $rows = $this->model->consulta($form);
        include('app/views/evaluacion_seguimiento/consulta.php');
    }
    public function show($form)
{
    $title = "Evaluación y seguimiento del rendimiento académico - Estudiante-Consulta";
    $rows = $this->model->show($form);
    include('app/views/evaluacion_seguimiento/informacion.php');
}
    public function archive()
    {
        $title = "Carga Masiva De Notas";
        include('app/views/evaluacion_seguimiento/archive.php');
    }

   public function upload()
{
    $rows = $this->model->archive();
    header('location: ?route=evaluacion_seguimiento&method=index');
}

}