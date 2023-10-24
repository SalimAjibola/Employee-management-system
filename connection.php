<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "employee_management";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>