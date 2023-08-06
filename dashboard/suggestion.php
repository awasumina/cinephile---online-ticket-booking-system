<?php 

	session_start();


?>
<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
	
     <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="viewDetail.css">

</head>
<body>

</body>
</html>




<!DOCTYPE html>
<html>
<head>
  <title>suggestion message</title>
 

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


		<h1 class="adminTopic">Suggestion Messages</h1>



<?php

    
    $sqlget="SELECT * FROM contact";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>message_id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Delete</th>
    


   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['messageid'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['message'];
        echo "</td>";
        ?>

<td>

<button style = "border:2px solid yellow; border-radius:7px; background-color:coral;color:black;" >
  <a href="deleteSuggestion.php?id=<?php echo $row['messageid'];?>">





    Delete

</a>
</button>

</td>

<?php
       }

       echo "</table>";


?>

<br>





</div>

</body>
</html>