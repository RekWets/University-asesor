<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/relations/students/pnfStudents.php");
class PNFstudentsController{
    private $model;

    public function __construct()
    {
        $this->model = new PNFstudents();

    }

    public function index()
    {
        $title = "PNF - Estudiantes";
        $rows = $this->model->get();
        include('app/views/pnf_folder/relations_students/index.php');
    }

    public function show($id)
    {
        $title = "PNF - Estudiante - Detalles";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_students/show.php');
    }

    public function create()
    {
        $title = "PNF - Registrar Estudiante";
        include('app/views/pnf_folder/relations_students/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=pnfStudents&method=index');
    }

    public function edit($id)
    {
        $title = "PNF - Modificar Estudiante";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_students/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=pnfStudents&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=pnfStudents&method=index&state=ok&msj=$rows");
    }
}