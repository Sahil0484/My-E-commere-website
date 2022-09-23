<?php 
require_once('config.php');
if(isset($_POST['submit'])){

    $login=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query( $conn,"SELECT * FROM user WHERE (username='$login' OR email='$login')");
    $row=mysqli_num_rows($result);
if($row ==1){
     $row=mysqli_fetch_assoc($result);
     if($password == $row['password'])
     {
        $_SESSION["login_sess"]="1";
        $_SESSION["login_email"]=$row['email'];
     header('location:dashboard.php');

     }
     else
     {
       header("location:login.php?loginerror="."Password incorrect");
       }
     }
     else
     {
        header("location:login.php?loginerror="."echo'Both Username and Password is incorrect';"); 
     }
    }
?>