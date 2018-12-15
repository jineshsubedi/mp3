<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rate";

$conn = mysqli_connect($servername, $username, $password);
   
//Select Database
mysqli_select_db($conn, $dbname) or die(mysqli_error());

?>