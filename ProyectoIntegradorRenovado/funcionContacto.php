<?php
function validarInfo($variable){

  foreach ($variable as $key => $value) {
    $variable[$key] = trim($value);
  }

  $errores = [];

     if (empty($variable['apellido'])){
       $errores['apellido'] = "escribi un apellido!";
    //  }elseif (!ctype_alpha($variable['apellido'])) {
    //    $errores['apellido'] = "tu apellido tiene contener solamente letras!";
     }elseif (strlen($variable['apellido']) < 2) {
       $errores['apellido'] = "tu apellido debe estar compuesto por un minimo de 2 letras! ";
     }

     if (empty($variable['nombre'])){
       $errores['nombre'] = "escribi un nombre!";
    //  }elseif (!ctype_alpha($variable['nombre'])) {
    //    $errores['nombre'] = "tu nombre tiene contener solamente letras!";
     }elseif (strlen($variable['nombre']) < 2) {
       $errores['nombre'] = "tu nombre debe estar compuesto por un minimo de 2 letras! ";
     }

     if (empty($variable['correo'])){
       $errores['correo'] = "el correo no es valido!";
     }elseif (!filter_var($variable['correo'], FILTER_VALIDATE_EMAIL)) {
       $errores['correo'] = "El correo ingresado no es valido!";
     }

     if (empty($variable['tel'])){
       $errores['tel'] = "escribi un tel!";
    //  }elseif (!ctype_alpha($variable['nombre'])) {
    //    $errores['nombre'] = "tu nombre tiene contener solamente letras!";
      }elseif (strlen($variable['tel']) < 2) {
       $errores['tel'] = "tu tel debe estar compuesto solamente con numeros! ";
     }

     if (empty($variable['message'])){
       $errores['message'] = "escribi un message!";
     }elseif (strlen($variable['message']) < 2) {
       $errores['message'] = "tu debes ingresar un message ! ";
     }

     return $errores;
//var_dump($variable);
  }



?>
