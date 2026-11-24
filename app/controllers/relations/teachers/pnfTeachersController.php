<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/relations/teachers/pnfTeachers.php");
class PNFteachersController{
    private $model;

    public function __construct()
    {
        $this->model = new PNFteachers();

    }

    public function index()
    {
        $title = "PNF - Docentes";
        $rows = $this->model->get();
        include('app/views/pnf_folder/relations_teachers/index.php');
    }

    public function show($id)
    {
        $title = "PNF - Docente - Detalles";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_teachers/show.php');
    }

    public function create()
    {
        $title = "PNF - Registrar Docente";
        include('app/views/pnf_folder/relations_teachers/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=pnfTeachers&method=index');
    }

    public function edit($id)
    {
        $title = "PNF - Modificar docente";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_teachers/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=pnfTeachers&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=pnfTeachers&method=index&state=ok&msj=$rows");
    }
}