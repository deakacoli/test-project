<?php
require_once('modelRegister.php');
if(isset($_POST['save'])){
    $regj=new regjistrohu();
    $regj -> setEmri($_POST['emri']);
    $regj -> setMbiemri($_POST['mbiemri']);
    $regj -> setEmail($_POST['email']);
    $regj -> setFjalkalimi($_POST['fjalkalimi']);

    $regj ->insertoDhenat();
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/regjistrohu.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <main id="main">
                <div class="navbar">
                    <div class="menu">
                        <a class="header-text" href="home.php">RRETH NESH</a>
                        <a class="header-text" href="komunat.php">KOMUNAT</a>
                        <a class="header-text" href="kontakti.php">KONTAKTI</a>
                        <a class="header-text" href="kycu.php">KYÇU</a>
                    </div>  
                </div>  

                <div class="content">
                    <h1 class="content-h1">Eksploro Kosovën</h1>
                        <form action="" onsubmit="validateForm()" method="POST" name="form">
                            <div class="form">
                                    <h2 class="form-h2">Mirë se erdhët !</h2>
                                    <p class="form-p">Për të filluar procesin e regjistrimit ju duhet të plotësoni të dhënat në vazhdim:</p>
                                    <input type="text" class="inp" name="emri" placeholder="Emri..."/>
                                    <input type="text" class="inp" name="mbiemri" placeholder="Mbiemri..."/>
                                    <input type="text" class="inp" name="email" placeholder="Email..."/>
                                    <input type="password" class="inp" name="fjalkalimi"/>
                                    

                                    <input type="submit" name ="save" id="btn" id="register" value="Regjistrohu &rarr;">
                            </div>
                        </form>

                </div>
            </main>
           
            <script src="regjistrohu.js"></script>
           
        </body>
</html>