<?php
session_start();
if(!isset($_SESSION['LOGIN'])){
  header('location:login.php');
  die();
}
?>
<a href="logout.php">a</a>
