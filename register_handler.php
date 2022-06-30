<?php
//Check if the button has been clicked
if (isset($_POST["u_register"])){
//    start receiving data from the form
    $name = $_POST["u_name"];
    $pass = $_POST["u_pass"];
    $encriptedpassword = md5($pass);
//    Now proceed to connect to the database to save your data
    require_once "connection_db.php";
//create the insert query to save the data
    $insertQuery = "INSERT INTO `register`(`id`, `jina`, `siri`) VALUES (null,'$name','$pass')";
    //    search if the username is used
    $SelectExistingUsers = "SELECT * FROM register WHERE jina='$name'";
//    check existing users
    $existingUsers = mysqli_query($conn,$SelectExistingUsers );
//    count users with the name
    $countUsers = mysqli_num_rows($existingUsers);
    if ($countUsers > 0){
echo "<script>alert('sorry! The username already exists')</script>";
    }else{
        //    finally save the data using mysqli_query
        $save = mysqli_query($conn,$insertQuery);
//    check if the saving was successful
        if (isset($save)){
            echo "<script>alert('user registration is successful')</script>";
        }else{
            echo "<script>alert('user registration failed')</script>";
        }
    }
    }
