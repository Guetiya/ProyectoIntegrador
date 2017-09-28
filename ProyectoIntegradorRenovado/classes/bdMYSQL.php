<?php
echo "suis debut dbmysql </br>";
require_once ('usuario.php');
require_once ("bd.php");
// require_once ("connect.php");

class BdMYSQL extends Bd
{
  private $connexion;

  public function guardarUsuario(Usuario $usuario){

  }

  public function __construct(){
    $dsn = 'mysql:host=localhost; dbname=mariage_en_beaute; charset=utf8mb4; port:3306';
    $db_user = 'root';//delphine
    $db_pass = '';//Delphine123Yvan456
    $this->connexion = new PDO($dsn, $db_user, $db_pass);

    try {
    $this->connexion = new PDO($dsn, $db_user, $db_pass);
    }
    catch (PDOException $exception){
      echo $exception->getMessage();
    }
  }


  public function guardarUsuarioBaseDatos(Usuario $usuario){ //los nombres no son buenos
    // require_once "connect.php"; //a poner arriba creo
    $query = $this->connexion->prepare("INSERT INTO users(Apellido, Nombre, Correo, Contraseña)
    VALUES(?,?,?,?)");
    $query->execute(array($_POST['apellido'], $_POST['nombre'], $_POST['correo'], sha1($variable['contrasena'])));
  }
}


 ?>
