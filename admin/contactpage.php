<?php
include './unrestricted.php'; 
include './connection.php';
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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>
                             
                        
                        <!-- Content Row -->
                        
                        <div class="row">                            
                            <div class="col-md-12">                    
                   
                            <!-- Earnings (Monthly) Card Example -->
                            <form action="" method="POST">
                            <div class="form-group">
                            <div class="col-xl-10 col-md-12 mb-12">
                                <label>Enter Page Title :</label>
                                 <input class="form-control" type="text" name="title" placeholder="Enter your title here" required>
                                 <br>
                                 <label>Enter Content :</label>
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">                                          
                                           

                                            <div class="col-md-12">
                                                                                                  
                                                    <textarea name="editor1" id="editor1" rows="20" cols="200">                                                            
                                                    </textarea>
                                                    <script>
                                                        // Replace the <textarea id="editor1"> with a CKEditor
                                                        // instance, using default configuration.
                                                        CKEDITOR.replace('editor1');
                                                    </script>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <br>
                                 <center><input class="form-contol btn btn-success" type="submit" name="submit" value="Submit"></center>   
                            </div>   
                            </div>   
                              </form>  
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                </div>
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
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $content=$_POST['editor1'];
    $sql="INSERT INTO `contactpage`(`title`, `contact_html`) VALUES ('$title','$content')";
    $execute=mysqli_query($conn,$sql);
    echo '<script>alert("Content added successfully")</script>';
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=contactpage.php\">";
}
?>
