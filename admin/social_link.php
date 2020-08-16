<?php
include './unrestricted.php'; 
include './connection.php'; 
 $query = "SELECT * FROM `sociallinks`";
$execute = mysqli_query($conn, $query);
 while($row = mysqli_fetch_assoc($execute))
     {
        $fb=$row['fblink'];
        $twit=$row['twitlink'];
        $gplus=$row['gpluslink'];   
        $linkedin=$row['linkedinlink'];   
        $ytb=$row['youtubelink'];   
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
                        <div class="card" style="margin-left:20%;margin-right:20%;padding-top: 10px;padding-left:20px;padding-right:70px;">
                            <fieldset style="padding-top: 10px;padding-bottom:40px;">
                            <legend>Update Your Social Links</legend>
                            <form method="POST" action="social_save.php" style="margin-left:5%;">
                                <label>Facebook</label><br>
                                <input type="text" name="fbTxt" value="<?php echo $fb;?>" style="width: 80%; height: 12%;"><br><br>
                                <label>Twitter</label><br>
                                <input type="text" name="twtTxt" value="<?php echo $twit;?>" style="width: 80%; height: 12%;"><br><br>
                                <label>Google+</label><br>
                                <input type="text" name="gplusTxt" value="<?php echo $gplus;?>" style="width: 80%; height: 12%;"><br><br>
                                <label>LinkedIn</label><br>
                                <input type="text" name="linTxt" value="<?php echo $linkedin;?>" style="width: 80%; height: 12%;"><br><br>
                                <label>YouTube</label><br>
                                <input type="text" name="ytbTxt" value="<?php echo $ytb;?>" style="width: 80%; height: 12%;"><br><br>
                                <input class="btn btn-primary" type="submit" name="update" value="Update" style="float: right;">
                            </form>
                        </fieldset>
                            </div>
                    <!-- /.container-fluid -->

                    </div></div>
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
