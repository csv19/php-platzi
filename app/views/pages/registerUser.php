<?php
require_once APP . '/models/Usuario.php' ;
session_start(); // Asegúrate de iniciar la sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = htmlspecialchars($_POST['names']);
    $apellido_p = htmlspecialchars($_POST['lastName_father']);
    $apellido_m = htmlspecialchars($_POST['lastName_mother']);
    $edad = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    
    $user=new Usuario;
    $login=$user->register($nombres,$apellido_p,$apellido_m,$edad,$email,$pass);
    if ($login) {
        echo json_encode(['status' => 'success', 'redirect' => '/php-platzi/views/inicio']);
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

