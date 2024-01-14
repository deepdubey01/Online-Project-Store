<?php
require('login/db.php');
require('function.php');
$categories_res=mysqli_query($conn,"select * from categories where status=1");
$categories_arr=array();
while ($row=mysqli_fetch_assoc($categories_res)) {
  $categories_arr[]=$row;
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>OG_SMart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style_page.css">
  <link rel="stylesheet" href="assets/style2_admin.css">
  <link rel="stylesheet" href="assets/footer.css">
  <link rel="stylesheet" href="assets/product_design.css">
  <link rel="stylesheet" type="text/css" href="assets/cart.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script>a
  $(document).ready(function(){
    $(".wish-icon i").click(function(){
      $(this).toggleClass("fa-heart fa-heart-o");
    });
  }); 
</script>

</head>
<body>
  <!---Bannner-->
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="header_logo">
            <a href="home.php"><span> <i class='bi bi-cart4' style="color: black; text-shadow: none;"></i>OG_S</span>MART.</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header_menu">
            <ul>
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>              
              <li><a href="contactus.php">Contact</a></li>
              <li class="dropdown">
                <div class="dropdown-title">Categories</div>
                <div class="dropdown-content">
                  <a href="#">Select Category<?php 
                  foreach($categories_arr as $list) {
                    ?>
                    <a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
                    <?php
                  } ?>
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header_right">
          <div class="header_right_auth" style="display: flex;">
            <a href="cart.php">
              <button style="font-size:23px; border-radius: 5px; background-color: orange; color: black; margin-right: 10px;"><i class="fa fa-shopping-cart fa-lg"></i>Cart </button></a>
              <li class="dropdown">
                <button class="dropdown-title" style="background-color: indianred; height: 39px; border-radius: 5px;">Account</button>
                <ul class="dropdown-content">
                  <a href="login/login_page.php">Login</a>
                  <a href="login/register.php">Register</a>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="banner-frame">
  <div class="slider">      
    <figure>
      <div class="slide">
        <a href="categories.php?id=22"><img src="images/banner.jpg" alt=""></a>
      </div>
      <div class="slide">
        <a href="categories.php?id=3"><img src="images/banner1.jpg" alt=""></a>
      </div>
      <div class="slide">
        <a href="categories.php?id=22"><img src="images/banner2.jpg" alt=""></a>
      </div>
      <div class="slide">
        <a href="categories.php?id=12"><img src="images/deepak1.jpg" alt=""></a>
      </div>
      <div class="slide">
        <a href="categories.php?id=40"><img src="images/deepak1.png" alt=""></a>
      </div>
    </figure>
  </div>
</div>

<!-- Product Details-->

<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;">New Arrival</div>
<hr>

<?php
$get_product=get_product($conn,6);
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
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
      </div>
    </form>
</div>

<?php }  ?>



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



<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=22" style="color: black;">Skin Care</a>
</div>
<hr>
<?php
$get_product=get_product($conn,3,22,'');
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
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
      </div>
    </form>
</div>

<?php }  ?>


<div class="card-group">
  <div class="card">
    <img src="images/bank_offer.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="images/bank_offer_1.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="images/bank_offer_1.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <img src="images/bank_offer_2.jpg" class="card-img-top" alt="...">
  </div>
</div>


<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=8" style="color: black;">Coffee</a>
</div>
<hr>
<?php
$get_product=get_product($conn,3,9,'');
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
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
      </div>
    </form>
</div>

<?php }  ?>


<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=10" style="color: black;">Tea</a>
</div>
<hr>
<?php
$get_product=get_product($conn,3,10,'');
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
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
      </div>
    </form>
</div>

<?php }  ?>


<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=6" style="color: black;">Ghee</a>
</div>
<hr>
<?php
$get_product=get_product($conn,3,6,'');
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
        <div class="product-submit-btn">
          <input type="submit" name="addcart"  value="Add TO Cart">
        </div>
      </div>
    </form>
</div>

<?php }  ?>


<section class="shop-method-area spad">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="single-method mb-40">
          <i class="fa fa-shopping-bag"></i>
          <h6>Free Shipping Method</h6>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="single-method mb-40">
          <i class="fa fa-lock"></i>
          <h6>Secure Payment System</h6>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="single-method mb-40">
          <i class="fa fa-briefcase"></i>
          <h6>Online Support 24/7</h6>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php  
require('design/footer.inc.php');
?>

