<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `mstr_project` WHERE `mstr_project`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:project?m=1");
    }
}

?>