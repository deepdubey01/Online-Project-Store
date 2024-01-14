<?php
require('../login/db.php');  	
if(isset($_SESSION['admin_login']) && $_SESSION['admin_login']!='') {

}else
{
   header('location: login_page.php');
   die();
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
   <link rel="stylesheet" href="../assets/style2_admin.css">
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

   <div class="navbar_1_2">
      <div class="nav_ul_12" >
         <ul>  
            <li><a href="admin_page.php">Admin_page</a></li>
            <li><a href="users.php">Users_page</a></li>
            <li><a href="user_order.php">Order Page</a></li>
            <li><a href="categories.php">Manage Categories</a></li>
            <li><a href="product.php">Manage Products</a></li>   
            <li><a href="contact_us.php">Contact_Us</a></li>   
            <li><a href="manage_order.php">Manage Order</a></li>
         </ul>
      </div> 
   </div>
</body>
</html>

