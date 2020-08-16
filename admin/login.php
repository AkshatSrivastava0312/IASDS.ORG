<?php
session_start();
include './connection.php';

if($conn){ 
        if(isset($_POST['login'])){
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $pass=mysqli_real_escape_string($conn,$_POST['pass']);
        $sql="SELECT * FROM `peoples` WHERE `email`= '$email' AND `password`='$pass'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
      $row= mysqli_fetch_assoc($result);
        if($row['id']==1){
            $_SESSION['email']=$email;
            header('location:dashboard');
        }        
        
        }else{
            echo "Invalid username or password";
        }
   
        }   
   }else{
    echo "Connection error";
}
?>

