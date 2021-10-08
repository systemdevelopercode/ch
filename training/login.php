<?php
/*
	TITLE   :lOGIN PROCCESSOR:
	AUTHOR  :MAGUMISE LIBERTY libemurg@gmail.com
	TIP     :
		Account To Client Link on Account.account_regid and Client.client_id
	INCLUDE : NOTICE.PHP USE HASHALERT
	SECURITY:
		HASH PASSWORD MD5 OR ...  1
		ARE YOU HUMAN             0
		ENCRYPTION                0

*/
include('include/database.php');
include("notice.php");

//Get User Input
if(isset($_POST['clogin'])){
	$email_attempt=$_POST['email_address'];
	$password_attempt=$_POST['password'];
	$client_query=mysqli_query($conn,"SELECT * FROM clients WHERE client_emailaddress='$email_attempt' and client_password='$password_attempt'");
	//Set Session Variable
	if($client_query==false){
		echo "Error in sql";
	}
	else{
		//echo "Error in sql1";
		$client_count=mysqli_num_rows($client_query);
		$id_row=mysqli_fetch_array($client_query);
		if($client_count>0){
			//echo "Error in count";
			require('session.php');
			$_SESSION['email']=$email_attempt;
			$_SESSION['id']=$id_row['client_id'];
			//Log Activity
			mysqli_query($conn,"INSERT INTO clients_logs (log_date,log_action,log_user_id)VALUES(NOW(),'Login','$client_id')")or die(mysqli_error($conn));
			//Redirect to Account Home
			header("location:home.php");
		}
		else{
			//echo "Error in Hashalert";
			//No Record of Account
			$msg="Login Failure : Create Account or Recover Account or Try Again";
			$url="index.php";
			HashAlert($msg,$url);
		}
	}	
}
// Security to avoid brute forcing
// $csrf-Cross Site Forgery Security
// Identify Pictures with ISPPME lOGO ON ITN 
// 4 OF 9 3 OF 9 2 OF 9 I OF 9
// Track Trials if they are 5 Redirect to Create Account or Recover Account
// lIB LIBEMURG
?>