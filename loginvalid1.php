<?php

// session_start();

?>
<?php

include 'config.php';

        if(isset($_POST['submit']))
        {	
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select * from users where email='$email' and password ='$password'";
            $result = mysqli_query($conn, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    // Print the result depending if they match
                    if ($row['user_type']=='user') {
                        $_SESSION['email'] = $row['email'];
                        header('location:myTicket.php');
                    } 
                    elseif($row['user_type']=='admin')  {
                        header('location:../cinephile/dashboard/adminDash.php');
                    }
                    else {
                        header('location:home.php');
                    }
                }
            }
            else {
                header('location:home.php');
            }
	        mysqli_close($conn);
        }
?>