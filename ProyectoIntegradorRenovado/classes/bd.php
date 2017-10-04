<?php
require_once ("usuario.php");

abstract class Bd
{
  public abstract function guardarUsuario(Usuario $usuario);
  public abstract function guardarUsuarioBaseDatos(Usuario $usuario);
}



?>
