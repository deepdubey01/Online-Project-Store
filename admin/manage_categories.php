<?php 
require('design/header.inc.php');
require('../login/function.php');  
?>
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
     $categories='';
     $msg='';
     if(isset($_GET['id']) && $_GET['id']!='') {
       $id=get_safe_value($conn,$_GET['id']);
       $res=mysqli_query($conn,"select * from categories where id='$id'");
       $check=mysqli_num_rows($res);
       if($check>0){
          $row=mysqli_fetch_assoc($res);
          $categories=$row['categories']; 
       }else{
          header('location:admin_page.php');
          die();
       }
    }
    if (isset($_POST['submit'])) 
    {
      $categories=get_safe_value($conn,$_POST['categories']);

      $res=mysqli_query($conn,"select * from categories where categories='$categories'");
      $check=mysqli_num_rows($res);
      if($check>0){
         if(isset($_GET['id']) && $_GET['id']!='') {
            $getData=mysqli_fetch_assoc($res); 
            if($id==$getData['id']){

            }else{
               $msg="This categories already exist..!!";
            }

         }else{
            $msg="This categories already exist..!!";
         }
      }

      if ($msg=='') {
         if(isset($_GET['id']) && $_GET['id']!='') {
            mysqli_query($conn,"update categories set categories='$categories' where id='$id'");
         }else{
            mysqli_query($conn,"insert into categories(categories,status) values('$categories','1')");
         }
         header('location: categories.php');
         die();
      }

   }  
   ?>


   <div class="content pb-0">
      <div class="animated fadeIn">
         <div class="row">
            <div class="col-lg-12">
               <form method="post">
                  <div class="card">
                     <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                     <div class="card-body card-block">
                        <div class="form-group">
                           <label for="categories" class=" form-control-label">Category</label>
                           <input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="<?php echo  $categories ?>">
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