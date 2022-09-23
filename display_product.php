<!--display product on shop page after tabs-->

<?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  
  $sql = "SELECT * FROM productadd";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num>0){
  while($row=mysqli_fetch_assoc($result)){
 
    ?> 
       <div class="col-md-3 col-6 mt-3  pb-3">
      <a href="/shoping/sproduct.php?id=<?php echo $row['item_id']; ?>" style="text-decoration:none;"><div class="card " id="product" >
          <img class="card-img-top" src="./image/<?php echo $row['img'];?>" >
          <div class="card-body">
            <p><span><?php echo $row['brand_name'];?></span> </p>
            <h6><?php echo $row['category']; ?></h6>
            <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <h4>$<?php echo $row['price'];?></h4>
          </div>
          <a href=""><i class="fas fa-shopping-cart cart"></i></a>
        
  </div>
  </div>
  </a>
  </div>
   <?php
}
}
}
 ?>
  