<?php
session_start();
 include './admin/connection.php';
 $sql="SELECT * FROM `mstr_training`";
 $result=mysqli_query($conn, $sql);
# print_r($result);

 ?>
<!DOCTYPE html>
<html lang="en">
    <?php include './headerlinks.php'; ?>
    <body class="body-wrapper">

        <div class="main_wrapper">

            <?php include './header.php'; ?>


            <div class="content_top clearfix">
                <div class="container">
                  <h2>Training Programmes/ Workshops conducted by IASDS</h2>
                       <div class="row price-table" style="padding-top:30px">

                        <div class="col-sm-12 col-xs-12 table-responsive" >

                           
                               
                                

 <table class="table table-striped" style="">
<tbody>
<tr>
<td style="width: 52.8px;">
<p><strong>S.No</strong></p>
</td>
<td style="width: 53.6px;">
<p><strong>Year</strong></p>
</td>
<td style="width: 476.8px;">
<p><strong>Name of Training/Workshop</strong></p>
</td>
<td style="width: 180px;">
<p><strong>Name of Sponsor</strong></p>
</td>
</tr>
      <?php 
           $sn=1;
           while ($row = mysqli_fetch_assoc($result)) {
      ?>
<tr>
<td style="width: 52.8px;">
<p><strong><?php  echo $sn++; ?></strong></p>
</td>
<td style="width: 53.6px;">
<p><?php  echo $row['t_year']; ?></p>
</td>
<td style="width: 476.8px;">
<p><?php  echo $row['t_name']; ?></p>
</td>
<td style="width: 180px;">
<p><strong><?php  echo $row['t_sponsor']; ?></strong></p>
</td>
</tr>
 <?php 
    }
 ?>
</table>



                               
                            </div><!--end content left-->
                        </div>
                         
                </div><!--end container-->
            </div><!--end content top-->

            <?php include './footer.php'; ?>

        </div>

        <!-- JQUERY SCRIPTS -->
        <?php include './footerlinks.php'; ?>
    </body>

    </html>

