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
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style>
        .box:hover .bookTicketButton {
    display: block;
    z-index: 5 !important;
    color:#ea8305;
    opacity: 0.9;
}

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

<section>

<div class="slider-frame">
    <div class="slide-images">

        <div class="img-container">
                <img src="image/middleposter1.png" class="middleImage" alt="MiddlePoster">
            </div>
            <div class="img-container">
                <img src="image/middleposter2.png" class="middleImage" alt="MiddlePoster">
            </div>
            <div class="img-container">
                <img src="image/middleposter3.png" class="middleImage" alt="MiddlePoster">
            </div>
            <div class="img-container">
                <img src="image/middleposter4.png" class="middleImage" alt="MiddlePoster">
            </div>
    </div>
</div>

</secction>
<!-- movie disply starts here -->


<!-- ***************************************** -->
<section> 

<h1 id="showTypeText">Now Showing</h1><br>
 
<div class="maindiv" style=" display:flex; max-width:80vw; margin-left:190px;"> 

    <div class="insidediv" style=" display:flex; flex-direction:row; gap:58px; flex-wrap:wrap;"  >
    <?php 
           $results = mysqli_query($conn, "SELECT * FROM `movie`") or die('query failed');

           if(mysqli_num_rows($results)>0){
            while($fetch_movie = mysqli_fetch_assoc($results)){
     ?> 
     <div class="box" style=" height:390px; width:14.3vw; ">

     <img src="dashboard/uploaded_img/<?php echo $fetch_movie['image']; ?>" alt="film1" class="film">
          <p class="filmName" name="flimName"><?php echo $fetch_movie['name']; ?></p> <br><br>
          <div class="buttonClass">
              <a class="linkText" href="myTicket.php"><input type="button" value="Book Ticket" class="bookTicketButton"></a><br>
              <a class="linkText" href="watchTrailer"><input type="button" value="Watch Trailer" class="bookTicketButton" style=""></a>
          </div>

     </div>

    <?php 
              }
            }
        ?>
    </div>
</div>

</section>




    <!-- <div class="upComing"> -->
        <h1 id="showTypeText">Up Coming</h1><br>

        <div class="row" >
            <div class="imageWithBuyTicketAndTrailer">
                <img src="image/film10.jpeg" alt="film1" class="film">
                <span class="filmName">NIRFUL on May 05</span> <br><br>
            </div>

            <div class="imageWithBuyTicketAndTrailer">
                <img src="image/film11.jpeg" alt="film1" class="film">
                <span class="filmName">RITU on May 08</span> <br><br>
            </div>

            <div class="imageWithBuyTicketAndTrailer">
                <img src="image/film12.jpeg" alt="film1" class="film">
                <span class="filmName">JALO  on May 12</span> <br><br>
            </div>

            <div class="imageWithBuyTicketAndTrailer1">
                <img src="image/film14.jpeg" alt="film1" class="film">
                <span class="filmName">NEPALI on May 25</span> <br><br>
            </div>

    </div>

    
    <!-- <div class="upComing"> -->
           <h1 id="showTypeText">Waiting Movies</h1><br>
        <div class="row1">
            <div class="imageWithBuyTicketAndTrailer1">
                <img src="image/film16.jpeg" alt="film1" class="film">
                <span class="filmName">UTSAV</span> <br><br>
            </div>
    
            <div class="imageWithBuyTicketAndTrailer1">
                <img src="image/film17.jpeg" alt="film1" class="film">
                <span class="filmName">VISA GIRL</span> <br><br>
            </div>
     
        </div>
    </div>
<!-- movie display ends here -->

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








<!-- film ma hover garda button aaune
upcoming ra waiting to toggle button
image slider suru ma
fixed garera offer dekhaunee siri ma


 -->


<!-- 
<div class="imageWithBuyTicketAndTrailer">
    <img src="image/film2.jpeg" alt="film1" class="film">
    <span class="filmName">BLACK KLANSMAN</span> <br><br>
    <a class="linkText" href="myTicket.php"><i class="fa fa-ticket" aria-hidden="true" id="ticketIcon"></i> <span id="ticketbookWatchtrailer">Book Ticket</span></a> <br>
    <a class="linkText" href="watchTrailer"><i class="fa fa-film" aria-hidden="true" id="ticketIcon"></i><span id="ticketbookWatchtrailer">Watch Trailer</span></a>
</div> -->


<!-- 

<li id="changeTab" class="movieTab" data-target="nextRelease">Next Release</li>
<li id="commingSoonTab" class="movieTabSoon" data-target="comingSoon">Coming Soon</li> -->
