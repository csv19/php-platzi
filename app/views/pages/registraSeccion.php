<?php
require_once APP . '/models/Curso.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $curso_id = htmlspecialchars($_POST['curso']);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $time = htmlspecialchars($_POST['time']);
    $curso=new Curso;
    $seccion=$curso->registerSeccion($curso_id,$name,$description,$time);
    if ($seccion) {
        echo json_encode(['status' => 'success', 'redirect' => '/guirmabot/views/nuevo_curso']);
        exit(); 
    } else {
        // Enviar respuesta de error
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa todos los campos.']);
        exit();
    }
} else {
    http_response_code(405); // Método no permitido
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
    exit();
}
