<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `contact` WHERE messageid = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted Messages!!!');
    window.location.href='suggestion.php';
    </script>");

?>
