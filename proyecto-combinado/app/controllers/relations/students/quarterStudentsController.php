<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/relations/students/quarterStudents.php");
class QuarterStudentsController{
    private $model;

    public function __construct()
    {
        $this->model = new QuarterStudents();

    }

    public function index()
    {
        $title = "Periodo - Trimestre -  Estudiantes";
        $rows = $this->model->get();
        include('app/views/quarter_folder/relations_students/index.php');
    }

    public function show($id)
    {
        $title = "Periodo - Trimestre -  Estudiante - Detalles";
        $rows = $this->model->show($id);
        include('app/views/quarter_folder/relations_students/show.php');
    }

    public function create()
    {
        $title = "Periodo - Trimestre -  Registrar Estudiante";
        include('app/views/quarter_folder/relations_students/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=quarterStudents&method=index');
    }

    public function edit($id)
    {
        $title = "Periodo - Trimestre -  Modificar Estudiante";
        $rows = $this->model->show($id);
        include('app/views/quarter_folder/relations_students/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=quarterStudents&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=quarterStudents&method=index&state=ok&msj=$rows");
    }
}