<?php
// login.php
include 'db.php';  // Incluir el archivo de conexión
require_once __DIR__ . '/../../vendor/autoload.php';
use \Firebase\JWT\JWT;

// Clave secreta para firmar el token (debe ser segura y guardarse en un archivo de configuración)
$secretKey = 'HelpVini';
// Obtener los datos enviados desde el frontend
$data = json_decode(file_get_contents("php://input"));

$email = $data->correo;
$password = $data->contraseña;

// Validar si los datos no están vacíos
if (empty($email) || empty($password)) {
    echo json_encode(['error' => 'Email y contraseña son obligatorios']);
    exit;
}

// Consultar en la base de datos si existe un usuario con ese email
$query = "SELECT * FROM usuarios WHERE correo = :email LIMIT 1";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();

$user = $stmt->fetch();

// Si el usuario no existe
if (!$user) {
    echo json_encode(['error' => 'Usuario no encontrado']);
    exit;
}

// Verificar si la contraseña coincide con el hash almacenado en la base de datos
if (!password_verify($password, $user['contraseña'])) {
    echo json_encode(['error' => 'Contraseña incorrecta']);
    exit;
}

// Si todo es correcto, generar un token JWT
$issuedAt = time();
$expirationTime = $issuedAt + 3600;  // El token expira en 1 hora
$payload = array(
    'iat' => $issuedAt,
    'exp' => $expirationTime,
    'user' => array(
        'id' => $user['id_usuario'],
        'nombre' => $user['nombre_usuario'],
        'email' => $user['correo'],
        'pass' => $password // Aquí se agrega la contraseña al payload
    )
);

// Especificamos el algoritmo de firma (HS256)
$jwt = JWT::encode($payload, $secretKey, 'HS256');

// Retornar la respuesta con el token JWT
echo json_encode([
    'success' => 'Login exitoso',
    'token' => $jwt,
    'user' => $payload['user']
]);
?>
