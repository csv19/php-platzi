<?php
require_once APP . '/database/conexion.php' ;
class Beca
{
    
    public function register($reason,$document){
        $db = Database::getInstance();
        $beca=$db->register_beca($reason,$document);
        return $beca;
    }
    // public function getBecas()
    // {
    //     $db = Database::getInstance();
    //     $script="SELECT * FROM becas";
    //     $resultados = $db->mostrar_becas($script);
    //     return $resultados;
    // }
    public function getBecasPaginated($start, $length) {
        $db=Database::getInstance();
        $script = "SELECT b.*, u.* FROM becas b INNER JOIN usuarios u ON b.id_usuario=u.id LIMIT ?, ?";
        $resultados=$db->mostrar_datatables($script,$start, $length);
        return $resultados;
    }
    public function getTotalBecas() {
        $db=Database::getInstance();
        $script = "SELECT COUNT(*) as total FROM becas";
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
