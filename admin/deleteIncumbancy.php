<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `incumbancy` WHERE `incumbancy`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:incumbancy?m=1");
    }
}

?>