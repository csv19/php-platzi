<?php
session_start(); 
// Destruir la sesión
if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy(); // Destruye la sesión
    echo json_encode(['status' => 'success', 'redirect' => '/php-platzi/views/inicio']);
    exit(); 
}

exit;
?>
