<?php

class BDConexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "uptt";

    public function __construct(){
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "La conexión ha fallado: " . $e->getMessage();
        }
    }
}