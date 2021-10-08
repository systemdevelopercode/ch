<?php
include('include/database.php');
if (isset($_POST['login'])) {
    $email=$_POST['email_address'];
    $password=$_POST['password'];
    $md5pwd=md5($password);
    $sql="select * from ch_users where user_email='$email' and user_password='$md5pwd'";
    $res=mysqli_query($conn , $sql);
    $num= mysqli_num_rows($res);
    
    if($num==1)
    {
      if(!isset($_SESSION["admin"]))
      {
        require("session.php");
        $_SESSION["admin"] = $email;
        header("location:home.php");
      }
      else{
        header("location:home.php");
      }
    }
    else {
		  echo '<script>alert("Invalid Username and Password! Try again.");</script>';
      header("location:index.php");
    }
	
}