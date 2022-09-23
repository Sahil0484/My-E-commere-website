<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg p-0 ">
    <div class="container-fluid"  id="header">
      <a class="navbar-brand" href=""><img src="img/logo.png" class="logo"></a>
      <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> <i class="fas fa-bars text-primary"></i></span>
      </button>        
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar">
            <li class="nav-item"><a  class=" nav-link "href="index.php">Home</a></li>
            <li class="nav-item"><a  class=" nav-link active"href="shop.php">Shop</a></li>
            <li class="nav-item"><a  class=" nav-link " href="blog.php">Blog</a></li> 
            <li class="nav-item"><a  class=" nav-link "href="about.php">About</a></li>
            <li class="nav-item"><a  class=" nav-link "href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    
    
    <div class="container-fluid mb-5" id="page-header" >
        <div class="row" >
            <div class="col-sm-8 ">
                <div class="text-white pt-5  text-center">
                
                <h2 class="text-danger"># Stay home</h2>
                
                <p >Save more with coupons & upto 70% off</p>
                
            </div>
            </div>
        </div>
    </div>
 
    <?php
    include('shop_tabs.php');
    ?>
   

     <!--products lists-->
    <div class="container pb-5">
      <div class="row bg-primary mt-5 ">
    <h3 class="text-center text-white">Other Products</h3>
</div>
        <div class="row pt-2">
         
          <?php
          include('display_product.php');
          ?>


        </div>
    </div>
   <!--
   <ul class="pagination justify-content-center pagination-lg " id="pagination">
  
    <li class="page-item active p-1"><a class="page-link bg-success text-white" href="#">1</a></li>
    <li class="page-item  p-1"><a class="page-link bg-success text-white " href="shoes.html">2</a></li>
    <li class="page-item   p-1"><a class="page-link bg-success text-white" href="#">3</a></li>
    <li class="page-item p-1"><a class="page-link bg-success text-white" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
  </ul>
  pagination-->
   

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
<script src="script.js"></script>
</html>