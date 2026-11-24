<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/analyst.php");
class AnalystController{
    private $model;

    public function __construct()
    {
        $this->model = new Analyst();

    }

    public function index()
    {
        $title = "Analistas";
        $rows = $this->model->get();
        include('app/views/analyst_folder/index.php');
    }

    public function show($id)
    {
        $title = "Analistas - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/analyst_folder/show.php');
    }

    public function create()
    {
        $title = "Analistas - Registrar Analista";
        include('app/views/analyst_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=analyst&method=index');
    }

    public function edit($id)
    {
        $title = "Analistas - Modificar Analista";
        $rows = $this->model->show($id);
        include('app/views/analyst_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=analyst&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=analyst&method=index&state=ok&msj=$rows");
    }

}