<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/students.php");
class StudentsController{
    private $model;

    public function __construct()
    {
        $this->model = new Students();

    }

    public function index()
    {
        $title = "Estudiantes";
        $rows = $this->model->get();
        include('app/views/students_folder/index.php');
    }

    public function show($id)
    {
        $title = "Estudiantes - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/students_folder/show.php');
    }

    public function create()
    {
        $title = "Estudiantes - Registrar Estudiante";
        include('app/views/students_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=studentsAcademic&method=create');
    }

    public function edit($id)
    {
        $title = "Estudiantes - Modificar Estudiante";
        $rows = $this->model->show($id);
        include('app/views/students_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=students&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=students&method=index&state=ok&msj=$rows");
    }

}