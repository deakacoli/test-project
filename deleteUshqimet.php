<?php
require_once ('modelUshqimet.php');

if(isset($_GET['id'])){
    $ushqimetId = $_GET['id'];
}
$tableushqimet = new modelUshqimet;
$tableushqimet->delete($ushqimetId);

?>