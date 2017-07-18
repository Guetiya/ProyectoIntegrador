<?php
$usuario='';
$pass='';
$error_usuario = "";
$error_contrasena = "";

//si es
if($_POST){
  //var_dump($_POST);
  $usuario = $_POST['correo'];
  $pass = $_POST['contrasena'];

  if (empty($usuario) && !filter_var($usuario , FILTER_VALIDATE_EMAIL)) {
    $error_usuario = "el usuario es incorrecto";
  }
  if ( empty ($pass)){
    $error_contrasena = "contraseña incorrecta";
  }

}
if (isset($_POST) && ($_POST == 1)){
  $user = ValidarPass($_POST ['contrasena']);
  if ($user) {
    # code...
    header ("location: index.php");
  }else {
    echo"No lo encontré";
  }
  }

if (isset ($usuario) &&  isset($pass)) {

ValidarPass($pass);

}
function ValidarPass($pass)
{
  $fp = fopen('users.json', 'r');
  while ($linea = fgets($fp)) {
    if (!empty($linea)) {
      $linea = json_decode($linea, true);
      if ($linea['contrasena'] == $pass) {
        $error_contrasena = "contraseña incorrecta";
      }
    }
  }

 return false;
}
?>
