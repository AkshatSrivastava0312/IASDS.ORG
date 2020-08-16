<!DOCTYPE html>
<?php
 include './admin/connection.php';
?>
<html lang="en">
    <?php include './headerlinks.php'; ?>
    <body class="body-wrapper">

        <div class="main_wrapper">

            <?php include './header.php'; ?>
                    <?php                    
                    $query = "SELECT * FROM `gallery`";
                    $execute = mysqli_query($conn, $query);
                    
                    ?>

            <div class="content_top clearfix">
                <div class="container">
                  
				  <div class="photo_gallery custom">
          <ul class="gallery popup-gallery">
              <?php 
              while($row= mysqli_fetch_assoc($execute))
                  {
                  
                  
              
              ?>
            <li>
                <a href="admin/<?php echo $row['photo'];?>" title="<?php echo $row['name'];?>">
                    <img src="admin/<?php echo $row['photo'];?>" alt="<?php echo $row['name'];?>"/>
                <div class="overlay">
                  <span class="zoom">
                    <i class="fa fa-search"></i>
                  </span>
                </div>
              </a>
            </li>
                  <?php }?>
          </ul>
        </div>
                </div><!--end container-->
            </div><!--end content top-->

            <?php include './footer.php'; ?>

        </div>

        <!-- JQUERY SCRIPTS -->
        <?php include './footerlinks.php'; ?>
    </body>

    </html>

