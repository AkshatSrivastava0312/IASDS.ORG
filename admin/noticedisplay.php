<?php
include './connection.php';
?>
<!DOCTYPE html>
<html lang="en">

    <?php include './headtag.php'; ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php
               if($conn){
                   $sql1="SELECT * FROM `website_details`";
                   $execute1=mysqli_query($conn,$sql1);
                   if($execute1){
                       $num1= mysqli_num_rows($execute1);
                       for($i=0;$i<$num1;$i++){
                           $row1=mysqli_fetch_array($execute1);
                       }
                   }
               }
            
            ?>            
           
            <div id="content-wrapper" class="d-flex flex-column">
                
                
                
                                    <!-- Navbar -->
                                    
                    <nav class="navbar navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">
                            <img src="<?php  echo $row1['logourl']; ?>"  width="30" height="30" class="d-inline-block align-top">
                        </a>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>   
                     </nav>
                
              
                <!-- Main Content -->
                <div id="content">

                    <!-- List -->
                    
                    <marquee>
                            
                        <ul>
                                <?php                                    
                                    $sql2 = "SELECT * FROM `notice`";
                                    $execute2 = mysqli_query($conn, $sql2);
                                    if ($execute2) {
                                        $num2 = mysqli_num_rows($execute2);
                                        for ($j = 0; $j < $num2; $j++) {
                                            $row2 = mysqli_fetch_array($execute2);
                             ?>  
                            
                            <li>
                                <?php echo $row2['noticedesc']; ?>
                                (
                                    <a href="<?php echo $row2['attachment_url']; ?>">Click to see</a>
                                )
                            </li>
                            
                              <?php 
                                    }}
                                ?>
                        </ul>
                    </marquee>   
                    

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

