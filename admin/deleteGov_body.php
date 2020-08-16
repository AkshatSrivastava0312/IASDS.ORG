<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `g_body` WHERE `g_body`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:gov_body?m=1");
    }
}

?>