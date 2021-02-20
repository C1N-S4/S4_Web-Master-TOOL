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
      <?php
      //cURL kullanarak veri çekimi yapılıyor.
          $error = "";
          $daily = "";
          $box   = "";
          $box1   = "";
          $box2   = "";
          $box3   = "";
          $box4   = "";
          $box5   = "";
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
            $error = "<h1 class='h2'>Enter DOMAIN NAME !</h1>";
          } elseif($Results['status'] === "Fail"){

                $daily =  "Daily reverse IP check limit reached for ".$ip."Please try tommorow.";
              }else{
          $box = "<div class='box3'><center>";
          $box1 = "Found :".$Results['domainCount']." domains.";
          $box3 = "Found :".$Results['domainCount']." domains.";
          $box5 = "</center></div>";
          }


      ?>
        <form action="" method="post">
        <div class="orta">
  	   	Remote Address
       <br>
  		<input type="text" name="url">
  		<input type="submit" class="cbutton" value="Search">
      <?php echo $error; echo $daily; echo  $box.$box2.$box3."<br>"; print_r($arr3);  echo $box5;?>
  	</div>
  </form>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
