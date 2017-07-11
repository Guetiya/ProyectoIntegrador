<?php
$usuario='';
$pass='';
$error_usuario = "";
$error_contrasena = "";

if($_POST){
  //var_dump($_POST);
  $usuario = $_POST['correo'];
  $pass = $_POST['contrasena'];

  if (empty($usuario) && !filter_var($usuario , FILTER_VALIDATE_EMAIL)) {
    $error_usuario = "el usuario es incorrecto";
  }
  if ( empty ($pass)){
    $error_contrasena = "la contraseña no debe estar vacía";
  }

  


}

?>
