<?php

require_once('modelRegister.php');
$dhenat= new regjistrohu();
$myId=$_GET['id'];
$record=$dhenat->lexoDhenatSipasIDs($myId);
//echo  "<pre>";
//var_dump($records);
//echo "<pre>";
 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){

        $dhenat -> setEmri($_POST['emri']);
        $dhenat -> setMbiemri($_POST['mbiemri']);
        $dhenat -> setEmail($_POST['email']);
        $dhenat -> setFjalkalimi($_POST['fjalkalimi']);
       

         echo $dhenat->updateDhenat();
    echo 
    "<script>
        alert('Te dhenat jane edituar me sukses');
        document.location='dashboardRegister.php'
    </script>";
     }
 }
  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/Regjistrohu.css">
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
                        <form action="" onsubmit="validateForm()" method="POST">
                            <div class="form">
                                    <h2 class="form-h2">Mirë se erdhët !</h2>
                                    <p class="form-p">Për të filluar procesin e regjistrimit ju duhet të plotësoni të dhënat në vazhdim:</p>
                                        <input type="text" class="inp" name="emri"
                                                value ="<?php echo $record['emri'];?> "/>
                                        <input type="text" class="inp" name="mbiemri"
                                                value ="<?php echo $record['mbiemri'];?> "/>
                                        <input type="text" class="inp" name="email"
                                                value ="<?php echo $record['email'];?> "/>
                                        <input type="text" class="inp" name="fjalkalimi"
                                                value ="<?php echo $record['fjalkalimi'];?> "/>
                                        

                                            <input type="submit" name ="edit" class="butoni" id="register" value="Update">
                            </div>
                        </form>
                </div>
            </main>
           
            <script src="./js/regjistrohu.js"></script>
        </body>
</html>