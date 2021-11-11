<?php
   include 'includes/navbar.php';
   include 'includes/dbconn.php';
   $category=$_GET['category'];
?>
<div class="container">
      <div class="row">
       <div class="col-md-12">
         <h4 class="mt-5 mb-5">All products of <?php echo $category; ?></h4>
      </div>
      <?php
      
      $query="SELECT * FROM products WHERE category LIKE '$category' ";
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