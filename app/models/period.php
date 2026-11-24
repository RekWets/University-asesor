<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class Period extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM trayecto WHERE 1";
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
        $sql = "SELECT * FROM trayecto WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
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
        $sql = "INSERT INTO trayecto (trayecto) VALUES (:trayecto)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':trayecto', $form['trayecto']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE trayecto SET trayecto = :trayecto WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':trayecto', $form['trayecto']);
        $pdo->bindParam(':id', $form['id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM trayecto WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}