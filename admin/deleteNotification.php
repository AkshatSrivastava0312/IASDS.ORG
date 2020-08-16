<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `notice` WHERE `notice`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:notifications?m=1");
    }
}

?>