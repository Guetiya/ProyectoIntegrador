<?php
require_once "validacion.php";

function guardarUsuario($nombre, $apellido, $genero, $correo, $contrasena, $repetirContrasena)
{
    // Validar!
    $errores = validarUsuario($nombre, $apellido, $genero, $correo, $contrasena, $repetirContrasena);

    if (empty($errores)) {
        // No hubo errores
        $contrasena = sha1($contrasena);

        // Transformarlo a json
        $jsonUser = json_encode([
            'nombre'     => $nombre, /* en verde se pone el id? o name? */
            'apellido'   => $apellido,
            'genero'     => $genero,
            'correo'     => $correo,
            'contrasena' => $contrasena,
          /*  'repetirContrasena'*/
        ]);

        $fp = fopen("users.json", "a+");
        $resultado = fwrite($fp, $jsonUser . PHP_EOL);
        fclose($fp);
        return $resultado;
    } else {
        // Hubo errores
        return $errores;
    }
}

function validarUsuario($nombre, $apellido, $genero, $correo, $contrasena, $repetirContrasena)
{
    $errores = [];

    if (! validarNombreOApellido($nombre, 1)) {
        $errores['name'] = "El nombre es invalido";
    }

    if (! validarNombreOApellido($apellido, 1)) {
        $errores['surname'] = "El apellido no es valido";
    }
/* no es necesario para el genero? */
    /*if (){
      $errores['genero'] = "El Genero es invalido";
    }*/

    if (! validarEmail($correo)) {
        $errores['email'] = "El mail ingresado no es valido";
    }

    /*if (! validarNombreDeUsuario($usuario)) {
        $errores['username'] = "El username ingresado no es valido";
    } no tengo */

    if (! validarContrasena($contrasena)) {
        $errores['contrasena'] = "La contrasena ingresada no es valida";
    }

    return $errores;
}
