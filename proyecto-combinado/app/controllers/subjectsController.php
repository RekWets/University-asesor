<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/subjects.php");
class SubjectsController{
    private $model;

    public function __construct()
    {
        $this->model = new Subjects();

    }

    public function index()
    {
        $title = "Unidades Curriculares";
        $rows = $this->model->get();
        include('app/views/subjects_folder/index.php');
    }

    public function show($id)
    {
        $title = "Unidades Curriculares - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/show.php');
    }

    public function create()
    {
        $title = "Unidades Curriculares - Registrar Unidad Curricular";
        include('app/views/subjects_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=subjects&method=index');
    }

    public function edit($id)
    {
        $title = "Unidades Curriculares - Modificar Unidad Curricular";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=subjects&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=subjects&method=index&state=ok&msj=$rows");
    }

}