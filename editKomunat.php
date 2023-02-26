<?php
require_once ('modelKomunat.php');
if(isset($_GET['id'])){
    $komunatId= $_GET['id'];
}

$tablekomunat = new modelKomunat;
$currentkomunat = $tablekomunat->edit( $komunatId);

if(isset($_POST['submit'])){
    $tablekomunat->update($_POST,$komunatId);
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/editKomunat.css" />
        <title>Eksploro Kosovën</title>
    </head>
    <body>

    <div class="main">

    <form method="post" class="form">
       <h3>TË DHËNAT</h3>
    <br>
    <div>
    Foto:
      <input type="file" name="image" value="<?php echo $currentkomunat['image']; ?>">
     </div> 
    <br>
    <div>
    Titulli:
      <input type="text" name="title" value="<?php echo $currentkomunat['title']; ?>">
    </div>  
    <br>

      <input type="submit" name="submit" value="Update">
    </form>
    </div>

    </body>
</html>    

