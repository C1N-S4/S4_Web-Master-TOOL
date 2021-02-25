<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Alexa</title>
       <link rel="stylesheet" href="../../style/style.css">
       <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
      <!-- Alexa sıra soruglama !  -->
    <body>
      <body>
        <?php
        //xml veri çekimi

      include "../functions/functions.php";

         ?>

<div class="orta">Alexa Rank Checker<br>
  <form action="" method="post">
<input type="text" name="info"><div class="submitp"><input type="submit" class="cbutton"></div></form><br><?php alexa(); ?>
</div>


    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
