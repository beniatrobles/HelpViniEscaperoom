<?php
// Datos de conexión
$servername = "localhost"; // El servidor de la base de datos
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL (por defecto en XAMPP es vacío)
$dbname = "escaperoom"; // Nombre de la base de datos

// Usando PDO para la conexión a la base de datos con manejo de errores mediante try-catch
try {
    // Crear una nueva instancia de PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Establecer el modo de error de PDO a excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch (PDOException $e) {
    // Si ocurre un error, se muestra el mensaje del error
    echo "Error de conexión: " . $e->getMessage();
}

?>
