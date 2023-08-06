<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `ticket` WHERE ticketno = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");
if($query){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Ticket Booked History Deleted!!!');
    window.location.href='ticketBooked.php';
    </script>");
}


?>
