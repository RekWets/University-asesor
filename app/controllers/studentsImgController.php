<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/lists.php");
class PictureController{
    private $model;

    public function __construct()
    {
        $this->model = new StudentsPicture();

    }

    public function index()
    {
        $title = "Estudiantes";
        $rows = $this->model->get();
        include('app/views/students_folder/relations_academic/index.php');
    }

    public function show($id)
    {
        $title = "Estudiantes - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/students_folder/relations_academic/show.php');
    }

    public function create()
    {
        $title = "Estudiantes - Registrar Estudiante";
        include('app/views/students_folder/img_folders/save_img.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=students&method=index');
    }

    public function edit($id)
    {
        $title = "Estudiantes - Modificar Estudiante";
        $rows = $this->model->show($id);
        include('app/views/students_folder/relations_academic/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=studentsAcademic&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=studentsAcademic&method=index&state=ok&msj=$rows");
    }

}