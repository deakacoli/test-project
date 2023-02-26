<?php
session_start();

$hide="";
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
}

require_once('modelikontakti.php');
if(isset($_POST['submit'])){
    $kon=new kontakti;
    $kon -> setName($_POST['name']);
    $kon -> setLastname($_POST['lastname']);
    $kon -> setEmail($_POST['email']);
    $kon -> setNumber($_POST['number']);
    $kon -> setMessage($_POST['message']);
   

    $kon ->insertoDhenat();
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/kontakti.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
        <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    </head>    
        <body>
            <header>
            <style>
                   #pad{
                    padding:30px;
                   }
            </style>
                <nav>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label> 
                    <ul>
                        <li><a href="home.php">RRETH NESH</a></li>
                        <li><a class="active" href="Komunat.php">KOMUNAT</a></li>
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
        <main>
        <section>
      
       
 <div class="container">
 <form action="" onsubmit="return validateFormKontakti()" name="myForm"  method="post">

    <label for="fname">Emri:</label>
    <input type="text" id="fname" name="name" placeholder="Emri juaj..">

    <label for="lname">Mbiemri:</label>
    <input type="text" id="lname" name="lastname" placeholder="Mbiemri juaj..">

    <label for="lname">Email:</label>
    <input type="text" id="lname" name="email" placeholder="Email..">

    <label for="lname">Numri i Telefonit:</label>
    <input type="text" id="lname" name="number" placeholder="...">

    <label for="subject">Mesazhi</label>
    <textarea id="subject" name="message" placeholder="Shkruani mesazhin tuaj.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
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
            
            <script src="./js/kontakti.js"></script>
            
        </body>
        
</html>
  