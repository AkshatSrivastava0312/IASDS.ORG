<?php
include './unrestricted.php'; 
include './connection.php'; 
 $query = "SELECT * FROM `website_details`";
$execute = mysqli_query($conn, $query);
 while($row = mysqli_fetch_assoc($execute))
     {
        $title=$row['title'];
        $key=$row['metakey'];
        $des=$row['metades'];        
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
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>                          
                                   
                        
                        <!-- Content Row -->
                        <div class="card">
                            <br>
                       <center>Update Website Details</center>    
                       <hr><br>
                       <form class="form-horizontal" name="logo" method="post" action="detail_save.php" enctype="multipart/form-data"> 
                           <div class="form-group">
                               <div class="row">
                                  <div class="col-md-3"> 
                          <center> <label class="control-label">Website title :</label></center></div> 
                          <div class="col-md-9"> <input type="text" name="title" value="<?php echo $title;?>" class="form-contol" style="width: 80%" required></div>
                           </div><br>
                               
                               <div class="row">
                                  <div class="col-md-3"> 
                          <center> <label class="control-label">Meta tag (Keyword) :</label></center></div> 
                          <div class="col-md-9"> <input type="text" name="keyword" value="<?php echo $key;?>" class="form-contol" style="width: 80%" required></div>
                           </div><br>
                               
                               <div class="row">
                                  <div class="col-md-3"> 
                          <center> <label class="control-label">Meta tag (Description) :</label></center></div> 
                          <div class="col-md-9"> <input type="text" name="desc" value="<?php echo $des;?>" class="form-contol" style="width: 80%" required></div>
                           </div><br>
                               
                               <div class="row">
                                  <div class="col-md-3"> 
                          <center> <label class="control-label">Website logo :</label></center></div> 
                          <div class="col-md-9"> <input type="file" name="fileLogo" class="form-contol" style=" padding:2px; border:solid #8080804d 2px; width: 80%; " required></div>
                           </div><br>                           
                           <br>
                           <hr>
                           
                           <div class="row">
                               <div class="col-md-2"></div>   
                                <div class="col-md-2"></div> 
                                <div class="col-md-1"></div> 
                             <div class="col-md-1">                            
                              <input class="form-control btn btn-success" type="submit" name="submit" value="Submit"> </div>
                              <div class="col-md-1">  <input class="form-control btn btn-danger" type="button" name="close" value="Close"> </div>
                           </div>            
                           </div>
                            </form>                                              
                           </div></div>                           
                                                 
                    <!-- /.container-fluid -->

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

