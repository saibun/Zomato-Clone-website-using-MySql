<?php
session_start();
// connect with database
include 'includes/dbconn.php';

//retrieve data
$email=$_POST['user_email'];
$password=$_POST['user_password'];

//search query 
$query="SELECT * FROM user_entries WHERE email LIKE '$email'AND password LIKE '$password'";
//execute query
$result=mysqli_query($conn,$query);
$num_row=mysqli_num_rows($result);
//to see execute query
$result=mysqli_fetch_assoc($result);



//num_row is for to check that pariculart row present or not in database
//comapare
if($num_row==1){
	$_SESSION['user_id']=$result['user_id'];
	$_SESSION['name']=$result['name'];
	header('Location:index.php');
}else{
	header('Location:home_page.php');

}





?>