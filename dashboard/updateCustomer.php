<?php 

	session_start();

?>
<?php include("connection.php")?>


<!DOCTYPE html>
<html>
<head>
  <title>customer details update</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="signUp.css">
	<style type="text/css">

			body{

        background-image: linear-gradient(#f48e11,  #f5a33e,#f1b871);


		}
		.adminTopic{
			text-align: center;
			color: #fff;
			

		}
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    #decription{
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }




	</style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">

<ul>


   
<li><a href="adminDash.php">View User Details</a></li>
    <li><a href="ticketBooked.php">Booked Ticket History</a></li>
    <li><a href="movie.php">Movie Details</a></li>
    <li><a href="suggestion.php">Suggestion Messages</a></li>
    <li><a href="adminLogout.php">logout</a></li>
    

    </ul>

   

</div>

   

   <?php 


      

       if(isset($_POST['customerUpdate'])){

       $id=$_POST['id'];
       $name=$_POST['name'];
       $number=$_POST['number'];
       $email=$_POST['email'];


       $query="UPDATE `users` SET name='$name',number='$number',email='$email' where user_id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){
          //  echo '<script type="text/javascript">alert("Customer Details udated sucessfully!!!")</script>';
          
          
           echo ("<script LANGUAGE='JavaScript'>
           window.alert('Succesfully Updated Customer Details!!!');
           window.location.href='adminDash.php';
           </script>");
          }
          else{
              //  echo '<script type="text/javascript">alert("Customer details not updated!!!")</script>';
               echo ("<script LANGUAGE='JavaScript'>
               window.alert('Customer details not updated!!!!');
               window.location.href='adminDash.php';
               </script>");
           }

           

     }

?>



<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Customer Details Update/Edit
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>">
        </div>
        
        <div class="input_wrap">
          <label for="title">Name</label>
          <input type="text" id="title" name="name" placeholder="Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Number</label>
          <input type="number" id="title" name="number" placeholder="Number" required style="width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
	color: black; ">
        </div>

         <div class="input_wrap">
          <label for="title">Email</label>
          <input type="email" id="title" name="email" placeholder="Email" required style="width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
	color: black; " >
        </div>


        <div class="input_wrap">
    <input type="submit" value="Update Details Now" class="submit_btn" name="customerUpdate">

</div>

      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>