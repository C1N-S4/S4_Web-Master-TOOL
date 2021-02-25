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

function alexa(){

  $url =$_POST['info'];

  $alexa = simplexml_load_file('http://data.alexa.com/data?cli=10&url='.$url);

  $globalRank = number_format( (int) $alexa->SD->POPULARITY['TEXT'] );
   echo "G. Rank: ".$globalRank;

}

function http(){
  $site = $_POST['url'];
  $header = get_headers($site);

  echo "<div class='sag'>".$header[0]."<br>";
  echo $header[3]."<br>";
  echo $header[5]."<br>";
  echo $header[7]."<br>";
  echo $header[10]."<br></div>";

  echo "<div class='sol'>".$header[1]."<br>";
  echo $header[2]."<br>";
  echo $header[4]."<br>";
  echo $header[6]."<br></div>";
}
function whois(){
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
echo $error;  echo $whois2;
}

function w_a(){

  if($_POST){
  $words = $_POST["words"];
  if(!$words){
  echo "<script>alert('Empty !')</script>";
  }else{
  echo "<div class='howmany'>How many words:".str_word_count($words) ." How many character:".strlen($words)."</div>";
  }
  }

}

function encr(){
  $hash1 = $_POST["hash"];
  $hash2 = md5($hash1);
  $hash3 = sha1($hash1);
  $hash4 = hash('sha256', $hash1);
  $hash5 = hash('sha512', $hash1);

  echo "<div class='yan'>";
  echo "MD5:".$hash2."<br>";
  echo "SHA1:".$hash3."<br>";
  echo "SHA256:".$hash4."<br>";
  echo "SHA512:<input type='text' value='.$hash5.'></div>";
}
  ?>
