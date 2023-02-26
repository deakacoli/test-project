<?php
session_start();

if(isset($_SESSION['email'])){
    header("location:Rreth Nesh.php");
}else{

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/kycu.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <main id="main">
                <div class="navbar">
                    <div class="menu">
                        <a class="header-text" href="home.php">RRETH NESH</a>
                        <a class="header-text" href="komunat.php">KOMUNAT</a>
                        <a class="header-text" href="kontakti.php">KONTAKTI</a>
                    </div>  
                </div>  

                <div class="content">
                    <h1 class="content-h1">Eksploro Kosovën</h1>
                         <form onsubmit="validateForm()" action="kycuValidimi.php" method="post" name="form">
                            <div class="form">
                                    <h2 class="form-h2">Kyçu në llogarinë tuaj</h2>
                                    <input  type="text" name="email"  placeholder="Email...">
                                    <input type="password" name="fjalkalimi">
                                        <p class="form-p">Keni harruar fjalëkalimin ?</p>
                                    <input type="submit"  name ="login" value ="Kyçu &rarr;" id="btn">
                                        <p class="link">Nuk jeni të regjistruar ?<br>
                                        <a href="regjistrohu.php">Regjistrohuni</a> këtu ! </a></p>
                            </div>
                        </form>

                        <?php
                              require_once('kycuValidimi.php');
                        ?>
                </div>
            </main>

            <script src="kycu.js"></script> 
            
</body>
</html>

<?php

}

?>