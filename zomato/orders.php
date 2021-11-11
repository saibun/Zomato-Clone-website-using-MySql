<?php
include 'includes/navbar.php';
include 'includes/dbconn.php';
$user_id=$_SESSION['user_id'];

?>
<div class="container mt-5">
	<div class="row mt-5">
		<div class="col-md-8">
			<h2>My orders</h2>
		</div>
		<?php
		$query="SELECT * FROM orders WHERE user_id=$user_id";
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result)){
			$current_order_id=$row['order_id'];
			$query1="SELECT * FROM orders_details o JOIN products p ON p.product_id=o.product_id WHERE o.order_id='$current_order_id'";
			$result1=mysqli_query($conn,$query1);
			echo'<div class="col-md-8><div class="card font-italic">
					<div class="card-body>"
						<h4 >Order Id='.$row['order_id'].'<span style="float:right">Date-'.$row['order_date'].'</span></h4>';
			while($row1=mysqli_fetch_assoc($result1)){
				echo '<div class="col-md-12 mt-3">
						<div class="card">
							<div class="row">
								<div class="col-md-6">
									<img src="'.$row1['bg_img'].'">
								</div>
								<div class="col-md-6 p-3">
									<h4><a href="description.php?product_id='.$row1['product_id'].'">'.$row1['name'].'</a></h4>
									<h5>Rs<span>'.$row1['price'].'</span></h5>
								</div>
							</div>
						</div>
					</div>';

			}
			echo'<h4 class="mt-3">Amount Paid --'.$row['ammount'].'</h4><span>Payment Method--'.$row['payment_method'].'</span>

			</div></div></div>';

			
		} 


		?>
	</div>

</div>