<?php
require_once APP . '/database/conexion.php' ;

class Usuario
{
    public function login($email,$pass){
        $db = Database::getInstance();
        $usuario=$db->login($email,$pass);
        return $usuario;
    }
    public function register($nombres,$apellido_p,$apellido_m,$edad,$email,$pass){
        $db = Database::getInstance();
        $usuario=$db->register($nombres,$apellido_p,$apellido_m,$edad,$email,$pass);
        return $usuario;
    }
    public function getUsuarios()
    {
        $db = Database::getInstance();
        $script="SELECT * FROM usuarios";
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    // public function getUsuarioById($id)
    // {
    //     $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    //     $stmt->execute([$id]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    
}
