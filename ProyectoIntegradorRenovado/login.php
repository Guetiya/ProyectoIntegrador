<?php
session_start();
//require_once 'validar.php';
include_once("soporte.php");
require_once("./classes/validacion.php");

$usuario='';
$pass='';
$error_usuario = "";
$error_contrasena = "";

$errores=[];

if($_POST){
  $errores=$validacion->validarLogin($_POST, $bdMYSQL);
    if(count($errores)==0){
      $autorizacion->loguear($_POST['email']);
      if(isset($_POST['recordarme'])){
        $autorizacion->recordarme($_POST['email']);
      }
      header("location:inicio.php");
      // $usuario = $usuario->loguearse($usuario);
      // $usuario=$usuario->validarPass($pass);
    }
}



// if(isset($_POST["recordarme"]))
// {
//   $hour = time() + 3600 * 24 * 30;
//   // setcookie('username', $login, $hour);
//   setcookie('correo', $usuario, $hour);
//   setcookie('contrasena', $pass, $hour);
// }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Tipografías Delphine-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans|Parisienne">
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
              <ul class="login">
                <li> <a href="./login.php" class="listanavegacion" style="background-color:#e7ece6">Login</a><span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                --><li> <a href="./registrarse.php" class="listanavegacion" style="border-right:none;">Registrarse</a></li>
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
              <p class="main-description text-center">Mariage en beauté</p>
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
                    <li role="presentation"> <a href="#">Profesionales</a> </li>
                    <li role="presentation"> <a href="./contacto.php">Contacto</a> </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>

    </header>
    <main class="main_registro">
      <div class="container main" id="color">
      <form id='registro' action='login.php' method='post' enctype="multipart/form-data">
              <input type='hidden' name='submitted' id='submitted' value='1'/>
                  <div class="form-group">
                    <label class="col-xs-3" for=""></label>
                      <div class="col-xs-9">
                          <span style="color: red" type="center" class='error'>
                                <?php
                                  if (isset($errores)){
                                  echo "<ul>";
                                  foreach ($errores as $key => $error) {
                                    echo '<li>'. $error . "</li>";
                                  }
                                  echo "</ul>";
                                  }
                                ?>
                          </span>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                      <div class="formulario"> <!--peut être mettre en class formulario -->
                        <h2 class="text-center">Login</h2>
                        <!--<form action="script.php" method="post"><!ver el formulario-->
                          <div class="Formulario_registro form-horizontal">
                            <div class="form-group">
                              <label class="col-xs-3" for="correo"> Correo electrónico : </label>
                              <div class="col-xs-9">
                                <input type="email" placeholder="Correo electrónico" id="correo" name="correo" class="campos" value="<?php echo $usuario; ?>">
                                <?php echo $error_usuario;?>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-xs-3" for="contrasena" class="Formulario_registro"> Contraseña : </label>
                              <div class="col-xs-9">
                                <input type="password" placeholder="Contraseña" name="contrasena"  class="campos" value="" id="password"<?php echo $pass; ?>>
                                <?php echo $error_contrasena; ?>
                              </div>
                            </div>
                            <div class="form-group">
                               <div class="col-sm-offset-3 col-sm-9">
                                 <div class="checkbox">
                                   <label>
                                     <input type="checkbox" name="recordarme"class="" id="recordarme">Recordarme
                                   </label>
                                 </div>
                               </div>
                             </div>

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="login" onclick="myFunction" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Login </button>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <a href="ContrasenaOlvidado.html" class="Formulario_registro"> ¿Has olvidado tu contraseña? </a>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-5">
                <aside class="left-col">
                  <div class="language">
                    <ul class="lang-selector">
                      <li class="fr">Francés<span class="separator">|</span></li>
                      <li class="es">Español<span class="separator">|</span></li>
                      <li class="en">Inglés</li>
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
                    --><li>Menciones legales</li>|</span></li>
                    <button type="button" name="button" value="Cambiar el tema" id="cambiar_tema">Cambiar el tema</button>
                  </ul>
                </aside>
              </div>
            </div>
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
