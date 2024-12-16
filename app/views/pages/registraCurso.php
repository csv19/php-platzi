<?php
require_once APP . '/models/Curso.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = htmlspecialchars($_POST['image']);
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $time = htmlspecialchars($_POST['time']);
    $video = htmlspecialchars($_POST['video']);
    $icon = htmlspecialchars($_POST['icon']);
    $price = htmlspecialchars($_POST['price']);

    $curso=new Curso;
    $ruta=$curso->register($name,$image,$icon,$description,$time,$video,$price);
    if ($ruta) {
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
