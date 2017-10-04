<?php
require_once ('usuario.php');
require_once ("bd.php");

class BdJSON extends Bd
{
  private $archivo;

  public function guardarUsuario(Usuario $usuario)
  {
    echo "<pre>";
    $usuarioFinal = [];
    $usuarioFinal["nombre"] = $usuario->getNombre();
    $usuarioFinal["apellido"] = $usuario->getApellido();
    $usuarioFinal["genero"] = $usuario->getGenero();
    $usuarioFinal["correo"] = $usuario->getCorreo();
    $usuarioFinal["contrasena"] = $usuario->getContrasena();
    $usuarioFinal["imagen"] = $_POST["imagen"];
      $json = json_encode($usuarioFinal);
      // exit;
      file_put_contents("users.json", $json . PHP_EOL, FILE_APPEND);
      return $usuario;
  }

  public function guardarUsuarioBaseDatos(Usuario $usuario){

  }

}



 ?>
