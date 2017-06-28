<?php
require_once "validacion.php";
require_once "usuarios.php";

// Inicializar mi usuario
$fueCompletado = isset($_REQUEST['submitted']);

$errores = 0; 

if ($fueCompletado) {

    // Validar la informacion
    if (count($_FILES)) {
        $avatarFileName = $_FILES['avatar']['name'];
        $avatarFile = $_FILES['avatar']['tmp_name'];
        $avatarExtension = pathinfo($avatarFileName, PATHINFO_EXTENSION);

        move_uploaded_file($avatarFile, 'avatars/' . md5($user['username']) . '.' . $avatarExtension);
    }

    // Guardarlo en un file
    $resultado = guardarUsuario($_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['genero'], $_REQUEST['correo'], $_REQUEST['contrasena']);

    }

    if (is_array($resultado) && ! empty($resultado)) {
        echo "Hubo errores";
    } else {
        echo "Se guardo bien";
    }


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
    <link rel="stylesheet" href="css/styles-main.css">

    <title>Formulario de usuario</title>
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
                <li> <a href="./login.html" class="listanavegacion">Login</a><span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                --><li> <a href="./formulariodeusuario.html" class="listanavegacion" style="background-color:#e7ece6">Registrarse</a></li>
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
          <div class="col-md-10 col-md-offset-2">
            <!--<nav class="navegacion">-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class = "active"> <a href="./index.html" style="">Inicio</a> </li>
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
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main> <!--TODO css-->
      <form id='register' action='registrar.php' method='post' enctype="multipart/form-data">
        <input type='hidden' name='submitted' id='submitted' value='1'/>

          <div class='short_explanation'>* campos requeridos</div>

          <div><span class='error'></span></div>
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3">
                <div class="formulario">
                  <h2>Formulario de usuario</h2>

                    <div class="Formulario_registro">
                      <label for="apellido">Apellido* : </label>
                      <input type="text" placeholder="apellido" id="apellido" name="apellido" required class="campos" maxlength="40">
                      <span style="color: red"  class='error'>
                        <?php  //es cuando la persona ingresa su nombre le dice directamente que no es valido?
                            if (isset($errores['apellido'])) {
                                echo "El apellido ingresado no es valido";
                            }
                        ?>
                      </span>
                      <br>
                      <label for="nombre">Nombre* : </label>
                      <input type="text" placeholder="nombre" id="nombre" name="nombre" required class="campos" maxlength="40">
                      <span style="color: red"  class='error'>
                        <?php  //es cuando la persona ingresa su nombre le dice directamente que no es valido?
                            if (isset($errores['nombre'])) {
                                echo "El nombre ingresado no es valido";
                            }
                        ?>
                      </span>
                      <br>
                      <label for="genero">Genero : </label>
                      <select name="genero" value="genero" class="campos">
                        <option value="genero">Hombre</option>
                        <option value="genero">Mujer</option>
                      </select>
                      <br>
                      <label for="correo">Correo electrónico* : </label>
                      <input type="email" placeholder="correo electrónico" id="correo" name="correo" required class="campos" maxlength="40">
                      <span style="color: red"  class='error'>
                        <?php
                          if (isset($errores['correo'])) {
                            echo "El correo ingresado no es valido";
                          }
                        ?>
                      </span>
                      <br>
                      <label for="contrasena">Contraseña* : </label>
                      <input type="password" placeholder="contraseña" name="contrasena" required class="campos" maxlength="40">
                      <span style="color: red"  class='error'>
                        <?php
                          if (isset($errores['contrasena'])) {
                            echo "La contraseña ingresada no es valida";
                          }
                        ?>
                      </span>
                      <br>
                      <label for="repetirContrasena">Repetir contraseña* : </label>
                      <input type="password" placeholder="contraseña" name="contrasena" required class="campos" maxlength="40">
                      <br>
                      <span for="recordarme">Recordarme <input type="checkbox" name="recordarme"class="campos"></span>
                    </div>
                      <br>
                      <br>
                      <button type="submit" class="Formulario_registro" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Registrarme </button>
                      <button type="reset"class="Formulario_registro" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Borrar </button>
                      <br>
                      <br>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </main>
    <footer class="col-xs-12"> <!--TODO segun el index home-->
      <div class="container">
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
                --><li>Menciones legales</li>
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
