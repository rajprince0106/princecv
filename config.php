<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "new_database_for_user";

$conn = mysqli_connect($server, $user, $pass, $database);
// echo $conn;
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

