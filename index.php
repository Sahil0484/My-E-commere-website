<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg p-0">
    <div class="container-fluid"  id="header">
      <a class="navbar-brand p-0" href="index.html"><img src="img/logo.png" class="logo"></a>
      <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> <i class="fas fa-bars text-primary"></i></span>
      </button>        
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar">
            <li class="nav-item"><a  class=" nav-link active "href="index.php">Home</a></li>
            <li class="nav-item"><a  class=" nav-link "href="shop.php">Shop</a></li>
            <li class="nav-item"><a  class=" nav-link " href="blog.php">Blog</a></li> 
            <li class="nav-item"><a  class=" nav-link "href="about.php">About</a></li>
            <li class="nav-item"><a  class=" nav-link "href="contact.php">Contact</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping mb-2"></i></a></li>
          
        </ul>
      </div>
    </div>
  </nav>
    <div class="container-fluid" id="hero" >
        <div class="row" >
          <div class="col-sm-6"></div>
            <div class="col-sm-6 ">
                <div class="texthero text-white">
                <h4 >Trade-in-offer</h4>
                <h2>Super value deals</h2>
                <h1>On all products</h1>
                <p >Save more with coupons & upto 70% off</p>
                <button type="button" class="btn btn-primary text-white">Shop Now</button>
            </div>
            </div>
        </div>
    </div>
 
    <!--features-->
    <div class="container justify-content-evenly" id="features">
        <div class="row pt-5">
            <div class="col-md-2 col-6 mb-3 ">
                <div class="card1 " >
                    <img class="card-img-top" src="img/features/f1.png" alt="free shipping">
                    <div class="card-body"  id="card-body">
                      <p class="card-text text-center">Free Shipping</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card1"  >
                    <img class="card-img-top" src="img/features/f2.png" alt="free shipping">
                    <div class="card-body"  id="card-body">
                      <p class="card-text text-center">Online Order</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class=" card1" >
                    <img class="card-img-top" src="img/features/f3.png" alt="free shipping">
                    <div class="card-body"  id="card-body">
                      <p class="card-text text-center">Save Money</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class=" card1" >
                    <img class="card-img-top" src="img/features/f4.png" alt="free shipping">
                    <div class="card-body"  id="card-body">
                      <p class="card-text text-center">Promotions</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class=" card1" >
                    <img class="card-img-top" src="img/features/f5.png" alt="free shipping">
                    <div class="card-body"  id="card-body">
                      <p class="card-text text-center">Happy Sell</p>
                    </div>
                  </div>
                  
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class=" card1" >
                    <img class="card-img-top" src="img/features/f6.png" alt="free shipping">
                    <div class="card-body" id="card-body">
                      <p class="card-text text-center">24/7 Support</p>
                    </div>
                  </div>
                  
            </div>
        </div>
    </div>

     <!--products lists-->
    <div class="container pb-5">
        <div class="row pt-3">
            <h2 class="text-center ">Featured Products</h2>
            <p class="text-center  pb-3">Summer Collection New Modern Design</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f1.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                      </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                    </div>
                </div>
           </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f2.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f3.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f4.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f5.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f6.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f7.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
            <div class="col-md-3 col-6 mt-2">
                <div class="card" id="product" >
                    <img class="card-img-top" src="img/products/f8.jpg" alt="product">
                    <div class="card-body">
                      <p><span >adidas</span> </p>
                      <h6>Cartoon Astronaut T-Shirts</h6>
                      <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h4>$150</h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                  </div>
            </div>
            </div>
           
        </div>
    </div>
  
    <!--deals and repair services-->
    <div class="container-fluid pt-5" id="repai">
        <div class="row text-center" >
            <div class="col-sm-8"  >
             <h4 class="text-white pb-3">Best Deals and Repair Services</h4>
             <h3 class="text-white pb-3">Upto <span class="text-danger"> 50%  </span>Off  -  All Accessories</h3>
              <button type="button" class="btn btn-success btn-outline-success btn-lg text-white normal">Explore More</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <!--new arrivals-->
    <div class="container">
        <div class="row pt-3">
            <h2 class="text-center ">NEW ARRIVALS!</h2>
            <p class="text-center pb-3">Summer Collection New Modern Design</p>
        </div>
      
        <div class="row ">
           
                <?php
                require('config.php');
                
                 // Die if connection was not successful      
                 if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{
                  $sql = "SELECT * FROM productadd  ORDER by RAND() LIMIT 8";
                $result = mysqli_query($conn, $sql);
                
                // Find the number of records returned
                $num = mysqli_num_rows($result);
                
                if($num>0){
                  while($row=mysqli_fetch_assoc($result)){
                 
                    ?> 
                       <div class="col-md-3 col-6 mt-3 pt-3 pb-3">
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
                          
                          <a href="cart_items.php?id=<?php echo $row['item_id']; ?> " ><i  class="fas fa-shopping-cart cart" ></i></a>
                
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
   <?php
    include('footer.php');
    ?>
  </div>
 
</body>
<script src="script.js"></script>
</html>