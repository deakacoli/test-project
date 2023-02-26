<?php
require_once './menuController.php';
?>




<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="./css/menuDashboard.css" />
        <title>Të dhënat e Aktiviteteve</title>
    </head>
    <body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Eksploro Kosovën</h1>
        </div>
        <ul>
             <li><a href="dashboard.php" >Dashboard</a></li>
            <li><a href="dashboardRegister.php">Regjistrimet</a></li>
            <li><a href="dashboardKomunat.php">Komunat</a></li>
            <li><a href="kontaktiDashboard.php">Kontakti</a></li>
            <li><a href="dashboardUshqimet.php">Ushqimet tradicionale</a></li>
            <li><a href="logout.php">Çkyçu</a></li>
        </ul>
    </div>
   
    <div class="container">
        <div class="header">
            <p>Lista e të dhënave të Komunave:</p>
            <div class="btn-div">
                <a href="./create-menu.php" class="btn">Shto Aktivitetet</a>
            </div>    
        </div>

       
        <br>
        <br>
<div id="a1">
        <table>
      
            <tr>
              <th id="menuFoto">Menu image</th>
              <th id="menuTitulli">Menu title</th>
              <th id="menuBody">Menu body</th>
            </tr>
       
        <tr>
          <?php
            $m=new menuController;
            $all=$m->readData();
            foreach($all as $menu) :         
          ?>
          <tr>
            <td><?php echo $menu['menu_image'];?></td>
            <td><?php echo $menu['menu_title'];?></td>
            <td><?php echo $menu['menu_body'];?></td>
            <td><a href="edit-menu.php?id=<?php echo $menu['id'];?>"><button id="d">DELETE</button></a></td>
            <td><a href="delete-menu.php?id=<?php echo $menu['id'];?>"><button id='e'>EDIT</button></a></td>
          </tr>
          <?php endforeach; ?>
            </tr>
            </table>
    </div>

 
</body>
</html>



