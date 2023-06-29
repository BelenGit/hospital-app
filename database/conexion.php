<?php
function connection()
{
    $server = "localhost";
    $user = "root";
    $password = "Belen123!";
    $database = "hospital-app";
    try {
        $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password); // Conexión a la base de datos con PDO
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Establecer el modo de error de PDO a excepción (para que nos muestre los errores)
        return $connection;
    } catch (PDOException $e) {
        echo "Conexión errónea " . $e;
    }
}