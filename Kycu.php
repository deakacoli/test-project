<?php
session_start();
if(isset($_SESSION['username'])){
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
        <link rel="stylesheet" href="Kycu.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <main id="main">
                <div class="navbar">
                    <div class="menu">
                        <a class="header-text" href="Rreth Nesh.php">RRETH NESH</a>
                        <a class="header-text" href="Komunat.php">KOMUNAT</a>
                        <a class="header-text" href="Destinacionet.php">DESTINACIONET</a>
                        <a class="header-text" href="Kycu.php">KYÇU</a>
                    </div>  
                </div>  

                <div class="content">
                    <h1 class="content-h1">Eksploro Kosovën</h1>
                        <form onsubmit="validateForm()" action="KycuValidation.php" method="post">
                            <div class="form">
                                    <h2 class="form-h2">Kyçu në llogarinë tuaj</h2>
                                    <input type="text" name="username" id="username" placeholder="Emri i përdoruesit">
                                    <input type="password" name="password" id="password" placeholder="Fjalëkalimi">
                                        <p class="form-p">Keni harruar fjalëkalimin ?</p>
                                    <button type="submit" class="btn" name= "loginBtn"><a href="#">Kyçu</a></button>
                                        <p class="link">Nuk jeni të regjistruar ?<br>
                                        <a href="Regjistrohu.php">Regjistrohuni</a> këtu ! </a></p>
                            </div>
                        </form>
                </div>
            </main>

            <script src="kycu.js"></script>
            
        </body>
</html>

<?php

}

?>