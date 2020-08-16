<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `consultancy` WHERE `consultancy`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:consultancy?m=1");
    }
}

?>