<?php
require_once '../database/conexion.php';
$nombre_med = (!empty($_POST['nombre_med']) ? $_POST['nombre_med'] : '');
$especialidad_med = (!empty($_POST['especialidad_med']) ? $_POST['especialidad_med'] : '');
$email_med = (!empty($_POST['email_med']) ? $_POST['email_med'] : '');
$password_med = (!empty($_POST['password_med']) ? $_POST['password_med'] : '');

try {
  // Calling database connection
  $connection = connection();
  // Set SQL
  $sql = 'INSERT INTO medicos (nombre_med, especialidad_med, email_med, password_med)
   VALUES (:nombre_med, :especialidad_med, :email_med, :password_med)';

  // Prepare query
  $query = $connection->prepare($sql);
  // Execute query
  $query->execute(
    array(
      ':nombre_med' => $nombre_med,
      ':especialidad_med' => $especialidad_med,
      ':email_med' => $email_med,
      ':password_med' => $password_med
    )
  );
  header('Location: ' . 'http://localhost/hospital-app/loginMedicos.php?registered=true');
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
