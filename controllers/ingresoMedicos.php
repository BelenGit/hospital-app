<?php
require_once '../database/conexion.php';

function obtenerPacientes()
{
  $email_med = (!empty($_POST['email_med']) ? $_POST['email_med'] : '');
  $password_med = (!empty($_POST['password_med']) ? $_POST['password_med'] : '');
  try {
    $connection = connection();
    $sqlQuery = "SELECT * FROM `medicos` WHERE `email_med` = '" . $email_med . "' AND `password_med` = '" . $password_med . "'"; // Consulta SQL
    $statement = $connection->prepare($sqlQuery); // Preparar la consulta
    $statement->execute(); // Ejecutar la consulta
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); // Obtener los resultados de la consulta

    foreach ($result as $row) {
      if ($row['email_med'] == $email_med && $row['password_med'] == $password_med) {
        header('Location: ../private/listadoPacientes.php?nombre_med=' . $row['nombre_med'] . '&id_med=' . $row['id_med']);
        return;
      }
    }
    header('Location: ../loginMedicos.php?badLogin=true');
  } catch (PDOException $e) {
    echo "No se pudo obtener los datos -> " . $e;
  }
}

obtenerPacientes();
