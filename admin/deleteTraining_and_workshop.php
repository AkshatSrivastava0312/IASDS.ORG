<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `mstr_training` WHERE `mstr_training`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:training_and_workshop?m=1");
    }
}

?>