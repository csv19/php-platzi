<?php
session_start();

if (isset($_SESSION['usuario_token'])) {
    echo "usuario_token, " . $_SESSION['usuario_token'];
} else {
    header("Location: http://localhost/php-platzi/views/inicio");
}
