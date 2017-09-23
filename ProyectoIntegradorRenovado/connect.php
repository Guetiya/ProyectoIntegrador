<?php

$dsn = 'mysql:host=localhost; dbname=mariage_en_beaute; charset=utf8mb4; port:3306';
$db_user = 'root';//delphine
$db_pass = '';//Delphine123Yvan456
$db = new PDO($dsn, $db_user, $db_pass);

try {
  $db = new PDO($dsn, $db_user, $db_pass);
}
catch (PDOException $exception){
  echo $exception->getMessage();
}

 ?>
