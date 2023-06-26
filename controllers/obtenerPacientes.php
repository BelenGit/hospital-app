<?php
require_once dirname(__DIR__) . '/database/conexion.php'; // Path: hospital-app\controllers\obtenerMedicos.php
function obtenerPacientes($id_med)
{
    try {
        $connection = connection();
        $sqlQuery = "SELECT * FROM `pacientes` WHERE `fkid_medico` = " . $id_med; // Consulta SQL por parametro
        $statement = $connection->prepare($sqlQuery); // Preparar la consulta
        $statement->execute(); // Ejecutar la consulta
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); // Obtener los resultados de la consulta
        return $result;
    } catch (PDOException $e) {
        echo "No se pudo obtener los datos -> " . $e;
    }
}
