<?php 
session_start();


//   include("connection.php");
//   include("function.php");

//   $user_data = check_login($conn);

?>

<?php include("connection.php")?>



<!DOCTYPE html>
<html>
<head>
  <title>Show History</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="viewdetail.css">
 
</head>
<body>
  </html>



  

<!DOCTYPE html>
<html>
<head>
  <title>view detail</title>
  <!--cdn icon library -->
  
</head>
<body>

<input type="checkbox" id="check">

<label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


</label>


<div class="sidebar">
<!-- <header><img src="image/Re.png">
<p><?php echo $_SESSION['username']; ?></p>
</header> -->
<ul>


<li><a href="adminDash.php">View User Details</a></li>
    <li><a href="ticketBooked.php">Booked Ticket History</a></li>
    <li><a href="movie.php">Movie Details</a></li>
    <li><a href="suggestion.php">Suggestion Messages</a></li>
    <li><a href="adminLogout.php">logout</a></li>
    


</div>



<div class="sidebar2">

<h1 class="adminTopic">Booked Ticket History</h1>

   




<?php

    
    $sqlget="SELECT * FROM ticket";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ticketno</th>
      <th>name</th>
    <th>Email</th>
    <th>Booked Movie Name</th>
    <th>Show Timing</th>
    <th>Cost</th>
    <th>Delete</th>

       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['ticketno'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['movie'];
        echo "</td><td>";
        echo $row['timing'];
        echo "</td><td>";
        echo "Rs. 150";
        echo "</td>";

          
        ?>

<td>

<button style = "border:2px solid yellow; border-radius:7px; background-color:coral;color:black;" >
  <a href="deleteBookedTicket.php?id=<?php echo $row['ticketno'];?>">
    Delete
</a>
</button>

</td>

<?php
       }

       echo "</table>";


?>






</div>




</body>
</html>