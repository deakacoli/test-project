<?php
session_start();

$hide="";
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
}

  require_once './menuController.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/aktivitetet.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <header>
            <style>
                   #pad{
                    padding:30px;
                   }
            </style>
              <div class="header">
                <div class="navbar">
                  <a class="header-text" href="home.php">RRETH NESH</a>
                  <a class="header-text" href="komunat.php">KOMUNAT</a>
                  <a class="header-text" href="kontakti.php">KONTAKTI</a>
                  <?php
                             if (!(isset($_SESSION['role']))) {
                                echo "<a class='ula' id='pad' href='kycu.php'>KYÇU</a>";
                            } else if (isset($_SESSION['role']) == 'user') {
                                echo "<a class='ula' id='pad' href='logout.php'>ÇKYÇU</a>";
                            }
                         ?>
                </div>  
                  <div class="titulliheader">
                    <h1>Aktivitete sipas stinëve</h1>
                  </div>
               
              </div>
            </header>
      <main>
  <h1 id="titulliiFaqes">Mënyra të bukura për të kaluar kohën gjatë stinëve</h1>

<div class="imazhe">
        <?php
            $menu=new menuController;
            $all=$menu->readData();
            for($i=0;$i<count($all); $i++){
              echo '<div class="vargu">
              <div >
              <img src="' .$all[$i]['menu_image'].'">
              </div>
              <div class="tekstiVargu">
              <h5 id="titulliFotove">'.$all[$i]['menu_title'].'</h5>
              <p id="menuBody">'.$all[$i]['menu_body'].'</p>
            </div>
            </div>';


            }
?>
</div>


</main>
      
            <footer class="footer">
              <div class="footer1">
                      <h3 class="footer-h">Eksploro Kosovën</h3>
                      <p class="footer-p">“Mos ndiqni rrugën ku mund t’ju çojë. Shkoni në atë vend ku nuk ka shteg dhe lini një gjurmë.” </p>
                  <ul class="socials">
                      <li><a href="#">
                          <img src="./Fotot/instagram.png"/>
                      </a></li>
                      <li><a href="#">
                          <img src="./Fotot/facebook.png"/>
                      </a></li>
                      <li><a href="#">
                          <img src="./Fotot/twitter.png" />
                      </a></li>
                      <li><a href="#">
                          <img src="./Fotot/pinterest.png" />
                      </a></li>
                  </ul>
                      <p class="footer-p2">Eksploro Kosovën @2022</p>
              </div>
          </footer>
          <script src="./js/aktivitetet.js"></script>
      </body>
</html>




