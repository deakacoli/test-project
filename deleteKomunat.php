<?php
require_once ('modelKomunat.php');

if(isset($_GET['id'])){
    $komunatId = $_GET['id'];
}
$tablekomunat = new modelKomunat ;
$tablekomunat->delete($komunatId);

?>