
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <script src="formvalidate.js"></script>
<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name =  $_POST['name'];
    $number =  $_POST['number'];
    $email =  $_POST['email'];
    $pass = $_POST['password'];
    $cpass =  $_POST['cpassword'];
    $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
    echo '<script>alert("User already exists")</script>';
    //   $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
        //  $message[] = 'confirm password not matched!';
        echo '<script>alert("Confirm password donot match")</script>';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name,number, email, password, user_type) VALUES('$name','$number', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
        //  session_start();
        //  $row = mysqli_fetch_assoc($select_users);
        //  $_SESSION['number'] = $row['number'];
        echo '<script>alert("Registered Successfully")</script>';
         header('location:login.php');
      }
   }

}

?>

<?php
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
?>



    <!-- nav bar starts here -->
    <nav >
        <img src="image/logoBlack1.png" alt="logo" id="topLogo">

        <ul id="title">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php"> Home</a></li>
            <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php"> Ticket Rate</a></li>
            <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
            <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php"> My Ticket</a></li>
            <li><i class="fa fa-camera" aria-hidden="true"></i><a href="aboutUs.php"> Our Gallery</a></li>
            <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="contactUs.php"> Contact Us</a></li>
            <li><i class="fa fa-user" aria-hidden="true"></i><a href="login.php"> Login </a></li>
            <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php" id="selectedNavItem">Register</a></li>
            
        </ul>
  
    </nav>

    
<!-- nav bar ends here -->

<!-- register form begins here -->

<div class="loginBody">
    <div class="container">
        <div id="logoDiv"><img src="image/logoWhite.png" alt="logo" class="brand_logo"></div>
        <div class="brand_name">CINEPHILE</div>
        <div class="inputs">
            <form method="post" action="" name="myForm" id="form" onsubmit="return(validate());">
                <label for="name" style="font-size: 14px; color: #d27707;">Enter your Name</label>
                <input type="text" required name="name" id="name"  style="font-size: 13px;"/> <br/>

                <label for="number" style="font-size: 14px; color: #d27707;">Enter Phone Number</label>
                <input type="number" required name="number" id="no" required  style="font-size: 13px;"/> <br/>

                <label for="email" style="font-size: 14px; color: #d27707;">Enter your Email</label>
                <input type = "text" required name="email" id="email" style="font-size: 13px;" placeholder="xyz@gmail.com" required > <br/>
                
                <label for="password" style="font-size: 14px; color: #d27707;">Enter your Password</label>
                <input type = "password" required  name="password" id="pw" style="font-size: 13px;" required > <br/>
                    
                <label for="repassword" style="font-size: 14px; color: #d27707;">Enter your Password Again</label>
                <input type = "password" required name="cpassword" id="cpw" style="font-size: 13px;" required ><br/>
                    

                <select name="user_type" class="box" style="background-color: #fbddb8">
                     <option value="user" selected>User</option>
                     <option value="admin">Admin</option>
                </select>



                <label  style="font-size: 14px; color: #d27707;">
                    <input name="privacyTerms" type="radio" id="radioButton" required/> &nbsp&nbsp
                    &nbsp &nbsp                   I have read and accepted <a class="termsCondition" href="privacyPolicy">Privacy Policy</a> and <a class="termsCondition" href="termsOfUse">Terms of Use</a>
              <br/></label><br>



                <button type="submit" name="submit" id="submit" >Sign Up</button>
            </form>

        </div>
    </div>
</div>

<!-- form ends here  -->
    

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




