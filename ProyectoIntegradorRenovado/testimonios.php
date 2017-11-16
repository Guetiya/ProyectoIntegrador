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
    <link rel="stylesheet" href="css/styles-main.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <title>Mariage en beauté</title>
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
                  <li class="en"> <a href="#">Inglés</a><span class="separator">|</span></li>
                  <li class="contar">Ya somos <span id="contar"></span>usuarios</li>
                </ul>
                <ul class="social">
                  <li><a href="https://www.facebook.com/delphine.bertin.coiffure/" target="new"><i class="fa fa-facebook-square fa-2x"></a></i></li>
                  <li><a href="https://www.instagram.com/?hl=fr" target="new"><i class="fa fa-instagram fa-2x"></a></i></li>
                  <li><a href="https://www.youtube.com" target="new"><i class="fa fa-youtube fa-2x"></a></i></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-xs-6">
            <aside class="right-col">
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
                    <li class = "active"> <a href="./index.php" style="background-color:#e7ece6">Inicio</a> </li>
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
    <section id="carousel">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2">
            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
    				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
    				  <!-- Carousel indicators -->
                <ol class="carousel-indicators">
      				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
      				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
      				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                  <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
    				    </ol>
    				  <!-- Carousel items -->
    				    <div class="carousel-inner">
      				    <div class="active item">
                    <img class="profile-circle" src="images/fotomaquillaje1.jpg">
      				    	<blockquote>
      				    		<p>Ce témoignage concerne surtout les filles, les ados, les femmes mais aussi les hommes qui souhaitent faire plaisir à leur moitié. <br>

                        Delphine est une amie qui sait donner le sourire grâce à ses doigts de fées.<br>
                        Elle m'aidait  pour mes cours lorsque j'étais au lycée mais les cours se terminaient toujours par une coiffure 😁
                        Tout simplement car elle en avait envie et qu'elle voulait faire bouger ses doigts dans mes cheveux!!!<br>
                        Je les avais courts mais elle réussissait toujours à faire une coiffure exceptionnelle!!!  Elle est d'une créativité débordante.<br>
                        Elle me coiffait pour un mariage, une cérémonie, des sorties entre amis ou même pour aucune occasion. Le simple fait qu'elle me coiffe était pour moi un pur bonheur.<br>
                        Un regret?? Oui j'en ai un... qu'elle soit si loin et ne puisse pas discuter avec son amie en me coiffant (elle serait contente, aujourd'hui mes cheveux dépassent mes épaules 😉😀 )<br>
                        Delphine, je crois en toi et tu vas arriver à ce que tu as toujours rêvé.<br>
                        Ne seriez-vous pas tenter de sortir et de vous sentir belle??<br>
                        Laissez vos cheveux et vote visage à Delphine. Vous ne le regreterai pas. Vous serez rayonnante!</p>
                      <p class="firmaClient">Cath, une amie française et Lorraine</p>
      				    	</blockquote>
      				    </div>
      				    <div class="item">
                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
      				    	<blockquote>
      				    		<p>Pour toutes les coiffures gratis que Delphine m'a faites....Je n'en suis que reconnaissante car les moemtns passés avec elle ont tjs été des moments privilégiés de discutes de rire pour un résultat tjs à la hauteur de mes attentes.</p>
      				    	</blockquote>
      				    </div>
      				    <div class="item">
                    <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
      				    	<blockquote>
      				    		<p>Delphine a relevé le défi d'avoir fait mon chignon de mariée alors qu'elle n'était pas encore coiffeuse, mais j'avais tellement confiance en elle que je voulais que ce soit elle et personne d'autres.</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
          			    <blockquote>
      				    		<p>Je connaissais à peine Delphine mais quand je l'entendais parler de sa passion pour les chignons, le jour où j'ai appris mon mariage j'ai tout de suite pensé à elle...et avec bcp de plaisir pour un résultat sans fautes.</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
          			    <blockquote>
      				    		<p>Pour mon mariage à venir je vais choisir ma petite soeur pour le maquillage et la coiffure...Je ne sais pas comment elle va faire pour coiffer le reste de la famille mais je m'en fiche JE PASSE LA PREMIERE!!!</p>
      				    	</blockquote>
      				    </div>
                  <div class="item">
                    <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
        			    	<blockquote>
    				    		  <p>A toutes celles qui hésitent encore pour leurs coiffures, Delphine c'est la passion du chignon elle est née avec un peigne dans les mains, en plus son truc c'est qu'elle respecte le silence quand elle bosse et ça c'est chouette. C'est aussi une confidente à qui je peux tout dire car je sais qu'elle n'a pas de jugement et en plus d'être bien coiffée, je ressors avec le morale remonté. :)</p>
    				    	</blockquote>
    				    </div>
    				  </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <footer class="col-xs-12">
      <div class="container">
        <div class="row" id="color">
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
                  <li><a href="https://www.youtube.com" target="new"><i class="fa fa-youtube fa-2x"></a></i></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-xs-7">
            <aside class="right-col">
              <ul class="copyright">
                <li>&copy; Copyright<span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                --><li> Menciones legales <span class="separator">|</span></li>
                <button type="button" name="button" value="Cambiar el tema" id="cambiar_tema">Cambiar el tema</button>
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="funciones.js" charset="utf-8"></script>
  </body>
</html>
