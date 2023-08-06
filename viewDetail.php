<?php 
session_start();


//   include("connection.php");
//   include("function.php");

  // $user_data = check_login($conn);

?>

<?php include("config.php")?>



<!DOCTYPE html>
<html>
<head>
  <title>Show History</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="viewdetail.css">
 
</head>
<body>


<button id="seatBook" onclick="window.open('home.php','_self');" >Go to Home Page</button>


<div class="sidebar2">

<h1 class="adminTopic">Your History Present with US</h1>

   



<!-- <h1>Esma selected ko matrai dekhauna baki xa</h1> -->
<?php

    $email = $_SESSION['email'];
    
    $sqlget="SELECT * FROM ticket where email = '$email' ";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
    <th>Email</th>
    <th>Booked Movie Name</th>
    <th>Show Timing</th>
    <th>Cost</th>
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        // echo $row['user_id'];
        // echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['movie'];
        echo "</td><td>";
        echo $row['timing'];
        echo "</td><td>";
        echo "Rs. 150";
        echo "</td>";

          
        ?>

    

<?php
       }

       echo "</table>";


?>






</div>




</body>
</html>