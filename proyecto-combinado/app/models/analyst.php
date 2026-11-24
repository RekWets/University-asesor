<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/db/db.php");

class Analyst extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM analistas WHERE 1";
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
        $sql = "SELECT * FROM analistas
                INNER JOIN sexo ON analistas.sexo_id=sexo.id
                INNER JOIN condicion ON analistas.condicion_id=condicion.id
                INNER JOIN analista_categoria ON analistas.categoria_analista_id=analista_categoria.id 
                WHERE analistas.id = :id";
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
        $sql = "INSERT INTO analistas (codigo,cedula,apellidos,nombres,sexo_id,fecha_nacimiento,telefono_movil,email,condicion_id,categoria_analista_id) VALUES (:codigo,:cedula,:apellidos,:nombres,:sexo_id,:fecha_nacimiento,:telefono_movil,:email,:condicion_id,:categoria_analista_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':condicion_id', $form['condicion_id']);
        $pdo->bindParam(':categoria_analista_id', $form['categoria_analista_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE analistas SET codigo = :codigo, cedula = :cedula, apellidos = :apellidos, nombres = :nombres, sexo_id = :sexo_id, fecha_nacimiento = :fecha_nacimiento, telefono_movil = :telefono_movil, email = :email, condicion_id = :condicion_id, categoria_analista_id = :categoria_analista_id WHERE id = :id";
        $pdo = $this->conn->prepare($sql); 
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':condicion_id', $form['condicion_id']);
        $pdo->bindParam(':categoria_analista_id', $form['categoria_analista_id']);
        $pdo->bindParam(':id', $form['id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM analistas WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}