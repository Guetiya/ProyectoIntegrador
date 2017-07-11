<?php

function validarDatos($variable){

  foreach ($variable as $key => $value) {
    $variable[$key] = trim($value);
  }

  $errores = [];

     if (empty($variable['apellido'])){
       $errores['apellido'] = "escribi un apellido!";
     }elseif (!ctype_alpha($variable['apellido'])) {
       $errores['apellido'] = "tu apellido tiene contener solamente letras!";
     }elseif (strlen($variable['apellido']) <= 2) {
       $errores['apellido'] = "tu apellido debe estar compuesto por un minimo de 2 letras! ";
     }

     if (empty($variable['nombre'])){
       $errores['nombre'] = "escribi un nombre!";
     }elseif (!ctype_alpha($variable['nombre'])) {
       $errores['nombre'] = "tu nombre tiene contener solamente letras!";
     }elseif (strlen($variable['nombre']) <= 2) {
       $errores['nombre'] = "tu nombre debe estar compuesto por un minimo de 2 letras! ";
     }

     if (empty($variable['correo'])){
       $errores['correo'] = "el correo no es valido!";
     }elseif (!filter_var($variable['correo'], FILTER_VALIDATE_EMAIL)) {
       $errores['correo'] = "El correo ingresado no es valido!";
     }

     if (empty($variable['contrasena'])){
       $errores['contrasena'] = "Tienes que ingresar una contraseña!";
     }elseif (strlen($variable['contrasena']) < 8 ||strlen($variable['repetirContrasena']) < 8){ // suis pas sure du trim ($contrasena = trim(!strlen($contrasena) > 8))
      $errores['contrasena'] = "tu contraseña debe presentar un minimo de 8 letras!";
    }elseif ($variable['contrasena'] != $variable['repetirContrasena']) {
      $errores['contrasena'] = "las contraseñas no son iguales!";
    }

     return $errores;
var_dump($variable);
  }

//crearUsuario segun los datos que recibe validarDatos
function crearUsuario($variable){

$usuario = [
  'apellido'   => $variable['apellido'],
  'nombre'     => $variable['nombre'],
  'genero'     => $variable['genero'],
  'correo'     => $variable['correo'],
  'contrasena' => password_hash($variable['contrasena'], PASSWORD_DEFAULT)
];

return $usuario;
}

//fonction écrire une archive d'utilisateurs
function guardarUsuario($usuario)
{
  $json = json_encode($usuario);

  file_put_contents("users.json", $json . PHP_EOL, FILE_APPEND);
  return $usuario;
}



function subirFoto($usuario) {

  $errores = [];

	if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK)
	{
		$nombre=$_FILES["imgPerfil"]["name"];
		$archivo=$_FILES["imgPerfil"]["tmp_name"];

		$ext = pathinfo($nombre, PATHINFO_EXTENSION);

    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
      $errores["imgPerfil"] = "Solo acepto formatos jpg, png y jpeg";
      return $errores;
    }

		$miArchivo = dirname(__FILE__); //si je veux garder une photo dans mon archive je dois changer ici!

		$miArchivo = $miArchivo . "/fotoPerfil/"; // il me créé une archive /img/

    $miArchivo = $miArchivo. md5($_FILES["imgPerfil"]["name"]) . "." . $ext;

		move_uploaded_file($archivo, $miArchivo);
	} else {
    $errores["imgPerfil"] = "Hubo un error al procesar el archivo";
  }

  return $errores;
}

var_dump($_FILES);

 ?>
