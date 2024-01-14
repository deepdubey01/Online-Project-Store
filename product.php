<?php 
require('design/header.inc.php');
$product_id=mysqli_real_escape_string($conn,$_GET['id']);
if ($product_id>0) {
  $get_product=get_product($conn,'','',$product_id);
}else{ echo 
  "<script>
    window.location.href='home.php';
  </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OG_SMart</title>
<style>
main{
  max-width: 720px;
  margin: 5% auto;
}

.card{
  box-shadow: 0 6px 6px rgba(#000, 0.3);
  transition: 200ms;
  background: #fff;
}
  
  .card .card__title{
    display: flex;
    border: 2px solid whitesmoke;
    align-items: center;
    padding: 30px 40px;
    }

    .card h3{
      flex: 0 1 200px;
      text-align: right;
      margin: 0;
      color: #252525;
      font-family: sans-serif;
      font-weight: 600;
      font-size: 20px;
      text-transform: uppercase;
    }
    
  .card__body{
    padding: 0 40px;
    display: flex;
    flex-flow: row no-wrap;
    margin-bottom: 25px;
    }
    .card__body .half{
      box-sizing: border-box;
      padding: 0 15px;
      margin-top: 15px;
      flex: 1 0 50%;
    }
    
    .card__body .featured_text{

    }
      
     .featured_text h1{
        margin: 0;
        padding: 0;
        font-weight: 800;
        font-family: "Montserrat", sans-serif;
        font-size: 25px;
        line-height: 30px;
        color: #181e28;
      }
      
      .featured_text .p{
        margin: 0;
        padding: 0;
        }

        .featured_text .sub{
          font-family: "Montserrat", sans-serif;
          font-size: 17px;
          text-transform: uppercase;
          color: #686e77;
          font-weight: 300;
          margin-bottom: 5px;
        }
        
        .featured_text .price{
          font-family: "Fjalla One", sans-serif;
          color: #252525;
          font-size: 20px;
          margin-top: 20px;
          margin-bottom: -10px;
        }
      
    
    .image{
      border: 2px solid;
      padding-top: 15px;
      width: 100%;
      }
     .image img{
        display: block;
        max-width: 100%;
        height: auto;
      }
    

    
    .description{
      margin-bottom: 25px;
      }
      .description p{
        margin: 0;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        line-height: 27px;
        font-size: 16px;
        color: #555;
      }

      .description p span{
        font-size: 24px;
        height: auto;
        font-weight: 700;
        color: orange;
      }

      .product-weight{
      margin-bottom: 25px;
      }
      .product-weight p{
        margin: 0;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        font-size: 12px;
        color: #555;
      }

      .product-weight p span{
        font-size: 17px;
        height: auto;
        font-weight: 700;
        color: orange;
      }

      .saving_price{
      margin-bottom: 0px;
      }
      .saving_price p{
        margin: 0;
        text-decoration: line-through;
        font-family: "Open Sans", sans-serif;
        font-weight: 300;
        font-size: 12px;
        color: #555;
      }
      .saving_price span{
        font-size: 17px;
        height: auto;
        font-weight: 700;
        color: orange;
      }

      .saving_price p span{
        font-size: 15px;
        height: auto;
        font-weight: 700;
        color: orange;
      }

      .checked{
        color: orange;
      }
      .stock{
        margin-bottom: -10px;
        font-size: 19px;
        font-weight: 600;
      }

     .stock span{
      font-family: "Montserrat", sans-serif;
      font-weight: 600;
      color: orange;
    }
    
      .in_stock{
        margin-bottom: -15px;
      }

      .rating{
        margin-bottom: -15px;
      }
    .action{ }
     .action button{
        cursor: pointer;
        border: 1px solid orange;
        padding: 10px 10px;
        border-radius: 200px;
        color: #fff;
        background: orange;
        font-family: "Open Sans", sans-serif;
        font-size: 16px;
        transition: 200ms;
      }    

        .action button:hover{
          background: #fff;
          color: orange;
        }
  
</style>
</head>
<body>

<?php
  if (count($get_product)>0) {
    foreach($get_product as $list)
    {


  $main_mrp=$list['mrp'];
  $main_price=$list['price'];
  $saving=$main_mrp-$main_price;
?>
  <main>
    <form method="post" action="managecart.php" class="">
    <div class="card">
      <div class="card__body">
        <div class="half">
          <div class="featured_text">
            <h1><?php echo $list['product_name'] ?></h1>
            <p class="price"><span>Rs.</span> <?php echo $list['price'] ?>/-</p>
        <input type="hidden" name="product_name" value="<?php echo $list['product_name']  ?>">
        <input type="hidden" name="product_id" value="<?php echo $list['id']  ?>">
        <input type="hidden" name="price" value="<?php echo $list['price']  ?>">
        <input type="hidden" name="quantity" value="quantity">
          </div>
          <div class="image">
            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image'] ?>" alt="">
          </div>
        </div>
        <div class="half">
          <div class="stock"><span>Brand: </span> <?php echo $list['short_desc'] ?></div>

          <div class="in_stock">
            <span class="fa fa-thumbs-o-up"></span>
              <?php 
              if($list['qty']>0) { 
                echo "In Stock";
              }else{
                echo "Out of Stock";
              }
              ?>
          </div>

          <div class="rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star">(42 Reviews)</span>
          </div>
          <div class="saving_price">
            <span>Market Price: </span><?php echo $list['mrp'] ?>
            <p><span>Save:</span><?php echo $saving ?>/-</p>
          </div>
          <div class="product-weight">
            <p><span>Weight: </span> <?php echo $list['weight'] ?></p>
          </div>

          <div class="description">
            <p><span>Weight: </span> <?php echo $list['description'] ?></p>
          </div>
          
           <?php 
              if($list['qty']>0) { ?>
          <div class="action">
          <button type="submit" name="addcart">Add to cart</button>
        </div> 
        <?php }
          else{
                echo "Out of Stock";
              }
              ?> 
        </div>
      </div>
    </div>
</form>
  </main>
</body>
</html>
<?php }
}
?>
<?php require('design/footer.inc.php'); ?>