<?php
class Database
{
    private static $instance = null; // Instancia única
    private $conn;

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "platzi";

    // Constructor privado para evitar instanciación directa
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            throw new Exception("Error en la conexión: " . $this->conn->connect_error);
        }
    }

    // Método para obtener la instancia única de la clase
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Método para obtener la conexión
    public function getConnection()
    {
        return $this->conn;
    }

    // Método para mostrar datos de una tabla
    public function login($email, $pass)
{
    $tabla = 'usuarios';

    // Consulta SQL segura con sentencias preparadas
    $sql = "SELECT * FROM $tabla WHERE correo = ?";
    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->conn->error);
    }

    // Enlaza el parámetro de correo
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica si el usuario existe
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Validar la contraseña usando password_verify
        if (password_verify($pass, $user['contasena'])) {
            return $user; // Usuario autenticado
        } else {
            throw new Exception("Contraseña incorrecta.");
        }
    } else {
        throw new Exception("Usuario no encontrado.");
    }
}

public function register($nombres, $apellido_p, $apellido_m, $edad, $email, $pass)
{
    $tabla = 'usuarios';
    $hashedPass = password_hash($pass, PASSWORD_BCRYPT);

    // Consulta SQL segura con sentencias preparadas
    $sql = "INSERT INTO $tabla (nombres, apellido_paterno, apellido_materno, edad, correo, contasena) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepara la consulta
    $stmt = $this->conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->conn->error);
    }

    // Enlaza los parámetros
    $stmt->bind_param("sssiss", $nombres, $apellido_p, $apellido_m, $edad, $email, $hashedPass); // Tipos: string, string, string, integer, string, string

    // Ejecuta la consulta
    if ($stmt->execute()) {
        return true; // Inserción exitosa
    } else {
        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
    }

    $stmt->close();
}


    public function mostrar($script)
    {
        $data = $this->conn->query($script);

        if (!$data) {
            throw new Exception("Error en la consulta: " . $this->conn->error);
        }

        return $data->fetch_all(MYSQLI_ASSOC); // Devuelve un array asociativo
    }
    
}