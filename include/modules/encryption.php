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
      <div class="orta">
      <form action="" method="post">
	   	Enter what you want encrypted
     <br>
		<input type="text" name="hash">
		<input type="submit" class="cbutton" value="Encrypte">
	</div>
</form>
<?php
  include "../functions/functions.php";
   encr();
?>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
