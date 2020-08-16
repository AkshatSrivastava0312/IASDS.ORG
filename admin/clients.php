<?php
include './unrestricted.php';
 include './connection.php';
if(isset($_GET['m']))
{
    echo '<script> alert("Link Deleted successfully");</script>';
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
                            
                                <div class="card-header py-3" style="height:80px;">
                                    <div class="form-row">
                                        <br>
                                        <div class="col"><h6 class="font-weight-bold">IMPORTANT LINKS LISTING</h6></div>
                                        <div class="col"><p align="right">
                                                <input type="button" class="btn btn-success" name="newLink" value="Add new important link" data-toggle="modal" data-target="#addNew">
                                            </p></div>
                                    </div></div>
                                <div class="card-body">                                    
                                    <?php 
                                        $query = "SELECT * FROM `implinks`";
                                        $execute = mysqli_query($conn, $query);
                                        $num = mysqli_num_rows($execute);                                    
                                    ?>
                                    <form action="client_update.php" method="post" enctype="multipart/form-data">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                        
                                            <thead>
                                                <tr>
                                                    <th>SL. NO.</th>                                                   
                                                    <th>IMPORTANT LINKS</th>
                                                    <th>PHOTO</th>                      
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>       
                                                <?php
                                                for ($i = 0; $i < $num; $i++) {
                                                    $row = mysqli_fetch_array($execute);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i + 1 ?></td>                                                   
                                                        <td style="width: 40%"><?php echo $row['linkname'] ?></td>
                                                        <td style="width: 30%"><img src="<?php echo $row['brandurl'] ?>" width="10%" height="10%" class="img-thumbnail"></td>
                                                        <td><a id="upid" href="#" class="btn btn-primary">Update</a> <a class="btn btn-danger" href="deleteClient?id=<?php echo $row['id'];?>" >Delete</a></td>                   
                                                    </tr>                    
                                                <?php
                                            }                                                                            
                                    
                                                  ?>   

                                            </tbody>                                      


                                      </table>
                                        </div>
                                    </form>
                                </div>
                              
                        </div>  

                        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form class="form-group" action="client_save.php" method="post" enctype="multipart/form-data">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                            <label>Link Name(website url)</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="url" name="name" placeholder="Enter website url name (https://www.google.com)" required>
                                                </div>
                                                </div>
                                            <br>
                                               <div class="row">
                                                <div class="col-md-4">
                                            <label>Website Logo</label>
                                                </div>
                                             <div class="col-md-8">
                                            <input class="form-control" type="file" name="logo" required>        
                                             </div>
                                               </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">          
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>                   
                        </div>


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






        <!-- Update Modal-->













        <?php
        include './footerlinks.php';
        ?>

    </body>

</html>

