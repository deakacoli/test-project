<?php
session_start();

require_once ('modelUshqimet.php');
?>
 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eksploro Kosovën</title>
        <link rel="stylesheet" href="./css/ushqimettradicionale.css">
        <link rel="icon" type="image/x-icon" href="./Fotot/icon.png">
    </head>    
        <body>
            <header>
            <style>
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

                    </div>  
                </div>
            </header>

            <div class="teksti">
                <h2 class="logo">USHQIMI DHE PIJET</h2>       
            </div>

            <main id="main">
                <div class="main-text">
                    <h1 class="main-h1">Ushqimet pijet dhe ëmbëlsirat në Kosovë</h1>  
                </div>

                <br>
                <br>

                <div class="slider-container">
                    <button class="prev-btn">&#10094;</button>
                    <img src="Fotot/sliderphoto1.jpg" alt="Image 1" class="slider-image">
                    <button class="next-btn">&#10095;</button>
                </div>

                <div class="main-2">
                    <h1 class="main2-h1">Çfarë të hani në Kosovë?</h1>
                    <br>
                    <p class="main2-p">
                                     Shumë kultura të ndryshme kanë ndikuar në ushqimin vendas në Kosovë, por më shumë nga kuzhinat turke, shqiptare dhe ballkanike.
                                      Qumështi, mishi dhe buka janë elementë thelbësorë në dietën e Kosovës dhe frutat dhe perimet. Gatimet ndryshojnë nga dimri në verë, 
                                      dhe perimet si domatet dhe kastravecat e famshme të Kosovës konsumohen gjatë verës së ngrohtë, ndërsa turshitë piqen në dimër.
                                      Ushqimet tradicionale në Kosovë, si flija, byrekët, specat e mbushur, qebapët, bureqet dhe sarma, janë tipike në të gjitha rajonet, 
                                      me ndryshime të vogla nga njëri rajon në tjetrin.Nuk është çudi që të shijoni kuzhinën e jashtëzakonshme kosovare dhe verën vendase të 
                                      Kosovës është një nga gjërat më të mira për të bërë në Kosovë gjatë një udhëtimi këtu.
                                      Në ushqimet që provoni në Kosovë ndonjëherë merrni shije të kuzhinave të tjera ballkanike,
                                      por të gjitha pjatat këtu kanë shijen e tyre unike. Ja disa nga ushqimet kosovare që duhet
                                      t'i provoni gjatë vizitës në këtë vend.
                    </p>
                    <br>

                    <div class="main3">
                         <?php
                              $ushqimet = new modelUshqimet;
                              $all = $ushqimet->readData();
                              for($i = 0; $i < count($all); $i++){
                                  echo '<div class="main3-h2">
                                           <h3>'.$all[$i]['title'].'</h3>
                                           <br>
                                           <br>
                                           <p>' .$all[$i]['body']. '</p>
                                       </div>
    
                                       <div class="photo">
                                            <img src="' .$all[$i]['image'].'">
                                        </div>';
                                 }
                        ?>
                    </div>
                       <!--
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Byreku -</h2>
                                <br>
                                <br>
                                <p >Një pastë e mbushur me mish, spinaq ose djathë, byreku është 
                                                    një vakt i preferuar i të gjitha kohërave. Disa versione 
                                                    përfshijnë orizin së bashku me mishin e grirë, duke e bërë atë
                                                    një vakt perfekt gjithëpërfshirës. Burekët në Kosovë zakonisht
                                                    bëhen në tepsi rrethore duke alternuar shtresat e brumit të 
                                                    krisur me mbushjet. 
                                </p>
                            </div>
                            <div class="photo">
                                <img src="Fotot/food1.jpg" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Flija -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Kur hani një Flija, pyesni veten se si një pjatë e thjeshtë 
                                                me brumë dhe krem mund të shijojë kaq mirë. Por nëse keni
                                                mundësinë ta shikoni duke u bërë, do të mahniteni nga sasia 
                                                e punës që kërkon ky ushqim i thjeshtë kosovar. Shtresat e 
                                                alternuara të brumit dhe kremit mbushen në një tigan dhe piqen
                                                një shtresë një nga 5 deri në 6 orë.<br><br>
                                                A nuk është kjo punë e mundimshme?<br> Është ndoshta ajo që e bën 
                                                flijen të shijojë shumë më të ëmbël. 
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food2.png" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Qebap -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Qebapi është një lloj salçiçeje pa lëkurë e bërë nga mishi i 
                                                grirë viçi ose mishi i qengjit. Piqen në skarë dhe 
                                                shërbehen me qepë dhe salcë kosi. 
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food3.jpg" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Speca të mbushura -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Specat shpesh mbushen me mish, perime dhe oriz. Disa janë 
                                    gjithashtu të mbushura me kefir dhe gjizë.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food4.png" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Pasul -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Fasulet e bardha tradicionale përdoren për të bërë këtë supë 
                                    tradicionale shqiptare me fasule të njohur si pasul. Shtohen edhe copa të 
                                    ndryshme viçi së bashku me perime, si qepa. Shërbehet me qepë të papërpunuar
                                     të prerë hollë dhe bukë.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food5.png" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Krempite -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Një pastë e bërë me krem dhe krem shantilly.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food6.png" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Tullumba -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Këto ëmbëlsira të shijshme skuqen në vaj të nxehtë dhe më pas 
                                    zhyten në një shurup sheqeri. Janë vërtet të shijshme dhe të gjithë do të 
                                    mbeten të impresionuar.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food7.jpg" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Tespishte -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Një ëmbëlsirë e llojit torta e ngjashme me Revanin mesdhetar 
                                    dhe e mbuluar me një sherbet me shije limoni ose vanilje.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/food8.jpg" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Verë -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Nuk mund të largohesh nga Kosova pa shijuar Vranac. Kjo verë
                                     e kuqe prodhohet nga rajoni i Rahovecit të Kosovës, që ndodhet në jugperëndim
                                      të kryeqytetit Prishtinë. Rrushi ballkanik i përdorur për Vranac është një
                                       nga më të vjetrit në botë.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/drink1.jpg" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Birra -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Birra prodhohet në disa fabrika lokale në Kosovë dhe merr 
                                    emrin e qyteteve në të cilat prodhohen. Për shembull, Birra Prishtina nga 
                                    Prishtina, Birra Peja e prodhuar në Pejë, Birra Ereniku e prodhuar pranë 
                                    rajonit të lumit Erenik.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/drink2.png" alt="Image">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="main3">
                            <div class="main3-h2">
                                <h2>- Kafja -</h2>
                                <br>
                                <br>
                                <p class="main3-p">Kafeja turke është bërë nga kokrrat e kafesë të bluara
                                     shumë imët dhe është gjithashtu e ndryshme nga llojet e tjera të kafesë
                                      në atë që gatuhet duke zier në tenxhere tradicionale të bakrit të quajtura 
                                      cezve. Kafja turke është më aromatike dhe më e trashë në krahasim me kafetë
                                       e tjera.
                                </p>
                            </div>
                            <div class="photo">
                                <img class="main3-img"src="Fotot/drink3.jpg" alt="Image">
                            </div>
                        </div> -->
                       
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

            <script src="./js/ushqimet tradicionale.js"></script>

        </body>
</html>
  
