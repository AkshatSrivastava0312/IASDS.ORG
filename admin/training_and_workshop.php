<?php
include './unrestricted.php';
include './connection.php';
if(isset($_GET['m']))
{
    echo '<script> alert("Training/Workshop Deleted successfully");</script>';
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
                                        <div class="col"><h6 class="font-weight-bold">TRAINING AND WORKSHOP LISTING</h6></div>
                                        <div class="col"><p align="right">
                                                <input type="button" class="btn btn-success" name="newTrain" value="Add new training/workshop" data-toggle="modal" data-target="#addNewTrain">     
                                            </p></div>
                                    </div></div>
                                <div class="card-body">                                   
                                    <?php
                                    $query = "SELECT * FROM `mstr_training`";
                                    $execute = mysqli_query($conn, $query);
                                    $num = mysqli_num_rows($execute);
                                    ?>

                                    <div class="table-responsive">
                                        <table class="table table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>SL. NO.</th>
                                                    <th>NAME</th>
                                                    <th>YEAR</th>
                                                    <th>SPONSOR</th>                                                   
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
                                                        <td><?php echo $row['t_name'] ?></td>
                                                        <td><?php echo $row['t_year'] ?></td>        
                                                        <td width="10"><?php echo $row['t_sponsor'] ?></td>    
                                                        <td><a id="upid" href="#" class="btn btn-primary">Update</a> <a class="btn btn-danger" href="deleteTraining_and_workshop?id=<?php echo $row['id'];?>" >Delete</a></td>                   
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

                    <div class="modal fade" id="addNewTrain" tabindex="-1" role="dialog" aria-labelledby="TrainModalLabel" aria-hidden="true">
                        <form class="form-group" action="" method="post">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Training And Workshop</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Training/Workshop Name</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="tname" required>
                                            </div>
                                        </div> 
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Year</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="tyear" required>
                                            </div>
                                        </div>                                         
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">  
                                                <label>Sponsor Name</label>
                                            </div>
                                            <div class="col-md-9">  
                                                <input type="text" class="form-control" name="tsponsor" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                                        <input type="submit" name="submitTrain" class="btn btn-primary" value="Submit">
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
            if(isset($_POST['submitTrain']))
            {
                $name=$_POST['tname'];
                $year=$_POST['tyear'];
                $sponsor=mysqli_real_escape_string($conn,$_POST['tsponsor']);               
                $sql="INSERT INTO `mstr_training`(`t_name`, `t_year`, `t_sponsor`) VALUES ('$name','$year','$sponsor')";
                $execute=mysqli_query($conn,$sql);              
                echo '<script>alert("Training/Workshop added successfully")</script>';
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=training_and_workshop.php\">";
            }
  ?>