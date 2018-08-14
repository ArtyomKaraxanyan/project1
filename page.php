<?php

session_start();
include_once 'Layouts/pageheder.php';
require_once 'functions/pdo.php';



$result = $conn->query("SELECT * FROM images ");

while($row = $result->fetch(PDO::FETCH_ASSOC))
{
    $img=$row['image_name'];
}
?>


<!DOCTYPE html>
<html>
<body>



   <form action="functions/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submi" name="submit">
   </form>





</body>
</html>

<div class="right_coloum">
    <img src="functions/<?php echo $img ?> " width="250" height="250" >
</div>









