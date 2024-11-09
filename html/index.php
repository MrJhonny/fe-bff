<?php
include_once 'services.php';
include_once 'aboutus.php';

// Autenticación Bearer Token
$headers = getallheaders();
if (isset($headers['Authorization']) && $headers['Authorization'] == 'Bearer ciisa') {
    $auth = true;
} else {
    header('HTTP/1.1 403 Forbidden');
    echo "Acceso no autorizado.";
    exit;
}

// Ruta de la API: GET Servicios
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/v1/services/') {
    $services = getServices();
    echo json_encode($services);
}

// Ruta de la API: GET Nosotros
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/v1/about-us/') {
    $aboutUs = getAboutUs();
    echo json_encode($aboutUs);
}
?>
