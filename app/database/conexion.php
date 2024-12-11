<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Database
{
    private static $instance = null; // Instancia única
    private $conn;

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "guirmabot";

    // Constructor privado para evitar instanciación directa
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        $this->conn->set_charset("utf8mb4");

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

    $sql = "INSERT INTO $tabla (nombres, apellido_paterno, apellido_materno, edad, correo, contasena) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->conn->error);
    }

    $stmt->bind_param("sssiss", $nombres, $apellido_p, $apellido_m, $edad, $email, $hashedPass);

    if ($stmt->execute()) {
        // Enviar correo después de registrar al usuario
        $this->sendRegisterEmail($email, $nombres);
        return true;
    } else {
        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
    }

    $stmt->close();
}

public function register_beca($reason,$document){
    $tabla = 'becas';
    $estado='PENDIENTE';
    $sql = "INSERT INTO $tabla (id_usuario,razon,documento,fecha_solicitud,estado) VALUES (?,?, ?, NOW(), ?)";
    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error al preparar la consulta: " . $this->conn->error);
    }

    $stmt->bind_param("ssss",$_SESSION['usuario_id'],$reason,$document,$estado);

    if ($stmt->execute()) {
        // Enviar correo después de registrar al usuario
        $this->sendBecaEmail($_SESSION['usuario_correo'], $_SESSION['usuario_nombre']);
        return true;
    } else {
        throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
    }

    $stmt->close();
}
private function sendRegisterEmail($email, $nombres)
{
    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor Mailtrap
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '413cbd57ff7d1b'; // Cambia esto por tu usuario de Mailtrap
        $mail->Password = '0f1bbabb41de13'; // Cambia esto por tu contraseña de Mailtrap
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;

        // Configuración del correo
        $mail->setFrom('prueba_ucv@example.com', 'Proyecto Ucv');
        $mail->addAddress($email, $nombres);

        $mail->isHTML(true);
        $mail->Subject = 'Bienvenido';
        $mail->Body = "
        <h1>Bienvenido/a, $nombres</h1>
        <p>Estamos encantados de tenerte en nuestra plataforma de cursos.</p>
        <p>Aquí encontrarás herramientas, recursos y el apoyo necesario para alcanzar tus objetivos educativos. Explora nuestros cursos y da el primer paso hacia tu aprendizaje.</p>
        <p>Si tienes alguna pregunta, no dudes en contactarnos. Estamos aquí para ayudarte en cada paso del camino.</p>
        <p>¡Mucho éxito en esta nueva aventura!</p>
        <p><strong>El equipo de UCV </strong></p>
        ";
        $mail->send();
    } catch (Exception $e) {
        throw new Exception("No se pudo enviar el correo: {$mail->ErrorInfo}");
    }
}
private function sendBecaEmail($email, $nombres)
{
    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor Mailtrap
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '413cbd57ff7d1b'; // Cambia esto por tu usuario de Mailtrap
        $mail->Password = '0f1bbabb41de13'; // Cambia esto por tu contraseña de Mailtrap
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;

        // Configuración del correo
        $mail->setFrom('prueba_ucv@example.com', 'Proyecto Ucv');
        $mail->addAddress($email, $nombres);

        $mail->isHTML(true);
        $mail->Subject = 'Bienvenido';
        $mail->Body = "
        <h1>Bienvenido/a, $nombres</h1>
        <p>Estamos encantados de tenerte en nuestra plataforma de cursos.</p>
        <p>Aquí encontrarás herramientas, recursos y el apoyo necesario para alcanzar tus objetivos educativos. Explora nuestros cursos y da el primer paso hacia tu aprendizaje.</p>
        <p>Si tienes alguna pregunta, no dudes en contactarnos. Estamos aquí para ayudarte en cada paso del camino.</p>
        <p>¡Mucho éxito en esta nueva aventura!</p>
        <p><strong>El equipo de UCV </strong></p>
        ";
        $mail->send();
    } catch (Exception $e) {
        throw new Exception("No se pudo enviar el correo: {$mail->ErrorInfo}");
    }
}

    public function mostrar($script)
    {
        $data = $this->conn->query($script);

        if (!$data) {
            throw new Exception("Error en la consulta: " . $this->conn->error);
        }

        return $data->fetch_all(MYSQLI_ASSOC); // Devuelve un array asociativo
    }
    public function mostrar_datatables($script,$start, $length)
    {
        $stmt = $this->conn->prepare($script);
        $stmt->bind_param("ii", $start, $length);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
        //$result = $this->conn->query($script);
        // $becas = [];
        // while ($row = $result->fetch_assoc()) {
        //     $row['documento'] = is_string($row['documento']) ? $row['documento'] : json_encode($row['documento']);
        //     $becas[] = $row;
        // }
        // return $becas;
    }
    public function mostrar_datatables_total($script)
    {
        $result = $this->conn->query($script); 
        return $result->fetch_assoc()['total'];
    }
}