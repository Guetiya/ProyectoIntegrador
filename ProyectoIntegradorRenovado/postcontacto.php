<?php
$errores = [];

if(!isset($_POST['nombre']) || $_POST['nombre'] == ''){
  $errores['name'] = "El campo nombre debe estar lleno !";
}
if(!isset($_POST['apellido']) || $_POST['apellido'] == ''){
  $errores['apellido'] = "El campo apellido debe estar lleno !";
}
if(!isset($_POST['correo']) || $_POST['correo'] == '' || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
  $errores['correo'] = "El campo correo debe estar lleno !";
}

if(!isset($_POST['message']) || $_POST['message'] == ''){
  $errores['message'] = "El campo message debe estar lleno !";
}

if(!empty($errores)){
  session_start();
  $_SESSION['errores']= $errores;
  $_SESSION['inputs']= $_POST;
  header('location:contacto.php');
}else{
  $_SESSION['success'] = 1;
  $message =$_POST['message'];
  $header='FROM:site@local.dev'; //indique qui a envoyé le mail
  mail('dbertin.diet@gmail.com', 'Formulaire de contact', $message, $header);
  header('Location : contacto.php');
}
var_dump($errores);
die();

var_dump($_POST);
?>
