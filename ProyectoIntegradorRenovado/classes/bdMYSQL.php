<?php
require_once ('usuario.php');
require_once ("bd.php");

class BdMYSQL extends Bd
{
  private $connexion;

  public function guardarUsuario(Usuario $usuario){

  }

  public function guardarUsuarioBaseDatos(Usuario $usuario){
    require_once "connect.php"; //a poner arriba creo
    $query = $this->connexion->prepare("INSERT INTO users(Apellido, Nombre, Correo, Contraseña)
    VALUES(?,?,?,?)");
    $query->execute(array($_POST['apellido'], $_POST['nombre'], $_POST['correo'], sha1($variable['contrasena'])));
  }

}



 ?>
