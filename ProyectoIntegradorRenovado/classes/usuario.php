<?php
class Usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $genero;
  private $correo;
  private $contrasena;
  private $foto;

  public function __construct(Array $variable)
  {
    $this->nombre     = $variable['nombre'];
    $this->apellido   = $variable['apellido'];
    $this->genero     = $variable['genero'];
    $this->correo     = $variable['correo'];
    $this->contrasena = sha1($variable['contrasena']);
    $this->imagen     = $variable['imagen'];
    // $usuario = [
    //   'apellido'   => $variable['apellido'],
    //   'nombre'     => $variable['nombre'],
    //   'genero'     => $variable['genero'],
    //   'correo'     => $variable['correo'],
    //   'contrasena' => sha1($variable['contrasena']),
    //   'imagen'     => $variable['imagen'],
    // ];
    return $variable;
  }

  public function subirFoto()
  {
    $errores = [];

    if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK)
    {
      $nombre=$_FILES["imgPerfil"]["name"];
      $archivo=$_FILES["imgPerfil"]["tmp_name"];

      $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION)); //lo pasa en minuscula

      if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
        $errores["imgPerfil"] = "Las fotos solo aceptan formatos jpg, png y jpeg";
        return $errores;
      }

      $miArchivo = dirname(__FILE__); //si je veux garder une photo dans mon archive je dois changer ici!

      $miArchivo = $miArchivo . "/fotoPerfil/"; // il me créé une archive /img/

      $miArchivo = $miArchivo. md5($_FILES["imgPerfil"]["name"].microtime()) . "." . $ext;
      $_POST["imagen"] = $miArchivo;
      move_uploaded_file($archivo, $miArchivo);

      //mettre le if ici
    } else {
      $errores["imgPerfil"] = "Hubo un error al procesar tu imagen de perfil";
    }

    return $errores;
  }

  public function validar()//validar qué???
  {

  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getApellido() {
    return $this->apellido;
  }

  public function setGenero($genero) {
    $this->genero = $genero;
  }

  public function getGenero() {
    return $this->genero;
  }

  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  public function getCorreo() {
    return $this->correo;
  }

  public function setContrasena($contrasena) {
    $this->contrasena = $contrasena;
  }

  public function getContrasena() {
    return $this->contrasena;
  }

  public function setFoto($foto) {
    $this->foto = $foto;
  }

  public function getFoto() {
    return $this->foto;
  }

}
?>
