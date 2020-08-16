<?php
include './unrestricted.php';
include './connection.php';
if(isset($_GET['m']))
{
    echo '<script> alert("Record Deleted successfully");</script>';
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
                                        <div class="col"><h6 class="font-weight-bold">EXPERT LISTING</h6></div>
                                        <div class="col"><p align="right">
                                                <input type="button" class="btn btn-success" name="newExp" value="Add new expert" data-toggle="modal" data-target="#addNewExp">     
                                            </p></div>
                                    </div></div>
                                <div class="card-body">                                   
                                    <?php                                                               
                                        $query = "SELECT * FROM `exp_team`";
                                        $execute = mysqli_query($conn, $query);
                                        $num = mysqli_num_rows($execute);                                   
                                    ?>

                                    <div class="table-responsive">
                                        <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SL. NO.</th>
                                                    <th>NAME</th>
                                                    <th>SPECIALIZATION</th>
                                                    <th>EXPERIENCE</th>
                                                    <th>IASDS STATUS</th>
                                                    <th>PRESENT INVOLVEMENT</th>                                                   
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
                                                        <td><?php echo $row['exp_name'] ?></td>
                                                        <td><?php echo $row['exp_special'] ?></td>                      
                                                        <td><?php echo $row['exp_experience'] ?> years</td>
                                                        <td><?php echo $row['iasds_status'] ?></td>
                                                        <td width="12"><?php echo $row['exp_present'] ?></td>                                                 
                                                        <td><a id="upid" href="#" class="btn btn-primary" data-toggle="modal" data-target="#updateNewExp">Update</a> <a class="btn btn-danger" href="deleteExp?id=<?php echo $row['id'];?>" >Delete</a></td>
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



                    <div class="modal fade" id="addNewExp" tabindex="-1" role="dialog" aria-labelledby="IncModalLabel" aria-hidden="true">
                        <form class="form-group" action="" method="post">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Expert</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Expert Name</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expName" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Area of Specialization</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expArea" required>
                                            </div>
                                        </div>                                         
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Experience (years)</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expExp" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Professional Status in IASDS</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expStatus" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Present Involvement</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expPresent" required>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                        <input type="submit" name="submitExp" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>                       
                    </div>
<!-- update model start -->
 <div class="modal fade" id="updateNewExp" tabindex="-1" role="dialog" aria-labelledby="IncModalLabel" aria-hidden="true">
                        <form class="form-group" action="updateExp.php" method="post">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Expert</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Expert Name</label>
                                        <input type="hidden" class="form-control" name="expId" id="expId" value="" required>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expName" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Area of Specialization</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expArea" required>
                                            </div>
                                        </div>                                         
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Experience (years)</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expExp" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Professional Status in IASDS</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expStatus" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                          <div class="col-md-4">  
                                        <label>Present Involvement</label>
                                          </div>
                                            <div class="col-md-8">  
                                        <input type="text" class="form-control" name="expPresent" required>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                        <input type="submit" name="submitExp" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>                       
                    </div>

<!-- update model end-->

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
            if(isset($_POST['submitExp']))
            {
                $name=$_POST['expName'];
                $area=$_POST['expArea'];
                $exp=$_POST['expExp'];
                $status=$_POST['expStatus'];
                $present=$_POST['expPresent'];
                $sql="INSERT INTO `exp_team`(`exp_name`, `exp_special`, `exp_experience`, `iasds_status`, `exp_present`) VALUES ('$name','$area','$exp','$status','$present')";
                $execute=mysqli_query($conn,$sql);
                echo '<script>alert("Expert added successfully")</script>';
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=exp_team.php\">";
            }

?>


         