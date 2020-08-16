<?php
include './unrestricted.php';
include './connection.php';
if(isset($_GET['m']))
{
    echo '<script> alert("Project Deleted successfully");</script>';
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
                                        <div class="col"><h6 class="font-weight-bold">PROJECT LISTING</h6></div>
                                        <div class="col"><p align="right">
                                                <input type="button" class="btn btn-success" name="newProj" value="Add new project" data-toggle="modal" data-target="#addNewProj">     
                                            </p></div>
                                    </div></div>
                                <div class="card-body">                                   
                                    <?php
                                    $query = "SELECT * FROM `mstr_project`";
                                    $execute = mysqli_query($conn, $query);
                                    $num = mysqli_num_rows($execute);
                                    ?>

                                    <div class="table-responsive">
                                        <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SL. NO.</th>
                                                    <th>NAME</th>
                                                    <th>START YEAR</th>
                                                    <th>LOCATION</th>                                                   
                                                    <th>FUNDING</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>                                            
                                            <tbody>      

                                                <?php
                                                for ($i = 0; $i < $num; $i++) {
                                                    $row = mysqli_fetch_array($execute);
                                                    ?>
                                                    <tr>
                                                        <td style="width:1%;"><?php echo $i + 1 ?></td>
                                                        <td style="width:20%;"><?php echo $row['p_name'] ?></td>
                                                        <td style="width:5%;"><?php echo $row['p_start_year'] ?></td>        
                                                        <td style="width:5%;"><?php echo $row['p_location'] ?></td>    
                                                        <td><?php echo $row['p_funding'] ?></td> 
                                                        <td>
                                                            <?php 
                                                        if($row['p_status']==0){
                                                            ?>
                                                            <label class="badge badge-danger"><?php echo 'Inactive';?></label>
                                                            <?php } else if($row['p_status']==1){ ?>
                                                            <label class="badge badge-success"><?php echo 'Active';?></label>
                                                            <?php }  ?>
                                                        </td>    
                                                       <td><a id="upid" href="#" class="btn btn-primary">Update</a> <a class="btn btn-danger" href="deleteProject?id=<?php echo $row['id'];?>" >Delete</a></td>                   
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



                    <div class="modal fade" id="addNewProj" tabindex="-1" role="dialog" aria-labelledby="ProjModalLabel" aria-hidden="true">
                        <form class="form-group" action="" method="post">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Project</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Project Name</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="pname" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Project Start Year</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="pyear" required>
                                            </div>
                                        </div>                                         
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Project Location</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="plocation" required>
                                            </div>
                                        </div>
                                          <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Project Funding</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="pfunding" required>
                                            </div>
                                        </div>
                                            <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Project Status</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <select name="pstatus" class="form-control" required>
                                                    <option selected disabled="disabled">----Select Status----</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                        <input type="submit" name="submitProj" class="btn btn-primary" value="Submit">
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
            if(isset($_POST['submitProj']))
            {
                $name= mysqli_real_escape_string($conn,$_POST['pname']);
                $year=mysqli_real_escape_string($conn,$_POST['pyear']);
                $location=mysqli_real_escape_string($conn,$_POST['plocation']);
                $funding=mysqli_real_escape_string($conn,$_POST['pfunding']);
                $status=mysqli_real_escape_string($conn,$_POST['pstatus']);
                $sql="INSERT INTO `mstr_project`(`p_name`, `p_start_year`, `p_location`, `p_funding`, `p_status`) VALUES ('$name','$year','$location','$funding','$status')";
                $execute=mysqli_query($conn,$sql);
                echo '<script>alert("Project added successfully")</script>';
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=project.php\">";
            }
?>