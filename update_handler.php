<?php

//check if the button has been clicked
if (isset($_POST["btn_update"])) {
//    receive the updated data from the form
    $userId = $_POST["u_id"];
    $updatedName = $_POST["u_name"];
    $updatedPassword = $_POST["u_pass"];
//    connect to the database to return the data
    require_once "connection_db.php";
//    create the update query
    $updateQuery = "UPDATE `register` SET `jina`='$updatedName',`siri`='$updatedPassword' WHERE `id`='$userId'";
//    Finally execute the update query by use of mysqli_query()
    $update = mysqli_query($conn, $updateQuery);
//    Check if the update was successful
    if (isset($update)) {
//        Redirect the user to users.php to see changes
        header("location:home.php");
    } else {
        echo "Update Failed";
    }
}
