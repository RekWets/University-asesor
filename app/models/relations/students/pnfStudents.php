<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class PNFstudents extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM pnf_has_estudiantes 
                INNER JOIN estudiantes ON pnf_has_estudiantes.estudiante_id=estudiantes.id
                INNER JOIN pnf ON pnf_has_estudiantes.pnf_id=pnf.id WHERE 1";
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
        $sql = "SELECT * FROM pnf_has_estudiantes
                INNER JOIN estudiantes ON pnf_has_estudiantes.estudiante_id=estudiantes.id
                INNER JOIN pnf ON pnf_has_estudiantes.pnf_id=pnf.id
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
        $sql = "INSERT INTO pnf_has_estudiantes (estudiante_id,pnf_id) VALUES (:estudiante_id,:pnf_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':estudiante_id', $form['estudiante_id']);
        $pdo->bindParam(':pnf_id', $form['pnf_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE pnf_has_estudiantes SET pnf_id = :pnf_id WHERE r_id = :r_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':pnf_id', $form['pnf_id']);
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
        $sql = "DELETE FROM pnf_has_estudiantes WHERE r_id = :r_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':r_id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}