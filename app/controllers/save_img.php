<?php 
include($_SERVER['DOCUMENT_ROOT']."/php/uptt-project/app/models/lists.php");
class StudentsPictureController{
    private $model;

    public function __construct()
    {
        $this->model = new StudentsPicture();
    }

    public function store()
    {
        if(isset($_POST['estudiante_id'])){
            $imagen = $_FILES['foto'];
            $imgname = $imagen['name'];
            $tipo = $imagen['type'];
            $temp  = $_FILES['foto']['tmp_name'];
            $uploads_dir = $_SERVER['DOCUMENT_ROOT']."/php/uptt-project/public/img/img_folders/student_img/";

            if( !((strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
                $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
                $_SESSION['tipo'] = 'danger';
                header('location: ?route=students&method=edit&id='.$_POST['estudiante_id']);
            }else{
                $resultado = $this->model->update($imgname," id =".$_POST['estudiante_id']);
                if($resultado){
                    move_uploaded_file($temp, $uploads_dir.$imagen);
                    header('location: ?route=students&method=edit&id='.$_POST['estudiante_id']);
                }else{
                    $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
                    $_SESSION['tipo'] = 'danger';
                }
            }
        }
    }



}



?>
