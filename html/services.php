<?php
require_once 'db.php'; // Incluir la conexión a la base de datos

function getServices() {
    global $pdo; // Asegúrate de usar la conexión global

    try {
        // Preparar y ejecutar la consulta
        $stmt = $pdo->prepare("SELECT * FROM services"); // Ajusta la consulta según tu tabla
        $stmt->execute();
        
        // Obtener los resultados
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Manejo de errores si la consulta falla
        die("Error al obtener los servicios: " . $e->getMessage());
    }
}
?>
