<?php
 session_start();
 include './admin/connection.php';
 $sql="SELECT * FROM `mstr_project` WHERE `p_status`=1 ORDER BY `mstr_project`.`p_start_year` DESC";
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
                   <h2 style="text-align: center;"><span style="color: #000080;">Details of the project(s) implemented by the organization</span></h2>
                        <div class="row price-table" style="padding-top:30px">

                        <div class="col-sm-12 col-xs-12 table-responsive" >

                            
                               
                                
<table class="table table-striped" style="">
<tbody>
<tr>
<td width="59">
<p><strong>Sl. No.</strong></p>

</td>
<td width="280">
<p><strong>Name of the project</strong></p>

</td>
<td width="68">
<p><strong>Year</strong></p>
</td>
<td width="125">
<p><strong>Area /&nbsp;</strong><strong>Location</strong></p>

</td>
<td width="258">
<p><strong>Source&nbsp;</strong><strong>of fund</strong></p>

</td>
</tr>
 <?php 
          $sn=1;
          while ($row = mysqli_fetch_assoc($result)) {
  ?>
<tr>
<td width="59">
    <p><strong><?php echo $sn++;?>&nbsp;&nbsp;&nbsp;&nbsp; </strong>&nbsp;</p>
</td>
<td width="280">
    <p><?php echo $row['p_name'];?></p>
</td>
<td width="68">
<p><?php echo $row['p_start_year'];?></p>
</td>
<td width="125">
<p><?php echo $row['p_location'];?></p>
</td>
<td width="258">
<p><strong><?php echo $row['p_funding'];?></strong></p>
</td>
</tr>
<?php
        } 
?>
</tbody>
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

