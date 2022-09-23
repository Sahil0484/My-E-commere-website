 <!-- product description page-->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg p-0">

    
        <div class="container-fluid"  id="header">
          <a class="navbar-brand" href=""><img src="img/logo.png" class="logo"></a>
          <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fas fa-bars text-primary"></i></span>
          </button>        
          <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar">
                <li class="nav-item"><a  class=" nav-link "href="index.php">Home</a></li>
                <li class="nav-item"><a  class=" nav-link shop "href="shop.php">Shop</a></li>
                <li class="nav-item"><a  class=" nav-link " href="blog.php">Blog</a></li> 
                <li class="nav-item"><a  class=" nav-link "href="about.php">About</a></li>
                <li class="nav-item"><a  class=" nav-link "href="contact.php">Contact</a></li>
                <li class="nav-item"><a class=" nav-link " href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- on click display the product details page items-->
      <?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM productadd WHERE item_id='$id'";
  $result = mysqli_query($conn, $sql);
  
  
  $row=mysqli_fetch_assoc($result);
  $cat=  $row['category'];
  if($id==$row['item_id']){
    ?> 
    <div class="container">
        <div class="row pt-3">
            <div class="col-sm-4 col-md-6 ">
                <img src="./image/<?php echo $row['img'];?>" class="img-fluid" >
               
            </div>
            <div class="col-md-6 pt-5 ps-5" id="product-details">
            <h6 class="pt-3"><?php echo$row['brand_name'];?></h6>
              <h4 class="pt-3">Men's Fashion <?php echo $row['category'];?></h4>
              <h2 class="pt-3"> Per Piece Price -$<?php echo$row['price'];?></h2>
              <div class="pt-4">
              <input type="number" value="1">
              
              <button type="button" class="btn btn-lg btn-outline-success">Add To Cart</button>
  </div>
              <h4 class="pt-5">Product description</h4>
              <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ducimus perferendis quas doloribus debitis repudiandae sit consequatur doloremque modi corporis, libero alias corrupti quaerat ullam ad laborum iusto molestiae? Eveniet.</p>

            </div>
        </div>
    </div>
    <?php
}
}

 ?>
<!-- four same category products -->
    <div class="container pb-5">
        <div class="row pt-3">
            <h2 class="text-center ">Similar Products</h2>
            <p class="text-center pt-3 pb-3"> Collection New Modern Design</p>
        </div>
        <div class="row">
           
        <!-- same category php code-->
            <?php
require('config.php');

 // Die if connection was not successful      
 if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 
  $sql = "SELECT * FROM productadd WHERE category='$cat'  ORDER by RAND() LIMIT 4";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

if($num>0){
  while($row=mysqli_fetch_assoc($result)){
 
    ?> 
       <div class="col-md-3 col-6 mt-3  pb-3">
      <a href="/shoping/sproduct.php?id=<?php echo $row['item_no']; ?>" style="text-decoration:none;"><div class="card" id="product" >
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
   

    <!--footer-->
    <div class="container-fluid  pt-5 footer text-white">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-3 col-6">
              <h4 class="font-rubik font-size-20">Livertigo</h4>
              <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
           
                <div class=" pt-2">
                  <h5 class="font-rubik font-size-20">Connect With Us!</h5>
                    <a href="https://www.facebook.com" target="_blank" >
                <i class="fa-brands fa-facebook fa-lg"></i></a>
                    
                    <a href="https://www.instagram.com " target="_blank" class="ps-2 ">
                <i class="fa-brands fa-square-instagram fa-lg" ></i></a>
                <a href="https://www.twitter.com" target="_blank" class="ps-2">
                <i class="fa-brands fa-square-twitter fa-lg"></i></a>
               </div>
            </div>
            <div class="col-md-3 col-6" >
              <h4 class="font-rubik font-size-20 " >Information</h4>
              <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
              </div>
            </div>
              <div class="col-md-3 col-6 ">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
            </div>
                
            <div class="col-md-3 col-6 ">
              <h4 class="font-rubik font-size-20">Contact Us</h4>
              <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">info@demolink.org</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">+1-853-234-65</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Online Help</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">FAQ's</a>
              </div>
          </div>  
                    
              
        </div>
        <div class="row pt-3 pb-4">
          <div class="col text-center rights ">
              <span >©&nbsp; 2022 All Rights Reserved @Livertigo</span>
              
          </div>
      </div>
    </div>
</body>
<script>
    var mainimage=document.getElementById('mainimage');
    var smallimg=document.getElementById('smallimg');
    smallimg[0].onclick = function(){
        mainimage.src = smallimg[0].src;
    }
    smallimg[1].onclick  = function(){
        mainimage.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        mainimage.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        mainimage.src = smallimg[3].src;
    }
</script>
<script src="script.js"></script>

</html>