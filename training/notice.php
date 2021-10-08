<?php
//  PHP Javascript Utilities
//  Message 
function Message($message){
    $msg="<script>alert('$message');</script>";
    echo($msg);
}
//RedirectTo
function RedirectTo($url){
    echo("<script>window.location='$url';</script>");
}
function HashAlert($message,$redirectUrl){
    Message($message);
    RedirectTo($redirectUrl);
}
?>