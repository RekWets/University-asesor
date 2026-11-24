<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/quarter.php");
class QuarterController{
    private $model;

    public function __construct()
    {
        $this->model = new Quarter();

    }

    public function index()
    {
        $title = "Periodo - Trimestre";
        $rows = $this->model->get();
        include('app/views/quarter_folder/index.php');
    }

    public function show($id)
    {
        $title = "Periodo - Trimestre - Detalles";
        $rows = $this->model->show($id);
        include('app/views/quarter_folder/show.php');
    }

    public function create()
    {
        $title = "Periodo - Trimestre - Registrar";
        include('app/views/quarter_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=quarter&method=index');
    }

    public function edit($id)
    {
        $title = "Periodo - Trimestre - Modificar";
        $rows = $this->model->show($id);
        include('app/views/quarter_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=quarter&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=quarter&method=index&state=ok&msj=$rows");
    }

}