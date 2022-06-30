<?php
//connect to database
if (isset($_POST["u_name"])){
    $username = $_POST['u_name'];
    $password = $_POST['u_pass'];
//    connect to database
    require_once "connection_db.php";

    $selectUserQuery = "SELECT * FROM `register` WHERE `jina`='$username' AND `siri`='$password'";
    $existingUsers = mysqli_query($conn,$selectUserQuery);
    $countExistingUsers = mysqli_num_rows($existingUsers);
    if ($countExistingUsers > 0){
        session_start();
        $_SESSION["u_name"] = $username;
        header("location:home.php");
    }else{
        echo "Wrong username or passsword";
    }


}