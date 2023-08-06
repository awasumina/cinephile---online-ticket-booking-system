<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername,$username,$password);

// $conn = new mysqli($servername,$username,$password); for object oriented connection


//check connection
if(!$conn){                     //if($conn ->connect_error)
    die("connection failed :" . mysqli_connect_error());
}

//create database
$sql ="CREATE DATABASE cinephile";
if(mysqli_query($conn, $sql)){
    echo "databse created successfully";
}
else{
    echo "error creating db :" . mysqli_error($conn);
}

mysqli_close($conn);
?>