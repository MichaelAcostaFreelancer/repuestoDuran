<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Configuración de conexión
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'repuestos_perezduran';

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Si no existe la base de datos, crearla y volver a conectar.
if ($conn->connect_error) {
    $conn = new mysqli($host, $user, $password);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'No se pudo conectar al servidor de base de datos']);
        exit();
    }
    $conn->query("CREATE DATABASE IF NOT EXISTS $database");
    $conn->close();
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'No se pudo conectar a la base de datos']);
        exit();
    }
}

// Crear tabla si no existe
$sql_table = "CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensaje LONGTEXT NOT NULL,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql_table);

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = sanitize($_POST['nombre'] ?? '');
    $telefono = sanitize($_POST['telefono'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $mensaje = sanitize($_POST['mensaje'] ?? '');

    // Validaciones
    if (empty($nombre) || empty($telefono) || empty($email) || empty($mensaje)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios']);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Email inválido']);
        exit();
    }

    // Preparar y ejecutar consulta
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $telefono, $email, $mensaje);

    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Mensaje enviado exitosamente']);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Error al enviar el mensaje']);
    }

    $stmt->close();
    exit();
}

$conn->close();

function sanitize($input)
{
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}
