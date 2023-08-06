<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `users` WHERE user_id = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");
if($query){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully customer Deleted!!!');
    window.location.href='adminDash.php';
    </script>");
}


?>
