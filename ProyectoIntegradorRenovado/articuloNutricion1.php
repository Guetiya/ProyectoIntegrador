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

    <title>Artículo Nutrición 1</title>
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
                    <li role="presentation"> <a href="./contacto.php">Contacto</a> </li>
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
          <div class="contenidoArticulos col-sm-12">
            <h5>L’alimentation au service de votre beauté</h5>
            <time class="entry-date published" datetime="2017-09-06T18:42:40+00:00">1 mes atrás</time>
            <hr noshade> <!-- retirer le display inline block pour le centrer à h2 -->
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-12">
            <p><em>Quelle couleur mettre, quel vêtement porter? Tous les jours la même questuion et aujourd'hui de nouveau et pire encore pour le jour de mon mariage. je suis déjà du genre à ne pas savoir quoi porter en semaine mais là je sens que ça va être compliqué pour me trouver la tenue idéale sans passer pour l'arriérée ...</em></p>
          </div>
        </div>
        <div class="rowBelleza">
          <div class="articulos col-sm-9">
            <h6>Les bénéfices d’une alimentation équilibrée : </h6>
            <ul>
              <li>peau radieuse</li>
              <li>ongles en bon état </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="./galeria.php"><img src="images/fotomaquillaje.jpg" alt="" width="200px" height="250px"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h6>Pour bénéficier au max des avantages qqs rythmes de vie à respecter : </h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="images/fotomaquillaje.jpg" alt="" width="90px" height="100px">
            <h3>Et vous? </h3>
            <p>Comment prenez-vous soin de votre peau? Qu'êtes-vous prêtes à faire, à mettre en place, à changer pour avoir la peau que vous souhaitez?</p>
            <p class="firma">par Delphine B.</p>
          </div>
        </div>
        <div class="rowBelleza">
          <div class="col-sm-3">
            <div class="citacion">
              <h3>Citacion</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboicing elit,
                t laborum..</p>
                <p><span class="glyphicon glyphicon-hand-right"style="color:#ff9980"></span><a href="./testimonios.php" style="color:#ff9980"> Testimonios</a></p>
            </div>
          </div>
          <!-- <div class="row">
            <div class="articulos col-sm-3">
              <div class="fotoArticulosBelleza">
              </div>
            </div>
        </div> -->
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
