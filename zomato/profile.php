<?php
include 'includes/navbar.php'
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 text-md-center mt-5">
			<i class="fas fa-5x fa-user mt-5"></i>
			<h1 class="mt-3"><?php echo $_SESSION['name']?></h1>
			<div class="card mt-4">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="orders.php">My Orders</a></li>
					<li class="list-group-item"><a href="user_wishlist.php">My wishlist</a></li>
					
					<li class="list-group-item"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>
