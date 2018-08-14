<?php

$servername = "homework";
$usname = "root";
$password = "";
$dbname = "project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usname, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    echo "New record created successfully";
}
catch(PDOException $e)
{
   $e->getMessage();
}



?>