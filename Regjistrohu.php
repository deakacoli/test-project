<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="Regjistrohu.css">
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
                        <form action="" onsubmit="validateForm()">
                            <div class="form">
                                    <h2 class="form-h2">Mirë se erdhët !</h2>
                                    <p class="form-p">Për të filluar procesin e regjistrimit ju duhet të plotësoni të dhënat në vazhdim:</p>
                                        <input type="text" id="name" name="name" placeholder="Emri">
                                        <input type="text" id="surname" name="surname" placeholder="Mbiemri">
                                        <input type="email" id="email" name="email" placeholder="Email">
                                        <input type="password" id="password" name="password" placeholder="Fjalëkalimi"> 
                                        <input type="password" id="confirmpassword" name="password-confirm"  placeholder="Konfirmoni fjalëkalimin"> 
                                        <button type="submit" class="btn" id="register"><a href="#">Regjistrohu</a></button>
                            </div>
                        </form>
                </div>
            </main>
           
            <script src="regjistrohu.js"></script>
        </body>
</html>