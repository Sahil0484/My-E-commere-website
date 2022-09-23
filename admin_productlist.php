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
    <?php
include('admin_nav.php');
?>
<div class="col-9 pt-4">
    <div class="row " >
      <h4 class="text-center"> Your Added Items Are Here</h4>
        <hr>
</div>
      <div class="row" id="admin-product-table">
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
</div>
</div>

      </body>
      </html>
