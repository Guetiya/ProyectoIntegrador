<?php
  session_start();
  require_once 'soporte.php';
  $autorizacion->logout();
	header('location: index.php');
?>
