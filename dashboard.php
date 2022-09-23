<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
  <?php
  include('admin_nav.php');
  ?>
<div class="col-md-9 p-5 ps-2">
    <div class="row justify-content-evenly" >
    <div class="col-md-3 ">
<div class="card2 bg-danger rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Total Products</h5>
    <h5 class="text-white ps-2">
    <?php
require('config.php');
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $sql = "SELECT * FROM productadd ";
    $result = mysqli_query($conn, $sql);
    
    // Find the number of records returned
    $num = mysqli_num_rows($result);
    echo $num;
    
}
?>

</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center "style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
<div class="col-md-3 ">
<div class="card2 bg-success rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Categories Registered</h5>
    <h5 class="text-white ps-2">
    <?php
require('config.php');
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $sql = "SELECT COUNT(DISTINCT category) as cate  FROM productadd ";
    $result = mysqli_query($conn, $sql);
    
    // Find the number of records returned
    $row = mysqli_fetch_assoc($result);
    echo $row['cate'];
    
}
?>

</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center "style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
<div class="col-md-3 ">
<div class="card2 bg-primary rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Total Brand Registered</h5>
    <h5 class="text-white ps-2">
    <?php
require('config.php');
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  $sql = "SELECT COUNT(DISTINCT brand_name) as total  FROM productadd ";
  $result = mysqli_query($conn, $sql);
  
  // Find the number of records returned
  $row = mysqli_fetch_assoc($result);
  echo $row['total'];
  
}
?>

</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center "style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
</div>
<div class="row pt-5 justify-content-evenly">
<div class="col-md-3 ">
<div class="card2 bg-secondary rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Users</h5>
    <h5 class="text-white ps-2">
    <?php
require('config.php');
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $sql = "SELECT * FROM user ";
    $result = mysqli_query($conn, $sql);
    
    // Find the number of records returned
    $num = mysqli_num_rows($result);
    echo $num;
    
}
?>

</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center "style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
<div class="col-md-3 ">
<div class="card2 bg-warning rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Orders</h5>
    <h5 class="text-white ps-2">
    <?php
require('config.php');
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    $sql = "SELECT * FROM productadd ";
    $result = mysqli_query($conn, $sql);
    
    // Find the number of records returned
    $num = mysqli_num_rows($result);
    echo $num;
    
}
?>

</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center  " style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
<div class="col-md-3 ">
<div class="card2 bg-info rounded-3" style="width: 16rem;">
  <div class="card-body">
    <h5 class="text-white d-inline-block p-2">Total Sales</h5>
    <h5 class="text-white ps-2">$56740
</h5>
<hr>
<div class="d-flex justify-content-between">
   <h6> <a href="#" class="card-link text-white text-center  " style="text-decoration:none;">View Details</a></h6>
    <div class="text-white"><i class="fas fa-angle-right"></i></div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>