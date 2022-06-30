<?php
session_start();
if (!isset($_SESSION["u_name"])){
    header("location:Reg_Login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/bootstrap/css/style.css">

<body>
<h1>All users</h1>
<table>
    <tr>
        <th>Username</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    require_once "connection_db.php";
    $selectQuery = "SELECT * FROM `register` WHERE 1";
    $users = mysqli_query($conn,$selectQuery);
    foreach ($users as $user){
        $username = $user["username"];
        $password = $user["password"];
        $id = $user["id"];

    }


    ?>
</table>

</body>
</html>
