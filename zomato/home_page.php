
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zomato--foodlovers best choice</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body style="background-color:#f45c43;">
	<div class="navbar" style="background-color: red;height: 55px;">
		<h1 class="text-white">Zomato</h1>

	</div>

	
	<div class="container">

			<div class="row" style="margin-top: 100px;">
				<div class="col-md-8">
					<p style="font-size: 60px;">We konw,once people connected to real food.they never change back</p>
				</div>
				<div class="col-md-4 ">
					<div class="card">
						<div class="card-body">
							<h1>Log in</h1>
							<form action="login_control.php" method="POST">
								<label>Email id</label><br>
								<input type="email" name="user_email" placeholder="abc@email.com" class="form-control"><br>
								<label>Password</label><br>
								<input type="Password" name="user_password" class="form-control"><br><br>
								<input type="submit" name="" value="Log in" class="btn btn-danger btn-block btn-lg ">
							</form>
							<div>
								<p class="mt-3">Not a member?<button type="button"class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Sign Up!</button></p>

							</div>

						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Please Sign up here!</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form action="register_control.php" method="POST">
		      		<label>Name</label><br>
		      		<input type="text" name="user_name" class="form-control"><br>
					<label>Email id</label><br>
					<input type="email" name="user_email" placeholder="abc@email.com" class="form-control"><br>
					<label>Creat Password</label><br>
					<input type="Password" name="user_password" class="form-control" placeholder="Keep It privet"><br><br>
					<input type="submit" name="" value="Click to Register" class="btn btn-danger  btn-sm ">
				</form>
		       
		      </div>
		      
		    </div>
		  </div>
		</div>


</body>
</html>