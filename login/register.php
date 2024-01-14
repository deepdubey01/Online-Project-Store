<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Online Grocery Store- Login </title>
  <link rel="stylesheet" href="../assets/login.css">
</head>
<body>

  <?php 
  require('db.php');
  if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password!==$cpassword)
    {
      echo"
      <script>
      alert('Password does not match..!!');
      window.location.href='register.php';
      </script>";
      exit();
    }

    $date= date("Y-m-d H:i:s");
    $query="INSERT into `users` (fname, lname, email, password, date, status) VALUES ('$fname','$lname','$email','$password', '$date', 1)";
    $result = mysqli_query($conn,$query);
    if($result){
      $_SESSION['user_login']='yes';
      $_SESSION['user_data'] =$email; 
      echo"
      <script>
      alert('Successfully Registered!!');
      window.location.href='../index.php';
      </script>";
      exit();
    }
  }else
  {

    ?>

    <div class="container">
     <div class="content">
           <div class="image-box">
       <img src="../images/ogs_mart.png" alt="">
     </div>
     <form action="" method="post">
      <div class="topic">Sign-Up Here</div>
      <div class="input-box">
        <input type="text" name="fname" required>
        <label>Enter your First Name</label>
      </div>
      <div class="input-box">
        <input type="text" name="lname" required>
        <label>Enter your last Name</label>
      </div>
      <div class="input-box">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" required>
        <label>Enter your Password</label>
      </div>
      <div class="input-box">
        <input type="password" name="cpassword" required>
        <label>Enter your Password</label>
      </div>
      <div class="container_signin">
       <p>New User<a href="login_page.php">: Login Here..!!</a> </p>
     </div>

     <div class="input-box">
      <input type="submit" name="submit" value="Login">
    </div>
  </form>
</div>
</div>
</html>
<?php } ?>