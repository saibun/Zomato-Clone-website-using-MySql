<?php
   include 'includes/navbar.php';
   include 'includes/dbconn.php';
   $product_id=$_GET['product_id'];
   $query="SELECT * FROM products WHERE product_id LIKE '$product_id'";
   $result=mysqli_query($conn,$query);
   $result=mysqli_fetch_assoc($result);
   
?>
<?php
$user_id=$_SESSION['user_id'];
$query1="SELECT * FROM wishlist WHERE user_id LIKE $user_id AND product_id LIKE $product_id";
$result1=mysqli_query($conn,$query1);
$num_row=mysqli_num_rows($result1);

$query3="SELECT * FROM reviews WHERE product_id LIKE $product_id";
$result3=mysqli_query($conn,$query3);
$review_count=0;
$sum_rating=0;
while($rat_row=mysqli_fetch_assoc($result3)){
   $review_count++;
   $sum_rating=$sum_rating+$rat_row['rating'];
}
if($review_count==0){
   $avg_rating="None";


}else{
   $avg_rating=$sum_rating/$review_count;
}

 ?>
<?php
$user_id=$_SESSION['user_id'];
$query2="SELECT * FROM cart WHERE user_id LIKE $user_id AND product_id LIKE $product_id";
$result2=mysqli_query($conn,$query2);
$num_row1=mysqli_num_rows($result2);
?>
<script type="text/javascript">
   $(document).ready(function(){
     $('#wishlist_btn').click(function(){
      var product_id='<?php echo $product_id;?>';
      $.ajax({
         url:'wishlist_data.php',
         method:'POST',
         data:{'product_id':product_id},
         success:function(data){
           if(data=='success'){
            $('#wishlist_btn').hide();
            $('#btn_container').append('<a href="delete_wishlist.php"><button class="btn btn-success btn-lg ml-3" style="color: blue;font-size: 25px;">Wishlist</button></a>')
           }

         },
         error:function(error){

         }
      })
     })
     $("#cart").click(function(){
       var product_id='<?php echo $product_id;?>';
      $.ajax({
         url:'cart_data.php',
         method:'POST',
         data:{'product_id':product_id},
         success:function(data){
           if(data=='success'){
            $('#cart').hide();
            $('#btn_container').prepend('<a href="delete_wishlist.php"><button class="btn btn-primary btn-lg ml-3" style="color: blue;font-size: 25px;">Added to cart</button></a>')
           }

         },
         error:function(error){

         }
      })
     })
   })

</script>
<div class="container">
   <div class="row">
      <div class="col-md-12">
        <h5 class="mt-5 "><a href="index.php">Home</a> / <a href=<?php echo'categories.php?category='.$result['category'].''; ?>><?php echo $result['category']; ?></a></h5>
      </div>
   </div>
   
   <div class="row mt-5">
      <?php
      echo '<div class="col-md-6">
         <img class="card-img-top" src='.$result['bg_img'].'alt="Card image cap">
      </div>
      <div class="col-md-3">
         <img class="card-img-top" src='.$result['bg_img'].' alt="Card image cap"><br><br>
         <img class="card-img-top" src='.$result['bg_img'].' alt="Card image cap">
      </div>
      <div class="col-md-3">
         <img  class="card-img-top" src='.$result['bg_img'].' alt="Card image cap"><br><br>
         <img  class="card-img-top" src='.$result['bg_img'].' alt="Card image cap">
      </div>'


      ?>

      
      <div class="row mt-3">
         <div class="col-md-8">
            <h2 ><?php echo $result['name']; ?></h2>
            <h3>Price <?php echo $result['price']; ?></h3>
            <p><?php echo $review_count; ?> reviews| <?php echo $avg_rating; ?> Avg rating</p>
            <hr>
            <p><?php echo $result['descriptions']; ?></p>
            
            
         </div>
         <div class="col-md-4 text-md-center"style="margin-top: 100px;" id="btn_container">
            
               <?php
               if($num_row1==0){
                  echo'<button class="btn btn-outline-danger btn-lg"style="color:orange; font-size: 25px;id" id="cart">Add to cart</button>';
               }else{
                  echo'<button class="btn btn-primary btn-lg ml-3" style="color: blue;font-size: 25px;">Added to cart</button>';
               }
               if($num_row==0){
                  echo'<button class="btn btn-outline-danger  btn-lg ml-3" style="color: orange;font-size: 25px;" id="wishlist_btn">Wishlist</button>';
               }else{
                  echo'<a href="delete_wishlist.php"><button class="btn btn-success btn-lg ml-3" style="color: blue;font-size: 25px;">Wishlist</button></a>';
               }
               

               ?>

             
         </div>
      </div>
      
      


   </div>
   <div class="row">
         <div class="col-md-7">
            <h2>User Reviews:--</h2>
            <hr>
            <?php 
            $qu_ery="SELECT * FROM reviews r JOIN user_entries u ON r.user_id=u.user_id WHERE r.product_id=$product_id";
            $r_esult=mysqli_query($conn,$qu_ery);
            
            while($r_ow=mysqli_fetch_assoc($r_esult)){
               echo'<h4>Rating--'.$r_ow['rating'].'*</h4>
                              <h5>Reviewed by --<span><b class="font-italic">'.$r_ow['name'].'</b></span></h5>
                              <span>'.$r_ow['review_date'].'</span>
                              <h5>:-'.$r_ow['review_title'].'-:</h5>
                              
                              <p>
                                 '.$r_ow['review_text'].'
                              </p>
                              <hr>';
            }
            ?>
            

         </div>
         <div class="col-md-5">
            <h4>Add a Review</h4>
            <form class="mb-5" action="submit_review.php" method="POST">
               <label>Product Rating(1-5)</label><br>
               <input type="number" name="rating" min="1" max="5" class="form-control"><br>
               <label>Title</label><br>
               <input type="text" name="title" class="form-control"><br>
               <label>Description</label><br>
               <textarea class="form-control" name="text-body"></textarea><br>
               <input type="submit" name="" value="Submit Review" class="btn btn-success">
               <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            </form>
         </div>
      </div>
   
</div>