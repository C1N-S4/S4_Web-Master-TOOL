<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Whois</title>
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
      <!-- Whois sorgusu !  -->
    <body>
      <body>
        <form action="" method="post">
        <div class="box1">
  	   	Search the WHOIS Database
       <br>
  		<input type="text" name="url">
  		<input type="submit" class="An1" value="Search">
  	</div>
  </form>

<?php
//cURL kullanarak veri çekimi yapılıyor.
    $url = $_POST["url"];
    $whois = array("remoteAddress" => $url);
    $site = curl_init("https://www.yougetsignal.com/tools/whois-lookup/php/get-whois-lookup-json-data.php");
    curl_setopt($site, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($site, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($site, CURLOPT_POST, true);
    curl_setopt($site, CURLOPT_POSTFIELDS,$whois);
    $curl = curl_exec($site);
    $Results = json_decode($curl, true);


    if(!$url){
      echo "<h1 class='h2'>Enter DOMAIN !</h1>";
    }else{

    echo "<div class='box2'>".$Results['whoisData']."</div>";
    }


?>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
