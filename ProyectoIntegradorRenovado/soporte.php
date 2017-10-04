<?php
require_once("classes/usuario.php");
require_once("classes/validacion.php");
require_once("classes/autorizacion.php");
require_once("classes/bdJSON.php");
require_once("classes/bdMYSQL.php");

$validacion = new Validacion();
$autorizacion = new Autorizacion();
$bdJSON = new BdJSON();
$bdMYSQL = new BdMYSQL();

?>
