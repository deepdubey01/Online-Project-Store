<?php
require('login/db.php');
require('function.php');
$categories_res=mysqli_query($conn,"select * from categories where status=1");
$categories_arr=array();
while ($row=mysqli_fetch_assoc($categories_res)) {
	$categories_arr[]=$row;
}
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
	

</head>
<body>
	
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<div class="header_logo">
						<a href="home.php"><span><i class="bi bi-cart4" style="color: black; text-shadow: none;"></i>OG_S</span>MART.</a>
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
									<li> <?php echo $_SESSION['user_data'] ?> </li>
									<a href="login/logout.php">Logout</a>
								</ul>
							</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

</body>
</html>