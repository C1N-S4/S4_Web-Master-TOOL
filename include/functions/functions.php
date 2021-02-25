<?php
 function Reserve(){
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
    echo $error; echo $daily; echo  $box.$box2.$box3."<br>";
    print_r($arr3);
    }
  }

  ?>
