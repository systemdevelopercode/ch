<?php 

//START SESSION
if(session_status() === PHP_SESSION_NONE){ 
    session_start(); 
}

//CHECK SESSION
if (!isset($_SESSION['admin'])){
    //LOGIN REDIRECT
    header('location:index.php');
}

//SET SESSION ID
$id_session=$_SESSION['admin'];
?>