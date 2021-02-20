<?php

$conn= @mysqli_connect('localhost', 'root', '', 'webmastertool');

if (!$conn) {
  die('Connect Error: ' . mysqli_connect_error());
}
?>
 ?>
