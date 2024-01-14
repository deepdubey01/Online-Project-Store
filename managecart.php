<?php
require('login/db.php');
if(isset($_SESSION['user_login']) && $_SESSION['user_login']!=''){

}else{
	echo "<script>
	window.location.href='login/login_page.php';
	</script>";  
}

if($_SERVER["REQUEST_METHOD"]=="POST") 
{
	if (isset($_POST['addcart'])) 
	{
		if (isset($_SESSION['cart'])) 
		{
			$myproduct=array_column($_SESSION['cart'],'product_name');
			
			if(in_array($_POST['product_name'],$myproduct)) 
			{
				echo"<script>
				alert('Item Already Exists..!!');
				window.location.href='home.php';
				</script>";
			}
			else{
				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('product_id'=>$_POST['product_id'],'product_name'=>$_POST['product_name'],'price'=>$_POST['price'],'quantity'=>1);
				echo"<script>
				alert('Item Added..!!');
				window.location.href='cart.php';
				</script>";

			}

		}
		else
		{
			$_SESSION['cart'][0]=array('product_id'=>$_POST['product_id'],'product_name'=>$_POST['product_name'],'price'=>$_POST['price'],'quantity'=>1);
			echo"<script>
			alert('Item Added..!!');
			window.location.href='cart.php';
			</script>";
			
		}
	}

	if(isset($_POST['remove_item'])) 
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if ($value['product_name']==$_POST['product_name']) 
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo"<script>
				alert('Item Removed..!!');
				window.location.href='cart.php';
				</script>";
			}
		}	
	}

	if (isset($_POST['update_quantity'])) 
	{
		foreach ($_SESSION['cart'] as $key => $value) 
		{
			if ($value['product_name']==$_POST['product_name']) 
			{	
				$_SESSION['cart'][$key]['quantity']=$_POST['update_quantity'];
				echo"<script>
				window.location.href='cart.php';
				</script>";
			
		}		
	}

}


}

?>