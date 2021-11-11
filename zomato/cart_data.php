<?php 
session_start();
include 'includes/dbconn.php';

$user_id=$_SESSION['user_id'];
$product_id=$_POST['product_id'];

$query="INSERT INTO cart (cart_id,user_id,product_id,quantity) VALUES (NULL,$user_id,$product_id,1)";
$result=mysqli_query($conn,$query);
if($result){
	echo 'success';
}else{
	echo 'failed';
}
?>