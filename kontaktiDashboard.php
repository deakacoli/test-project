<?php

require_once ('modelikontakti.php');

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="./css/kontaktiDashboard.css" />
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
            <li><a href="dashboardUshqimet.php">Ushqimet tradicionale</a></li>
            <li><a href="menuDashboard.php">Aktivitetet të ndryshme</a></li>
            <li><a href="logout.php">Çkyçu</a></li>
        </ul>
    </div>
   
    <div class="container">
        <div class="header">
            <p>Lista e të dhënave të Kontaktit:</p>
              
        </div>

       
        <br>
        <br>
<div id="a1">
    <table >
    
            <tr>
              <th>ID</th>
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Emaili</th>
              <th>Nr Telefonit</th>
              <th>Mesazhi</th>
              <th>Fshij Mesazhin</th>
              
            </tr>
       

       <tr>
<?php
$kon = new kontakti;
$allkontakti = $kon->readData();
foreach($allkontakti as $kontakti): ?>
           <tr>
              
              <td><?php echo $kontakti['id'];?></td>
              <td><?php echo $kontakti['name'];?></td>
              <td><?php echo $kontakti['lastname'];?></td>
              <td><?php echo $kontakti['email'];?></td>
              <td><?php echo $kontakti['number'];?></td>
              <td><?php echo $kontakti['message'];?></td>
            
             
              <td><a href="delete-kontakti.php?id=<?php echo $kontakti['id'];?>"><button id="d" >DELETE</button></a></td>
            </tr>
            <?php endforeach; ?>
      </tr>
    </table>
</div>
</body>
</html>




