<?php 
include 'includes/dbconn.php';
session_start();
$user_id=$_SESSION['user_id'];
$order_id=$_POST['order_id'];
$payment_method=$_POST['x'];
echo $payment_method;

$query="UPDATE orders SET status=1,payment_method='$payment_method' WHERE order_id LIKE '$order_id' ";
if(mysqli_query($conn,$query)){
	$query1="DELETE FROM cart WHERE user_id LIKE $user_id";
	if(mysqli_query($conn,$query1)){
		header('Location:success_payment.php');

	}else{
		echo 'could not clear cart';
	}
	
}else{
	header('Location:show_payment_options.php?order_id='.$order_id);
}


?>