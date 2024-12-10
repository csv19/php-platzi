<?php
require_once APP . '/database/conexion.php' ;

class Plan
{

    public function getPlanes(){
        $db = Database::getInstance();
        $script="SELECT * FROM planes";
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