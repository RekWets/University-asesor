<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/models/statsinfo.php");
class statsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Statsinfo();
    }

    public function index()
    {
        $title = "Informes y Estadisticas";
        $PNF = $this->model->getpnf();
        $UC = $this->model->getuc();
        $trayecto = $this->model->getracyecto();
        $trimestre = $this->model->gettrimestre();
        $getdata = $this->model->getdatainfo();
        include('app/views/stats_folder/index.php');

    }
    public function info (){
        $title = "Info ";
        $info=$this->model->getEstadisticas();
        include('app/views/stats_folder/info.php');
    }
}
