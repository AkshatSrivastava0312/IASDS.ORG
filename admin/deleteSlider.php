<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `mainslider` WHERE `mainslider`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:slider?m=1");
    }
}

?>