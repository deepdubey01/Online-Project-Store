<?php
function pr($arr) {
echo '<pre>'; 
print($arr);
}
function prx() {
echo '<pre>';
 print(prx()); 
	die();
}


	
function get_product($conn,$limit='',$cat_id='',$product_id='') {
	$sql="select * from products where status=1";
	
	if($cat_id!=''){
		$sql.=" and categories_id=$cat_id";
	}
	
	if($product_id!=''){
		$sql.=" and id=$product_id";
	}
	$sql.=" order by id desc";
	
	if($limit!=''){
		$sql.=" limit $limit ";
	}

	$res=mysqli_query($conn,$sql);
	$data=array(); 
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	} 
	return $data;
}  
?>




