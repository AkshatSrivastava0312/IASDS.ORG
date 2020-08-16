<?php
include './connection.php';
if(isset($_GET))
{
    $sql="DELETE FROM `exp_team` WHERE `exp_team`.`id` = ".$_GET['id'];
    if(mysqli_query($conn, $sql))
    {
        header("location:exp_team?m=1");
    }
}

?>