<?php

require_once dirname(__DIR__) . '/database/conexion.php'; // Path: hospital-app\controllers\obtenerMedicos.php
function obtenerMedicos()
{
  try {
    $connection = connection();
    $sqlQuery = "SELECT * from `medicos`"; // Consulta SQL
    $statement = $connection->prepare($sqlQuery); // Preparar la consulta
    $statement->execute(); // Ejecutar la consulta
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); // Obtener los resultados de la consulta
    return $result;
  } catch (PDOException $e) {
    echo "No se pudo obtener los datos -> " . $e;
  }
}

function lol()
{
  echo dirname(__DIR__) . '/database/conexion.php';
}
