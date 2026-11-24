<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/period.php");
class PeriodController{
    private $model;

    public function __construct()
    {
        $this->model = new Period();

    }

    public function index()
    {
        $title = "Periodo - Trayecto";
        $rows = $this->model->get();
        include('app/views/period_folder/index.php');
    }

    public function show($id)
    {
        $title = "Periodo - Trayecto - Detalles";
        $rows = $this->model->show($id);
        include('app/views/period_folder/show.php');
    }

    public function create()
    {
        $title = "Periodo - Trayecto - Registrar";
        include('app/views/period_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=period&method=index');
    }

    public function edit($id)
    {
        $title = "Periodo - Trayecto - Modificar";
        $rows = $this->model->show($id);
        include('app/views/period_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=period&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=period&method=index&state=ok&msj=$rows");
    }

}