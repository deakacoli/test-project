<?php
require_once ('modelUshqimet.php');
if(isset($_GET['id'])){
    $ushqimetId= $_GET['id'];
}

$tableushqimet = new modelUshqimet;
$currentushqimet = $tableushqimet->edit($ushqimetId);

if(isset($_POST['submit'])){
    $tableushqimet->update($_POST,$ushqimetId);
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/editUshqimet.css" />
        <title>Eksploro Kosovën</title>
    </head>
    <body>

    <div class="main">

         <form method="post" class="form">
         <div>   
          Foto:
         <input type="file" name="image" value="<?php echo $currentushqimet['image']; ?>">
        </div>
         <br>
         <div>
          Titulli:
         <input type="text" name="title" value="<?php echo $currentushqimet['title']; ?>">
         </div>
         <br>
         <div>
          Permbajtja:
         <input type="text" name="body" id="teksti" value="<?php echo $currentushqimet['body']; ?>">
         </div>
         <br>
         <input type="submit" name="submit" value="Update">
        </form>
    </div>

</body>
</html>    

