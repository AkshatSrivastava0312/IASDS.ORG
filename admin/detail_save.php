<?php
include './connection.php';
 if(isset($_POST['submit'])){
   $file=$_FILES['fileLogo'];  
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
         $fileDestination='uploads/logo/'.$fileNameNew;
         move_uploaded_file($fileTmpName,$fileDestination);         
          $title=$_POST['title']; 
      $keyword=$_POST['keyword'];
       $desc=$_POST['desc'];
     $sql="UPDATE `website_details` SET `title`='$title',`metakey`='$keyword',`metades`='$desc',`logourl`='$fileDestination' WHERE `id`=1";
     $execute= mysqli_query($conn,$sql);
     echo '<script>alert("Details saved successfully")</script>';
     echo "<meta http-equiv=\"refresh\" content=\"0;URL=logo.php\">";         
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

