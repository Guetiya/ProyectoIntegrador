<?php
echo "suis debut dbjson </br>";
require_once ('usuario.php');
require_once ("bd.php");

class BdJSON extends Bd
{
  private $archivo;

  public function guardarUsuario(Usuario $usuario)
  {
      $json = json_encode($usuario);
      file_put_contents("users.json", $json . PHP_EOL, FILE_APPEND);
      return $usuario;
  }

  public function guardarUsuarioBaseDatos(Usuario $usuario){

  }

}



 ?>
