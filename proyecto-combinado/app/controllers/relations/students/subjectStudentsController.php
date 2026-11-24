<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/relations/students/subjectStudents.php");
class SubjectStudentsController{
    private $model;

    public function __construct()
    {
        $this->model = new SubjectStudents();

    }

    public function index()
    {
        $title = "Unidades Curriculares - Estudiantes";
        $rows = $this->model->get();
        include('app/views/subjects_folder/relations_students/index.php');
    }

    public function show($id)
    {
        $title = "Unidad Curricular - Estudiantes - Detalles";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/relations_students/show.php');
    }

    public function create()
    {
        $title = "Unidad Curricular - Registrar Estudiante";
        include('app/views/subjects_folder/relations_students/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=subjectStudents&method=index');
    }

    public function edit($id)
    {
        $title = "Unidad Curricular - Modificar Estudiante";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/relations_students/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=subjectStudents&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=subjectStudents&method=index&state=ok&msj=$rows");
    }

}