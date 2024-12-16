<?php
require_once APP . '/models/Curso.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = htmlspecialchars($_POST['usuario']);
    $curse_id = htmlspecialchars($_POST['curso']);
    $curso=new Curso;
    $ruta=$curso->registerRuta($user_id,$curse_id);
    if ($ruta) {
        echo json_encode(['status' => 'success', 'redirect' => '/guirmabot/views/dashboard']);
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
