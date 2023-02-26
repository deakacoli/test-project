<?php
require_once ('modelikontakti.php');

if(isset($_GET['id'])){
    $kontaktiId = $_GET['id'];
}
$kontakti = new kontakti();
$kontakti->delete($kontaktiId);

?>