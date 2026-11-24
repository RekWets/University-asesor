<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class evaluacion extends BDConexion{
    public $conn;
    public function __construct(){
        $this->conn = parent::__construct();

    }
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
    public function show($form){
        $data = [];
        $sql = "SELECT * FROM estudiantes WHERE cedula LIKE :clave";
        $pdo = $this->conn->prepare($sql);    
        $pdo->bindParam(':clave', $form['clave']);  
        if($pdo->execute()){
            if($pdo->rowCount() > 0){
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }                
            }
            return $data;
        }
    }
    public function archive(){
        $data = json_decode(file_get_contents("php://input"), true);
        $success_count = 0;
        $failure_count = 0;
        $failed_rows = array();
    
        // Procesa los datos
        foreach ($data as $row) {
            $cedula_estudiante = $row['Cedula Estudiante'];
            $periodo = $row['PERIODO'];
            $unidad_curricular = $row['UC'];
            $cedula_docente = $row['docente'];
            $cod_asignatura = $row['COD'];
            $nota = $row['Nota Definitiva'];
    
            // Verifica si el registro ya existe
            $sql_check = "SELECT * FROM notas WHERE cedula_estudiante = '$cedula_estudiante' AND periodo = '$periodo' AND unidad_curricular = '$unidad_curricular' AND cedula_docente = '$cedula_docente' AND cod_asignatura = '$cod_asignatura'";
            $pdo_check = $this->conn->prepare($sql_check);
            $pdo_check->execute();
    
            if ($pdo_check->rowCount() > 0) {
                // Actualiza la nota existente
                $sql_update = "UPDATE notas SET nota = '$nota' WHERE cedula_estudiante = '$cedula_estudiante'
                 AND periodo = '$periodo' AND unidad_curricular = '$unidad_curricular' 
                 AND cod_asignatura = '$cod_asignatura'";
                $pdo_update = $this->conn->prepare($sql_update);
                if ($pdo_update->execute()) {
                    $success_count++;
                } else {
                    $failure_count++;
                    $failed_rows[] = $row;
                }
            } else {
                // Inserta un nuevo registro
                $sql_insert = "INSERT INTO notas (cedula_estudiante, periodo, unidad_curricular, cedula_docente, cod_asignatura, nota) VALUES ('$cedula_estudiante', '$periodo', '$unidad_curricular', '$cedula_docente', '$cod_asignatura', '$nota')";
                $pdo_insert = $this->conn->prepare($sql_insert);
                if ($pdo_insert->execute()) {
                    $success_count++;
                } else {
                    $failure_count++;
                    $failed_rows[] = $row;
                }
            }
        }
    
        // Prepara la respuesta
        $response = array(
            "success_count" => $success_count,
            "failure_count" => $failure_count,
            "failed_rows" => $failed_rows
        );
    
        return $response;
    }
    public function consulta ($form){
        $data = [];
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
                WHERE estudiantes.cedula = :clave";
       $pdo = $this->conn->prepare($sql);    
       $pdo->bindParam(':clave', $form['clave']);    
       if($pdo->execute()){
           if($pdo->rowCount() > 0){
               while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                   $data[] = $row;
               }                
           }
           return $data;
       }
   }
}
