<?php
include './connection.php';
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if($conn){
    if($pass1===$pass2){
        $sql="INSERT INTO `peoples`(`firstname`, `lastname`, `email`, `password`) VALUES ('$first','$last','$email','$pass1')";
        mysqli_query($conn, $sql);
        header('location:login.html?msg=s');
    }else{
        echo 'Password unmatched';
    }
}else{
    echo "Invalid user details";
}
?>

