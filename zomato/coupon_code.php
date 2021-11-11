<?php 
include 'includes/dbconn.php';
$user_coupon_entry=$_POST['user_coupon_entry'];
$query="SELECT * FROM discount WHERE coupon_name LIKE '$user_coupon_entry'";
$result=mysqli_query($conn,$query);
$num_row=mysqli_num_rows($result);
if($num_row==0){
	echo 'Invalid';
}else{
	$result=mysqli_fetch_assoc($result);
	if($result['coupon_status']=='active'){
		echo $result['coupon_value'];
	}else{
		echo 'Expaired';
	}
}



?>