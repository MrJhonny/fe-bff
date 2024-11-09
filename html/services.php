<?php
require_once 'db.php'; 

function getServices() {
    global $pdo; 

    try {
        $stmt = $pdo->prepare("SELECT * FROM services"); 
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error al obtener los servicios: " . $e->getMessage());
    }
}
?>
