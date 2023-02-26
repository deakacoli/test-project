<?php
require_once('modelRegister.php');

$dhenat=new regjistrohu();
$allData=$dhenat ->lexoDhenat();

?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/dashboardRegister.css" />
        <title>Të dhënat e Regjistruarve</title>
    </head>
    <body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Eksploro Kosovën</h1>
        </div>
        <ul>
            <li><a href="dashboard.php" >Dashboard</a></li>
            <li><a href="dashboardKomunat.php">Komunat</a></li>
            <li><a href="kontaktiDashboard.php">Kontakti</a></li>
            <li><a href="dashboardUshqimet.php">Ushqimet tradicionale</a></li>
            <li><a href="menuDashboard.php">Aktivitetet të ndryshme</a></li>
            <li><a href="logout.php">Çkyçu</a></li>

           
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <p>Lista e të dhënave të regjistruarve:</p>
        </div>

        <br>
        <br>

        <div id="a1">
            <table>
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th type="password">Fjalkalimi</th>
                    </tr>
                    <tr>

                    
                      <?php
                     foreach($allData as $key =>$value){
                        $value['email']
                     
                      ?>
                        <td><?php echo $value['emri']?></td>
                        <td><?php echo $value['mbiemri']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['fjalkalimi']?></td>
                        
                        <td id='de'><a href="deleteRegister.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                           <a  href="editRegister.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
                    </tr>  
                    
                  <?php
                     }
                  ?>
                  
            </table>
        </div>

    </div>   
    </body>
</html>