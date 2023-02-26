<?php

require_once 'menuController.php';

if(isset($_GET['id'])){
  $menuId=$_GET['id'];
}
$menu=new menuController;
$menu->delete($menuId);



?>