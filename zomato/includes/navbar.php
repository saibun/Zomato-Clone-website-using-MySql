<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welcome</title>
	<meta charset="utf-8">
	<title>Zomato--foodlovers best choice</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
	  
</head>
<body style="background-color:#e2e2e2;">
	<div class="" style="background-color: red;height: 60px;padding-top: 10px;">
		<div class="row">
			<div class="col-md-3">
				<h1 class="text-white">Zomato</h1>
			</div>
			<div class="col-md-7">
				<form action="search_control.php" method="GET">
					<div class="input-group">
						<input type="search" class="form-control rounded " placeholder="Search" aria-label="Search"
					    aria-describedby="search-addon" />
					    <button type="button" class="btn btn-outline-success text-white  ml-1" >Search</button>
					   
	                </div>
					
				</form>
				
			</div>
			<div class="col-md-2">
				<div class="text-md-center">
					<div class="dropdown" style="display: inline;">
						<i class=" fa-2x fas fa-user " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
						 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="index.php">Home <?php echo $_SESSION['name'];?></a>
						    <a class="dropdown-item" href="profile.php">My Profile</a>
						    <a class="dropdown-item" href="user_wishlist.php">My Wishlist</a>
						    <a class="dropdown-item" href="orders.php">My Order</a>
						     <a class="dropdown-item" href="logout.php">Log Out</a>
						</div>
						
					</div>
					
					
					
					<a href="user_cart.php"><i class="fa-2x fas fa-cart-arrow-down ml-5 text-white "></i></a>
				</div>
				
				
			</div>
		</div>
		
		
	</div>