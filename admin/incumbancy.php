<?php
include './unrestricted.php';
include './connection.php';
if(isset($_GET['m']))
{
    echo '<script> alert("Incumbancy Deleted successfully");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

    <?php include './headtag.php'; ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            include './leftsidebar.php';
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                    include './topbar.php';
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>          

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <form action="" method="post">
                                <div class="card-header py-3" style="height:80px;">
                                    <div class="form-row">
                                        <br>
                                        <div class="col"><h6 class="font-weight-bold">INCUMBANCY LISTING</h6></div>
                                        <div class="col"><p align="right">
                                                <input type="button" class="btn btn-success" name="newInc" value="Add new incumbancy" data-toggle="modal" data-target="#addNewInc">     
                                            </p></div>
                                    </div></div>
                                <div class="card-body">                                   
                                    <?php                                                               
                                        $query = "SELECT * FROM `incumbancy`";
                                        $execute = mysqli_query($conn, $query);
                                        $num = mysqli_num_rows($execute);                                   
                                    ?>

                                    <div class="table-responsive">
                                        <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SL. NO.</th>
                                                    <th>NAME</th>
                                                    <th>DESIGNATION</th>
                                                    <th>DURATION</th>
                                                    <th>DESCRIPTION</th>                                                   
                                                    <th>IMAGE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>                                            
                                            <tbody>      

                                                <?php
                                                for ($i = 0; $i < $num; $i++) {
                                                    $row = mysqli_fetch_array($execute);
                                                    ?>
                                                    <tr>
                                                        <td style="width: 5%;"><?php echo $i + 1 ?></td>
                                                        <td style="width: 10%;"><?php echo $row['name'] ?></td>
                                                        <td style="width: 10%;"><?php echo $row['desig'] ?></td>                      
                                                        <td style="width: 10%;"><?php echo $row['duration'] ?></td>
                                                        <td style="width: 25%;"><?php $des= $row['descrip']; echo substr($des, 0, 150); ?></td>                                                       
                                                        <td style="width: 25%;"><img class="img-thumbnail" src="<?php echo $row['image'] ?>" width="20%" height="15%"></td>
                                                        <td style="width: 15%;"><a id="upid" href="#" class="btn btn-primary">Update</a> <a class="btn btn-danger" href="deleteIncumbancy?id=<?php echo $row['id'];?>" >Delete</a></td>                   
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>                
                                </div>
                            </form>     
                        </div>
                  


                    </div>               



                    <div class="modal fade" id="addNewInc" tabindex="-1" role="dialog" aria-labelledby="IncModalLabel" aria-hidden="true">
                        <form class="form-group" action="" method="post" enctype="multipart/form-data">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Incumbancy</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-2">  
                                        <label>Name</label>
                                          </div>
                                            <div class="col-md-10">  
                                        <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-2">  
                                        <label>Designation</label>
                                          </div>
                                            <div class="col-md-10">  
                                        <input type="text" class="form-control" name="desig" required>
                                            </div>
                                        </div>                                         
                                        <br>
                                        <div class="row">
                                          <div class="col-md-2">  
                                        <label>Duration</label>
                                          </div>
                                            <div class="col-md-10">  
                                        <input type="text" class="form-control" name="duration" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-2">  
                                        <label>Description</label>
                                          </div>
                                            <div class="col-md-10">  
                                        <input type="text" class="form-control" name="description" required>
                                            </div>
                                        </div> 
                                        <br>                                        
                                        <div class="row">
                                          <div class="col-md-2">  
                                        <label>Image</label>
                                          </div>
                                            <div class="col-md-10">  
                                        <input type="file" class="form-control" name="image" required>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                        <input type="submit" name="submitInc" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>                       
                    </div>



                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->


        <?php
        include './footerlinks.php';
        ?>

    </body>

</html>


<?php
if (isset($_POST['submitInc'])) {
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/incumbancy/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination); 
                if ($conn) {
                    $name = $_POST['name'];
                    $desig = $_POST['desig'];
                    $dur = $_POST['duration'];
                    $desc = mysqli_real_escape_string($conn, $_POST['description']);                    
                    $sql = "INSERT INTO `incumbancy`(`name`, `desig`, `duration`, `descrip`, `image`) VALUES ('$name','$desig','$dur','$desc','$fileDestination')";
                    $execute = mysqli_query($conn, $sql);
                  echo '<script>alert("Incumbancy added successfully")</script>';
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=incumbancy.php\">";
                } else {
                    echo "Not connected to DB";
                }
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