
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinephile</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- <?php

// include 'config.php';
// session_start();

// if(isset($_POST['submit'])){

//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $pass = mysqli_real_escape_string($conn, ($_POST['password']));




//    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' 
        
//     AND password = '$pass'
//    ") or die('query failed');
/*
$query= "SELECT * FROM users WHERE email = '$email'  AND password = '$pass'";

$result=mysqli_query($conn,$query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// $name=mysqli_fetch_array($result); 
$count = mysqli_num_rows($result);  

if($count == 1){  
    // echo $name['Username'];
    include "home.php";
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}   

*/


//    if(mysqli_num_rows($select_users) > 0){

//       $row = mysqli_fetch_assoc($select_users);
// echo $row;
//       if($row['user_type'] == 'user')

//     {

//          $_SESSION['admin_name'] = $row['name'];
//          $_SESSION['admin_email'] = $row['email'];
//          $_SESSION['admin_id'] = $row['userid'];
//          header('location:myTicket.php');

//       }elseif($row['user_type'] == 'admin'){

//          $_SESSION['user_name'] = $row['name'];
//          $_SESSION['user_email'] = $row['email'];
//          $_SESSION['user_id'] = $row['userid'];
//          header('location:home.php');

//       }

//    }else{
//       $message[] = 'Incorrect email or password!';
//    }

// }

?> -->



    <!-- nav bar starts here -->
    <nav >
            <img src="image/logoBlack1.png" alt="logo" id="topLogo">
    
            <ul id="title">
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php" > Home</a></li>
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="indexTicketRate.php" > Ticket Rate</a></li>

        <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
        <!-- <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php"> My Ticket</a></li> -->
        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="indexAboutUs.php"> Our Gallery</a></li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="indexContactUs.php" > Contact Us</a></li>
        <li><i class="fa fa-user" aria-hidden="true"></i><a href="login.php"  id="selectedNavItem"> Login </a></li>
        <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li>
        
    </ul>
      
        </nav>

    
<!-- nav bar ends here -->


<!-- <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?> -->


<!-- login form begins here -->

<div class="loginBody">
    <div class="container">
        <div id="logoDiv"><img src="image/logoWhite.png" alt="logo" class="brand_logo"></div>
        <div class="brand_name">CINEPHILE</div>
        <div class="inputs">
            <form method="post" name="login" action="loginvalid.php">
                <label style="font-size: 14px; color: #d27707;">Enter your Email </label>
                <input type="email" id="myEmail" name="email" placeholder="xyz@gmail.com"  style="font-size: 13px;"/> <br/>

                <label style="font-size: 14px; color: #d27707;">Enter your Password</label>
                <input name="password" type="password" id="myPassword" /> <br/> <br/>


                <button type="submit" name="submit" class="btn">Login Now</button>
                 <p id="noAccount">Don't have an account? <a href="register.php" id="registerNow">Register now</a></p>


                <!-- <button type="submit" name="submit">LOGIN</button> -->
                <!-- <a href="forgotPassword"><p id="forgotPw">Forgot Password?</p></a> -->
            </form>

            

        </div>
    </div>
</div>

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


</body>
</html>





<!-- forgot password
eye wala password -->