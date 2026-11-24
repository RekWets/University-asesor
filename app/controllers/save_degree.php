<?php 
include($_SERVER['DOCUMENT_ROOT']."/project-bj/app/models/lists.php");
class StudentsDegreeController{
    private $model;

    public function __construct()
    {
        $this->model = new StudentsDegree();
    }

    public function store()
    {
        if(isset($_POST['estudiante_id'])){
            $imagen = $_FILES['dir_titulo'];
            $imgname = $imagen['name'];
            $tipo = $imagen['type'];
            $temp  = $_FILES['dir_titulo']['tmp_name'];
            $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/project-bj/public/img/img_folders/degree_img/";

            if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
                $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
                $_SESSION['tipo'] = 'danger';
                header('location: ?route=studentsAcademic&method=edit&id='.$_POST['estudiante_id']);
            }else{
                $resultado = $this->model->update($imgname," estudiante_id =".$_POST['estudiante_id']);
                if($resultado){
                    move_uploaded_file($temp, $uploads_dir.$imgname);
                    header('location: ?route=studentsAcademic&method=edit&id='.$_POST['estudiante_id']);
                }else{
                    $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }
}
?>
