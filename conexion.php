<?php 

class conexion{
    private $servidor="localhost";
    private $user="root";
    private $password="";
    private $conexion;

    public function __construct(){

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=market", $this->user, $this->password)
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            return "Falla de conexion".$e;
        }
    }

    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
}

?>