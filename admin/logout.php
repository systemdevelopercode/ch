<?php
include('include/database.php');
include('session.php');
$logout_query=mysqli_query($conn,"select * from ch_users where user_email='$id_session'");
$row=mysqli_fetch_array($logout_query);
session_destroy();
$id_session="";
header('location:index.php');
?>