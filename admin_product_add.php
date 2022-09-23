
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin _product_add</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>
<body>
<?php
include('admin_nav.php');  
?>
  
        <div class="col-md-9 p-5" id="message-box">
            <h2 class="text-center pb-2"> Add Your Product Here</h2>
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
         
            move_uploaded_file($tmp_name, $folder);
            
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

 </div>
 </div>
</div>

</body>
</html>