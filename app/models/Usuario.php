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
    public function getUsuariosPaginated($start, $length) {
        $db=Database::getInstance();
        $script = "SELECT * FROM usuarios LIMIT ?, ?";
        $resultados=$db->mostrar_datatables($script,$start, $length);
        return $resultados;
    }
    public function getTotalUsuarios() {
        $db=Database::getInstance();
        $script = "SELECT COUNT(*) as total FROM usuarios";
        $resultados=$db->mostrar_datatables_total($script);
        return $resultados;
    }
    // public function getUsuarioById($id)
    // {
    //     $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    //     $stmt->execute([$id]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    
}
