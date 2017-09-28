<?php
echo "suis debut autorizacion </br>";
require_once ("bd.php");

class Autorizacion
{

  public function loguearse()
  {

  }

  public function logout()
  {
    session_destroy;
  	header('location: index.php');
  }

  public function recordarme($value='')
  {
    # code...
  }

}


?>
