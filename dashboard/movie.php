<?php 
session_start();

  include("connection.php");
  // $admin_id = $_SESSION['user_id'];

  // if(!isset($admin_id)){
  //    header('location:../login.php');
  // };

?>

<?php include("connection.php")?>


<!DOCTYPE html>
<html>
<head>
  <title>Booking Manage</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="viewDetail.css">
<link rel="stylesheet" href="admin_style.css">


 
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">

<ul>


    <li><a href="adminDash.php">View User Details</a></li>
    <li><a href="ticketBooked.php">Booked Ticket History</a></li>
    <li><a href="movie.php">Movie Details</a></li>
    <li><a href="suggestion.php">Suggestion Messages</a></li>
    <li><a href="adminLogout.php">logout</a></li>

   
  </ul>
</div>



<div class="sidebar2">


    <h1 class="adminTopic" style="color:black; padding-top:50px; font-size:40px;">Adding Movie</h1>

    <?php




// $ss =mysqli_query($conn,"select * from movie");
// while ($row = mysqli_fetch_assoc($ss)){

//                             echo $row['image'];
// }
if(isset($_POST['add_film'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   // echo "thius is tmo wala". $image_tmp_name ."<hr>";

   $image_folder = 'uploaded_img/'.$image;
   // echo "this is folder wala".$image_folder. "<hr>";

   $select_product_name = mysqli_query($conn, "SELECT name FROM `movie` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_product_name) > 0){
      $message[] = 'Film has already been added';
   }else{
      //   echo "alert(noooooooooooooooooooooooooooooooooooooooooooooooooooo)";
      $add_film_query = mysqli_query($conn, "INSERT INTO `movie`(name,image) VALUES('$name','$image')") or die('query failed');

      if($add_film_query){
        // echo "alert(noooo)";
         if($image_size > 2000000){
            $message[] = 'Image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Product added successfully!';
         }
      }else{
         $message[] = 'Product could not be added!';
      }
   }
}






if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `movie` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `movie` WHERE id = '$delete_id'") or die('query failed');
   header('location:movie.php');
}

if(isset($_POST['update_product'])){

   $update_p_id = $_POST['update_p_id'];
   $update_name = $_POST['update_name'];

   mysqli_query($conn, "UPDATE `movie` SET name = '$update_name' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'Image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `movie` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('uploaded_img/'.$update_old_image);
      }
   }

   header('location:movie.php');

}


  


?>
 <!-- book CRUD section starts  -->

<section class="add-products" style="color:whitesmoke;">

   

   <form action="" method="post" enctype="multipart/form-data" style="border-color:white;">
      <h3>Add MOVIE</h3>
      <input type="text" name="name" class="box" placeholder="Enter Movie Name" required style="background-color:linear-gradient( #eaa95b,#d08529);; border-color:white;">
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required style="background-color: linear-gradient( #eaa95b,#d08529); ; border-color:white;">
      <input type="submit" value="add movie" name="add_film" class="btn" style="background-color: #ff4040 ; border-color:white;">
   </form>

</section>

<!-- book CRUD section ends -->

<!-- show books  -->

   
<section class="show-products" style="padding-top: 0;">

   <div class="box-container" style=" display: grid; border:none;
  
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   justify-content: center;
   gap:2rem;
   max-width: 1200px;  
   margin:0 auto;
   margin-left:160px;
   align-items: flex-start;
   max-width: 80vw;
   padding: 15rem 0;
   gap: 2rem;  ">
       <!-- main div yaha xa -->
       <div class="mainbox" style="   display: flex;
   flex-wrap: wrap;
   gap:12rem;">
      <?php
         $select_film = mysqli_query($conn, "SELECT * FROM `movie`") or die('query failed');
         if(mysqli_num_rows($select_film) > 0){
            while($fetch_film = mysqli_fetch_assoc($select_film)){
      ?>
      <div class="box" >
         <?php 
         // session_start();
         ?>
         <img  src="uploaded_img/<?php echo $fetch_film['image'];  ?>" alt="">
         <div class="name"><?php echo $fetch_film['name']; ?> <br>
         
       
         <a href="movie.php?update=<?php echo $fetch_film['id']; ?>" class="option-btn">Update</a><br>

         <a href="movie.php?delete=<?php echo $fetch_film['id']; ?>" class="delete-btn" onclick="return confirm('Do you want to delete this movie?');">Delete</a>
      </div>

        </div>
      <?php
         }
      }else{
         echo '<h1 class="empty btn" style="background-color: #ff4040 ; font-size:5rem; margin-left:230px; margin-top:-50px;" >No films added yet!</h1>';
      }
      ?>

   </div>

</section>

<section class="edit-product-form" style="   min-height: 100vh;
   background-color: rgba(0,0,0,.7);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   overflow-y: scroll;
   position: fixed;
   top:0; left:0; 
   z-index: 1200;
   width: 100%;">

   <?php
      if(isset($_GET['update'])){
         $update_id = $_GET['update'];
         $update_query = mysqli_query($conn, "SELECT * FROM `movie` WHERE id = '$update_id'") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
   <form action="" method="post" enctype="multipart/form-data" style="width: 50rem;
   padding:2rem;
   text-align: center;
   border-radius: .5rem;">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
      <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
      <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="" style="   height: 25rem;
   margin-bottom: 1rem;">
      
      <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" style="   margin:1rem 0;
   padding:1.2rem 1.4rem;
   border-radius: .5rem;
   font-size: 1.8rem;
   width: 100%;" required placeholder="enter film name">
           
      <input type="file" class="box" style="   margin:1rem 0;
   padding:1.2rem 1.4rem;
   border-radius: .5rem;
   font-size: 1.8rem;
   width: 100%;
   border:1px solid white;
   color:white" name="update_image" accept="image/jpg, image/jpeg, image/png" >
    
    
    
    <input type="submit" value="update" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-update" class="option-btn">
   </form>
   <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
      }
   ?>

</section>







<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>












































