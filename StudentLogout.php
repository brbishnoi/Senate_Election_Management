<?php 
//Destroy the session 
session_start(); 
$_SESSION['IS_AUTHENTICATED']=NULL;
session_unset(); 
session_destroy(); 
//Redirect to login page 
header("location: index.php"); 
exit(); 
?>