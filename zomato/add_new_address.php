<?php 
include 'includes/dbconn.php';
session_start();
$order_id=$_GET['order_id'];
$user_id=$_SESSION['user_id'];
$user_address=$_POST['user_address'];
$user_phone=$_POST['user_phone'];
$user_pin=$_POST['user_pin'];
$query="INSERT INTO address (address_id,user_id,address_details,phone_no,pincode) VALUES (NULL,$user_id,'$user_address','$user_phone','$user_pin')";
$result=mysqli_query($conn,$query);

if($result){
	header('Location:show_address.php?order_id'.$order_id);

}else{
	echo'not working'; 
}
?>