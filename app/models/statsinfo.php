<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/db/db.php");

class Statsinfo extends BDConexion
{
    public $conn;

    public function __construct()
    {
        $this->conn = parent::__construct();
    }
    public function getpnf()
    {
        $data = [];
        $sql = "SELECT * FROM PNF";
        $pdo = $this->conn->prepare($sql);
        if ($pdo->execute()) {
            if ($pdo->rowCount() > 0) {
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    }
    public function getuc()
    {
        $data = [];
        $sql = "SELECT * FROM unidad_curricular";
        $pdo = $this->conn->prepare($sql);
        if ($pdo->execute()) {
            if ($pdo->rowCount() > 0) {
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    }
    public function getracyecto()
    {
        $data = [];
        $sql = "SELECT * FROM trayecto";
        $pdo = $this->conn->prepare($sql);
        if ($pdo->execute()) {
            if ($pdo->rowCount() > 0) {
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    }
    public function gettrimestre()
    {
        $data = [];
        $sql = "SELECT * FROM trimestre";
        $pdo = $this->conn->prepare($sql);
        if ($pdo->execute()) {
            if ($pdo->rowCount() > 0) {
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    } 
    public function getdatainfo()
    {
        $data = [];
        $sql = "SELECT * FROM informes_estadisticas_Asistencias";
        $pdo = $this->conn->prepare($sql);
        if ($pdo->execute()) {
            if ($pdo->rowCount() > 0) {
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    } 
    public function getEstadisticas()
    {
        try {
            $allData = array();

            $columnsA = ['id', 'PNF', 'trayecto','unidad_curricular', 'Asistencias', 'fecha'];
            $table = 'informes_estadisticas_Asistencias';
            $sql = "SELECT " . implode(", ", $columnsA) . " FROM $table";
            $result = $this->conn->query($sql);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            $allData['Asistencias'] = $data;

            $columnsE = ['id', 'PNF', 'trayecto', 'unidad_curricular', 'evolucion_matricula', 'fecha'];
            $table = 'informes_estadisticas_evolucion_matricula';
            $sql = "SELECT " . implode(", ", $columnsE) . " FROM $table";
            $result = $this->conn->query($sql);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            $allData['Evolucion'] = $data;
    
            $columnsR = ['id', 'PNF', 'trayecto', 'unidad_curricular', 'rendimiento_academico', 'fecha'];
            $table = 'informes_estadisticas_rendimiento_academico';
            $sql = "SELECT " . implode(", ", $columnsR) . " FROM $table";
            $result = $this->conn->query($sql);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            $allData['Rendimiento'] = $data;
            
            $columnsM = ['tuc.trayecto_id', 'tuc.unidad_curricular_id','uc.descripcion'];
            $table = 'trayecto_has_unidad_curricular';
            $sql = "SELECT " . implode(", ", $columnsM) . " FROM $table tuc INNER JOIN unidad_curricular uc ON tuc.unidad_curricular_id = uc.id ";
            $result = $this->conn->query($sql);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            $materias = [];
            foreach ($data as $row) {
                $trayecto_id = $row['trayecto_id'];
                $materias[$trayecto_id][] = [
                    'trayecto_id' => $row['trayecto_id'],
                    'unidad_curricular_id' => $row['unidad_curricular_id'],
                    'descripcion' => $row['descripcion']
                ];
            }
        
            $allData['Materias'] = $materias;
        
            $json = json_encode($allData, JSON_UNESCAPED_UNICODE);
            return $json;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    
    }

