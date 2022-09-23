<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-company name</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="style1.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                
                <div class="login_form">
                <form action="login_process.php " method="POST">
                    <img src="img/logo.png" alt="logo" class="img-fluid logo pb-3">
                    <?php
                    if(isset($_GET['loginerror'])){
                        $loginerror=$_GET['loginerror'];
                    }
                    if(!empty($loginerror))
                    {
                        echo'<p class="errormsg">Invalid login credentials,Please Try Again..</p>';}?>
                    

              <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label" id="label_txt">Username or Email</label>
                 <input type="email" class="form-control" name="email" value="" id="exampleInputEmail1" required >
                
               </div>
               <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label" id="label_txt">Password</label>
                 <input type="password" name="password"class="form-control" id="exampleInputPassword1" required>
               </div>
               
               <button type="submit" name="submit"class="form_btn btn btn-primary btn-lg btn-outline-primary rounded-pill">Login</button>
            </form>
            <br>
            <p style="font-size:12px;text-align:center;"><a href="forgot-password.php" style="color:#00376b;">Forgot Password?</a></p>
            <br>
            
                 </div>  
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>