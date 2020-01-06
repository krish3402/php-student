<?php 
$host="localhost";
$user="root";
$pwd="";
$db="studentregister";
$con=mysqli_connect($host,$user,$pwd,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>