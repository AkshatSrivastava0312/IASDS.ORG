<?php
session_start();
 error_reporting(0);
 if($_SESSION['email']==false){
   header('location:login.html');
 }
?>