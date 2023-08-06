<?php
include 'config.php';

session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

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





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book ticket</title>
    <link rel="stylesheet" href="bookTicket.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myTicket.js"></script>

    <style>
         input, select{
     height: 2.5vw;
     width: 20vw;
     font-size: 15px;
     border-radius: 7px;
     border-color: #e39535;
     text-align: center;
 }
    </style>   
</head>
<body>

    <!-- nav bar starts here -->
      <!-- nav bar starts here -->
      <nav >
        <img src="image/logoBlack1.png" alt="logo" id="topLogo">

    <ul id="title">
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php" id="selectedNavItem"> Home</a></li>
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php"> Ticket Rate</a></li>

        <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
        <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php"> My Ticket</a></li>
        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="aboutUs.php"> Our Gallery</a></li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="contactUs.php" > Contact Us</a></li>
        <li><i class="fa fa-user" aria-hidden="true"></i><a href="viewDetail.php"> View History </a></li>
        
        
     
        <li><i class="fa fa-sign-out" style = "  color: #e39535; width: 1.1vw;" aria-hidden="true"></i><a href="logout.php"> Logout </a></li>
        
        <li class="userName"><i class="fa fa-user" aria-hidden="true"></i> <?php  echo $_SESSION['username'] ?></li>
        <!-- <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li> -->
        
    </ul>

       
  
    </nav>

    <!-- <div class="middlePoster">
        <img src="image/middleposter1.png" class="middleImage" alt="MiddlePoster">

  
    </div> -->
<!-- nav bar ends here -->
    <img src="image/ticket.png" alt="ticket" id="ticket">
    
<!-- nav bar ends here -->

<center>
        <form action="" method="post">
           <h3>Book your Ticket Now!</h3>

    <table  cellspacing="15">
        <tr>
            <td>Seat No.  :</td>
            <td><input type="number" name="seatNumber" required placeholder="For example 11 to 99 ">
            </td>
        </tr>

        <tr>
            <td>Name :</td>
            <td>
                <!-- <span  style="color:black; border: 1px solid white;background-color: white; padding:5px;border-radius:7px; width:20px;" ><?php echo $_SESSION['username']; ?></span> -->
                <input type="text" name="name"  placeholder="<?php echo $_SESSION['username']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Contact no. :</td>
            <td>
                <input type="number" name="number" placeholder="Enter your phone number"  required >
            </td>
        </tr>

        <tr>
            <td>Movie Name:</td>
            <td>
                <select name="movie">
                <option value="" selected>--Select Movie--</option>
                    <option value="US">US</option>
                    <option value="LEAGUE">LEAGUE</option>
                    <option value="AVATAR">AVATAR</option>
                    <option value="MAKE IN INDIA">MAKE IN INDIA</option>
                    <option value="AIRPLANE">AIRPLANE</option>
                    <option value="ASSASSIN">ASSASSIN</option>

                </select>               
            </td>
        </tr>

        <tr>
            <td>Show Timing:</td>
            <td>
                <select name="timing">
                <option value="" selected>--Select Timing--</option>
                    <option value="Morning - 11 am">Morning - 11am</option>
                    <option value="Evening - 5pm">Evening - 5pm</option>

                </select>               
            </td>
        </tr>

        <tr>
            <td>Email :</td>
            <td>
                <!-- <span  style="color:black;"><?php echo $_SESSION['email']; ?></span> -->
                <input type="email" name="email" required placeholder="<?php echo $_SESSION['email']; ?>">
            </td>
        </tr>

        <tr>
            <td>Pay Through</td>
            <td>
                <select name="method" id="optionForPay">
                    <option value="Khalti">Khalti</option>
                    <option value="Credit Card">Credit Card</option>
                 </select>
            </td>
        </tr>
        <tr style="color:red; text-align:center; font-weight: bold;">
           <td colspan="2" >
           <?php 
            echo "Note : Click the Book Now button twice";
            ?>
           </td> 
        </tr>

        <tr>
             <td colspan="2">
             <!-- <button  name="submit"  class="btn" name="submit" > Click to Confirm</button><br><br> -->
             <button onclick="window.location.href = 'payment.php';" name="submit"  class="btn" name="order_btn" >Book Now</button>
             </td>
        </tr>

      
             <!-- <input type="submit" onclick="function myFunction()"  name="submit" value="Book Now" class="btn" name="order_btn">
                <script>
            function myFunction() {
            window.location.href = "payment.php";
            }
             </script> -->

        <tr>
            <td colspan="2">
               <input onclick="window.open('myTicket.php','_self');" type="submit" value="Return Back" class="btn" name="return_btn">
             
            </td>
       </tr>
    </table>
    </form>
     
</center>
     
    
</body>


    <!-- footer starts here -->
    <footer>
        <div class="partner">
            <h3 id="partnerText"> OUR PREFERRED PARTNER</h3>
                <img src="image/khalti.png" alt="khalti" id="partnerImg" > 
            <h3 id="partnerText2">PAYMENT PARTNER</h3>
        </div>

        <div class="foot">
            <a class="linkText2" href="privacyPolicy">Privacy Policy</a> and
            <a class="linkText2" href="termsOfUse">Terms of Use</a>
            <a href="facebook.com"><i style="background-color:#f0b46c; padding:4px; font-size:17px;" class="fa fa-facebook-square" aria-hidden="true"></i></a> 
            <a href="instagram.com"><i style="background-color:#f0b46c; padding:4px; font-size:17px;" class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="twitter.com"><i  style="background-color:#f0b46c; padding:4px; font-size:17px;" class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="whatsapp.com"><i style="background-color:#f0b46c; padding:4px; font-size:17px;" class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="sharesquare.com"><i style="background-color:#f0b46c; padding:4px; font-size:15px;" class="fa fa-share-square" aria-hidden="true"></i></a>
            <p>Copyright © 2023 Cinephile Cinemas | Designed by Sumina Awa | Powered by FOSP</p>
        </div>
    </footer>
<!-- footer ends here -->
</html>