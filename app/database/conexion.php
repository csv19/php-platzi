<?php
class Database
{
    private static $instance = null; // Instancia única
    private $conn;

    private $host = "localhost";
    private $username = "root";
    private $password = "santarosa";
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
    public function mostrar($tabla)
    {
        // Valida que el nombre de la tabla sea seguro
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $tabla)) {
            throw new Exception("Nombre de tabla inválido.");
        }

        $sql = "SELECT * FROM " . $tabla;
        $data = $this->conn->query($sql);

        if (!$data) {
            throw new Exception("Error en la consulta: " . $this->conn->error);
        }

        return $data->fetch_all(MYSQLI_ASSOC); // Devuelve un array asociativo
    }
}