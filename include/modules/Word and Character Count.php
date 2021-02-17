<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>Word and Character Counter</title>
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
      <!-- Boşlukları algılamadan direk karakter ve kelime sayısını verir.  -->
    <body>
      <div class="orta">
    <form action="" method="post">
    <h1 class="h1">Word and Character calculator</h1>
    <textarea class="textarea1" name="words" rows="15" cols="100"></textarea>
    <input class="buton" type="submit" value="C" />
    </form>
  </div>
    <?php
  if($_POST){
  $words = $_POST["words"];
  if(!$words){
  echo "<h1 class='h2'>Write your words</h1>";
  }else{
  echo "<div class='h2'>How many words:".str_word_count($words) ." How many character:".strlen($words)."</div>";
  }
  }




  ?>

    </body>
    <footer>
    <span class="alt">Copyright <a href="https://github.com/C1N-S4"> @C1N-S4</a></span>
  </footer>
</html>
