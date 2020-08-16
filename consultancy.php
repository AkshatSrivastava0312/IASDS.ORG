<?php
 session_start();
 include './admin/connection.php';
 $sql="SELECT * FROM `consultancy`";
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
                  <h2>Consultancy by IASDS</h2>
                       <div class="row price-table" style="padding-top:30px">

                        <div class="col-sm-12 col-xs-12 table-responsive" >

                           
                               
                                

 <table class="table table-striped" style="">
 <tbody>
<tr>
<td width="50">
<p><strong>S.No</strong></p>
</td>
<td width="436">
<p><strong>Consultancy areas</strong></p>
</td>
<td width="287">
<p><strong>Consultancy given </strong></p>
</td>
</tr>
      <?php 
              $sn=1;
               while ($row = mysqli_fetch_assoc($result)) {
      ?>
<tr>
<td>
<p><strong><?php  echo $sn++; ?></strong></p>
</td>
<td width="436">
<p><?php  echo $row['c_area']; ?></p>
</td>
<td width="287">
<p><strong><?php  echo $row['c_client']; ?></strong></p>
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

