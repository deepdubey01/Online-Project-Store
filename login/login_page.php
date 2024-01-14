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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="select * from users where email='$email' and password='$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count>0) {
     $_SESSION['user_data'] =$email;   
     $_SESSION['user_login']='yes';
     echo"<script>
     alert('Login Successful..!!');
     window.location.href='../home.php';
     exit();
     </script>";
     
   }else
   {
     echo"<script>
     alert('Please Enter Correct Details..!!');
     window.location.href='login_page.php';
     </script>";
   }
 }

 ?>




 <div class="container">
   <div class="content">
     <div class="image-box">
       <img src="../images/ogs_mart.png" alt="">
     </div>
     <form action="" method="post">
      <div class="topic">Login Here</div>
      <div class="input-box">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" required>
        <label>Enter your Password</label>
      </div>
      <div class="container_signin">
        <p>New User<a href="register.php">: Sign Up</a> </p>
      </div>

      <div class="input-box">
        <input type="submit" name="submit" value="Login">
      </div>
    </form>
  </div>
</div>

</html>





