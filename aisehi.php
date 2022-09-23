<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $item_id = $_POST['item_id'];
   $brand = $_POST['brand'];
   $category = $_POST['category'];
   $price = $_POST['price'];
  $image=$_POST['image'];
  require_('config.php');
 // Die if connection was not successful      
 if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
 }
 else{ 
   // Submit these to a database
   // Sql query to be executed 
   $myDate = date("d-m-y h:i:s");
   $sql = "INSERT INTO  productadd('','item_id','brand_name','category','price','img','date') VALUES ( '','$item_id', '$brand','$category', '$image','$myDate')";
   $result = mysqli_query($conn, $sql);
   
  if($result){
   echo '<div class="pt-3">
   <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    Product has been added successfully. <br> Thank You!
   </div>
 </div>';
 }
 else{
     // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> We are facing some technical issue and your product is not added! We regret the inconvinience caused!
   
   </button>
 </div>';
 }

}

}

?>