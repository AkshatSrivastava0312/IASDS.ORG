<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `implinks` WHERE `implinks`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:clients?m=1");
    }
}

?>