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

      <div class="content pb-0">
         <div class="orders">
            <div class="row">
               <div class="col-xl-12">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="box-title">Order Manage </h4>
                     </div>
                     <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                           <table class="table ">
                              <thead>
                                 <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Payment Mode</th>
                                    <th>Order</th>
                                 </tr>
                              </thead>

                              <tbody>
                                <?php  
                                $query="SELECT * FROM `manage_order`";
                                $user_result=mysqli_query($conn,$query);
                                while($row=mysqli_fetch_assoc($user_result))
                                {
                                 echo"
                                 <tr>
                                 <td>$row[order_id]</td>
                                 <td>$row[name]</td>
                                 <td>$row[phone_no]</td>
                                 <td>$row[address]</td>
                                 <td>$row[pay_mode]</td>
                                 <td>
                                 <table class='table text-center table-dark'>
                                 <thead>
                                 <tr>
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <th>Quantity</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 ";

                                 $order_query="SELECT * FROM `users_order` WHERE order_id=$row[order_id]";
                                 $order_result=mysqli_query($conn,$order_query);
                                 while($order_fetch=mysqli_fetch_assoc($order_result))
                                 {
                                    echo
                                    "
                                    <tr>
                                    <td>$order_fetch[product_name]</td>
                                    <td>$order_fetch[price]</td>
                                    <td>$order_fetch[quantity]</td>
                                    </tr>
                                    ";
                                 }
                                 echo "
                                 </tbody>
                                 </table>
                                 </td>
                                 </tr> 
                                 ";
                              }
                              ?>

                           </tbody>

                        </table>
                     </div>
                  </div>
               </div>
            </div>
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
   </html>