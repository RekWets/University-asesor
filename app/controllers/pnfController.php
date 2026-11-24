<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/pnf.php");
class PNFController{
    private $model;

    public function __construct()
    {
        $this->model = new PNF();

    }

    public function index()
    {
        $title = "PNF";
        $rows = $this->model->get();
        include('app/views/pnf_folder/index.php');
    }

    public function show($id)
    {
        $title = "PNF - Detalles del Registro";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/show.php');
    }

    public function create()
    {
        $title = "PNF - Registrar PNF";
        include('app/views/pnf_folder/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=pnf&method=index');
    }

    public function edit($id)
    {
        $title = "PNF - Modificar PNF";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=pnf&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=pnf&method=index&state=ok&msj=$rows");
    }

}