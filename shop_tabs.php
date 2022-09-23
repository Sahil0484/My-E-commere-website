
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>
<body>
    
<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3 nav-justified" id="shoptab" role="tablist" >
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="ex-with-icons-tab-1"  data-bs-toggle="tab" href="#ex-with-icons-tabs-1" role="tab"
      aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-duotone fa-mobile me-2"></i>Mobiles</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-2" data-bs-toggle="tab" href="#ex-with-icons-tabs-2" role="tab"
      aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-duotone fa-shirt  me-2"></i>Shirts</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-3" data-bs-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
      aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class=" fas fa-solid fa-boot me-2"></i>Shoes</a>
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex-with-icons-content">
  <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
  
  <div class="container">
    <div class="row">
      <?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 
  $sql = "SELECT * FROM productadd WHERE category='Mobile Phone' ORDER by RAND() LIMIT 4  ";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num>0){
  while($row=mysqli_fetch_assoc($result)){
 
    ?> 
    
       <div class="col-md-3 col-6 mt-3  pb-3">
      <a href="/shoping/sproduct.php?id=<?php echo $row['item_id']; ?>" style="text-decoration:none;"><div class="card" id="product" >
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
 </div>
</div>
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
  <div class="container">
    <div class="row">
      <?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 
  $sql = "SELECT * FROM productadd WHERE category='Shirt' ORDER by RAND() LIMIT 4  ";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num>0){
  while($row=mysqli_fetch_assoc($result)){
 
    ?> 
    
       <div class="col-md-3 col-6 mt-3  pb-3">
      <a href="/shoping/sproduct.php?id=<?php echo $row['item_id']; ?>" style="text-decoration:none;"><div class="card" id="product" >
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
 </div>
</div>
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
  <div class="container">
    <div class="row">
      <?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 
  $sql = "SELECT * FROM productadd WHERE category='Shoes' ORDER by RAND() LIMIT 4  ";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num>0){
  while($row=mysqli_fetch_assoc($result)){
 
    ?> 
    
       <div class="col-md-3 col-6 mt-3  pb-3">
      <a href="/shoping/sproduct.php?id=<?php echo $row['item_id']; ?>" style="text-decoration:none;"><div class="card" id="product" >
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
 </div>
</div>
  </div>
</div>
<script>
    var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
tabEl.addEventListener('shown.bs.tab', function (event) {
  event.target // newly activated tab
  event.relatedTarget // previous active tab
})
    </script>
</body>
</html>
<!-- Tabs content -->