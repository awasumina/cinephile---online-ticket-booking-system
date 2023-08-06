
<?php
$login = false;

include 'config.php';

        if(isset($_POST['submit']))
        {	
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select * from users where email='$email' and password ='$password'";
            $result = mysqli_query($conn, $sql);
            // $num = mysqli_num_rows($result);
            // if ($num == 1) {
            //     $login =true;
            //     $_SESSION['loggedin'] = true;
            //     $_SESSION['mail'] = $email;

            // }
                   if($result){
                while($row = mysqli_fetch_assoc($result)){
                    // Print the result depending if they match
                    if ($row['user_type']=='user') {
                        session_start();
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['username'] = $row['name'];
                        // $_SESSION['number'] = $row['number'];
                        $_SESSION['loggedin'] = true;
                        header('location:home.php');
                    } 
                    elseif($row['user_type']=='admin')  {
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['loggedin'] = true;
                        header('location:../cinephile/dashboard/adminDash.php');
                    }
                    else {
                        header('location:index.php');
                    }
                }
            }
            else {
                header('location:index.php');
            }
	        mysqli_close($conn);
        }
?>

