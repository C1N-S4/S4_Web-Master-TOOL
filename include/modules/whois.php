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
      <?php
      //cURL kullanarak veri çekimi yapılıyor.
          $error = "";
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
            $error = "<h1 class='h2'>Enter DOMAIN !</h1>";
          }else{

          $whois2 = "<div class='ortac'><textarea style='margin: 0px; width: 800px; height: 322px; color: gray;'>".$Results['whoisData']."</textarea></div>";
          }


      ?>
        <div class="orta">
        <form action="" method="post">

  	   	Search the WHOIS Database
       <br>
  		<input type="text" name="url">
  		<input type="submit" class="cbutton" value="Search"><br>
      <?php echo $error;  echo $whois2; ?>
  	</div>
  </form>
    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
