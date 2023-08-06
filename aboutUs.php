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
    <link rel="stylesheet" href="aboutUs.css">
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
        <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php"> Home</a></li>
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php"> Ticket Rate</a></li>

        <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
        <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php"> My Ticket</a></li>
        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="aboutUs.php"  id="selectedNavItem"> Our Gallery</a></li>
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



<!-- 
        // number of rows and minimum number of columns, you can adjust as you please
        - let n_rows = 3; // at least 1 !!!
        - let n_cols_min = 2; // at least 1 !!!
        
        // image urls, you can replace with your own
        - let imgs = [
        -   'https://images.unsplash.com/photo-1519681393784-d120267933ba?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1497733942558-e74c87ef89db?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1540744276164-9dc898353c7b?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1469975692758-66d107a536cb?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1490845060161-85f9ce08a9f4?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1541673504494-8bcc1a340180?w=650&fm=jpg', 
        -   'https://images.unsplash.com/photo-1515937350506-3e7b51a95339?w=650&fm=jpg'
        - ];
        
        - let n_cols_max = n_cols_min + 1, n_cols_sum = n_cols_max + n_cols_min;
        - let n = Math.ceil(.5*n_rows)*n_cols_min + Math.floor(.5*n_rows)*n_cols_max;
        - let ni = imgs.length;
        
        body(style=`--n-rows: ${n_rows}; --n-cols: ${2*n_cols_max}`)
          style .hex-cell:nth-of-type(#{n_cols_sum}n + 1) { grid-column-start: 2 }
          - for(let i = 0; i < n; i++)
            .hex-cell: img(src=imgs[i%ni]) -->




            <div class="wrapper">
                <img src="image/hall1.jpg" alt="" class="aboutImage">
                <img src="image/hall2.jpeg" alt="" class="aboutImage">
                <img src="image/hall3.jpeg" alt="" class="aboutImage">
                <img src="image/hall4.jpeg" alt="" class="aboutImage">
                <img src="image/hall5.jpeg" alt="" class="aboutImage">
                <img src="image/hall6.jpeg" alt="" class="aboutImage">
                <img src="image/hall7.jpeg" alt="" class="aboutImage">
                <img src="image/hall8.jpeg" alt="" class="aboutImage">
                <img src="image/hall9.jpeg" alt="" class="aboutImage">
                <img src="image/hall10.jpeg" alt="" class="aboutImage">
              </div>






              <!-- <h1>Photos Collection of our theatre</h1> -->




<!-- 


              <div class = "gallery">
                <div class="clipped-border">
                  <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.gettyimages.com.au%2Fgi-resources%2Fimages%2Ffrontdoor%2Fcreative%2FPanoramicImagesRM%2FFD_image.jpg&f=1" id="clipped">
                </div>
                <div class="clipped-border">
                  <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fbpucette.b.p.pic.centerblog.net%2Ffv86ll9r.jpg&f=1" id="clipped">
                </div>
                <div class="clipped-border">
                  <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimagejournal.org%2Fwp-content%2Fuploads%2Fbb-plugin%2Fcache%2F23466317216_b99485ba14_o-panorama.jpg&f=1" id="clipped">
                </div>
                  <div class="clipped-border">
                  <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.lokeshdhakar.com%2Fprojects%2Flightbox2%2Fimages%2Fimage-4.jpg&f=1" id="clipped">
                </div>
                  <div class="clipped-border">
                  <img src="https://images.pexels.com/photos/932638/pexels-photo-932638.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" id="clipped">
                </div>
                <div class = "shadow"></div>
              </div>
              
               -->

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