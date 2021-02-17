<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Encryptor</title>
       <link rel="stylesheet" href="../../style/style.css">
    </head>
    <header>
        <ul>
          <span class="logo">S4 Web Master TOOL</span>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#contact">Tools</a></li>
          <li><a href="#news">Products</a></li>
          <li><a class="active" href="../../index.php"><img src="../../style/img/home.png" width=35px height=35px></img></a></li>
</ul>
      </header>
      <!-- Hash oluşturucu  -->
    <body>
      <form action="" method="post">
      <div class="box1">
	   	Enter what you want encrypted
     <br>
		<input type="text" name="hash">
		<input type="submit" class="An1" value="Encrypte">
	</div>
</form>
<?php
$hash1 = $_POST["hash"];
$hash2 = md5($hash1);
$hash3 = sha1($hash1);
$hash4 = hash('sha256', $hash1);
$hash5 = hash('sha512', $hash1);

echo "<h1 class='hash'>MD5:</h1><h1 class='hash2'>".$hash2."</h1>";
echo "<h1 class='hash3'>SHA1:</h1><h1 class='hash4'>".$hash3."</h1>";
echo "<h1 class='hash5'>SHA256:</h1><h1 class='hash6'>".$hash4."</h1>";
echo "<h1 class='hash7'>SHA512:</h1><div class='hash8'><input type='text' value='.$hash5.'></div>";
?>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
