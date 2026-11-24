<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/teachers.php");
class TeachersController{
    private $model;

    public function __construct()
    {
        $this->model = new Teachers();

    }

    public function index()
    {
        $title = "Docentes";
        $rows = $this->model->get();
        include('app/views/teachers_folder/index.php');
    }

    public function show($id)
    {
        $title = "Docentes - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/teachers_folder/show.php');
    }

    public function create()
    {
        $title = "Docentes - Registrar Docente";
        include('app/views/teachers_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=teachers&method=index');
    }

    public function edit($id)
    {
        $title = "Docentes - Modificar Docente";
        $rows = $this->model->show($id);
        include('app/views/teachers_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=teachers&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=teachers&method=index&state=ok&msj=$rows");
    }

}