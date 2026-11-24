<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/db/db.php");

class Students extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM estudiantes
                INNER JOIN estudiantes_datos_academicos ON estudiantes.id=estudiantes_datos_academicos.estudiante_id
                WHERE estudiantes.id";
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
        $sql = "SELECT * FROM estudiantes
                INNER JOIN sexo ON estudiantes.sexo_id=sexo.id
                INNER JOIN estado_civil ON estudiantes.estado_civil_id=estado_civil.id
                INNER JOIN estado_natal ON estudiantes.estado_natal_id=estado_natal.id
                INNER JOIN municipio_natal ON estudiantes.municipio_natal_id=municipio_natal.id
                INNER JOIN parroquia_natal ON estudiantes.parroquia_natal_id=parroquia_natal.id
                INNER JOIN pais ON estudiantes.pais_id=pais.id
                INNER JOIN estudiantes_datos_academicos ON estudiantes.id=estudiantes_datos_academicos.estudiante_id
                INNER JOIN malla ON estudiantes_datos_academicos.malla_id=malla.id
                INNER JOIN actividad ON estudiantes_datos_academicos.actividad_id=actividad.id
                INNER JOIN tipo_ingreso ON estudiantes_datos_academicos.tipo_ingreso_id=tipo_ingreso.id
                INNER JOIN tipo_institucion ON estudiantes_datos_academicos.tipo_institucion_id=tipo_institucion.id
                INNER JOIN nse ON estudiantes_datos_academicos.nse_id=nse.id
                INNER JOIN turno ON estudiantes_datos_academicos.turno_id=turno.id
                INNER JOIN grupo ON estudiantes_datos_academicos.grupo_id=grupo.id
                INNER JOIN modalidad ON estudiantes_datos_academicos.modalidad_id=modalidad.id
                WHERE estudiantes.id = :id";
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
        $sql = "INSERT INTO estudiantes (cedula,apellidos,nombres,fecha_nacimiento,edad,sexo_id,estado_civil_id,estado_natal_id,municipio_natal_id,parroquia_natal_id,email,telefono_movil,telefono_resd,otro_telefono,direccion_resd,pais_id,foto,rol_id) VALUES (:cedula,:apellidos,:nombres,:fecha_nacimiento,:edad,:sexo_id,:estado_civil_id,:estado_natal_id,:municipio_natal_id,:parroquia_natal_id,:email,:telefono_movil,:telefono_resd,:otro_telefono,:direccion_resd,:pais_id,:foto,:rol_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':edad', $form['edad']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':estado_civil_id', $form['estado_civil_id']);
        $pdo->bindParam(':estado_natal_id', $form['estado_natal_id']);
        $pdo->bindParam(':municipio_natal_id', $form['municipio_natal_id']);
        $pdo->bindParam(':parroquia_natal_id', $form['parroquia_natal_id']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':telefono_resd', $form['telefono_resd']);
        $pdo->bindParam(':otro_telefono', $form['otro_telefono']);
        $pdo->bindParam(':direccion_resd', $form['direccion_resd']);
        $pdo->bindParam(':pais_id', $form['pais_id']);
        $pdo->bindParam(':foto', $form['foto']);
        $pdo->bindParam(':rol_id', $form['rol_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE estudiantes SET cedula = :cedula, apellidos = :apellidos, nombres = :nombres, fecha_nacimiento = :fecha_nacimiento, edad = :edad, sexo_id = :sexo_id, estado_civil_id = :estado_civil_id, estado_natal_id = :estado_natal_id, municipio_natal_id = :municipio_natal_id,  parroquia_natal_id = :parroquia_natal_id, email = :email, telefono_movil = :telefono_movil, telefono_resd = :telefono_resd, otro_telefono = :otro_telefono, direccion_resd = :direccion_resd, pais_id= :pais_id, foto = :foto, rol_id = :rol_id WHERE estudiantes.id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':cedula', $form['cedula']);
        $pdo->bindParam(':apellidos', $form['apellidos']);
        $pdo->bindParam(':nombres', $form['nombres']);
        $pdo->bindParam(':fecha_nacimiento', $form['fecha_nacimiento']);
        $pdo->bindParam(':edad', $form['edad']);
        $pdo->bindParam(':sexo_id', $form['sexo_id']);
        $pdo->bindParam(':estado_civil_id', $form['estado_civil_id']);
        $pdo->bindParam(':estado_natal_id', $form['estado_natal_id']);
        $pdo->bindParam(':municipio_natal_id', $form['municipio_natal_id']);
        $pdo->bindParam(':parroquia_natal_id', $form['parroquia_natal_id']);
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':telefono_movil', $form['telefono_movil']);
        $pdo->bindParam(':telefono_resd', $form['telefono_resd']);
        $pdo->bindParam(':otro_telefono', $form['otro_telefono']);
        $pdo->bindParam(':direccion_resd', $form['direccion_resd']);
        $pdo->bindParam(':pais_id', $form['pais_id']);
        $pdo->bindParam(':foto', $form['foto']);
        $pdo->bindParam(':rol_id', $form['rol_id']);
        $pdo->bindParam(':id', $form['est_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM estudiantes WHERE id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}