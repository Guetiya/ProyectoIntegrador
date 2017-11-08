<?php
session_start();
require_once('soporte.php');

// session_start();
require_once "send_form_email.php";

// $apellido = (isset($_POST['apellido']) ? $_POST['apellido'] : "");
// $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
// $correo = (isset($_POST['correo']) ? $_POST['correo'] : "");
// $tel = (isset($_POST['tel']) ? $_POST['tel'] : "");
// $message = (isset($_POST['message']) ? $_POST['mmessage'] : "");
//
// $errores =[];
//
// if ($_POST){
//
//       $errores = validarInfo($_POST);
//
//       if (count($errores) == 0){
//         $usuario = enviarCorreo($_POST); // j'en suis ici!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//         //print_r($usuario); die;
//         $usuario = guardarUsuario($usuario);
//         $usuario = guardarUsuarioBaseDatos($usuario);
//
//         header ("location:bienvenidos.php");
//         exit;
//       }
// }
// //print_r($_POST);
//
// ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Tipografías Delphine-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Arimo|Open+Sans|Parisienne">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Estilos principales-->
    <link rel="stylesheet" href="css/styles-main.css" id="cambioColor">

    <title></title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <aside class="left-col">
              <div class="language">
                <ul class="lang-selector">
                  <li class="fr"> <a href="#">Francés</a><span class="separator">|</span></li>
                  <li class="es"> <a href="#">Español</a><span class="separator">|</span></li>
                  <li class="en"> <a href="#">Inglés</a></li>
                </ul>
                <ul class="social">
                  <li><a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
                  <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-xs-6">
            <aside class="right-col">
              <div class="row">
                <div class="col-md-6 pull-right">
                  <?php if ($validacion->estaLogueado() == false): ?>
                  <ul class="login">
                    <li> <a href="./login.php" class="listanavegacion">Login</a><span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                    --><li> <a href="./registrarse.php" class="listanavegacion" style="border-right:none;">Registrarse</a></li>
                  </ul>
                <?php else: ?>
                  <ul class="login">
                    <li class="login" style="display:block;"><a href="./logout.php">
                    <input type="button" style="border-radius : 80px; color:black "name="boton" value="cerrar sesión"></a>
                    </li>
                  </ul>
                <?php endif; ?>
                  <div class="form-group search">
                    <input type="text" class="form-control" id="" placeholder="Escribí tu pregunta">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="center">
              <p class="main-description text-center">Mariage en beauté</p> <!--falta definir el color-->
              <p class="sign">par Delphine B.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <!--<nav class="navegacion">-->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class = "active"> <a href="./index.php" style="background-color:inherit">Inicio</a> </li>
                    <li role="presentation"> <a href="./quienSoy.php">¿Quién soy?</a> </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      role="button" aria-haspopup="true" aria-expanded="false">Prestaciones <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="./peinados.php">Peinados</a></li>
                          <li><a href="./maquillaje.php">Maquillaje</a></li>
                          <li><a href="./asesoriaDeImagen.php">Asesoria de imagen</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="./nutricion.php">Nutrición</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Talleres en grupos</a></li>
                      </ul>
                    <li role="presentation"> <a href="./galeria.php">Galería</a> </li>
                    <li role="presentation"> <a href="#" style="background-color:#e7ece6">Contacto</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container main" id="color">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


            <?php
              if (isset($errores)){
              echo "<ul>";
              foreach ($errores as $key => $error) {
                echo '<li>'. $error . "</li>";
              }
              echo "</ul>";
              }
            ?>

            <h2>Contactarme</h2>
            <form name="contactform" action="contacto.php" method ="post" id="frmContact">
								<div class="row form-group">
									<div class="col-md-6">
										<!-- <label for="fname">First Name</label> -->
										<input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre" required="required">
									</div>
									<div class="col-md-6">
										<!-- <label for="lname">Last Name</label> -->
										<input type="text" id="apellido" class="form-control" placeholder="Apellido" name="apellido" required="required">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email</label> -->
										<input type="email" id="correo" class="form-control" placeholder="Correo" name="correo" required="required">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email</label> -->
										<input type="text" id="tel" class="form-control" placeholder="Teléfono" name="tel">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="message">Message</label> -->
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Consulta" required="required"></textarea>
									</div>
								</div>

								<div class="form-group" id="sendButton">
									<input type="submit" value="Envía tu consulta" class="btn btn-primary" style="background-color:#ff9980;border:none;">
								</div>
								<div class="form-group" id="sendButtonWait" style="display:none;">
									<img src="/images/loader2.gif" height="64">
								</div>
							</form>

          </div>
        </div>
      </div>
    </main>

    <footer class="col-xs-12">
      <div class="container">
        <div class="row">
          <div class="col-xs-5">
            <aside class="left-col">
              <div class="language">
                <ul class="lang-selector">
                  <li class="fr"> <a href="#"> Francés </a><span class="separator">|</span></li>
                  <li class="es"> <a href="#"> Español </a><span class="separator">|</span></li>
                  <li class="en"> <a href="#"> Inglés </a></li>
                </ul>
                <ul class="social">
                  <li><a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
                  <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-xs-7">
            <aside class="right-col">
              <ul class="copyright">
                <li>&copy; Copyright<span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                --><li> Menciones legales </li>|</span></li>
                <button type="button" name="button" value="Cambiar el tema" id="cambiar_tema">Cambiar el tema</button>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </footer>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="funciones.js" charset="utf-8"></script>
  </body>
</html>
