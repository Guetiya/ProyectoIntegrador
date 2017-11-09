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
  public function sumarUsuarioConnectado(){
    if ($_POST){
      $count = (int) file_get_contents("connectados.json");
      $count = $count + 1;
      //opcion 1 : que pone el resultado por cada linea
      file_put_contents("connectados.json", $count . PHP_EOL);
      // opcion 2 : que no se suma nada
      // $fp = fopen("connectados.json", 'c');
      // fwrite($fp, $count);
      // fclose($fp);
    }
    return $count;
  }
//je n'en ai pas besoin
  // public function leerNumeroUsuarioConnect(){
  //   $usuarioConnectado= fopen('connectados.json', 'r');
  //   return $usuarioConnectado;
  // }
}



 ?>
