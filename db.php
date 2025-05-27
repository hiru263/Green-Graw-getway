<?php 
$con = mysqli_connect("localhost", "root", "1234", "greengrow");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
