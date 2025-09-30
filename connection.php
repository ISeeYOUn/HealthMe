<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "healthme"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("connection failed : " . $database->connect_error);
}
?>

