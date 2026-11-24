<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/relations/subjects/periodSubjects.php");
class PeriodSubjectsController{
    private $model;

    public function __construct()
    {
        $this->model = new PeriodSubjects();

    }

    public function index()
    {
        $title = "Periodo - Trayecto - Unidad Curricular";
        $rows = $this->model->get();
        include('app/views/period_folder/relations_subjects/index.php');
    }

    public function show($id)
    {
        $title = "Periodo - Trayecto - Unidad Curricular - Detalles";
        $rows = $this->model->show($id);
        include('app/views/period_folder/relations_subjects/show.php');
    }

    public function create()
    {
        $title = "Periodo - Trayecto - Unidad Curricular - Registrar";
        include('app/views/period_folder/relations_subjects/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=periodSubjects&method=index');
    }

    public function edit($id)
    {
        $title = "Periodo - Trayecto - Unidad Curricular - Modificar";
        $rows = $this->model->show($id);
        include('app/views/period_folder/relations_subjects/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=periodSubjects&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=periodSubjects&method=index&state=ok&msj=$rows");
    }

}