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
<div class="container pt-5">
    <div class="row" id="cart">
        <table>
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Brand Name</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
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
                <tr>
                    
                    <td><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                    <td><img class="card-img-top img-fluid" src="./image/<?php echo $row['img'];?>" ></td>
                    <td>Fashion Astronaut<?php echo $row['$cat'];?></td>
                    <td><?php echo $row['brand_name'];?></td>
                    <td>$<?php echo $row['price'];?></td>
                    <td><input type="number" value="1"></td>
                    <td>$150</td>
                </tr>
                <?php
  }
}

?>
            </tbody>
        </table>
    </div>
 </div>
 

 <div class="container pb-5 pt-5">
    <div class="row justify-content-evenly">
        <div class="col-md-6">
            <div  id="coupon">
            <h3 class="pb-3"> Apply Coupon</h3>
            <input type="text" placeholder="Enter Your Coupon Code" ><br><br>
            <button type="button" class="btn btn-success rounded text-center btn-lg  ">Apply</button>
        </div>
        </div>
        <div class="col-md-6" id="cart-total">
            <h3> Cart Total</h3>
            <table class="table table-bordered">
                <tr>
                    <td>cart subtotal</td>
                    <td>$450</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong> Total</strong> </td>
                    <td><strong>$450</strong></td>
                </tr>
            </table>
            <button type="button" class="btn btn-success">Proceed to Checkout</button>
        </div>
    </div>
 </div>
    
   
</body>
<script src="script.js"></script>
</html>