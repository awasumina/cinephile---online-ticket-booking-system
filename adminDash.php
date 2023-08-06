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
  <title>User details</title>
  <!--cdn icon library -->
  
	<!-- <style type="text/css">

			body{

		  background-image: url("image/20.jpg");
		  background-position: center;
		  background-size: cover;
		  height: 700px;
		  background-repeat: no-repeat;
      background-attachment: fixed;

		}
		.adminTopic{
			text-align: center;
			color: #fff;
			

		}

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{    padding: 5px 5px 5px 5px;
	border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 5px 5px 5px 5x;
}
.btnPolicy{

	padding: 5px 5px 5px 5px;
	border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

	background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}


	</style> -->
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
    <li><a href="ManagesBuses.php">Movie Details</a></li>
    <li><a href="suggestion.php">Suggestion Messages</a></li>
    <li><a href="adminLogout.php">logout</a></li>
    


</div>



<div class="sidebar2">


		<h1 class="adminTopic">All Customer Details</h1>



<?php

    
    $sqlget="SELECT * FROM users";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>user_id</th>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
    <th>Update</th>
    <th>Delete</th>

   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
         $ID = $row['user_id'];
        echo "<tr><td>";
        echo $row['user_id'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['number'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td>";
        ?>

        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:coral;color:black;">
          <a href="updateCustomer.php?id=<?php echo $row['user_id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td>
        
        <td>

        <button style = "border:2px solid yellow; border-radius:7px; background-color:coral;color:black;" >
          <a href="deleteCustomer.php?id=<?php echo $ID?>">


  


            Delete

        </a>
       </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>

<br>





</div>

</body>
</html>