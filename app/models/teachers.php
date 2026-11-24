<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class Teachers extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM docentes WHERE 1";
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
        $sql = "SELECT * FROM docentes
                INNER JOIN sexo ON docentes.sexo_id=sexo.id
                INNER JOIN delegado ON docentes.delegado_id=delegado.id
                INNER JOIN cargo_coordinacion ON docentes.cargo_coordinacion_id=cargo_coordinacion.id
                INNER JOIN condicion ON docentes.condicion_id=condicion.id
                INNER JOIN dedicacion ON docentes.dedicacion_id=dedicacion.id
                INNER JOIN docente_categoria ON docentes.docente_categoria_id=docente_categoria.id 
                INNER JOIN modalidad ON docentes.modalidad_id=modalidad.id
                WHERE docentes.id = :id";
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
        $sql = "INSERT INTO docentes (codigo,cedula,apellidos,nombres,sexo_id,fecha_nacimiento,telefono_movil,email,linea_investigacion,delegado_id,cargo_coordinacion_id,condicion_id,dedicacion_id,docente_categoria_id,modalidad_id) VALUES (:codigo,:cedula,:apellidos,:nombres,:sexo_id,:fecha_nacimiento,:telefono_movil,:email,:linea_investigacion,:delegado_id,:cargo_coordinacion_id,:condicion_id,:dedicacion_id,:docente_categoria_id,:modalidad_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':linea_investigacion', $form['linea_investigacion']);
        $pdo->bindParam(':delegado_id', $form['delegado_id']);
        $pdo->bindParam(':cargo_coordinacion_id', $form['cargo_coordinacion_id']);
        $pdo->bindParam(':condicion_id', $form['condicion_id']);
        $pdo->bindParam(':dedicacion_id', $form['dedicacion_id']);
        $pdo->bindParam(':docente_categoria_id', $form['docente_categoria_id']);
        $pdo->bindParam(':modalidad_id', $form['condicion_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE docentes SET codigo = :codigo, cedula = :cedula, apellidos = :apellidos, nombres = :nombres, sexo_id = :sexo_id, fecha_nacimiento = :fecha_nacimiento, telefono_movil = :telefono_movil, email = :email, linea_investigacion = :linea_investigacion, delegado_id = :delegado_id, cargo_coordinacion_id = :cargo_coordinacion_id, condicion_id = :condicion_id, dedicacion_id = :dedicacion_id, docente_categoria_id = :docente_categoria_id, modalidad_id = :modalidad_id WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':linea_investigacion', $form['linea_investigacion']);
        $pdo->bindParam(':delegado_id', $form['delegado_id']);
        $pdo->bindParam(':cargo_coordinacion_id', $form['cargo_coordinacion_id']);
        $pdo->bindParam(':condicion_id', $form['condicion_id']);
        $pdo->bindParam(':dedicacion_id', $form['dedicacion_id']);
        $pdo->bindParam(':docente_categoria_id', $form['docente_categoria_id']);
        $pdo->bindParam(':modalidad_id', $form['condicion_id']);
        $pdo->bindParam(':id', $form['id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM docentes WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}