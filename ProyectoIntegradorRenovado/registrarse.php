<?php
//require_once "funciones.php";
include_once("soporte.php");
require_once("classes/usuario.php");


$apellido = (isset($_POST['apellido']) ? $_POST['apellido'] : "");
$nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
$genero = (isset($_POST['genero']) ? $_POST['genero'] : "");
$correo = (isset($_POST['correo']) ? $_POST['correo'] : "");
$contrasena = (isset($_POST['contrasena']));

$generos = ["", "Hombre", "Mujer"];
$errores =[];


if ($_POST){
  // var_dump($_FILES);
      $errores = $validacion->validarDatos($_POST, $bdMYSQL);
      $usuario = new Usuario($_POST);
      $errorImagen = $usuario->subirFoto(); // qué significa?
      $errores = array_merge($errores, $errorImagen);//no esta bien

      if (count($errores) == 0){
        // $usuario = $usuario->crearUsuario($_POST);
        // $usuario = $usuario->__construct($_POST); no sirve por que hay new Usuario
        //print_r($usuario); die;
        $usuario = $bdJSON->guardarUsuario($usuario);
        $usuario = $bdMYSQL->guardarUsuarioBaseDatos($usuario);
        $usuario = $bdJSON->sumarUsuarioConnectado();
        header ("location:bienvenidos.php");
        exit;
      }
}
//print_r($_POST);

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
                  <p id="demo"><?php $count ?></p>
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
                <li> <a href="./login.php" class="listanavegacion">Login</a><span class="separator">|</span></li><!-- Comentario para sacar espacio en blanco adicional
                --><li> <a href="./registarse.php" class="listanavegacion" style="background-color:#e7ece6">Registrarse</a></li>
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
      <div class="container">
      <form id='registro' onsubmit="return validacionjs();" action='registrarse.php' method='post' enctype="multipart/form-data">
            <input type='hidden' name='submitted' id='submitted' value='1'/> <!--pourquoi cette ligne? -->
              <div class="form-group">
                <label class="col-xs-3" for=""></label>
                <!-- <div class="alert alert-danger"> -->
                  <!-- <strong>Erreur !</strong> message d'erreur <i>alert-danger</i>. -->
                  <span style="color: red" type="center" class='error'>
                        <?php
                          if (isset($errores)){
                          echo "<ul>";
                          foreach ($errores as $key => $error) { ?>
                            <div class="alert alert-danger">
                            <?php echo '<li>'. $error . "</li>";
                          }
                          echo "</ul>"; ?>
                            </div>
                        <?php  }
                        ?>
                  </span>
                <!-- </div> -->
              <div id="div-id" style="color: red" type="center" class='error'> </div>
              </div>
                <div class="row">
                  <div class="col-xs-6 col-xs-offset-3">
                    <div class="formulario">
                      <h2 class="text-center">Registrarse</h2>

                        <div class='short_explanation'>* Campos requeridos</div>
                        <br/>
                        <div class="Formulario_registro form-horizontal">
                          <div class="form-group">
                            <label class="col-xs-3" for="apellido">Apellido* : </label>
                            <div class="col-xs-9">
                              <input type="text" onfocus="return validar_apellido();"onchange="clear_apellido();"placeholder="apellido" id="apellido" name="apellido"  class="campos" maxlength="40" value="<?php if(isset($apellido)) {echo $apellido; } ?>" id="apellido" required />
                            <!-- esto hace que muestre el dialogo de error -->  <div id="error_apellido"class="val_error"></div>
                              <!-- <span style="color: red"  class='error'>
                                <?php
                                    // if (isset($errores['apellido'])) {
                                    //     echo "El apellido ingresado no es valido";
                                    // }
                                ?>

                              </span> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="nombre">Nombre* : </label>
                            <div class="col-xs-9">
                              <input type="text" onclick="return validar_nombre();" onchange="clear_nombre();"placeholder="nombre" id="nombre" name="nombre" class="campos" maxlength="40"   value="<?php if(isset($nombre)) {echo $nombre; } ?>" required>
                              <div id="error_nombre"class="val_error"></div>

                              <!-- <span style="color: red"  class='error'>
                                <?php
                                    // if (isset($errores['nombre'])) {
                                    //     echo "El nombre ingresado no es valido";
                                    // }
                                ?>
                              </span> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="genero">Genero : </label>
                            <div class="col-xs-9">
                              <select class="campos <?=$huboErrorGenero?>" name="genero" required>
                                <?php foreach ($generos as $genero) : ?>
                                  <?php if ($_POST["genero"] == $genero) : ?>
                                    <option value="<?=$genero?>" selected>
                                      <?=$genero?>
                                    </option>
                                  <?php else : ?>
                                    <option value="<?=$genero?>">
                                      <?=$genero?>
                                    </option>
                                  <?php endif; ?>
                                <?php endforeach;?>
                              </select>
                              <!-- <select name="genero" value="genero" class="campos">
                                <option value="genero">Hombre</option>
                                <option value="genero">Mujer</option>
                              </select> -->

                                <!--<div id="error_genero"class="val_error"></div>-->

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="correo">Correo electrónico* : </label>
                            <div class="col-xs-9">
                              <input type="email" onclick="return validar_correo();" onchange="clear_correo();"placeholder="correo electrónico" id="correo" name="correo" class="campos" maxlength="40"  value="<?php if(isset($correo)) {echo $correo; } ?>" required >
                              <div id="error_mail"class="val_error"></div>

                              <!-- <span style="color: red"  class='error'>
                                <?php
                                  // if (isset($errores['correo'])) {
                                  //   echo "El correo ingresado no es valido";
                                  // }
                                ?>
                              </span> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="contrasena">Contraseña* : </label>
                            <div class="col-xs-9">
                              <input type="password" onclick="return validar_contrasena();" onchange="clear_contrasena();"placeholder="contraseña" name="contrasena" class="campos" maxlength="40" required>
                              <div id="error_contrasena"class="val_error"></div>

                              <!-- <span style="color: red"  class='error'>
                                <?php
                                  // if (isset($errores['contrasena'])) {
                                  //   echo "La contraseña ingresada no es valida";
                                  // }
                                ?>
                              </span> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="contrasena">Repetir contraseña* : </label>
                            <div class="col-xs-9">
                              <input type="password" onclick="return validar_repetirContrasena();" onchange="clear_repetirContrasena();" placeholder="contraseña" name="repetirContrasena" class="campos" maxlength="40" required  >
                              <div id="error_repetirContrasena"class="val_error"></div>

                              <!-- <span style="color: red"  class='error'>
                                <?php
                                  // if (isset($errores['contrasena'])) {
                                  //   echo "La contraseña ingresada no es valida";
                                  // }
                                ?>
                              </span> -->
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-xs-3" for="fotoPerfil">Foto perfil: </label>
                            <div class="col-xs-9">
                              <input type='file'   name='imgPerfil' required><br/>
                              <span id='register_username_errorloc' class='error'></span>

                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="Formulario_registro" value="Me registro" id="submit" style="background-color:white;border-radius:80px;border-color:#FCA28D;" > Registrarme </button>
                          <button type="reset" class="Formulario_registro" style="background-color:white;border-radius:80px;border-color:#FCA28D;"> Borrar </button>
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
        <div class="row" id="color">
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
