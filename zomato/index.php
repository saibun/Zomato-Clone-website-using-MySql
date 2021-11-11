<?php
   include 'includes/navbar.php';
?>
	<div class="jumbotron">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="https://lh3.googleusercontent.com/proxy/KWOgJ67zYLSd2AEIeoDgDTIXRr0keMJDO_kVXkaJzHFKp14avaTc-b655joI6Cx3-8xhiVdpYBl6os-q8L6TQ55jvHl9mzD6HqpFJZHyPZJm25dcBPrzfOc4_0gzqh7RGeV-ziY" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img  class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRecFakzmxMoPgwA30CviXfM9ECmP8lHCeRGqbGpszS26t2N9I7CJVQ3sKnr78gpZbeZA&usqp=CAU">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="https://iforum-sg.c.huawei.com/dddd/images/2020/12/19/186ed7f7-c92a-4da9-b961-a101793a3deb_s.jpg" alt="Third slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
	</div>
	<div class="container">
		<div class="row">
		 <div class="col-md-12">
			<h3 class="mb-4">Chicken</h3>
		</div>
		<?php
		$conn=mysqli_connect('localhost','root','','zomato');
		$query="SELECT * FROM products WHERE category LIKE 'Chicken' LIMIT 4";
		$result=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_assoc($result)){
        	            $img=$row['bg_img'];
        	            
			        	echo '  <div class="col-md-3">
									<div class="card">
									        <img src='.$img.'>
										<div class="card-body">
											<h4>'.$row['name'].'</h4>
											<p>RS '.$row['price'].'</p>
											
											<a href="description.php?product_id='.$row['product_id'].'"><button class="btn btn-outline-danger btn-block">View</button></a>
										</div>
								    </div>
						        </div>';
			        }



		?>
		<div class="row">
		 <div class="col-md-12">
			<h3 class="mb-4">Burger</h3>
		</div>
		<?php
		$conn=mysqli_connect('localhost','root','','zomato');
		$query="SELECT * FROM products WHERE category LIKE 'Burger' LIMIT 4";
		$result=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_assoc($result)){
        	            $img=$row['bg_img'];
        	            
			        	echo '  <div class="col-md-3">
									<div class="card">
									        <img src='.$img.'>
										<div class="card-body">
											<h4>'.$row['name'].'</h4>
											<p>RS '.$row['price'].'</p>
											<a href="description.php?product_id='.$row['product_id'].'"><button class="btn btn-outline-danger btn-block">View</button></a>
										</div>
								    </div>
						        </div>';
			        }



		?>
		<div class="row">
		 <div class="col-md-12">
			<h3 class="mb-4">Biryani</h3>
		</div>
		<?php
		$conn=mysqli_connect('localhost','root','','zomato');
		$query="SELECT * FROM products WHERE category LIKE 'Biryani' LIMIT 4";
		$result=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_assoc($result)){
        	            $img=$row['bg_img'];
        	            
			        	echo '  <div class="col-md-3">
									<div class="card">
									        <img src='.$img.'>
										<div class="card-body">
											<h4>'.$row['name'].'</h4>
											<p>RS '.$row['price'].'</p>
											<a href="description.php?product_id='.$row['product_id'].'"><button class="btn btn-outline-danger btn-block">View</button></a>
										</div>
								    </div>
						        </div>';
			        }



		?>
		<div class="row">
		 <div class="col-md-12">
			<h3 class="mb-4">Fried Rice</h3>
		</div>
		<?php
		$conn=mysqli_connect('localhost','root','','zomato');
		$query="SELECT * FROM products WHERE category LIKE 'Fried Rice' LIMIT 4";
		$result=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_assoc($result)){
        	            $img=$row['bg_img'];
        	            
			        	echo '  <div class="col-md-3">
									<div class="card">
									        <img src='.$img.'>
										<div class="card-body">
											<h4>'.$row['name'].'</h4>
											<p>RS '.$row['price'].'</p>
											<a href="description.php?product_id='.$row['product_id'].'"><button class="btn btn-outline-danger btn-block">View</button></a>
										</div>
								    </div>
						        </div>';
			        }



		?>
		
	</div>

</body>
</html>