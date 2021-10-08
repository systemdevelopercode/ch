<?php
include('include/database.php');
include('session.php');

$logout_query=mysqli_query($conn,"select * from clients where client_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$user=$row['client_firstname']." ".$row['client_lastname'];
session_destroy();
//Log Activity
mysqli_query($conn,"INSERT INTO clients_logs (log_date,log_action,log_user_id)VALUES(NOW(),'Logout','$client_id')")or die(mysqli_error($conn));
		
header('location:index.php');

?>