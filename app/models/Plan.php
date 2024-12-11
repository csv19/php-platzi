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

    public function getPlanById($id)
    {
        $db = Database::getInstance();
        $script="SELECT * FROM planes WHERE id =".$id;
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    public function getPlanesPaginated($start, $length) {
        $db=Database::getInstance();
        $script = "SELECT * FROM planes LIMIT ?, ?";
        $resultados=$db->mostrar_datatables($script,$start, $length);
        return $resultados;
    }
    public function getTotalPlanes() {
        $db=Database::getInstance();
        $script = "SELECT COUNT(*) as total FROM planes";
        $resultados=$db->mostrar_datatables_total($script);
        return $resultados;
    }
}