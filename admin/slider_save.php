<?php
include './connection.php';
 if(isset($_POST['submit'])){
   $file=$_FILES['pic'];  
   $fileName=$file['name'];
   $fileType=$file['type'];
   $fileTmpName=$file['tmp_name'];
   $fileError=$file['error'];
   $fileSize=$file['size'];

   $fileExt=explode('.',$fileName);
   $fileActualExt=strtolower(end($fileExt));
   $allowed=array('jpg','jpeg','png');

   if(in_array($fileActualExt,$allowed)){
     if($fileError===0){
       if($fileSize<5000000){
         $fileNameNew=uniqid('',true).".".$fileActualExt;
         $fileDestination='uploads/slider/'.$fileNameNew;
         move_uploaded_file($fileTmpName,$fileDestination);    
            $name=$_POST['sliderName'];     
     $sql="INSERT INTO `mainslider`(`name`, `url`) VALUES ('$name','$fileDestination')";
     $execute= mysqli_query($conn,$sql);
     echo '<script>alert("Slider saved successfully")</script>';
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=slider.php\">";       
       }else{
         echo "File size is too large";
       }
     }else{
       echo "Their is an error uploading your file";
     }
   }else{
     echo "You can't upload file of this type";
   }  
 } 
 ?>

