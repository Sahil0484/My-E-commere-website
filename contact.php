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
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid"  id="header">
          <a class="navbar-brand" href=""><img src="img/logo.png" class="logo"></a>
          <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fas fa-bars text-primary"></i></span>
          </button>        
          <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar">
                <li class="nav-item"><a  class=" nav-link "href="index.php">Home</a></li>
                <li class="nav-item"><a  class=" nav-link "href="shop.php">Shop</a></li>
                <li class="nav-item"><a  class=" nav-link " href="blog.php">Blog</a></li> 
                <li class="nav-item"><a  class=" nav-link "href="about.php">About</a></li>
                <li class="nav-item"><a  class=" nav-link active "href="contact.php">Contact</a></li>
                <li class="nav-item"><a class=" nav-link "href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
        
        
        
        
    <div class="container-fluid" id="contact-header" >
        <div class="row" >
            <div class="col-sm-8 ">
                <div class="text-white pt-5  text-center">
                
                <h2 class="text-danger">#let's_talk</h2>
                
                <p >LEAVE A MESSAGE ,We love to hear from you!</p>
                
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-5" id="contact-details">
            <div class="col-md-6" >
         <span>GET IN TOUCH</span>
         <h2>Visit one's! on our  agency location or contact us</h2>
         <div class="contact pt-3 ">
         
          <div class="icon">
         <i class="fa-solid fa-map-location "></i>
          </div>
          <div class="content ps-4">
            <h5> Address</h5> 
            <p >Head Office:Livertigo Web Solution, Ghari Bolni Road, Rewari (Haryana)-123401</p>
          </div>
         </div>
          
         <div class="contact pt-2 ">
         
          <div class="icon">
            <i class="fa-solid fa-phone"></i>
          </div>
            <div class="content ps-4">
            <h5> Phone</h5>
            <p> 9728219923</p>
            </div>
          </div>
          <br>
          <div class="contact pt-2 ">
         
            <div class="icon">
            <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="content ps-4">
            <h5> Email</h5>
            <p>info@email.com</p>
            </div>
          </div>
          <div class="contact pt-2 ">
         
            <div class="icon">
            <i class="fa-solid fa-clock"></i>
            </div>
            <div class="content ps-4">
            <h5> Timings</h5>
            <p>Monday to Saturday : 9.00 a.m to 5.00 p.m</p>
            </div>
         </div>
            </div>

            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.604022774626!2d76.63128171408307!3d28.158540312127677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d502c3aba00c1%3A0xb3845060e0a70536!2sLivertigo!5e0!3m2!1sen!2sin!4v1661402692122!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<div class="container pb-5 pt-5">
    <div class="row p-5"  id="message-box">
        <div class="col-md-8">
            <h2> Leave A Message</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="mb-3">
          <labelclass="form-label">Name</label>
          <input type="text" placeholder="your name" class="form-control" id="yourname" >
          
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" placeholder="Your Email"class="form-control" id="exampleInputemail">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Message</label>
         <textarea type="text"  class="form-control" rows="10" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];
      
          require('config.php');
      // Die if connection was not successful      
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $myDate = date("d-m-y h:i:s");
        $sql = "INSERT INTO  `message` (`s.no`,`name`,`email`,`phone`,`mes`,`date`) VALUES ( '','$name', '$email','$phone', '$message','$myDate')";
        $result = mysqli_query($conn, $sql);
        
       if($result){
        echo '<div class="pt-3">
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
         Your response has been submitted successfully , We will Try to reach you soon <br> Thank You!
        </div>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your response was not submitted ! We regret the inconvinience caused!
        
        
      </div>';
      }

  }

}
?>
        </div>
    </div>
  </div>
    <!--footer-->
    <?php
    include('footer.php');
    ?>

</body>
<script src="script.js"></script>
</html>
