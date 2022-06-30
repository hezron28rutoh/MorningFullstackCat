<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "MyCatUsers";

//connect to database
$conn = mysqli_connect($host,$user,$password,$dbname);
//check if the connection has failed to stop further processes
if (!isset($conn)) {
    echo("Database Connection failed");
}