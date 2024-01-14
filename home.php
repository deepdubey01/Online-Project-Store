<?php
require('design/header.inc.php');
if(isset($_SESSION['user_login']) && $_SESSION['user_login']!=''){

}else{
  echo "<script>
  window.location.href='login/login_page.php';
  </script>";  
}
?>

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

<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=22" style="color: black;">Skin Care</a>
</div>
<hr>

<?php
$get_product=get_product($conn,9,22);
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

<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;">Grocery
</div>
<hr>

<?php
$get_product=get_product($conn,9,1);
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
<?php }  ?>


<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;">Grocery
</div>
<hr>

<?php
$get_product=get_product($conn,9,3);
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
      ?> </div>
    </form>
  </div>

<?php }  ?>

<?php
$get_product=get_product($conn,9,2);
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

<?php }  ?>


<div class="message-box" style="text-align: center; font-size: 27px;margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=35" style="color: black;">Biscuits</a>
</div>
<hr>
<?php
$get_product=get_product($conn,'',35,'');
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



<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=33" style="color: black;">Sanitery Pads</a>
</div>
<hr>
</div>



<?php
$get_product=get_product($conn,'',33,'');
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
</div>

<?php
$get_product=get_product($conn,'',6,'');
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
<?php }  ?>


<?php
$get_product=get_product($conn,'',2,''); ?>
<div class="message-box" style="text-align: center; font-size: 27px; margin-top: 35px; margin-bottom: -10px; font-weight: 500;"><a href="categories.php?id=2" style="color: black;">Atta</a>
</div>
<hr>

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

<?php require('design/footer.inc.php');?>