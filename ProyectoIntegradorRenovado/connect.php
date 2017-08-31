<?php

$dsn = 'mysql:host=localhost; dbname=mariage_en_beaute; charset=utf8mb4; port:3306';
$db_user = 'root';
$db_pass = '';
$db = new PDO($dsn, $db_user);

try {
  $db = new PDO($dsn, $db_user);
}
catch (PDOException $exception){
  echo $exception->getMessage();
}

 ?>
