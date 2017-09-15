<?php
class usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $genero;
  private $correo;
  private $contrasena;
  private $foto;

  public function __construct()
  {

  }

  public function logearse()
  {

  }

  public function validar()
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
