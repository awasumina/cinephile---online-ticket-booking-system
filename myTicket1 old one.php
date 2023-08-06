<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myTicket.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myTicket.js"></script>
</head>
<body>
        <!-- nav bar starts here -->
        <nav >
            <img src="image/logoBlack1.png" alt="logo" id="topLogo">
    
            <ul id="title">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php"> Home</a></li>
                <li><i class="fa fa-film" aria-hidden="true"></i><a href="ticketRate.php"> Ticket Rate</a></li>
    
                <!-- <li id="li_id"><i class="fa fa-video-camera" aria-hidden="true"></i><a href="availableShow.php"> Available Shows</a></li> -->
                <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="myTicket.php" id="selectedNavItem"> My Ticket</a></li>
                <li><i class="fa fa-camera" aria-hidden="true"></i><a href="aboutUs.php"> Our Gallery</a></li>
                <li><i class="fa fa-phone-square" aria-hidden="true"></i><a href="contactUs.php"> Contact Us</a></li>
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="login.php"> Login </a></li>
                <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li>
                
            </ul>
      
        </nav>



        <center>
        <div class="mainBody">
            <div class="divSeat">
                <center>
                <table cellspacing="10" >
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
  


                    </tr>
                    <!-- <button  id="select">fg</button> -->
                    <!-- <tr class="row">
                        <td  id="select">F</td>

                        <td><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M2')"></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M3')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M4')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M5')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M6')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M7')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M8')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
 <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M19')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                    </tr> -->


                    
       
<?php

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login1.php');
// }
include 'config.php';
session_start();



$sql = "SELECT * FROM ticket";
$result = mysqli_query($conn, $sql) or die('query failed');

?>


<?php 
    for($i=1;$i<=6;$i++){
        include 'config.php';
        $sql = "SELECT * FROM ticket";
$result = mysqli_query($conn, $sql) or die('query failed'); ?>
        <tr>
        <td><?php echo $i ?></td>
            <?php
            for($j=1;$j<=9;$j++){                             
                          $a = 0;

                         while ($row = mysqli_fetch_assoc($result)){

                            // echo $row['seatno'];
                            if($i.$j == $row['seatno'])   {
                                $a=1;

                             } 
                             
                        }                             
                             if($a==0){
                                   echo ' <td><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>';
                                
                            
                        }
                                elseif ($a==1){ 

                                echo '<td><i style="background-color:coral; color:white;"  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>';
  

                                }
                            
        }                
       ?></tr>
 <?php } ?>






 <?php
mysqli_close($conn);

?>





                    



                </table>

                <br><i class="fa fa-square" aria-hidden="true">Reserved</i>
                <i class="fa fa-square-o" aria-hidden="true">Not Reserved</i><br><br>
            </center>
            </div>

        
        <button id="seatBook" onclick="window.open('bookTicket.php','_self');" >Book the Selected Seat</button>
        </div>






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