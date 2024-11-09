<?php
require_once 'config.php'; // Incluir el archivo de configuración con las constantes

try {
    // Establecer la conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Mostrar el error si no se puede conectar
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
