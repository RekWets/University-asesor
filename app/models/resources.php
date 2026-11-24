<?php

// Include the database connection file
require_once($_SERVER['DOCUMENT_ROOT'] . "/php/uptt-project/app/db/db.php");

class resources extends BDConexion {

  public $conn;

  public function __construct() {
    $this->conn = parent::__construct();
  }
  public function PNF()
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

  public function Unidad_curricular()
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
  public function get() {
    $data = [];

    $sql = "SELECT *
        FROM `gestion_y_recursos_educativos`";

    $pdo = $this->conn->prepare($sql);

    if ($pdo->execute()) {
      if ($pdo->rowCount() > 0) {
        while ($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
          $data[] = $row;
        }
        return $data;
      } else {
      // Handle no data found case (optional)
        return [];
      }
    } else {
      // Handle PDO execution error (optional)
      return false;
    }
  }  

  public function show($id){
    $data = "";
    $sql = "SELECT * FROM gestion_y_recursos_educativos WHERE id = :id";
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
public function update($formData, $fileData)
{
    $PNF = $formData['PNF'];
    $Registro = $formData['Registro'];
    $Unidad_Curricular = $formData['Unidad_Curricular'];
    $Descripcion = $formData['Descripcion'];
    $id = $formData['id'];
    $link = isset($formData['link']) ? $formData['link'] : null;

    // Verificar si se proporcionó un nuevo archivo adjunto
    if (isset($fileData['link']) && $fileData['link']['error'] !== UPLOAD_ERR_NO_FILE) {
        $uploadedFile = $fileData['link'];
        $fileContent = file_get_contents($uploadedFile['tmp_name']);

        // Prepare SQL statement with new file information
        $sql = "UPDATE gestion_y_recursos_educativos
                SET Registro = :Registro,
                    PNF = :PNF,
                    Unidad_Curricular = :Unidad_Curricular,
                    Descripcion = :Descripcion,
                    link = :link,
                    Archivo_adjunto = :Archivo_adjunto
                WHERE id = :id";
    } else {
        // Prepare SQL statement without updating file information
        $sql = "UPDATE gestion_y_recursos_educativos
                SET Registro = :Registro,
                    PNF = :PNF,
                    Unidad_Curricular = :Unidad_Curricular,
                    Descripcion = :Descripcion,
                    link = :link
                WHERE id = :id";
    }

    $pdo = $this->conn->prepare($sql);
    $pdo->bindParam(':Registro', $Registro);
    $pdo->bindParam(':PNF', $PNF);
    $pdo->bindParam(':Unidad_Curricular', $Unidad_Curricular);
    $pdo->bindParam(':Descripcion', $Descripcion);
    $pdo->bindParam(':link', $link);
    $pdo->bindParam(':id', $id);

    // Bind file content parameter if a new file was provided
    if (isset($fileContent)) {
        $pdo->bindParam(':Archivo_adjunto', $fileContent, PDO::PARAM_LOB);
    }

    if ($pdo->execute()) {
        return true;
    } else {
        return false;
    }
}

public function delete($id){
  $sql = "DELETE FROM gestion_y_recursos_educativos WHERE id = :id";
  $pdo = $this->conn->prepare($sql);        
  $pdo->bindParam(':id', $id);
  if($pdo->execute()){
      return true;
  }else{
      return false;
  }
}
public function download($id) {
  try {
      // Prepara la consulta SQL con enlace de parámetros para la seguridad
      $sql = "SELECT link FROM gestion_y_recursos_educativos WHERE id = :id";
      $pdo = $this->conn->prepare($sql);
      $pdo->bindParam(':id', $id, PDO::PARAM_INT); // Especifica el tipo de datos para id

      // Ejecuta la consulta
      $pdo->execute();

      // Verifica si se devuelve una sola fila (el archivo existe)
      if ($pdo->rowCount() === 1) {
          $row = $pdo->fetch(PDO::FETCH_ASSOC); // Extrae el nombre de archivo
          $archivo = $row['link']; // Extrae el nombre de archivo
          $ruta_archivo = "files/" . $archivo; // Construye la ruta del archivo

          // Verifica si el archivo existe en el servidor
          if (file_exists($ruta_archivo)) {
              // Establece encabezados para la descarga del archivo
              header('Content-Type: application/octet-stream');
              header('Content-Disposition: attachment; filename="' . $archivo . '"');
              header('Content-Length: ' . filesize($ruta_archivo)); // Opcional: Establece la longitud del contenido para las barras de progreso

              // Lee y envía el contenido del archivo
              readfile($ruta_archivo);
              exit; // Termina el script después de una descarga exitosa
          } else {
              echo "El archivo no se encuentra en el servidor.";
          }
      } else {
          echo "No se encontró ningún archivo asociado al ID proporcionado.";
      }
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage(); // Maneja excepciones PDO para errores de base de datos
  }
}


public function create($formData, $fileData)
{
    // Accede a los datos del formulario
    $PNF = $formData['PNF'];
    $Registro = $formData['Registro'];
    $Unidad_Curricular = $formData['Unidad_Curricular'];
    $Descripcion = $formData['Descripcion'];
    $carpeta_destino = 'files/';

    // Verifica si se envió un archivo adjunto
    if (isset($fileData['link']) && $fileData['link']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Accede a los datos del archivo
        $tempFilePath = $fileData['link']['tmp_name'];
        $fileName = $_FILES['link']['name']; // Usa el nombre original del archivo
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // Obtener la extensión del archivo

        // Lista de extensiones permitidas
        $allowedExtensions = array("pdf", "doc", "docx");

        // Verifica si la extensión del archivo está permitida
        if (in_array(strtolower($fileExtension), $allowedExtensions)) {
            // Mueve el archivo al destino con el nombre original
            $fileMoved = move_uploaded_file($tempFilePath, $carpeta_destino . $fileName);

            if ($fileMoved) {
                // Prepare SQL statement
                $sql = "INSERT INTO gestion_y_recursos_educativos 
                        (Registro, PNF, Unidad_Curricular, Descripcion, link, Archivo_adjunto)
                        VALUES (:Registro, :PNF, :Unidad_Curricular, :Descripcion, :link, :Archivo_adjunto)";

                $pdo = $this->conn->prepare($sql);

                // Bind parameters
                $pdo->bindParam(':Registro', $Registro);
                $pdo->bindParam(':PNF', $PNF);
                $pdo->bindParam(':Unidad_Curricular', $Unidad_Curricular);
                $pdo->bindParam(':Descripcion', $Descripcion);
                $pdo->bindParam(':link', $fileName); // Guarda el nombre del archivo en la base de datos
                $pdo->bindParam(':Archivo_adjunto', $fileName); // Guarda el nombre del archivo en la base de datos

                // Execute the query
                if ($pdo->execute()) {
                    // Upload successful
                    return true;
                } else {
                    // Handle execution errors
                    return false;
                }
            } else {
                // Handle file moving error
                return false;
            }
        } else {
            // Extension not allowed
            return false;
        }
    } else {
        // No se envió un archivo adjunto, por lo tanto, solo es un texto
        // Prepara SQL statement para guardar solo el texto en lugar de un archivo adjunto
        $sql = "INSERT INTO gestion_y_recursos_educativos 
                (Registro, PNF, Unidad_Curricular, Descripcion, link)
                VALUES (:Registro, :PNF, :Unidad_Curricular, :Descripcion, :link)";

        $pdo = $this->conn->prepare($sql);

        // Bind parameters
        $pdo->bindParam(':Registro', $Registro);
        $pdo->bindParam(':PNF', $PNF);
        $pdo->bindParam(':Unidad_Curricular', $Unidad_Curricular);
        $pdo->bindParam(':Descripcion', $Descripcion);
        $pdo->bindParam(':link', $formData['link']); // Guarda el texto en el campo 'link'

        // Execute the query
        if ($pdo->execute()) {
            // Insert successful
            return true;
        } else {
            // Handle execution errors
            return false;
        }
    }
}

}