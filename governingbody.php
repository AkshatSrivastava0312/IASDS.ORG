<?php
 session_start();
 include './admin/connection.php';
 $sql="SELECT * FROM `g_body`";
 $result=mysqli_query($conn, $sql);
# print_r($result);

 ?>
<!DOCTYPE html>
<html lang="en">

    <?php include './headerlinks.php'; ?>
    <body class="body-wrapper">

        <div class="main_wrapper">

            <?php include './header.php'; ?>


            <div class="mainContent clearfix">
                <div class="single_banner">
                    <div class="container-fluid">
                        <div class="single_banner_inner">
                            <img src="img/gov-b.jpg" alt=""/>
                            <!--					<div class="single_caption">
                                                                            <h1>Our Expert Team</h1>
                                                                            
                                                                    </div>end single caption-->
                        </div>
                    </div><!--end container-->
                </div>
                <div class="container">
                    <!--                    <div class="price-title">
                                            <h3></h3>
                                        </div>-->
                    <div class="row price-table" style="padding-top:30px">

                        <div class="col-sm-12 col-xs-12 table-responsive" >

                            <table class="table table-striped" style="">
                                <tbody>
                                    <tr class="info">
                                        <td width="78">
                                            <p><strong>Sl.</strong></p>
                                            <p><strong>No.</strong></p>
                                        </td>
                                        <td width="189">
                                            <p><strong>Name</strong></p>
                                        </td>
                                        <td width="148">
                                            <p><strong>Post</strong></p>
                                        </td>
                                        <td width="345">
                                            <p><strong>Address</strong></p>
                                        </td>
                                        <td width="128">
                                            <p><strong>Occupation</strong></p>
                                        </td>
                                    </tr>
                                     <?php 
                                     $sn=1;
                                        while ($row = mysqli_fetch_assoc($result)) {
             
    
      
                                    ?>

                                    <tr>
                                        <td width="78">
                                          <?php  echo $sn++; ?>
                                        </td>
                                        <td width="189">
                                            <p> <?php  echo $row['g_name']; ?></p>
                                        </td>
                                        <td width="148">
                                            <p> <?php  echo $row['g_post']; ?></p>
                                        </td>
                                        <td width="345">
                                            <p> <?php  echo $row['g_address']; ?></p>
                                            
                                        </td>
                                        <td width="128">
                                            <p> <?php  echo $row['g_occup']; ?></p>
                                        </td>
                                    </tr>
                                        <?php }?>
                                  </tbody>
                            </table>
                        </div>

                    </div>

                </div>


                <?php include './footer.php'; ?>
            </div>

            <!-- JQUERY SCRIPTS -->
            <?php include './footerlinks.php'; ?>
</html>

