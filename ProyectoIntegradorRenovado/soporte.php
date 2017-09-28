<?php
echo "suis début soporte </br>";
require_once("classes/usuario.php");
require_once("classes/validacion.php");
require_once("classes/autorizacion.php");
require_once("classes/bdJSON.php");
require_once("classes/bdMYSQL.php");
echo "suis au milieu soporte";
$usuario = new Usuario(["nombre"], ["apellido"], ["genero"], ["correo"], ["contrasena"], ["imagen"]);
echo "suis dans soporte après usuario </br>";
$validacion = new Validacion();
$autorizacion = new Autorizacion();
$bdJSON = new BdJSON();
$bdMYSQL = new BdMYSQL();
echo "suis fin de soporte </br>";
?>
