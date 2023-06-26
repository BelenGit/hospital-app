<?php
require_once '../database/conexion.php';
$nombre = (!empty($_POST['nombre_pac']) ? $_POST['nombre_pac'] : '');
$apellido = (!empty($_POST['apellido_pac']) ? $_POST['apellido_pac'] : '');
$provincia = (!empty($_POST['provincia_pac']) ? $_POST['provincia_pac'] : '');
$direccion = (!empty($_POST['direccion_pac']) ? $_POST['direccion_pac'] : '');
$cedula = (!empty($_POST['cedula_pac']) ? $_POST['cedula_pac'] : '');
$fkid_medico = (!empty($_POST['fkid_medico']) ? $_POST['fkid_medico'] : '');

try {
    // Calling database connection
    $connection = connection();
    // Set SQL
    $sql = 'INSERT INTO pacientes (nombre_pac, apellido_pac, direccion_pac, provincia_pac, cedula_pac, fkid_medico)
     VALUES (:nombre, :apellido, :direccion, :provincia, :cedula, :fkid_medico)';

    // Prepare query
    $query = $connection->prepare($sql);
    // Execute query
    $query->execute(
        array(
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':provincia' => $provincia,
            ':direccion' => $direccion,
            ':cedula' => $cedula,
            ':fkid_medico' => $fkid_medico
        )
    );
    header('Location: ' . 'http://localhost/hospital-app/?pacienteRegistered=true');
} catch (PDOException $e) {
    echo 'Error en la Base de Datos: ' . $e->getMessage();
}
