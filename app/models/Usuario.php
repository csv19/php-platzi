<?php
require_once APP . '/database/conexion.php' ;

class Usuario
{

    public function getUsuarios()
    {
        $db = Database::getInstance();
        $resultados = $db->mostrar('usuarios');
        return $resultados;
    }

    // public function getUsuarioById($id)
    // {
    //     $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    //     $stmt->execute([$id]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    
}
