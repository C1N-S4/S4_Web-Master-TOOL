<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Whois</title>
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
      <!-- Reverse IP domain sorgusu  -->
    <body>
        <form action="" method="post">
        <div class="box1">
  	   	Remote Address
       <br>
  		<input type="text" name="url">
  		<input type="submit" class="An1" value="Search">
  	</div>
  </form>

<?php
//cURL kullanarak veri çekimi yapılıyor.
    $url = $_POST["url"];
    $whois = array("remoteAddress" => $url);
    $site = curl_init("https://domains.yougetsignal.com/domains.php");
    curl_setopt($site, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($site, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($site, CURLOPT_POST, true);
    curl_setopt($site, CURLOPT_POSTFIELDS,$whois);
    $curl = curl_exec($site);
    $Results = json_decode($curl, true);
    $ip = gethostbyname($url); //ip alma fonksiyonu


   $domains = json_encode($Results['domainArray']);
   $arr =  str_replace('[["','<br>', $domains);
   $arr2 =  str_replace('",""],["','<br>', $arr);
   $arr3 =  str_replace('",""]]','<br>', $arr2);
    if(!$url){
      echo "<h1 class='h2'>Enter DOMAIN NAME !</h1>";
    } elseif($Results['status'] === "Fail"){

          Echo "Daily reverse IP check limit reached for ".$ip."Please try tommorow.";
        }else{
    echo "<div class='box3'><center>";
    echo "Found :".$Results['domainCount']." domains.";
    echo "Found :".$Results['domainCount']." domains.";
    print_r($arr3);
    echo "</center></div>";
    }


?>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
