<?php
//Check if the button has been clicked
if (isset($_GET["u_id"])){
    //Now recieve the id from the URL
    $userId = $_GET["u_id"];
    //connect to the database to delete
    require_once "connection_db.php";
    //create a delete query
    $deleteQuery = "DELETE FROM `register` WHERE 'id'='$userId'";
    //finally delete using mysqli_query
    $delete = mysqli_query($connection,$deleteQuery);
    //check if the deletion was successful
    if (isset($delete)){
        //redirect the user back to your user.php file
        header("location:Reg_Login.php");
    }else{
        echo "deletion failed";
    }
}

