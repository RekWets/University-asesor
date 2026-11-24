<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/relations/teachers/subjectsTeachers.php");
class SubjectsTeachersController{
    private $model;

    public function __construct()
    {
        $this->model = new SubjectsTeachers();

    }

    public function index()
    {
        $title = "Unidades Curriculares - Docentes";
        $rows = $this->model->get();
        include('app/views/subjects_folder/relations_teachers/index.php');
    }

    public function show($id)
    {
        $title = "Unidad Curricular - Docentes - Detalles";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/relations_teachers/show.php');
    }

    public function create()
    {
        $title = "Unidad Curricular - Registrar Docente";
        include('app/views/subjects_folder/relations_teachers/create.php');
    }
    
    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=subjectsTeachers&method=index');
    }

    public function edit($id)
    {
        $title = "Unidad Curricular - Modificar Docente";
        $rows = $this->model->show($id);
        include('app/views/subjects_folder/relations_teachers/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=subjectsTeachers&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=subjectsTeachers&method=index&state=ok&msj=$rows");
    }

}