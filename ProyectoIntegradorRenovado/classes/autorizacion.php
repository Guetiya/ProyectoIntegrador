<?php
require_once ("bd.php");

class Autorizacion
{

  public function __construct() { //à modifier
    // session_start();
  	if (!isset($_SESSION["cookieMail"]) && isset($_COOKIE["cookieMail"])) {
  		$_SESSION["cookieMail"] = $_COOKIE["cookieMail"];
  	}
  }

  public function loguearse($email) {
		$_SESSION["cookieMail"] = $email;
	}

  public function estaLogueado(){
    return isset($_SESSION['cookieMail']);
  }


  public function usuarioLogueado(db $db){
    if($this->estaLogueado()){
      $mail = $_SESSION["cookieMail"];
      return $db->traerPorMail($mail); // créer la function traerPorMail
    }else{
      return null;
    }
  }

  public function logout()
  {
    session_destroy();
  	header('location: index.php');
    // setcookie("logueado", "", -1);
  }


  public function recordarme($email) {
		setcookie("cookieMail", $email, time() + 3600 * 2); //changer le nom de la cookie
	}

}


?>
