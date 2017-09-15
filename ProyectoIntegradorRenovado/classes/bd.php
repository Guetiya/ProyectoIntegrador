<?php

require_once ("usuario.php");

abstract class bd
{
  public abstract function guardarUsuario(Usuario $xxx);
  public abstract function guardarUsuarioBaseDatos(Usuario $yyy);
}



?>
