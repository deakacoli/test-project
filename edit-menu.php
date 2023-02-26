<?php

require_once './menuController.php';

if(isset($_GET['id'])){
  $menuId=$_GET['id'];
}
$menu=new menuController();
$currentMenu=$menu->edit($menuId);

if(isset($_POST['submit'])){
  $menu->update($_POST,$menuId);

}


?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="./css/edit-menu.css" />
        <title>Eksploro Kosovën</title>
    </head>
    <body>

    <div class="main">

    <form method="post" class="form">
       <h3>TË DHËNAT</h3>
    <br>
    Image:
    <input type="file" name="image" value="<?php echo $currentMenu['menu_image'];?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currentMenu['menu_title'];?>">
    <br>
     Body:
    <input type="text" name="body" value="<?php echo $currentMenu['menu_body'];?>">
    <br>
    <input type="submit" name="submit" value="Update">
  </form>
</div>

</body>
</html>