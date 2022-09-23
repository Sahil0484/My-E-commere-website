<?php
require('config.php');
if(isset($_GET['delete'])){
  $id=$_GET['delete'];
  mysqli_query($conn,"DELETE FROM productadd WHERE item_id=$id");
  header('location:adminpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>
<body>
  


<div class="container pb-5 pt-2">
    <div class="row p-5"  id="message-box">
        <div class="col-md-8">
            <h2> Add Your Product Here</h2>
             <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Item Id</label>
          <input type="integer" placeholder="Item id" name="item_id"class="form-control"  required >
          
        </div>
        <div class="mb-3">
          <label class="form-label">Brand Name</label>
          <input type="text" placeholder="Brand name" name="brand"class="form-control" id="exampleInputemail" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Category</label>
          <input type="text" placeholder="shirt/t-shirt/jean/laggie/kurti" name="category" class="form-control"  required>
        </div>
        <div class="mb-3 ">
            <label class="form-label">Product Description</label>
         <textarea type="text"  class="form-control" rows="10" name="Description" placeholder="Product Description" required></textarea>
        </div>
        <div class="mb-3">
          <labelclass="form-label">Price</label>
          <input type="integer" placeholder="Price" name="price"class="form-control"  required >
          
        </div>

        <div class="mb-3 ">
            <label class="form-label">Image</label>
         <input type="file"  class="form-control"  name="uploadfile" placeholder="choose file" required>
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
        require('config.php');
       
        // If upload button is clicked ...
        if (isset($_POST['submit'])) {
          
            $filename = $_FILES["uploadfile"]["name"];
            $tmp_name = $_FILES["uploadfile"]["tmp_name"];
          
            $folder = 'image/' . $filename;
            // Now let's move the uploaded image into the folder: image
         
            if (move_uploaded_file($tmp_name, $folder)) {
                echo "<h3>  Image uploaded successfully!</h3>";
            } else {
                echo "<h3>  Failed to upload image!</h3>";
            }
        }
    
       // Die if connection was not successful      
       if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $item_id = $_POST['item_id'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $Description = $_POST['Description'];
      $myDate = date("d-m-y h:i:s");
    $sql = "INSERT INTO `productadd`  VALUES ('', '$item_id', '$brand','$category','$price','$filename','$myDate','$Description')";
    
    $result=mysqli_query($conn,$sql);
   
      
    if($result){
      
      echo '<div class="pt-3">
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
       Product has been added successfully .<br> Thank You!
      </div>
    </div>';
   
    }
    else{
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> We are facing some technical issue and your response was not submitted ! We regret the inconvinience caused!
      
      
    </div>';
    header('location:adminpage.php');
    }
    
    
    }
  }
 
      ?>
     
</div>
</div>
</div>

<div class="container pt-5">
    <div class="row " >
      <div class="col">
        <h4 class="text-center"> Your Added Items Are Here</h4>
        <hr>
      </div>
</div>
      <div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-bordered border-secondary ">
            <thead class="table-success">
                <tr class="text-center">
                    
                    <th style="width:30%;">Image</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
              
              <?php
              require('config.php');
              if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
              }
              else{
              $result=mysqli_query($conn,"SELECT * FROM productadd" );
       while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr class="text-center">
<td ><img src="./image/<?php echo $row['img'];?>" class="img-fluid" style="width:120px;"></td>
<td><?php echo $row['category'];?></td>
<td class=" text-center"><?php echo $row['brand_name'];?></td>
<td>$<?php echo $row['price'];?></td>
<td><a href="/shoping/sproduct.php?id=<?php echo $row['item_no']; ?>" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
  <a href="adminpage.php?delete=<?php echo $row['item_id'];?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
<a href="/shoping/edit_product.php?id=<?php echo $row['item_id'];?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a></td>
       </tr>
       <?php
      }
    }
              ?>
</tbody>
</table>
</div>
  </div>
</div>

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
      </html>
