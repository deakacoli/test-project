<?php
session_start();

$hide="";
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
}

require_once ('modelKomunat.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/komunat.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
        <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    </head>    
        <body>
            <header>
                <style> 
                   #pad{
                    padding:30px;
                    text-decoration: none;
                    list-style: none;
                    color:white;
                    font-weight:bold;
                   }
                </style>
                <nav>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label> 
                    <ul>
                        <li><a href="home.php">RRETH NESH</a></li>
                        <li><a class="active" href="komunat.php">KOMUNAT</a></li>
                        <li><a href="kontakti.php">KONTAKTI</a></li>
                        <?php
                             if (!(isset($_SESSION['role']))) {
                                echo "<a class='ula' id='pad' href='kycu.php'>KYÇU</a>";
                            } else if (isset($_SESSION['role']) == 'user') {
                                echo "<a class='ula' id='pad' href='logout.php'>ÇKYÇU</a>";
                            }
                         ?>
                    </ul> 
                </nav>
            </header>

         
            <div class="photo-grid">
                
        <?php
              $komunat = new modelKomunat;
              $all = $komunat->readData();
                 for($i = 0; $i < count($all); $i++){
                   echo '<div class ="photo">
                   
              <img src="' .$all[$i]['image'].'">
              <p>'.$all[$i]['title'].'</p>
            </div>';
    }
?>
</div>

        <!--
            <div class="photo-grid">
                <div class="photo">
                    <img src="./Fotot/Prishtina.jpg" alt="Photo 1">
                    <p>• Komuna e Prishtinës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Prizreni.jpg" alt="Photo 2">
                    <p>• Komuna e Prizrenit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Ferizaj.jpg" alt="Photo 3">
                    <p>• Komuna e Ferizajit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Peja.jpg" alt="Photo 4">
                    <p>• Komuna e Pejës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Gjakova.jpg" alt="Photo 5">
                    <p>• Komuna e Gjakovës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Gjilan.jpg" alt="Photo 6">
                    <p>• Komuna e Gjilanit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Mitrovica.jpg" alt="Photo 7">
                    <p>• Komuna e Mitrovicës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Podujeva.jpg" alt="Photo 8">
                    <p>• Komuna e Podujevës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Vushtrri.jpg" alt="Photo 9">
                    <p>• Komuna e Vushtrrisë •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Suhareke.jpg" alt="Photo 10">
                    <p>• Komuna e Suharekës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Rahoveci.jpg" alt="Photo 11">
                    <p>• Komuna e Rahovecit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Drenas.jpg" alt="Photo 12">
                    <p>• Komuna e Drenasit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Lipjani.jpg" alt="Photo 13">
                    <p>• Komuna e Lipjanit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Malisheva.jpg" alt="Photo 14">
                    <p>• Komuna e Malishevës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Kamenice.jpg" alt="Photo 15">
                    <p>• Komuna e Kamenicës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Vitia.jpg" alt="Photo 16">
                    <p>• Komuna e Vitisë •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Deçan.jpg" alt="Photo 17">
                    <p>• Komuna e Deçanit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Istogu.jpg" alt="Photo 18">
                    <p>• Komuna e Istogut •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Klina.jpg" alt="Photo 19">
                    <p>• Komuna e Klinës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Skenderaj.jpg" alt="Photo 20">
                    <p>• Komuna e Skenderajt •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Dragash.jpg" alt="Photo 21">
                    <p>• Komuna e Dragashit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/FusheKosove.jpg" alt="Photo 22">
                    <p>• Komuna Fushë Kosovë •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Kacanik.jpg" alt="Photo 23">
                    <p>• Komuna e Mitrovicës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/MitrovicaVeriore.jpg" alt="Photo 24">
                    <p>• Komuna Mitrovica Veriore •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Shtime.jpg" alt="Photo 25">
                    <p>• Komuna e Shtimes •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Obiliq.jpg" alt="Photo 26">
                    <p>• Komuna e Obiliqit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Leposaviq.jpg" alt="Photo 27">
                    <p>• Komuna Leposaviq •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Gracanica.jpg" alt="Photo 28">
                    <p>• Komuna e Graçanicës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Hani i Elezit.jpg" alt="Photo 29">
                    <p>• Komuna Hani i Elezit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Zvecan.jpg" alt="Photo 30">
                    <p>• Komuna Zveçan •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Shterpce.jpg" alt="Photo 31">
                    <p>• Komuna e Shtërpcë •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Noveberd.jpg" alt="Photo 32">
                    <p>• Komuna e Novobërdës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/ZubinPotok.jpg" alt="Photo 33">
                    <p>• Komuna Zubin Potok •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Juniku.jpg" alt="Photo 34">
                    <p>• Komuna e Junikut•</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Mamusha.jpg" alt="Photo 35">
                    <p>• Komuna e Mamushës •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Raniluga.jpg" alt="Photo 36">
                    <p>• Komuna e Ranillugut •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Kllokot.jpg" alt="Photo 37">
                    <p>• Komuna e Kllokotit •</p>
                </div>
                <div class="photo">
                    <img src="./Fotot/Partesh.jpg" alt="Photo 38">
                    <p>• Komuna e Parteshit •</p>
                </div>


            </div> -->

            </div>
        </div>


        <div class=""footer-div>
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
</div>    
        </body>
</html>
  
