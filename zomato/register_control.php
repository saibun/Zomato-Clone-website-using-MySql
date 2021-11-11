<?php
session_start();
//1.connect to database
include 'includes/dbconn.php';
//2.recive data from form
$name=$_POST['user_name'];
$email=$_POST['user_email'];
$password=$_POST['user_password'];
//check the data already present or not
$query3="SELECT * FROM user_entries WHERE email LIKE '$email'";
$query4="SELECT * FROM user_entries WHERE password LIKE '$password'";
$result=mysqli_query($conn,$query3);
$result1=mysqli_query($conn,$query4);
$num_row=mysqli_num_rows($result);
$num_row1=mysqli_num_rows($result1);
if($num_row==0 and $num_row1==0){
			//3.insert into database
		$query="INSERT INTO user_entries(user_id,name,email,password) VALUES (NULL,'$name','$email','$password')";




		if(mysqli_query($conn,$query)){
			$query2="SELECT * FROM user_entries WHERE email LIKE '$email'";
			$result=mysqli_query($conn,$query2);
			$result=mysqli_fetch_assoc($result);
			$_SESSION['user_id']=$result['user_id'];
			$_SESSION['name']=$result['name'];
			

			header('Location:index.php');
			
		}else{
			echo 'register failed ';
		}

}else if($num_row==0 and $num_row1==1){
	echo'<script>alert("Password already exist")</script>';
	echo'Press back to go Registration  Page';
}else{
	echo'<script>alert("email already exist")</script>';
	echo'Press back to go Registration Page';

}
	




?>