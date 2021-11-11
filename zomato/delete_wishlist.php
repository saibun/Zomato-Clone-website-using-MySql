<?php 
session_start();
include 'includes/dbconn.php';
$user_id=$_SESSION['user_id'];
$product_id=$_GET['product_id'];
$query="DELETE FROM wishlist WHERE user_id LIKE $user_id AND product_id LIKE $product_id";
if(mysqli_query($conn,$query)){
	echo'<button class="btn btn-outline-danger  btn-lg ml-3" style="color: orange;font-size: 25px;" id="wishlist_btn">Wishlist</button>';
} 



?>