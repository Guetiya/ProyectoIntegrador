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
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
    <script src="//frontend.reklamor.com/fancybox/jquery.fancybox.js"></script>
    <title>Galeria</title>
  </head>
<body>
  <header>
    <div class="container main" id="color">
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
                  <li role="presentation"> <a href="./galeria.php" style="background-color:#e7ece6">Galería</a> </li>
                  <li role="presentation"> <a href="./contacto.php">Contacto</a> </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

<div class="container">
	<div class="row">
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/fotomaquillaje1.jpg">
                    <img class="img-responsive" alt="" src="images/fotomaquillaje1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Andrea.jpg">
                    <img class="img-responsive" alt="" src="images/Andrea.jpg" />
                </a>
            </div> <!-- col-6 / end --><div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Andrea1.jpg">
                    <img class="img-responsive" alt="" src="images/Andrea1.jpg" />
                </a>
            </div> <!-- col-6 / end --><div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Laurine.jpg">
                    <img class="img-responsive" alt="" src="images/Laurine.jpg" />
                </a>
            </div> <!-- col-6 / end --><div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Laurine1.jpg">
                    <img class="img-responsive" alt="" src="images/Laurine1.jpg" />
                </a>
            </div> <!-- col-6 / end --><div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Laurine2.jpg">
                    <img class="img-responsive" alt="" src="images/Laurine2.jpg" />
                </a>
            </div> <!-- col-6 / end --><div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Laurine3.jpg">
                    <img class="img-responsive" alt="" src="images/Laurine3.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/fotoJuline1.jpg">
                    <img class="img-responsive" alt="" src="images/fotoJuline1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/fotoLea1.jpg">
                    <img class="img-responsive" alt="" src="images/fotoLea1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Lea.jpg">
                    <img class="img-responsive" alt="" src="images/Lea.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Juline.jpg">
                    <img class="img-responsive" alt="" src="images/Juline.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/angeline1.jpg">
                    <img class="img-responsive" alt="" src="images/angeline1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/Abril.jpg">
                    <img class="img-responsive" alt="" src="images/Abril.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/severine2.jpg">
                    <img class="img-responsive" alt="" src="images/severine2.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/severine3.jpg">
                    <img class="img-responsive" alt="" src="images/severine3.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/severine4.jpg">
                    <img class="img-responsive" alt="" src="images/severine4.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/severine5.jpg">
                    <img class="img-responsive" alt="" src="images/severine5.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/severine6.jpg">
                    <img class="img-responsive" alt="" src="images/severine6.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/alix1.jpg">
                    <img class="img-responsive" alt="" src="images/alix1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="images/romane1.jpg">
                    <img class="img-responsive" alt="" src="images/romane1.jpg" />
                </a>
            </div> <!-- col-6 / end -->
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
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
