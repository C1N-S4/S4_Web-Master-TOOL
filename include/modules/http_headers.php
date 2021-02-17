<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Html Encrypt Code</title>
       <link rel="stylesheet" href="../../style/style.css">
       <link rel="icon" href="/favicon.ico" type="image/x-icon">
       <script type="text/javascript" src="../../include/js/html_enc.js"></script>
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
      <!-- Sayfa açılma hızı !  -->
    <body>
      <form action="" method="post">
      <div class="box1">
        HTTP Headers
     <br>
    <input type="text" name="url">
    <input type="submit" class="An1" value="Get Info">
  </div>
  <?php
  $site = $_POST['url'];
  $baslangic = microtime(TRUE);
  $time_t =($bitis - $baslangic)*1000;
  $time_t = round($time_t,5);
  $ceko = file_get_contents($target);

  ?>
</form>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
