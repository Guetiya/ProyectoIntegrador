<?php

require_once "connect.php";
$fp = fopen('users.json', 'r');
while ($linea = fgets($fp)) {
  if (!empty($linea)) {
    $linea = json_decode($linea, true);

    $query = $db->prepare("INSERT INTO users(Apellido, Nombre, Correo, Contraseña)
    VALUES(?,?,?,?)");
    $resultado = $query->execute(array($linea['apellido'], $linea['nombre'], $linea['correo'], $linea['contrasena']));
    echo ($resultado);
  }

}
?>
