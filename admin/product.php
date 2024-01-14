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

     if (isset($_GET['type']) && $_GET['type']!='') { 
        $type=get_safe_value($conn,$_GET['type']);
        
        if ($type=='status') {
         $operation=get_safe_value($conn,$_GET['operation']);
         $id=get_safe_value($conn,$_GET['id']);
         if ($operation=='active') {
            $status='1';
         }else{
            $status='0';
         }

         $update_status_sql="update products set status='$status' where id='$id'";
         mysqli_query($conn,$update_status_sql);
      }

      if ($type=='delete') {
         $id=get_safe_value($conn,$_GET['id']);
         $delete_sql="delete from products where id='$id'";
         mysqli_query($conn,$delete_sql);
      }
   }

   $sql="select products.*,categories.categories from products,categories where products.categories_id=categories.id order by products.id desc";
   $res=mysqli_query($conn,$sql);
   ?>



   



   <div class="content pb-0">
      <div class="orders">
         <div class="row">
            <div class="col-xl-12">
               <div class="card">
                  <div class="card-body">
                     <h4 class="box-title">Product_Page</h4>
                     <h4 class="box-link"><a href="manage_products.php">ADD PRODUCTS</a></h4>
                  </div>
                  <div class="card-body--">
                     <div class="table-stats order-table ov-h">
                        <table class="table ">
                           <thead>
                            <tr>
                              <th class="id">Serial</th>
                              <th>ID</th>
                              <th>Categories</th>
                              <th>Product Name</th>
                              <th>Image</th>
                              <th>Qty</th>
                              <th>Weight</th>
                              <th>MRP</th>
                              <th>Price</th>
                              <th>Status</th>
                              
                           </tr>
                        </thead>

                        <tbody>
                           <?php  
                           $i=1;
                           while ($row=mysqli_fetch_assoc($res)) {
                              ?>
                              <tr>
                                 <td class="id"><?php echo $i++?></td>
                                 <td><?php echo $row['id'];?></td>
                                 <td><?php echo $row['categories'];?></td>
                                 <td><?php echo $row['product_name'];?></td>
                                 <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"/></td>
                                 <td><?php echo $row['qty'];?></td>
                                 <td><?php echo $row['weight'];?></td>                                       
                                 <td><?php echo $row['mrp'];?></td>
                                 <td><?php echo $row['price'];?></td>
                                 <td>
                                    <?php if($row['status']==1) 
                                    {
                                       echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'><b>Active</b></a></span>&nbsp;";
                                    }
                                    else{
                                       echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";     
                                    } 
                                    echo "&nbsp;<span class='badge badge-edit'><a href='manage_products.php?id=".$row['id']."'><b>Edit</b></a></span>&nbsp;";

                                    echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'><b>Delete</b></a></span>";
                                    ?>
                                 </td>
                              </tr>
                           <?php } ?>
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
</body>
</html>