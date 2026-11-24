<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class PeriodStudents extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM trayecto_has_estudiantes 
                INNER JOIN estudiantes ON trayecto_has_estudiantes.estudiante_id=estudiantes.id
                INNER JOIN trayecto ON trayecto_has_estudiantes.trayecto_id=trayecto.id
                WHERE 1 ORDER BY r_id ASC";
        $pdo = $this->conn->prepare($sql);        
        if($pdo->execute()){
            if($pdo->rowCount() > 0){
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }                
            }
            return $data;
        }
    }

    // Get one row in the table by id
    public function show($id){
        $data = "";
        $sql = "SELECT * FROM trayecto_has_estudiantes
                INNER JOIN estudiantes ON trayecto_has_estudiantes.estudiante_id=estudiantes.id
                INNER JOIN trayecto ON trayecto_has_estudiantes.trayecto_id=trayecto.id
                WHERE r_id = :r_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':r_id', $id);
        if($pdo->execute()){
            if($pdo->rowCount() > 0){
                $data = $pdo->fetch(PDO::FETCH_ASSOC);          
            }else{
                $data[] = ['message' => "Not Data", 'status' => "null"];
            }

            return $data;
        }
    }

    // Insert new row in the table
    public function create($form){
        print_r($form);
        $sql = "INSERT INTO trayecto_has_estudiantes (estudiante_id,trayecto_id) VALUES (:estudiante_id,:trayecto_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':estudiante_id', $form['estudiante_id']);
        $pdo->bindParam(':trayecto_id', $form['trayecto_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE trayecto_has_estudiantes SET trayecto_id = :trayecto_id WHERE estudiante_id = :estudiante_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':trayecto_id', $form['trayecto_id']);
        $pdo->bindParam(':estudiante_id', $form['estudiante_id']);
        $pdo->bindParam(':r_id', $form['r_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM trayecto_has_estudiantes WHERE r_id = :r_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':r_id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}