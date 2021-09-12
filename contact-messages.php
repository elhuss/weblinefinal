<?php

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   empty($_POST['company'])
   )
   {
   echo "No arguments Provided!";
   return false;
   };
   
$name = $_POST['name'];
$email_address =$_POST['email'];
$phone =$_POST['phone'];
$company=$_POST['company'];
$message =$_POST['message'];
require_once("includes/connect.php");
$r=mysql_query(" insert into contactus values(null,'$name','$email_address','$phone','$company','$message')");
if($r=true)
    echo" succesed";
else
    echo " failed";
return true;         
?>