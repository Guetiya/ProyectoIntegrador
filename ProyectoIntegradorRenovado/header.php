<?php
session_start();
require_once('soporte.php');
 ?>
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
              <li><a href="https://www.facebook.com/delphine.bertin.coiffure/" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
              <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
              <li><a href="https://www.youtube.com" target="new"><i class="fa fa-youtube"></a></i></li>
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
    <!-- <div class="row">
      <div class="col-md-11 col-md-offset-1">
        <nav class="navegacion">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class = "active"> <a href="#" style="background-color:#e7ece6">Inicio</a> </li>
                  <li role="presentation"> <a href="#">¿Quién soy?</a> </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    role="button" aria-haspopup="true" aria-expanded="false">Prestaciones <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Peinados</a></li>
                        <li><a href="#">Maquillaje</a></li>
                        <li><a href="#">Asesoria de imagen</a></li>
                    </ul>
                  <li role="presentation"> <a href="#">Profesionales</a> </li>
                  <li role="presentation"> <a href="#">Contactos</a> </li>
                </ul>
          </div>
        </nav>
      </div>
    </div> -->
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
                <li class = "active"> <a href="#" style="background-color:#e7ece6">Inicio</a> </li>
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
                </li>
                <li role="presentation"> <a href="./galeria.php">Galería</a> </li>
                <li role="presentation"> <a href="./contacto.php">Contacto</a> </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
