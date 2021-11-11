<?php 
include 'includes/dbconn.php';
session_start();
$order_id=uniqid();
$user_id=$_SESSION['user_id'];
$date=date("y/m/d");
$pay_ammount=$_POST['pay_ammount'];
$query="INSERT INTO  orders (order_id,user_id,ammount,order_date,address,status,payment_method) VALUES ('$order_id',$user_id,$pay_ammount,'$date',0,0,'pending')";
if(mysqli_query($conn,$query)){
	$query1="SELECT * FROM cart WHERE user_id=$user_id";
	$result1=mysqli_query($conn,$query1);
	while($row=mysqli_fetch_assoc($result1)){
		$product_id=$row['product_id'];
		$quantity=$row['quantity'];
		$query2="INSERT INTO  orders_details (id,order_id,product_id,quantity) VALUES (Null,'$order_id',$product_id,$quantity)";
		mysqli_query($conn,$query2);
	}
	echo $order_id;
}else{
	echo '0';
}



?>