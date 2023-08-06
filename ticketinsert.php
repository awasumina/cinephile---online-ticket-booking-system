



<?php

echo ("<script> alert('sdsd') </script>");

include 'config.php';
session_start();

if(isset($_POST['submit'])){
$seatno = $_POST['seatNumber'];
   $name = $_POST['name'];
   $number = $_POST['number'];
   $movie =  $_POST['movie'];
   $timing = $_POST['timing'];
   $email =  $_POST['email'];

    // echo ("  <script>alert("okodd") </script>     ");
   $existSql = "SELECT * FROM `ticket` WHERE seatno = '$seatno'";
   $result = mysqli_query($conn, $existSql);        
   if(mysqli_num_rows($result) > 0){
    echo '<script>alert("This seat has already been booked")</script>';
}

else{
      mysqli_query($conn, "INSERT INTO `ticket`( seatno, name, number,movie,timing,email) VALUES(
           '$seatno', '$name', '$number','$movie','$timing', '$email')") or die('query failed');
      $message[] = 'Ticket Booked successfully';
   }

}



?>