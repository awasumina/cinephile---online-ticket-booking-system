<<?php
    session_start();
    include "config.php";
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myTicket.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"

      href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
    >

    <link
      rel="stylesheet"

      href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
    >

    <link
      rel="stylesheet"

      href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
    >

    <link
      rel="stylesheet"

      href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
    >


    <script src="myTicket.js"></script>
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
        <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php"> Ticket Rate</a></li>

        <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
        <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php" id="selectedNavItem"> My Ticket</a></li>
        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="aboutUs.php"> Our Gallery</a></li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="contactUs.php" > Contact Us</a></li>
        <li><i class="fa fa-user" aria-hidden="true"></i><a href="viewDetail.php"> View History </a></li>
        
        
     
        <li><i class="fa fa-sign-out" style = "  color: #e39535; width: 1.1vw;" aria-hidden="true"></i><a href="logout.php"> Logout </a></li>
        <li class="userName"><i class="fa fa-user" aria-hidden="true"></i> <?php  echo $_SESSION['username'] ?></li>

        <!-- <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li> -->
        
    </ul>

       
  
    </nav>

      
        </nav>


        <center>
        <div class="mainBody">
            <div class="divSeat">
                <center>
                <table cellspacing="10"  >
                    <tr>
                    <td  style="border:none; font-size:19px;"></td>
                    <td  style="border:none; font-size:19px;">1</td>
                    <td  style="border:none; font-size:19px;">2</td>
                    <td  style="border:none; font-size:19px;">3</td>
                    <td  style="border:none; font-size:19px;">4</td>
                    <td  style="border:none; font-size:19px;">5</td>
                    <td  style="border:none; font-size:19px;">6</td>
                    <td  style="border:none; font-size:19px;">7</td>
                    <td  style="border:none; font-size:19px;">8</td>
                    <td  style="border:none; font-size:19px;">9</td>
  


                    </tr>
          

                    
       
<?php

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login1.php');
// }
include 'config.php';
// session_start();



$sql = "SELECT * FROM ticket";
$result = mysqli_query($conn, $sql) or die('query failed');

?>


<?php 
    for($i=1;$i<=9;$i++){
        // include 'config.php';
        // $sql = "SELECT * FROM ticket";
// $result = mysqli_query($conn, $sql) or die('query failed');
 ?>
        <tr>
        <td  style="border:none; font-size:19px;"><?php echo $i ?></td>
            <?php
            for($j=1;$j<=9;$j++){                             
                          $a = 0;
                            include 'config.php';
                            $sql = "SELECT * FROM ticket";
                            $result = mysqli_query($conn, $sql) or die('query failed');
                            while ($row = mysqli_fetch_assoc($result)){
                            // var_dump ($row['seatno']);
                            // echo "<br>";
                            // var_dump ($i.$j);
                            // echo "<hr>";

                            if($i.$j == $row['seatno'])   {
                                // echo $row['seatno'];
                              echo '<td>
                       
                              
                              <i style="height:24px; width:57px;padding-top:3px; padding-left:20px; background-color:brown; color:white;"  id="select" class="fa-regular fa-loveseat"></i>
                              </td>';
                         //  echo '<td>
                       //  echo '<td style= "width=14px;" ><img src="image/seat.png" alt="seat"></td>';
                                $a=1;
                             } 
                             
                        }                             
                             if($a==0){
                                   echo ' <td>
                                   <i style=" width:57px; padding-left:20px;  background-color:#d8c7cc; color:black;"   id="select" class="fa-regular fa-loveseat aria-hidden="true"></i>
                                   
                                   </td>';
                                
                            
                        }
                          
                            
        }                
       ?></tr>
 <?php } ?>






 <?php
mysqli_close($conn);

?>



                </table>

                <p style="background-color:#3b3c36; width:570px; height:50px; color:white; padding-top:17px">Projection Screen </p>



                <br><i class="fa fa-square" aria-hidden="true"><b> Reserved</b></i>
                <i style="color:#d8c7cc;"  class="fa fa-square" aria-hidden="true" > <b>Not Reserved </b></i><br><br>
            </center>
            </div>

        
        <button id="seatBook" onclick="window.open('bookTicket.php','_self');" >Reserve Your Seat</button>
        </div>
        <h6 style="color:coral;">Note: The Booked Ticked is Non-Fundable </h6>

    </center>

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
            <a href="facebook.com"></a> 
            <a href="instagram.com"></a>
            <a href="twitter.com"></a>
            <a href="whatsapp.com"></a>
            <a href="sharesquare.com"></a>
            <p>Copyright © 2023 Cinephile Cinemas | Designed by Sumina Awa | Powered by FOSP</p>
        </div>
    </footer>
<!-- footer ends here -->   
</body>
</html>