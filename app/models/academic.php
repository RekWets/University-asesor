<?php
require_once($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/db/db.php");

class Academic extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    // Get all data in the table
    public function get(){
        $data = [];
        $sql = "SELECT * FROM estudiantes_datos_academicos WHERE 1";
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
        $sql = "SELECT * FROM estudiantes_datos_academicos WHERE estudiante_id = :id";
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
        $sql = "INSERT INTO estudiantes_datos_academicos (estudiante_id,codigo,pnf_id,malla_id,actividad_id,periodo_ingreso,tipo_ingreso_id,dir_titulo,graduacion_bachiller,liceo_colegio,tipo_institucion_id,procedencia_institucion,posicion_opsu,nse_id,trabaja,direccion_trabajo,grupo_asignado,retiro,reincorporacion,ultimo_periodo_cursado,cambio_pnf,promocion,lapso_egreso,fecha_grado,posicion_promocion,ira,iraa,iras,turno_id,grupo_id,modalidad_id) VALUES (:estudiante_id,:codigo,:pnf_id,:malla_id,:actividad_id,:periodo_ingreso,:tipo_ingreso_id,:dir_titulo,:graduacion_bachiller,:liceo_colegio,:tipo_institucion_id,:procedencia_institucion,:posicion_opsu,:nse_id,:trabaja,:direccion_trabajo,:grupo_asignado,:retiro,:reincorporacion,:ultimo_periodo_cursado,:cambio_pnf,:promocion,:lapso_egreso,:fecha_grado,:posicion_promocion,:ira,:iraa,:iras,:turno_id,:grupo_id,:modalidad_id)";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':estudiante_id', $form['estudiante_id']);
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':pnf_id', $form['pnf_id']);
        $pdo->bindParam(':malla_id', $form['malla_id']);
        $pdo->bindParam(':actividad_id', $form['actividad_id']);
        $pdo->bindParam(':periodo_ingreso', $form['periodo_ingreso']);
        $pdo->bindParam(':tipo_ingreso_id', $form['tipo_ingreso_id']);
        $pdo->bindParam(':dir_titulo', $form['dir_titulo']);
        $pdo->bindParam(':graduacion_bachiller', $form['graduacion_bachiller']);
        $pdo->bindParam(':liceo_colegio', $form['liceo_colegio']);
        $pdo->bindParam(':tipo_institucion_id', $form['tipo_institucion_id']);
        $pdo->bindParam(':procedencia_institucion', $form['procedencia_institucion']);
        $pdo->bindParam(':posicion_opsu', $form['posicion_opsu']);
        $pdo->bindParam(':nse_id', $form['nse_id']);
        $pdo->bindParam(':trabaja', $form['trabaja']);
        $pdo->bindParam(':direccion_trabajo', $form['direccion_trabajo']);
        $pdo->bindParam(':grupo_asignado', $form['grupo_asignado']);
        $pdo->bindParam(':retiro', $form['retiro']);
        $pdo->bindParam(':reincorporacion', $form['reincorporacion']);
        $pdo->bindParam(':ultimo_periodo_cursado', $form['ultimo_periodo_cursado']);
        $pdo->bindParam(':cambio_pnf', $form['cambio_pnf']);
        $pdo->bindParam(':promocion', $form['promocion']);
        $pdo->bindParam(':lapso_egreso', $form['lapso_egreso']);
        $pdo->bindParam(':fecha_grado', $form['fecha_grado']);
        $pdo->bindParam(':posicion_promocion', $form['posicion_promocion']);
        $pdo->bindParam(':ira', $form['ira']);
        $pdo->bindParam(':iraa', $form['iraa']);
        $pdo->bindParam(':iras', $form['iras']);
        $pdo->bindParam(':turno_id', $form['turno_id']);
        $pdo->bindParam(':grupo_id', $form['grupo_id']);
        $pdo->bindParam(':modalidad_id', $form['modalidad_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Update row in the table by id
    public function update($form){
        $sql = "UPDATE estudiantes_datos_academicos SET codigo = :codigo, pnf_id = :pnf_id, malla_id = :malla_id, actividad_id = :actividad_id, periodo_ingreso = :periodo_ingreso, tipo_ingreso_id = :tipo_ingreso_id, dir_titulo = :dir_titulo, graduacion_bachiller = :graduacion_bachiller, liceo_colegio = :liceo_colegio, tipo_institucion_id = :tipo_institucion_id,  procedencia_institucion = :procedencia_institucion, posicion_opsu = :posicion_opsu, nse_id = :nse_id, trabaja = :trabaja, direccion_trabajo = :direccion_trabajo, grupo_asignado = :grupo_asignado, retiro= :retiro, reincorporacion = :reincorporacion, ultimo_periodo_cursado = :ultimo_periodo_cursado, cambio_pnf = :cambio_pnf, promocion = :promocion, lapso_egreso = :lapso_egreso, fecha_grado = :fecha_grado, posicion_promocion = :posicion_promocion, ira = :ira, iraa = :iraa, iras = :iras, turno = :turno_id, grupo = :grupo_id, modalidad = :modalidad_id WHERE estudiante_id = :estudiante_id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':codigo', $form['codigo']);
        $pdo->bindParam(':pnf_id', $form['pnf_id']);
        $pdo->bindParam(':malla_id', $form['malla_id']);
        $pdo->bindParam(':actividad_id', $form['actividad_id']);
        $pdo->bindParam(':periodo_ingreso', $form['periodo_ingreso']);
        $pdo->bindParam(':tipo_ingreso_id', $form['tipo_ingreso_id']);
        $pdo->bindParam(':dir_titulo', $form['dir_titulo']);
        $pdo->bindParam(':graduacion_bachiller', $form['graduacion_bachiller']);
        $pdo->bindParam(':liceo_colegio', $form['liceo_colegio']);
        $pdo->bindParam(':tipo_institucion_id', $form['tipo_institucion_id']);
        $pdo->bindParam(':procedencia_institucion', $form['procedencia_institucion']);
        $pdo->bindParam(':posicion_opsu', $form['posicion_opsu']);
        $pdo->bindParam(':nse_id', $form['nse_id']);
        $pdo->bindParam(':trabaja', $form['trabaja']);
        $pdo->bindParam(':direccion_trabajo', $form['direccion_trabajo']);
        $pdo->bindParam(':grupo_asignado', $form['grupo_asignado']);
        $pdo->bindParam(':retiro', $form['retiro']);
        $pdo->bindParam(':reincorporacion', $form['reincorporacion']);
        $pdo->bindParam(':ultimo_periodo_cursado', $form['ultimo_periodo_cursado']);
        $pdo->bindParam(':cambio_pnf', $form['cambio_pnf']);
        $pdo->bindParam(':promocion', $form['promocion']);
        $pdo->bindParam(':lapso_egreso', $form['lapso_egreso']);
        $pdo->bindParam(':fecha_grado', $form['fecha_grado']);
        $pdo->bindParam(':posicion_promocion', $form['posicion_promocion']);
        $pdo->bindParam(':ira', $form['ira']);
        $pdo->bindParam(':iraa', $form['iraa']);
        $pdo->bindParam(':iras', $form['iras']);
        $pdo->bindParam(':turno_id', $form['turno_id']);
        $pdo->bindParam(':grupo_id', $form['grupo_id']);
        $pdo->bindParam(':modalidad_id', $form['modalidad_id']);
        $pdo->bindParam(':estudiante_id', $form['estudiante_id']);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete a row in the table by id
    public function delete($id){
        $sql = "DELETE FROM estudiantes_datos_academicos WHERE estudiante_id = :id";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':id', $id);
        if($pdo->execute()){
            return true;
        }else{
            return false;
        }
    }
}