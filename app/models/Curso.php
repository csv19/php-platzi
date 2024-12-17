<?php
require_once APP . '/database/conexion.php' ;

class Curso
{
    public function register($name,$image,$icon,$description,$duration,$video,$price,$nameTeach,$lastNameTeach,$imagenTeach){
        $db = Database::getInstance();
        $curso=$db->register_curso($name,$image,$icon,$description,$duration,$video,$price,$nameTeach,$lastNameTeach,$imagenTeach);
        return $curso;
    }

    public function getCursos()
    {
        $db = Database::getInstance();
        $script="SELECT c.id, c.nombre, c.icon, c.descripcion, c.duracion, c.precio,c.url, p.nombre as nombre_profesor, p.apellidos as apellidos_profesor, p.imagen as imagen_profesor FROM cursos c INNER JOIN profesores p on c.id=p.id_curso";
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    public function getCursoById($url)
    {
        $script="SELECT c.*,  s.nombre as seccion, s.descripcion as seccion_descripcion, s.duracion as seccion_duracion FROM cursos c INNER JOIN secciones s ON c.id=s.id_curso WHERE c.url='".$url."'";
        $db = Database::getInstance();
        $resultados = $db->mostrar($script);
        return $resultados;
    }

    public function registerRuta($user_id,$curse_id){
        $db = Database::getInstance();
        $ruta=$db->register_ruta($user_id,$curse_id);
        return $ruta;
    }
    public function registerSeccion($curso,$name,$description,$time){
        $db = Database::getInstance();
        $ruta=$db->register_seccion($curso,$name,$description,$time);
        return $ruta;
    }
    public function getRutaCurso($user_id,$curse_id){
        $db = Database::getInstance();
        $script="SELECT * FROM rutas WHERE id_curso=".$curse_id." AND id_usuario=".$user_id;
        $resultados= $db->mostrar($script);
        return $resultados;
    }
    public function getRutaCursoAdmin($user_id){
        $db = Database::getInstance();
        $script="SELECT * FROM cursos WHERE id IN (SELECT id_curso FROM rutas WHERE id_usuario=".$user_id.")";
        $resultados= $db->mostrar($script);
        return $resultados;
    }
}