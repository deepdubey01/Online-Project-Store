<?php 
require('../login/function.php');  
require('design/header.inc.php');?>
<!doctype html>
   <html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Online Grocery Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>


     <?php
     $fname='';
     $lname='';
     $username='';
     $password='';
     $date='';
     $msg='';
     
     if (isset($_GET['id']) && $_GET['id']!='') {
       
       $id=get_safe_value($conn,$_GET['id']);
       $res=mysqli_query($conn,"select * from products where id='$id'");
       $check=mysqli_num_rows($res);
       if($check>0){
          $row=mysqli_fetch_assoc($res);
          $fname=$row['fname'];
          $lname=$row['lname'];
          $username=$row['username'];
          $password=$row['password'];
          $date=$row['date'];


       }else{
          header('location:users.php');
          die();
       }
    }
    if (isset($_POST['submit'])) 
    {
      $fname=get_safe_value($conn,$_POST['fname']);
      $lname=get_safe_value($conn,$_POST['lname']);
      $username=get_safe_value($conn,$_POST['username']);
      $password=get_safe_value($conn,$_POST['password']);
      $date=get_safe_value($conn,$_POST['date']);
      

      $res=mysqli_query($conn,"select * from users where fname='$fname'");
      $check=mysqli_num_rows($res);
      if($check>0){
         if(isset($_GET['id']) && $_GET['id']!='') {
            $getData=mysqli_fetch_assoc($res); 
            if($id==$getData['id']){

            }else{
               $msg="user details already exist..!!";
            }

         }else{
            $msg="user already exist..!!";
         }
      }

      if ($msg=='') {
         if(isset($_GET['id']) && $_GET['id']!='') {
            
            mysqli_query($conn,"update users set fname='$fname',lname='$lname',username='$username',password='$password',date='$date' where id='$id'");
         }else{
          mysqli_query($conn,"insert into users(fname,lname,username,password,status,date) values('$fname','$lname','$username','$password','$date','1')");
       }
       header('location: users.php');
       die();
    }
 }
 
 ?>



 
 <div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <form method="post" enctype="multipart/form-data">
               <div class="card">
                  <div class="card-header"><strong>User</strong><small> Form</small></div>
                  <div class="card-body card-block">
                    


                    <div class="form-group">
                     <label for="fname" class=" form-control-label">First Name</label>
                     <input type="text" name="fname" placeholder="Enter First Name" class="form-control" required value="<?php echo  $fname ?>">
                  </div> 


                  <div class="form-group">
                     <label for="lname" class=" form-control-label">Last Name</label>
                     <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" <?php echo $lname ?>>
                  </div>
                  
                  <div class="form-group">
                     <label for="username" class=" form-control-label">Username</label>
                     <input type="username" name="username" placeholder="Enter Username" class="form-control" required value="<?php echo  $username ?>">
                  </div>

                  <div class="form-group">
                     <label for="password" class=" form-control-label">Passwprd</label>
                     <input type="text" name="password" placeholder="Enter Password" class="form-control" required value="<?php echo  $password ?>">
                  </div>

                  <div class="form-group">
                     <label for="date" class=" form-control-label">Date</label>
                     <input type="text" name="date" placeholder="Enter Date" class="form-control" required value="<?php echo  $date ?>">
                  </div>

               </div>
               <button id="payment-button"  name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                  <span id="payment-button-amount">Submit</span>
               </button>
               <div class="field_error"><?php echo $msg?></div>
            </div>
         </div>
      </div>
   </form>
</div>
</div>
</div>









<?php
require('design/footer.inc.php');
?>
<script src="../assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="../assets/js/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins.js" type="text/javascript"></script>
<script src="../assets/js/main.js" type="text/javascript"></script>
</body>
</html>