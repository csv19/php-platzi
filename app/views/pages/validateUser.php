<?php
require_once APP . '/models/Usuario.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);
    $user=new Usuario;
    $login=$user->login($email,$pass);
    if ($login) {
        $token = $email . $pass;
        $token = password_hash($token, PASSWORD_BCRYPT);
        $_SESSION['usuario_token'] = $token;
        $_SESSION['usuario_id'] = $login['id'];
        $_SESSION['usuario_correo'] = $login['correo'];
        $_SESSION['usuario_nombre'] = $login['nombres'];
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
