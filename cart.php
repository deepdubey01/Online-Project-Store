	<?php require('design/header.inc.php'); ?>
	<div class="content pb-0">
		<div class="orders">
			<div class="row">
				<div class="col-lg-9">
					<div class="card">
						<div class="card-body">
							<h4 class="box-title" style="font-size: 40px;"><center>Shopping Cart</center></h4>
						</div>
						<div class="card-body--">
							<div class="table-stats order-table ov-h">
								<table class="table ">
									<thead>
										<tr>
											<th class="id">Serial</th>
											<th>product id</th>
											<th>Product Name</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$_SESSION['user_data'];
										if(isset($_SESSION['user_login']) && $_SESSION['user_login']!=''){

										}else{
											echo "<script>
											window.location.href='login/login_page.php';
											</script>";  
										}

										if (isset($_SESSION['cart'])) {
											foreach ($_SESSION['cart'] as $key => $value) 
											{
												$no=$key+1;
												echo"<tr>
												<td>$no</td>
												<td>$value[product_id]</td>
												<td>$value[product_name]</td>
												<td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>

												<td>
												<form action='managecart.php' method='POST'>

												<input class='text-center iquantity' name='update_quantity' onchange='this.form.submit();' type='number' value='$value[quantity]' min='1' max='20' style='width: 40px;'>

												<input type='hidden' name='product_name' value='$value[product_name]'>
												<input type='hidden' name='product_id' value='$value[product_id]'>
												</form>
												</td>
												<td class='itotal'></td>
												<td>
												<form action='managecart.php' method='POST'>
												<button name='remove_item' class='badge badge-pending'>Remove</button>
												<input type='hidden' name='product_name' value='$value[product_name]'>
												</form>
												</td>
												</tr>
												";
											}
										} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="border bg-light rounded p-4">
						<h4>Total Amount:</h4>
						<h5 class="text-right" id="gtotal"></h5>
						<br>

						<div class="form-check"> 
							<?php 

							if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
							{

								?>
								<form action="purchase.php" method="post">
									<div class="form-group">
										<label>Full Name</label>
										<input type="text" name="name" class="form-control" required>
									</div>

									<div class="form-group">
										<label>Phone Number</label>
										<input type="number" name="phone_no" class="form-control" required>
									</div>

									<div class="form-group">
										<label>Address</label>
										<input type="text" name="address" class="form-control" required>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
										<label class="form-check-label" for="flexRadioDefault2">
											Cash On Delivery
										</label>
									</div>
									<br>
									<button class="btn btn-primary btn-block" name="checkout">CheckOut</button>
								</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<script>
				var gt=0;
				var iprice=document.getElementsByClassName('iprice');
				var iquantity=document.getElementsByClassName('iquantity');
				var itotal=document.getElementsByClassName('itotal');
				var gtotal=document.getElementById('gtotal');
				function subTotal()
				{
					for(i=0;i<iprice.length;i++)
					{
						itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
						gt=gt+(iprice[i].value)*(iquantity[i].value);
					}
					gtotal.innerText=gt;
				}

				subTotal();
			</script>

			<?php require('design/footer.inc.php') ?>
		</body>
		</html>
