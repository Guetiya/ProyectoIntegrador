<?php

$dsn = 'mysql:host=localhost; dbname=mariage_en_beaute; charset=utf8mb4; port:3306';
$db_user = 'root';//delphine
$db_pass = '';//Delphine123Yvan456
$this->connexion = new PDO($dsn, $db_user, $db_pass);

try {
$this->connexion = new PDO($dsn, $db_user, $db_pass);
}
catch (PDOException $exception){
  echo $exception->getMessage();
}

 ?>
