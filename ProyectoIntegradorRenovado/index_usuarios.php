<?php
session_start();

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
    <link rel="stylesheet" href="css/styles-main.css">

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
              <ul class="login">
                <li class="login" style="display:block;">Usuario:  <?php  echo $_SESSION['nombre']; ?><a href="./index.php"> <input type="button" name="boton" value="cerrar sesión"><?php session_destroy() ?></a></li>

              </ul>
              <div class="row">
                <div class="col-md-6 pull-right">
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
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="cover">
              <div class="container">
                <!--carussel -->
                <div id="carousel-example-generic" class="carousel-slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="images/fotomaquillaje.jpg" alt="" width="200px" height="200px">
                      <div class="carousel-caption">
                        <a href="#"> <!--a poner sobre los otros -->
                          <h3>¿Te vas a casar o tienes una ceremonia?</h3>
                          <p>¡Qué buena noticia! ¿Te falta inspiración para tu peinado, maquillaje, e incluso tu vestuario? ¡No te preocupes!<strong> <em>Mariage en beauté </em></strong> te brinda consejos de belleza y te ofrece prestaciones
                          personalizadas.<strong><em>Mariage en beauté</em></strong> juega sobre la combinación de un estilo adaptado con colores adecuadamente escogidos para resaltar tu belleza, con el fin de que irradies el día D. <br>Porque cada uno merece una belleza a medida, <strong><em>Mariage en beauté</em></strong> contribuye a descubrir la tuya.
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <img src="images/robe.jpg" alt="" width="200px" height="250px">
                      <div class="carousel-caption">
                        <a href="#">
                          <h3>Peinados</h3>
                          <p>Del pelo rizado a tieso, de largo a corto…. <strong><em>Mariage en beauté</em></strong>
                            te crea el peinado a tu medida, <br>solamente para vos, para ese día tan esperado.</p>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <img src="images/fotomaquillaje.jpg" alt="" width="200px" height="266px">
                      <div class="carousel-caption">
                        <a href="#">
                          <h3>Maquillaje</h3>
                          <p>Maquillaje natural o uno más atrevido…. A través de su práctica y sus paletas de
                            colores, <strong><em>Mariage en beauté</em></strong> escoge los que intensifican tus rasgos
                            para que tu cara se ilumine el día D.</p>
                        </a>
                      </div>
                    </div>
                    <div class="item">
                      <img src="images/robe.jpg" alt="" width="200px" height="266px">
                      <div class="carousel-caption">
                        <a href="#">
                          <h3>Asesoria de imagen</h3>
                          <p><strong><em>Mariage en beauté</em></strong> combina las formas, las texturas, los estilos
                          y los colores con el fin de que <br>estén plenamente acorde a tu vestuario.</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <div class="articulos">
              <h2 style="text-align:center;">Ultimos artículos</h2>
              <h4>Artículo 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                LKJKljshfjksJHKJSKDJSKJDNSDklhfejkrfhjdncbsgdfhjkbhzjfkr chrfhejincididuntalirum.</p>
              <h4>Artículo 2</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                LKJKljshfjksJHKJSKDJSKJDNSDklhfejkrfhjdncbsgdfhjkbhzjfkr chrfhejincididuntalirum</p>
              <h4>Artículo 3</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                LKJKljshfjksJHKJSKDJSKJDNSDklhfejkrfhjdncbsgdfhjkbhzjfkr chrfhejincididuntalirum</p>
            </div>
          </div>
          <div class="col-xs-3">
            <div class="testimonios">
              <h2 style=""> Testimonios </h2>
              <span class="glyphicon glyphicon-menu-left"></span>
              <img src="images/Photo 003 - Copie.jpg" alt="" width="100px" height="100px" class="img-circle">
              <span class="glyphicon glyphicon-menu-right"></span>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in tur.</p>
                <i class="fa fa-quote-right"></i>
            </div>
          </div>
          <div class="col-xs-3">
            <div class="profesionales">
              <h2 style=""> ¿Sos profesional? </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                 exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                 dolor in reprehenderit in voluptate velit esnulla pariatur. Except id est laborum.</p>
            </div>
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
                --><li> Menciones legales </li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </footer>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
