<?php
    session_start();
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinephile</title>
    <link rel="stylesheet" href="ticketRate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .userName{
    color:white;
    }
    </style>

</head>
<body>
           <!-- nav bar starts here -->
    <nav >
        <img src="image/logoBlack1.png" alt="logo" id="topLogo">

    <ul id="title">
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php" > Home</a></li>
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php" id="selectedNavItem"> Ticket Rate</a></li>

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

        <!-- ticket price main body strats -->
        <div class="ticketPricesBody">
        <table cellspacing="0">
            <!-- tuesday special show  -->
            <tr>
                <th>Tuesday Special Show</th>
                <th>Price</th>
            </tr>
            
            <tr >
                <td>Maharaja</td>
                <td>Rs.150.00</td>
            </tr>

            <tr >
                <td>Cabin</td>
                <td>Rs.150.00</td>
            </tr>
            <tr >
                <td>Gold</td>
                <td>Rs.120.00</td>
            </tr>
            <tr >
                <td>Silver</td>
                <td>Rs.100.00</td>
            </tr>
            <tr>
                <td id="break" colspan="2"></td>
            </tr>
<!-- reglar show -->
            <tr>
                <th>Regular</th>
                <th>Price</th>
            </tr>
            
            <tr >
                <td>Maharaja</td>
                <td>Rs.300.00</td>
            </tr>

            <tr >
                <td>Cabin</td>
                <td>Rs.300.00</td>
            </tr>
            <tr >
                <td>Gold</td>
                <td>Rs.250.00</td>
            </tr>
            <tr >
                <td>Silver</td>
                <td>Rs.200.00</td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>


     <!-- 3d show -->
            <tr>
                <th>For 3D Show</th>
                <th>Price</th>
            </tr>
            
            <tr >
                <td>Maharaja</td>
                <td>Rs.400.00</td>
            </tr>

            <tr >
                <td>Cabin</td>
                <td>Rs.400.00</td>
            </tr>
            <tr >
                <td>Gold</td>
                <td>Rs.350.00</td>
            </tr>
            <tr >
                <td>Silver</td>
                <td>Rs.300.00</td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
        </table>
       
         
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