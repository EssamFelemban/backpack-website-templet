<?php 

$server = "localhost";
$user = "root";
$pass = "mysql";
$database = "register_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>