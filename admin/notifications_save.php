<?php
include './connection.php';
if (isset($_POST['submit'])) {
    $file = $_FILES['fle'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/notice/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination); 
                    $n = $_POST['notice'];
                    $status = $_POST['activeStatus'];
                    $sql = "INSERT INTO `notice`(`noticedesc`, `attachment_url`, `isactive`) VALUES ('$n','$fileDestination','$status')";
                    $execute = mysqli_query($conn, $sql);
                   echo '<script>alert("Notice added successfully")</script>';
                   echo "<meta http-equiv=\"refresh\" content=\"0;URL=notifications.php\">";        
            } else {
                echo "File size is too large";
            }
        } else {
            echo "Their is an error uploading your file";
        }
    } else {
        echo "You can't upload file of this type";
    }
}
?>

