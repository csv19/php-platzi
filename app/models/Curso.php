<?php
require_once APP . '/database/conexion.php' ;

class Curso
{

    public function getCursos()
    {
        $db = Database::getInstance();
        $script="SELECT c.nombre, c.icon, c.descripcion, c.duracion, c.precio,c.url, p.nombre as nombre_profesor, p.apellidos as apellidos_profesor, p.imagen as imagen_profesor FROM cursos c INNER JOIN profesores p on c.id=p.id_curso";
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    public function getCursoById($id)
    {
        $conditional='id='.$id;
        $script="SELECT c.*,  s.nombre as seccion, s.descripcion as seccion_descripcion, s.duracion as seccion_duracion FROM cursos c INNER JOIN secciones s ON c.id=s.id_curso WHERE c.id=".$id;
        $db = Database::getInstance();
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    
}