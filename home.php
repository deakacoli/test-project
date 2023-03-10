<?php
session_start();
$hide="";
if(!isset($_SESSION['email'])){
    header("location:kycu.php");
}else{
    if($_SESSION['role'] == "admin"){
        $hide="";
    }else{
        $hide="hide";
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/home.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <header>
            <style>
                 .hide{
                   display:none;
                 }

                   #pad{
                    padding:30px;
                   }
            </style>

                <div class="header">
                    <div class="navbar">
                        <a class="header-text" href="home.php">RRETH NESH</a>
                        <a class="header-text" href="komunat.php">KOMUNAT</a>
                        <a class="header-text" href="kontakti.php">KONTAKTI</a>

                        <?php
                             if (!(isset($_SESSION['role']))) {
                                echo "<a class='ula' id='pad' href='kycu.php'>KYÇU</a>";
                            } else if (isset($_SESSION['role']) == 'user') {
                                echo "<a class='ula' id='pad' href='logout.php'>ÇKYÇU</a>";
                            }
                         ?>

                        <a  href="dashboard.php" style="padding: 30px;" class="<?=$hide?>">DASHBOARD</a>
                       
                    </div>  
                </div>
            </header>

            <div class="teksti">
                <h2 class="logo">EKSPLORO KOSOVËN</h2>
                    <p class="tekstlogo">
                        Kosova është një vend shumë unik kur bëhet fjalë për natyrën e saj të bukur.<br>
                        Asnjë rrethanë në të kaluarën apo të ardhmen nuk mund ta bëjë atë të humbasë 
                        shkëlqimin e saj.
                    </p>
                    <button class="button-home" style="vertical-align:middle"><a style="color: white; text-decoration: none;" href="Rreth Nesh.php#main"><span>Lexo më shumë</span></a></button>
            </div>

            <main id="main">
                <div class="main-1">
                    <div class="text-main1">
                        <p class="p-main1">--- Republika e Kosovës ---</p>
                    </div>
                
                    <div class="row" id="text-main">
                        <div class="text-main2">
                            <h3 class="t-row">- Emri -</h3>
                            <p class="p-row">Interpretimin e parë të emrit Kosova, e ka bërë akademiku kroat 
                                            Josip Rogliç, i cili thotë se: e tërë terminologjia gjeomorfologjike 
                                            dhe emrat gjeografikë të Gadishullit Ilir janë të gjuhës ilire, 
                                            duke ardhur dhe në përfundim që, terminologjia e emrit gjeografikë 
                                            Kosova, i takon gjuhës ilire.Po ashtu interpretimin gjeografik të
                                            emrit e shpjegon dhe M. Carabregu, i cili thotë se, termi kas-a
                                            përmban kuptimet e një kodre, mali apo shkëmbi. 
                            </p>
                        </div>

                        <div class="text-main2">
                            <h3 class="t-row">- Popullësia -</h3>
                            <p class="p-row">Popullsia e Kosovës përbëhet kryesisht nga komuniteti etnik shqiptar, 
                                            që sipas burimeve formon 88 deri në 92 për qind të banorëve; sipas 
                                            vlerësimeve të Entit Statistikor të Kosovës shqiptarët përbëjnë 88%
                                            të popullsisë. Serbët janë komuniteti i dytë përkah madhësia me 5,3%,
                                            të përcjellë nga turqit, boshnjakët, romët, ashkalinjtë, egjiptasit 
                                            dhe goranët.
                            </p>
                        </div>

                        <div class="text-main2">
                            <h3 class="t-row">- Gjuha -</h3>
                            <p class="p-row">Shqipja është gjuhë zyrtare e Kosovës.Shqipja e folur 
                                            në Kosovë është një nënvariete e dialektit gegë; zakonisht njihet si
                                            kosovarce. Shqipja letrare standarde përdoret në komunikimin e shkruar 
                                            dhe në mediat elektronike. Serbo-kroatishtja, e njohur edhe si
                                            boshnjake-kroato-serbe, është gjuha e folur nga serbët, boshnjakët,
                                            kroatët dhe malazezët.Turqishtja flitet si nga turqit ashtu edhe nga 
                                            disa shqiptarë. Goranët flasin dialektin e tyre sllavo-jugor.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="main-2">
                    <div class="text-harta">
                        <h3 class="h-harta">Harta e Kosovës</h3>
                        <p class="p-harta">E shtrirë në qendër të Siujdhesës Ballkanike kufizohet:<br>
                            <br>
                            -në veri dhe në  lindje me <b style="color:rgb(228, 171, 28);">Serbinë</b><br> 
                            -në juglindje me <b style="color:rgb(228, 171, 28);">Maqedoninë e Veriut,</b><br>
                            -në jugperëndim me <b style="color:rgb(228, 171, 28);">Shqipërinë</b> dhe <br>
                            -në perëndim me <b style="color:rgb(228, 171, 28);">Malin e Zi.</b><br>
                            <br>
                            Kosova zë një sipërfaqe prej 10.887 kilometrash katrorë.Ka gjithsej 702 kilometra 
                            vijë kufitare me shtetet përbri: 352 km me Serbinë, 159 km me Maqedoninë, 112 me 
                            Shqipërinë dhe 79 km me Malin e Zi.Kufijtë e Kosovës janë kryesisht malorë, të
                            karakterizuar nga maja të mprehta dhe lugina të ngushta. Malet e Sharrit shtrihen
                            përgjatë kufirit jugor me Maqedoninë e Veriut,ndërsa malet e Kopaonikut ndodhen 
                            përgjatë kufirit verilindor me Serbinë. Pika më e lartë është mali Gjeravica.
                        </p>
                    </div>
                        <img id="harta" src="./Fotot/Harta.png">
                </div>

                <div class="main-3">
                    <div class="text-main3">
                        <h1 class="main3-h">Filloni Eksplorimin tuaj !</h1>
                    </div>

                    <div class="row-items">
                        <div class="container-box">
                            <div class="container-img">
                                <img src="./Fotot/travel1.png"/>
                            </div>
                               <a style=" color:black; text-decoration: none; font-size: 20px; font-weight: 600; font-family: 'Copperplate Gothic Light';" href="ushqimettradicionale.php">Ushqimet Tradicionale</a>
                        </div>

                        <div class="container-box">
                            <div class="container-img">
                                <img src="./Fotot/travel2.png"/>
                            </div>
                            <a style=" color:black; text-decoration: none; font-size: 20px; font-weight: 600; font-family: 'Copperplate Gothic Light';" href="aktivitetet.php">Aktivitetet sipas stinëve</a>
                        </div>

                        <div class="container-box">
                            <div class="container-img">
                                <img src="./Fotot/travel3.png"/>
                            </div>
                                <h4>Vizitat Malore</h4>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="footer1">
                        <h3 class="footer-h">Eksploro Kosovën</h3>
                        <p class="footer-p">“Mos ndiqni rrugën ku mund t’ju çojë. Shkoni në atë vend ku nuk ka shteg dhe lini një gjurmë.” </p>
                    <ul class="socials">
                        <li><a href="#">
                            <img src="./Fotot/instagram.png"/>
                        </a></li>
                        <li><a href="#">
                            <img src="./Fotot/facebook.png"/>
                        </a></li>
                        <li><a href="#">
                            <img src="./Fotot/twitter.png" />
                        </a></li>
                        <li><a href="#">
                            <img src="./Fotot/pinterest.png" />
                        </a></li>
                    </ul>
                        <p class="footer-p2">Eksploro Kosovën @2022</p>
                </div>
            </footer>

            
        </body>
</html>

<?php

}

?>



