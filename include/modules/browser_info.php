<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Browser info</title>
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
      <!-- Borswer Info  -->
    <body>
      <?php
    $ip =  getenv("REMOTE_ADDR");
      ?>
      <div class="za">
        <form action="" method="post">
      <h1>Browser Info Checker___</h1>
      IP adresiniz:<?php echo $ip ;oca?><br>
      Kullanıcı Aracısı : <?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";?><br>
      Tarayıcıya göre saat<br>
      Dil<br>
      Eklentiler<br>
      Çerezler<br>
      Ekran Çözünürlüğü<br>
      </form>
      </div>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
