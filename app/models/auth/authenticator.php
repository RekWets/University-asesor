<?php
require_once($_SERVER['DOCUMENT_ROOT']."/project-bj/app/db/db.php");

class Authenticator extends BDConexion{
    public $conn;
    
    public function __construct(){
        $this->conn = parent::__construct();

    }

    public function login($form){
        $sql = "SELECT * FROM users WHERE username = :email OR email = :email AND password = :password";
        $pdo = $this->conn->prepare($sql);        
        $pdo->bindParam(':email', $form['email']);
        $pdo->bindParam(':password', $form['password']);
        if($pdo->execute()){
            if($pdo->rowCount() > 0){
                $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
                foreach($data as $user => $value){
                    $_SESSION['row_count_'.$user] = $value;
                }
                return true;
            }else{
                $data[] = ['message' => "Not Data", 'status' => "null"];
            }
            
        }
    }

    public function logout()
    {
        session_destroy();
        return true;
    }
}