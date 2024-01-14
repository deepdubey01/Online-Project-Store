<?php
require('login/db.php');
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
	if (isset($_POST['checkout'])) 
	{
		$query="INSERT INTO `manage_order`(`name`, `phone_no`, `address`, `pay_mode`) VALUES ('$_POST[name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
		$sql = mysqli_query($conn,$query);
		if($sql)
		{	
			$order_id=mysqli_insert_id($conn);
			$query1="INSERT INTO `users_order`(`order_id`, `product_id`, `product_name`, `price`, `quantity`) VALUES (?,?,?,?,?)";
			$stmt=mysqli_prepare($conn,$query1);

			if ($stmt)
			{	

				mysqli_stmt_bind_param($stmt,"iisii",$order_id,$product_id,$product_name,$price,$quantity);
				foreach ($_SESSION['cart'] as $key => $value) 
				{	
					$product_id=$value['product_id'];
					$product_name=$value['product_name'];
					$price=$value['price'];
					$quantity=$value['quantity'];
					mysqli_stmt_execute($stmt);
					mysqli_query($conn,"update products set qty=qty-$quantity where id=$product_id");
					}
				}
				unset($_SESSION['cart']);
				echo"<script>
				alert('Order Placed..!!');
				window.location.href='cart.php';
				</script>";
			}
			else
			{
				echo"<script>
				alert('SQL Error');
				window.location.href='cart.php';
				</script>";
			}
			
		}else
		{
			echo"<script>
			alert('SQL Error');
			window.location.href='cart.php';
			</script>";
		}
	}

?>