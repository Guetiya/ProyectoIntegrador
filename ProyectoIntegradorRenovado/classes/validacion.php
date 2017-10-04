<?php
require_once ("bd.php");
require_once ("bdJSON.php");
require_once ("bdMYSQL.php");

class Validacion
{
  public function validarDatos($variable, Bd $bdMYSQL) //no estoy segura
  {

    foreach ($variable as $key => $value) {
      $variable[$key] = trim($value);
    }

    $errores = [];

       if (empty($variable['apellido'])){
         $errores['apellido'] = "Escribi un apellido!";
       }elseif (strlen($variable['apellido']) < 2) {
         $errores['apellido'] = "Tu apellido debe estar compuesto por un minimo de 2 letras! ";
       }

       if (empty($variable['nombre'])){
         $errores['nombre'] = "Escribi un nombre!";
       }elseif (strlen($variable['nombre']) < 2) {
         $errores['nombre'] = "Tu nombre debe estar compuesto por un minimo de 2 letras! ";
       }

       if (empty($variable['correo'])){
         $errores['correo'] = "El correo no es valido!";
       }elseif (!filter_var($variable['correo'], FILTER_VALIDATE_EMAIL)) {
         $errores['correo'] = "El correo ingresado no es valido!";
       }

       if (empty($variable['contrasena'])){
         $errores['contrasena'] = "Tienes que ingresar una contraseña!";
       }elseif (strlen($variable['contrasena']) < 8 ||strlen($variable['repetirContrasena']) < 8){
         $errores['contrasena'] = "Tu contraseña debe presentar un minimo de 8 letras!";
        }elseif ($variable['contrasena'] != $variable['repetirContrasena']) {
          $errores['contrasena'] = "Las contraseñas no son iguales!";
        }

       return $errores;
  // var_dump($variable);
  }

  public function validarLogin()
  { //algo esta mal con las variables
    $usuario='';
    $pass='';
    $error_usuario = "";
    $error_contrasena = "";

    //si es
    if($_POST){
      //var_dump($_POST);
      $usuario = $_POST['correo'];
      $pass = $_POST['contrasena'];

      if (empty($usuario) && !filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
        $error_usuario = "El usuario es incorrecto";//"Tenés que poner un correo"
      }
      if (empty ($pass)){
        $error_contrasena = "La contraseña es incorrecta"; // "Tenés que poner una contraseña"
      }

      $user =$this->validarPass($_POST['contrasena']); //erreur ici pour appeler la fonction!!!!!!
      if ($user) {
        header ("location: index.php");
      }else {
        $error_usuario ="El usuario es incorrecto";
        $error_contrasena ="La contraseña es incorrecta";
      }
    }
  }

  public function validarPass($pass)
  {
      //echo "El pass sin hashear es: " . $pass;
      //echo "Vamos a buscar el password: " . $hashed;
      $fp = fopen('users.json', 'r');
      while (($linea = fgets($fp)) !== false) {
          //echo $linea;
          $linea = json_decode($linea, true);

          if (password_verify($pass, $linea['contrasena']) == true) {
            session_start();
            $_SESSION ['nombre'] = $linea['nombre'];
            header ("location: index.php");
        }
      }

     return false;
  }

  public function estaLogueado() {
    if (isset($_SESSION["nombre"])) {
      return true;
    }
    return false;
  }
}


?>
