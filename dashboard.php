<?php

session_start();

if(!isset($_SESSION['email'])){
    header("location:Kycu.php");

}else{
    if($_SESSION['role']== 'user'){
        header("location:home.php");
    }else{
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Document</title>
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
            <li><a href="menuDashboard.php">Aktivitetet të ndryshme</a></li>
            <li><a href="logout.php">Çkyçu</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="./Fotot/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="./Fotot/notifications.png" alt="">
                    <div class="img-case">
                        <img src="./Fotot/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container1">
            <h1>Adminët e Faqes</h1>
  <div class="row">
    <div class="col" id="col1">
      <img src="./Fotot/admin1.png" alt="Anda">
      <p>Anda Pilingjurka</p>
      <br>
      <ul>
            <li><b>Email:</b> apilingjurka@gmail.com</li>
            <br>
            <li><b>Nr.Tel:</b> 049111222</li>
            <br>
            <li><b>Vendbanimi:</b> Prishtinë</li>
            <br>
            <li><b>Profesioni:</b> WEB Developer</li>


      </ul>
      
    </div>
    <div class="col" id="col2">
      <img src="./Fotot/admin2.png" alt="Dea">
      <p>Dea Kacoli</p>
      <br>
      <ul>
            <li><b>Email:</b> dkacoli@gmail.com</li>
            <br>
            <li><b>Nr.Tel:</b> 049111333</li>
            <br>
            <li><b>Vendbanimi:</b> Pejë</li>
            <br>
            <li><b>Profesioni:</b> WEB Developer</li>


      </ul>
    </div>
  </div>
</div>
        




</body>
</html>



<?php

}
}
?>