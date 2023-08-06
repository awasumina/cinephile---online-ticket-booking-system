<?php

include 'config.php';
session_start();

// if(!isset($user_id)){
//     header('location:login.php');
//  }

// $name = $_POST['full_name'];
// $email = $_POST['mail_addr'];
// $msg = $_POST['message'];



// $sql ='INSERT INTO contact(Name,Email,Message)
// VALUES ($name, $email, $msg)';
// -- VALUES("sumina", "assd@gmail.com", "dsf");

// if(mysqli_query($conn,$sql)){
//     echo "new record successfully";
// }
// else{
//     echo "error :".$sql. "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
// session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['full_name']);
   $email = mysqli_real_escape_string($conn, $_POST['mail_addr']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact` WHERE name = '$name' AND email = '$email' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact`(name, email, message) VALUES( '$name', '$email','$msg')") or die('query failed');
      $message[] = 'Message sent successfully!';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinephile</title>
    <link rel="stylesheet" href="contactUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <nav >
        <img src="image/logoBlack1.png" alt="logo" id="topLogo">

        <ul id="title">
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php" > Home</a></li>
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="indexTicketRate.php"> Ticket Rate</a></li>

        <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
        <!-- <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php"> My Ticket</a></li> -->
        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="indexAboutUs.php"> Our Gallery</a></li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="indexContactUs.php" id="selectedNavItem"> Contact Us</a></li>
        <li><i class="fa fa-user" aria-hidden="true"></i><a href="login1.php"> Login </a></li>
        <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li>
        
    </ul>
  
    </nav>
<div class="contactUS">
    <div class="div16">
        <div class="readytoTalk">
            <p id="text16">Ready to talk?</p>
            <h1 id="text17">Contact Us</h1>
            <p id="text16">Massa tempor nec feugiat nisl pretium fusce id velit. Accumsan tortor posuere ac ut. Aenean pharetra magna ac placerat vestibulum lectus. Praesent semper feugiat nibh sed pulvinar. Lorem sed risus ultricies tristique. <br><br>    
                Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Amet dictum sit amet justo donec enim diam vulputate. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Volutpat lacus laoreet non curabitur.</p>
        </div>

        <div class="textbox">
            <form action="" name="contact" method="post">
           
                <input type="textbox" name="full_name" placeholder="Enter your name"> <br>

                <input type="email" name="mail_addr" placeholder="Enter a valid email address"><br>

                <textarea name="message" placeholder="Enter your message"></textarea><br>

                <input type="submit" name="submit" value="Submit" id="readMore">
                     </form>
        </div>
    </div>
    </div>
        <div class="readytoTalk">
            <section class="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28277.6993422148!2d85.5067418839364!3d27.633422050628635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb0f33b1a23b53%3A0xe8ec0b92bdf38a54!2sBanepa!5e0!3m2!1sen!2snp!4v1655303595825!5m2!1sen!2snp" width="50" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <div class="mainInfo">

                    <div class="contact-div">
                            
                        <i class="fa fa-home" class="locationIcon"></i>
                        <div class="mydiv">
                        <h4 class="locationText">Araniko Highway, XYZ Building </h4>
                        <p class="locationText">Banepa, Kavre</p>
                        </div>
        
                   
                        <i class="fa fa-phone" class="locationIcon" ></i>
                         <div class="mydiv">
                        <h4vclass="locationText">+977 9876543210<br>
                            +977 9870321654<br>
                            01-6659988
        
                        </h4>
                        <p class="locationText">Sunday to Friday ,10AM to 6PM</p>
                         </div>
                   
                        <i class="fa fa-envelope-o" class="locationIcon"></i>
                        <div class="mydiv">
                        <h4 class="locationText">someone@gmail.com </h4>
                        <p class="locationText">Email us your query</p>
                         </div>
                    </div>           
    </div>  
            </section>
            
</div>

    <!-- footer starts here -->
    <footer >
        <div class="partner">
            <h3 id="partnerText"> OUR PREFERRED PARTNER</h3>
                <img src="image/khalti.png" alt="khalti" id="partnerImg" > 
            <h3 id="partnerText2">PAYMENT PARTNER</h3>
        </div>

      
    </footer>
<!-- footer ends here -->
</body>
</html>