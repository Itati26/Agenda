<?php
// conexion.php
// Conecta a MySQL y deja la variable $conn lista para usar

$host     = 'localhost';
$dbname   = 'agenda_db';
$user     = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    echo json_encode(["error" => "No se pudo conectar a la BD: " . mysqli_connect_error()]);
    exit;
}

mysqli_set_charset($conn, "utf8mb4");
?>
