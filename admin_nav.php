<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin logged in</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="/shoping/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg p-0" id="admin-header">
        <div class="container-fluid" >
            
          <a class="navbar-brand ps-3 text-start" href="index.php"><img src="img/logo.png" class="logo"></a>
                 <div class="navbar-text">
          <h5>Welcome! <?php
                  require('config.php');
                  if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{
                  $sql="SELECT * FROM user";
                  $result = mysqli_query($conn, $sql);
                  $num=mysqli_num_rows($result);
                 $row= mysqli_fetch_assoc($result);
                  
                    echo $row["username"];
                  
                }
                  ?></h5>
          </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
               
                <li class="nav-item "><a  class=" nav-link text-danger justify-content-end" href="login.php"><i class="fa-solid fa-power-off"></i>   Logout</a></li>
                
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid ps-1">
        <div class="row vh-100 ">
          <div class="col-md-3 pt-3 sidebar-menu">
            <h4 class="ps-3">Hi 
                  <?php
                  require('config.php');
                  if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{
                  $sql="SELECT * FROM user";
                  $result = mysqli_query($conn, $sql);
                  $num=mysqli_num_rows($result);
                 $row= mysqli_fetch_assoc($result);
                  
                    echo $row["username"];
                  
                }
                  ?>
                  </h4>
                  <hr>
                  <ul class="sidebar-menu" style="list-style:none" >
                    <li class="text-start"><a href="dashboard.php" name="dashboard" class="text-dark d-inline-block" style="text-decoration:none"><i class="fas fa-thin fa-chess-board "></i><h5 class="d-inline" > Dashboard</h5></a><hr></li>
              <li >
                    <a href="admin_product_add.php"  class="text-dark d-inline-block" style="text-decoration:none"><i class="fa-solid fa-plus "></i><h5 class="d-inline"> Add Product</h5></a><hr>
              </li>
              <li>
               <a href="admin_productlist.php"  class="text-dark d-inline-block" style="text-decoration:none"><i class="fa-sharp fa-solid fa-check "></i><h5 class="d-inline"> Product Added </h5></a><hr>
               </li>
              </ul>
          </div>
          
          
           
      
</body>
</html>