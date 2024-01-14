<?php 
require('design/header.inc.php');
if(isset($_SESSION['user_login']) && $_SESSION['user_login']!=''){

}else{
  echo "<script>
    window.location.href='login/login_page.php';
  </script>";  
}
 
$cat_id=mysqli_real_escape_string($conn,$_GET['id']);
if($cat_id>0) { 
$get_product=get_product($conn,'',$cat_id);
 }else{
?>
 <script>
 window.location.href='home.php';
 </script>
 <?php 
 }
 ?>

<!-- Categories Details-->

<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;">Your Choice</div>
<hr>

<?php if(count($get_product)>0) { ?>
<?php
  foreach($get_product as $list) {
  ?>
  
 <div class="wrapper">
    <form method="post" action="managecart.php" class="set_cart_page">
      <div class="product-img">
        <a href="product.php?id=<?php echo $list['id']?>">
          <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']  ?>" height="220" width="150">
        </a>
      </div>
      <div class="product-info">
        <div class="product-text">
          <h1><?php echo $list['product_name']  ?></h1>
        </div>
        <div class="product-text-brand">
        <h1><span>Brand: </span> <?php echo $list['short_desc']  ?></h1>
        </div>
        <div class="">
          Market Price: <?php echo $list['mrp']  ?>
        </div>
        <div class="">
          OGS Price: <?php echo $list['price']  ?>
        </div>
        <input type="hidden" name="product_name" value="<?php echo $list['product_name']  ?>">
        <input type="hidden" name="product_id" value="<?php echo $list['id']  ?>">
        <input type="hidden" name="price" value="<?php echo $list['price']  ?>">
        <input type="hidden" name="quantity" value="quantity">
         <?php 
              if($list['qty']>0) { ?>
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
        <?php }
          else{
                echo "Out of Stock";
              }
              ?> 
      </div>
    </form>
</div>

<?php }

}
 ?>




<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;">Special Categories
</div>
<hr>


<div class="middle_page_cards" style="display: contents;">
  <div class="card" style="width: 18rem;display: inline-block;margin-left: 185px;">
    <a href="categories.php?id=22"><img class="card-img-top" src="images/skin_banner.jpg" style="height: 220px;" alt="Card image cap">
    <div class="card-body">
    <p class="card-text" style="font-size: 20px; text-align: center; font-weight: 500; font-family: emoji;">Skin Care</p>
    </div>
    </a>
  </div>
  <div class="card" style="width: 18rem;display: inline-block;margin-left: 80px;">
    <a href="categories.php?id=40"><img class="card-img-top" src="images/oil_banner.jpg" style="height: 220px;" alt="Card image cap">
    <div class="card-body">
    <p class="card-text" style="font-size: 20px; text-align: center; font-weight: 500; font-family: emoji;">Hair Oils</p>
    </div>
    </a>
  </div>
  <div class="card" style="width: 18rem;display: inline-block;margin-left: 80px;">
    <a href="categories.php?id=23"><img class="card-img-top" src="images/beauty_banner.jpg" style="height: 220px;" alt="Card image cap">
    <div class="card-body">
    <p class="card-text" style="font-size: 20px; text-align: center; font-weight: 500; font-family: emoji;">Beauty Products</p>
    </div>
  </a>
  </div>
</div>





<!-- Categories Details End-->
<!-- Footer -->
<?php  
    require('design/footer.inc.php');
?>

