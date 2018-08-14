<?php
include_once ('pdo.php');

if (isset ($_POST['Firstname']) &&
    isset ($_POST['Lastname'])&&
    isset ($_POST['Username'])&&
    isset($_POST['email'])&&
    isset($_POST['password']) &&
    isset($_POST['re_password'])&&
    isset($_POST['country'])){

    if(empty($_POST['Firstname']) || empty($_POST['Lastname']) || empty($_POST['Username']) || empty($_POST['email'])
        || empty($_POST['password'])|| empty($_POST['re_password'])|| empty($_POST['country'])){

        header('location: ../registr.php');


    }



    if ($_POST['password'] === $_POST['re_password']){


        $firstname = trim ( $_POST['Firstname'] );
        $username = trim ( $_POST['Username'] );
        $lastname = trim($_POST['Lastname']);
        $email = $_POST['email'];
        $pass = hash('sha256', $_POST['password']);



        $sql = "INSERT INTO users (first_name,last_name,user_name,email,password) VALUES  ('$firstname', '$lastname','  $username  ','$email','$pass' )";
        // use exec() because no results are returned
        $conn->exec($sql);

        //header('location: ../page.php');

    }else{
        echo "please write your password carectly";
    }

}else{



     header('location: ../registr.php');
}



?>