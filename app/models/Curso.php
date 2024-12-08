<?php
require_once APP . '/database/conexion.php' ;

class Curso
{

    public function getCursos()
    {
        $db = Database::getInstance();
        //Pasar nombre de la base de datos
        $resultados = $db->mostrar('cursos');
        return $resultados;
    }

    // public function getUsuarioById($id)
    // {
    //     $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    //     $stmt->execute([$id]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    
}