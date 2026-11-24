<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/relations/analyst/pnfAnalyst.php");
class PNFanalystController{
    private $model;

    public function __construct()
    {
        $this->model = new PNFanalyst();

    }

    public function index()
    {
        $title = "PNF - Analistas";
        $rows = $this->model->get();
        include('app/views/pnf_folder/relations_analyst/index.php');
    }

    public function show($id)
    {
        $title = "PNF - Analista - Detalles";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_analyst/show.php');
    }

    public function create()
    {
        $title = "PNF - Registrar Analista";
        include('app/views/pnf_folder/relations_analyst/create.php');
    }

    public function store($form)
    {
        $rows = $this->model->create($form);
        header('location: ?route=pnfAnalyst&method=index');
    }

    public function edit($id)
    {
        $title = "PNF - Modificar Analista";
        $rows = $this->model->show($id);
        include('app/views/pnf_folder/relations_analyst/edit.php');
    }

    public function update($form)
    {
        $rows = $this->model->update($form);
        header("location: ?route=pnfAnalyst&method=index&state=ok&msj=$rows");
    }

    public function destroy($id)
    {
        $rows = $this->model->delete($id);
        header("location: ?route=pnfAnalyst&method=index&state=ok&msj=$rows");
    }

}