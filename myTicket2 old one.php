
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
                <!-- <li><i class="fa fa-user" aria-hidden="true"></i><a href="login.php"> Login </a></li>
                <li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="register.php">Register</a></li> -->
                
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
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>

       


                    </tr>
                    <!-- <button  id="select">fg</button> -->
                    <tr class="row">
                        <td  id="select">M</td>

                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M1')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M2')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M3')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M4')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M5')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M6')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M7')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M8')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M9')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M10')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M11')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M12')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M13')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M14')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M15')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M16')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M17')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M18')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                        <td  onclick="this.style.backgroundColor = 'brown' ;  this.style.color = 'white' ; number('M19')"><i  id="select" class="fa fa-wheelchair" aria-hidden="true"></i></td>
                    </tr>



                </table>

                <br><i class="fa fa-square" aria-hidden="true">Selected</i>
                <i class="fa fa-square-o" aria-hidden="true">Unselected</i><br><br>
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