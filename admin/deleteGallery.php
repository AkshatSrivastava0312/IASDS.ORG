<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `gallery` WHERE `gallery`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:gallery?m=1");
    }
}

?>