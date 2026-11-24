<?php
require_once("app/models/statsinfo.php");
$statsinfo = new Statsinfo();
$json = $statsinfo->getEstadisticas();
echo  $json;
