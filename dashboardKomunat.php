<?php

require_once ('modelKomunat.php');

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/dashboardKomunat.css" />
        <title>Eksploro Kosovën</title>
    </head>
    <body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Eksploro Kosovën</h1>
        </div>
        <ul>
            <li><a href="dashboard.php" >Dashboard</a></li>
            <li><a href="dashboardRegister.php">Regjistrimet</a></li>
            <li><a href="kontaktiDashboard.php">Kontakti</a></li>
            <li><a href="dashboardUshqimet.php">Ushqimet tradicionale</a></li>
            <li><a href="menuDashboard.php">Aktivitetet të ndryshme</a></li>
            <li><a href="logout.php">Çkyçu</a></li>
           
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <p>Lista e të dhënave të Komunave:</p>
            <div class="btn-div">
                <a href="createKomunat.php" class="btn">Shto Komunat</a>
            </div>    
        </div>

        <br>
        <br>

    <div id="a1">
    <table >
            <tr>
              <th>Foto</th>
              <th>Titulli</th>
            </tr>
    
        <tr>
        <?php
            $sh = new modelKomunat;
            $alltablekomunat = $sh->readData();
            foreach($alltablekomunat as $tablekomunat): ?>
              <tr>
                  <td><?php echo $tablekomunat['image'];?></td>
                  <td><?php echo $tablekomunat['title'];?></td>
                  <td id='de'><a href="deleteKomunat.php?id=<?php echo $tablekomunat['id'];?>"><button id="d">DELETE</button></a>
                  <a  href="editKomunat.php?id=<?php echo $tablekomunat['id'];?>"><button id='e'>EDIT</button></td></a>
              </tr>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>

</div>   
</body>
</html>