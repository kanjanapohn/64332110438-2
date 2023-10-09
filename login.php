<?php

include ('config.php');

session_start();
if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['user_name']);
   header('location: login.php');
}

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_password'] = $row['password'];
      header('location: main.php');

      }else{
      $_SESSION['error'] = 'incorrect email or password!';
      
     

}};
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>log in</h3>
      <?php
      if(isset($_SESSION['error'])){
         echo $_SESSION["error"];
         unset ($_SESSION['error']);
         
         };
      
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login " class="form-btn">
      <p>don't have an account? <a href="register.php">register </a></p>
   </form>

</div>

</body>
</html>