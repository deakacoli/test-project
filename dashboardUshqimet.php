<?php

require_once ('modelUshqimet.php');

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/dashboardUshqimet.css" />
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
            <li><a href="dashboardKomunat.php">Komunat</a></li>
            <li><a href="kontaktiDashboard.php">Kontakti</a></li>
            <li><a href="menuDashboard">Aktivitetet të ndryshme</a></li>
            <li><a href="logout.php">Çkyçu</a></li>
           
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <p>Lista e të dhënave të Ushqimeve:</p>
            <div class="btn-div">
                <a href="createUshqimet.php" class="btn">Shto Ushqimet</a>
            </div>    
        </div>

        <br>
        <br>

    <div id="a1">
    <table >
            <tr>
              <th>Foto</th>
              <th>Titulli</th>
              <th>Permbajtja</th>
            </tr>
    
        <tr>
        <?php
            $sh = new modelUshqimet;
            $alltableushqimet = $sh->readData();
            foreach($alltableushqimet as $tableushqimet): ?>
              <tr>
                   <td><?php echo $tableushqimet['image'];?></td>
                   <td><?php echo $tableushqimet['title'];?></td>
                   <td><?php echo $tableushqimet['body'];?></td>
                  <td id='de'><a href="deleteUshqimet.php?id=<?php echo $tableushqimet['id'];?>"><button id="d">DELETE</button></a>
                  <a  href="editUshqimet.php?id=<?php echo $tableushqimet['id'];?>"><button id='e'>EDIT</button></td></a>
              </tr>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>

</div>   
</body>
</html>
















