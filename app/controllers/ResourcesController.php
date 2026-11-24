<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/resources.php");
class resourcesController{
    private $model;

    public function __construct()
    {
        $this->model = new Resources();

    }

    public function index()
    {
        $title = "Gestion y recursos educativos";
        $rows = $this->model->get();
        include('app/views/resources_folder/index.php');
    }

    public function create()
    {
        $PNF = $this->model->PNF();
        $unidad_curricular = $this->model->unidad_curricular();
        $title = "Recursos - Registrar Recurso";
        include('app/views/resources_folder/create.php');
    }
    
   public function store($formData, $fileData)
{
    $rows = $this->model->create($formData, $fileData);
    header('location: ?route=resources&method=index');
}
public function edit($id)
{
    $rows = $this->model->show($id);
    include('app/views/resources_folder/edit.php');
}
public function update($formData, $fileData)
{
    $rows = $this->model->update($formData, $fileData);
    header('location: ?route=resources&method=index');
}

public function destroy($id)
{
    $rows = $this->model->delete($id);
    header("location: ?route=resources&method=index&state=ok&msj=$rows");
}
public function download($id)
{
    $this->model->download($id);
}

}
