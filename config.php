<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbName = "cinephile";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbName) or die('connection failed');

?>