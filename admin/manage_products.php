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
    $categories_id='';
    $product_name='';
    $mrp='';
    $price='';
    $qty='';
    $weight='';
    $description='';
    $short_desc='';
    $image='';
    $categories='';
    $msg='';
    $image_required='required';
    if (isset($_GET['id']) && $_GET['id']!='') {
      $image_required='';
      $id=get_safe_value($conn,$_GET['id']);
      $res=mysqli_query($conn,"select * from products where id='$id'");
      $check=mysqli_num_rows($res);
      if($check>0){
        $row=mysqli_fetch_assoc($res);
        $categories_id=$row['categories_id'];
        $product_name=$row['product_name'];
        $image=$row['image'];
        $qty=$row['qty'];
        $qty=$row['weight'];
        $mrp=$row['mrp'];
        $price=$row['price'];
        $description=$row['description'];
        $qty=$row['short_desc'];

     }else{
        header('location:product.php');
        die();
     }
  }
  if(isset($_POST['submit'])) 
  {
   $categories_id=get_safe_value($conn,$_POST['categories_id']);
   $product_name=get_safe_value($conn,$_POST['product_name']);
   $image=get_safe_value($conn,$_POST['image']);
   $qty=get_safe_value($conn,$_POST['qty']);
   $weight=get_safe_value($conn,$_POST['weight']);                   
   $mrp=get_safe_value($conn,$_POST['mrp']);
   $price=get_safe_value($conn,$_POST['price']);
   $description=get_safe_value($conn,$_POST['description']);
   $short_desc=get_safe_value($conn,$_POST['short_desc']);                 


   $res=mysqli_query($conn,"select * from products where product_name='$product_name'");
   $check=mysqli_num_rows($res);
   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!='') {
         $getData=mysqli_fetch_assoc($res); 
         if($id==$getData['id']){

         }else{
            $msg="product categories already exist..!!";
         }

      }else{
         $msg="product already exist..!!";
      }
   }

   if ($msg=='') {
      if(isset($_GET['id']) && $_GET['id']!='') {
         if ($_FILES['image']['name']!='') {
            $image=rand(111,999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
            $update_sql="update products set categories_id='$categories_id',product_name='$product_name',qty='$qty',weight='$weight',mrp='$mrp',price='$price',description='$description',short_desc='$short_desc',image='$image' where id='$id'";
         }else{
          $update_sql="update products set categories_id='$categories_id',product_name='$product_name',qty='$qty',weight='$weight',mrp='$mrp',price='$price',description='$description',short_desc='$short_desc' where id='$id'";
       }
       mysqli_query($conn,$update_sql);
    }else{

      $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);


      mysqli_query($conn,"insert into products(categories_id,product_name,image,qty,weight,mrp,price,description,short_desc,status) values('$categories_id','$product_name','$image','$qty','$weight','$mrp','$price','$description','$short_desc','1')");
   }
   header('location: product.php');
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
                  <div class="card-header"><strong>Product</strong><small> Form</small></div>
                  <div class="card-body card-block">
                     <div class="form-group">


                        <label for="categories" class=" form-control-label">Categories</label>
                        <select class=" form-control" name="categories_id">
                           <option>Select Category</option>
                           <?php
                           $res=mysqli_query($conn,"select id,categories from categories"); 
                           while ($row=mysqli_fetch_assoc($res)) {
                              echo "<option value=".$row['id'].">".$row['categories']."</option>";
                           }

                           ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="product_name" class=" form-control-label">Product</label>
                        <input type="text" name="product_name" placeholder="Enter Product Name" class="form-control" required value="<?php echo  $product_name ?>">
                     </div> 
                     <div class="form-group">
                        <label for="image" class=" form-control-label">Image</label>
                        <input type="file" name="image" class="form-control" <?php echo $image_required ?>>
                     </div>
                     <div class="form-group">
                        <label for="qty" class=" form-control-label">Quantity</label>
                        <input type="text" name="qty" placeholder="Enter Product QTY" class="form-control" required value="<?php echo  $qty ?>">
                     </div>
                     <div class="form-group">
                        <label for="weight" class=" form-control-label">Weight</label>
                        <input type="text" name="weight" placeholder="Enter Product Weight" class="form-control" required value="<?php echo  $weight ?>">
                     </div>
                     <div class="form-group">
                        <label for="mrp" class=" form-control-label">MRP</label>
                        <input type="text" name="mrp" placeholder="Enter Product MRP" class="form-control" required value="<?php echo  $mrp ?>">
                     </div>
                     <div class="form-group">
                        <label for="price" class=" form-control-label">Price</label>
                        <input type="text" name="price" placeholder="Enter Selling Price" class="form-control" required value="<?php echo  $price ?>">
                     </div>
                     <div class="form-group">
                        <label for="description" class=" form-control-label">Description</label>
                        <textarea name="description" placeholder="Enter Decription" class="form-control" required value="<?php echo $description ?>"></textarea> 
                     </div>
                     <div class="form-group">
                        <label for="short_desc" class=" form-control-label">Short Desciption</label>
                        <textarea name="short_desc" placeholder="Enter Short_desc" class="form-control" required value="<?php echo $short_desc ?>"></textarea> 
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