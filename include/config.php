<?php

try{
  $wmtdb=new PDO("mysql:host=localhost;dbname=webmastertool;charset=utf8",'root','');

  echo "Database connection successful";
}catch(PDOException $e){

 echo $e->getMessage();
}

?>
