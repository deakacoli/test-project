<?php
require_once './menuController.php';

$menu = new menuController;
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
    <link rel="stylesheet" href="./css/create-menu.css" />
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
             <h3>SHTO AKTIVITETET</h3>
            <br>
            <br>
            <div>
             Image:
                <input type="file" name="image" />
            </div>
            <br>
            <div>
            Title:
                 <input type="text" name="title" />
            </div>
            <br>
            <div class="contenti">
            Content:
            <textarea name="body" cols="30" rows="10"></textarea>
            </div>
            <br>
        
          <input type="submit" name="submit" value="SAVE" />
    </form>


  </body>
</html>

