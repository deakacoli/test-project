<?php
require_once ('modelKomunat.php');

$menu = new modelKomunat;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eksploro Kosovën</title>
    <link rel="stylesheet" href="./css/createKomunat.css" />
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <li><a href="dashboard.php">DASHBOARD</a></li>
        <li><a href="logout.php">ÇKYÇU</a></li>
      </ul>
    </nav>
    <br>
    <br>
          <form method="POST" class="form">
             <h3>SHTO KOMUNAT</h3>
            <br>
            <br>
            <div>
             Foto:
                <input type="file" name="image" />
            </div>
            <br>
            <div>
            Titulli:
                 <input type="text" name="title" />
            </div>
            <br>
        
          <input type="submit" name="submit" value="SAVE" />
    </form>


  </body>
</html>
