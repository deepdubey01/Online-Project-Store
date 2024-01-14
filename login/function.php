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
   function get_safe_value($conn,$str)
   {
   	if($str!='') {
   		$str=trim($str);
   		return mysqli_real_escape_string($conn,$str);
   	}
   }
   ?>


