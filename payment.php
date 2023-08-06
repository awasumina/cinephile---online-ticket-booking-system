<?php 
session_start();

  include("config.php");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="cssfile/payment.css">

</head>
<body>



<?php



  if(isset($_POST['checkout'])){


     $name=$_POST['name'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $number=$_POST['number'];
     $cname=$_POST['cardName'];
     $cnumber=$_POST['cardNumber'];
     $expM=$_POST['expM'];
     $expY=$_POST['expYear'];
     $code=$_POST['code'];
     $amount=$_POST['amount'];


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {
              $stmt=$conn->prepare("INSERT INTO payment(amount,name,email,address,number,cardName,cardNumber,expM,expYear,code) VALUES(?,?,?,?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("isssisiiii",$amount,$name,$email,$address,$number,$cname,$cnumber, $expM,$expY,$code);
            //   $stmt->bind_param("sss", $firstname, $lastname, $email); This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

              $stmt->execute();
                          
                           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully added!!!');
                window.location.href='paymentSuccess.php';
                </script>");

              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="payement.css">
</head>
<body>
    <div class="container">

    <form method="POST" action="" name="myForm" onsubmit="return(validate());">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                 <div class="inputBox">
                    <span>Amount You Pay :</span>
                    <input type="number" value="150.00" name="amount">
                </div>

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" value="<?php echo $_SESSION['username'];?>" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" value="<?php echo $_SESSION['email'];?>"  name="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address">
                </div>
                <div class="inputBox">
                    <span>Phone Number:</span>
                    <input type="number" placeholder="" name="number">
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>Payment Accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="---------" name="cardName" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cardNumber" required>
                </div>
                <div class="inputBox">
                    <span>exp date :</span>
                    <input type="date" placeholder="january" name="expM" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="expYear" required>
                    </div>
                    <div class="inputBox">
                        <span>Code :</span>
                        <input type="text" placeholder="1234" name="code" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" name="checkout">

    </form>

</div>    
</body>
</html>


