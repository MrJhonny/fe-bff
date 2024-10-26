<?php
$servername = "db";         // Nombre del servicio definido en docker-compose.yml
$username = "my_user";      // Usuario de la base de datos
$password = "user_password";// Contraseña de la base de datos
$dbname = "my_database";    // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";

// Cerrar conexión
$conn->close();
?>
