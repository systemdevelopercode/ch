<?php
//mysqli_select_db('rms',mysqli_connect('localhost','root',''))or die(mysqli_error());
$url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,);
    if(!$conn){
        die('Could not Connect My mysqli:' .mysqli_error("Failed to Connect"));
	}
    mysqli_select_db($conn,"ch_training_z");
	
?>