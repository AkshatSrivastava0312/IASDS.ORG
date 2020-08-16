<?php
include './connection.php';
if($conn){
if (isset($_POST['updateBTN'])) {
    $lnk=$_POST['lnkN']; 
    $q="SELECT * FROM `implinks` WHERE `id`=".$_POST['idTxt'];
    $d=mysqli_query($conn,$q);
    $r= mysqli_fetch_array($d);
    $file = $_FILES['urlPic'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/links/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "File size is too large";
            }
        } else {
            echo "Their is an error uploading your file";
        }
    } else {
        echo "You can't upload file of this type";
    }
    
    $query = "UPDATE `implinks` SET `linkname`='" . $lnk . "',`brandurl`='" . $fileDestination . "' WHERE `id`=".$idt ;
   
    $execute = mysqli_query($conn, $query); 
    header('location:clients.php?success');
}}
?>