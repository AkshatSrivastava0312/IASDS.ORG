<?php
include './connection.php';
 if(isset($_POST['update'])){ 
   $fb=$_POST['fbTxt'];
   $twt=$_POST['twtTxt'];
   $gplus=$_POST['gplusTxt'];
   $lin=$_POST['linTxt'];
   $ytb=$_POST['ytbTxt'];   
     $sql="UPDATE `sociallinks` SET `fblink`='$fb',`twitlink`='$twt',`gpluslink`='$gplus',`linkedinlink`='$lin',`youtubelink`='$ytb' WHERE `id`=1";
     $execute= mysqli_query($conn,$sql);
     echo '<script>alert("Social links updated successfully")</script>';
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=social_link.php\">";     
 } 
 
?>

