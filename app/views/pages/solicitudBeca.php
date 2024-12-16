<?php
require_once APP . '/models/Beca.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reason = htmlspecialchars($_POST['reason']);
    $document = $_FILES['document'];

    if ($reason && isset($document['name']) && $document['name']) {
        $uploadDirectory = __DIR__ . '../../../../public/src/solicitud_becas/';
        $targetFilePath = $uploadDirectory . basename($document['name']);
        
        // Verifica si la carpeta de destino existe, si no, créala
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        if (move_uploaded_file($document['tmp_name'], $targetFilePath)) {
            $beca = new Beca();
            $register = $beca->register($reason, $document['name']);
            if ($register) {
                echo json_encode(['status' => 'success', 'redirect' => '/guirmabot/views/dashboard']);
                exit();
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error al registrar la beca.']);
                exit();
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al mover el archivo.']);
            exit();
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa todos los campos.']);
        exit();
    }
} else {
    http_response_code(405); // Método no permitido
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
    exit();
}
