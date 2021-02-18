<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Page Speed</title>
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
      <!-- Sayfa açılma hızı !  -->
    <body>
      <?php
        function checkPageSpeed($url){
          if (function_exists('file_get_contents')) {
          $result = @file_get_contents($url);
        }
        if ($result == '') {
        $ch = curl_init();
        $timeout = 60;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $result = curl_exec($ch);
        curl_close($ch);
       }

       return $result;
      }

      $myKEY = "AIzaSyAHxIRvsiV8_uNLgA7mVkE--qnNk0amLvg";
      $url = $_POST['url'];
      $url_req = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url='.$url.'&key='.$myKEY;
      $results = checkPageSpeed($url_req);
      ?>
      <form action="" method="post">
      <div class="box1">
        Page Speed viewer
     <br>
    <input type="text" name="url" value="http://www.">
    <input type="submit" class="An1" value="Get Info">
  </div>
  <div class="box4">
<?php


echo '<pre>';
    $response = json_decode("[" . $results . "]",TRUE);
    $ayar=$response[0];
    $ayar=$ayar['lighthouseResult']['finalUrl'];
    $ayar2=$ayar['first-cpu-idle'];
    echo "URL :".$ayar."</br>";
    echo "Page Loading Speed :".$ayar2;
    echo '</pre>'; ?>
  </div>
</form>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
