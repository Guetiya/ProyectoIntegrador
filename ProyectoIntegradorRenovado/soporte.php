<?php
require_once("classes/usuario.php");
require_once("classes/validacion.php");
require_once("classes/autorizacion.php");
require_once("classes/bdJSON.php");
require_once("classes/bdMYSQL.php");

$usuario = new Usuario(["nombre"], ["apellido"], ["genero"], ["correo"], ["contrasena"], ["imagen"]);
$validacion = new Validacion();
$autorizacion = new Autorizacion();
$bdJSON = new BdJSON();
$bdMYSQL = new BdMYSQL();

?>
