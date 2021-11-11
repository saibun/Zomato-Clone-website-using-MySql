<?php 
include 'includes/navbar.php';
include 'includes/dbconn.php';
$user_id=$_SESSION['user_id'];
$order_id=$_GET['order_id'];
?>
<div class="container">
	<div class="row mt-5">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<h4>Select address</h4>
					
				</div>
				<?php
				$query="SELECT * FROM address WHERE user_id=$user_id";
				$result=mysqli_query($conn,$query);
				$counter=0;
				while($row=mysqli_fetch_assoc($result)){
					echo'<div class="col-md-12 mt-3 ">
								<div class="card "style="margin-right:200px">
									<div class="card-body">
										<p>
											'.$row['address_details'].'<br>
											phn no:-'.$row['phone_no'].'<br>
											pin no:-'.$row['pincode'].'
										</p>
										<a class="btn btn-sm btn-secondary" href="update_address.php?address_id='.$row['address_id'].'&order_id='.$order_id.'">Select Address</a>
									</div>
								</div>
							</div>';
					    $counter=$counter++;
				}
				if($counter==0){
					echo'<div class="col-md-12 mt-3"><h4>Please write a address</h4></div>';
				}
				?>
				
				<div class="col-md-12"></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<h4>Add new address</h4>
					<form action="add_new_address.php" method="POST">
						<input type="hidden" name="order_id" value="<?php echo $order_id;?>">
						<label class="font-italic">Address</label><br>
						<textarea class="form-control" name="user_address"></textarea><br>
						<label class="font-italic">Phone No</label>
						<input type="text" class="form-control" name="user_phone"><br>
						<label class="font-italic">Pin Code</label><br>
						<input type="text" class="form-control" name="user_pin"><br>
						<input type="submit" name="" value="Add Address" class="btn btn-sm btn-outline-danger font-weight-bold ">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>