<?php
 session_start();
 include './admin/connection.php';
 $sql="SELECT * FROM `exp_team`";
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
                                    <img src="img/team-banner.jpg" alt=""/>
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
    <?php 
    while ($row = mysqli_fetch_assoc($result)) {
             
    
      
    ?>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i><?php echo $row['exp_name'];?></li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: <?php echo $row['exp_special'];?></li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): <?php echo $row['exp_experience'];?> </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: <?php echo $row['iasds_status'];?></li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement:<?php echo $row['exp_present'];?></a></li>
                                </ul>
                            </div>
                        </div>
<?php 
  }
        
?>
                       <!-- 
                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Prof. Aloke Dey </li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Statistics</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): >50 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Vice- President
Governing Body
</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: Professor, ISI, Delhi (Retired)</a></li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. Padam Singh </li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Survey Research
</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): >50 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS:  Ex President of Governing Body,  Consultant
</li>                                   
                                    <li ><i class="fa fa-globe"></i> <a href="#" >Present Involvement: Additional DG ICMR, New Delhi(Retired) </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Prof. A. K. Nigam</li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Statistics, Health & Nutrition</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): >55 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Consultant Advisor</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: IASDS, 1987</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. Ravindra Srivastava</li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Statistics</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): >50 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Consultant</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: IASDS, 2008</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. S. P. Singh</li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Agri. Statistics</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): 40 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Director,
Secretary (Governing Body)
</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: Former Dean RPCAU, PUSA</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. V. K. Srivastava</li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Medical Health</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): 45 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Consultant, Medical Health</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: Ex. Professor of Social & Preventive Medicine,
KGMU, Lucknow
</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. Shruti Shukla </li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Food & Nutrition</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): 11 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Consultant
Ex. Assistant Director (Nutrition) IASDS
</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: Biotechnology Industry Research Assistance Council (BIRAC), New Delhi</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Dr. P. P. Tiwari </li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Rural Development</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): 28 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Joint Director</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: IASDS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="list_block sidebar_item">

                                <ul class="contact_info" style="padding-left:20px" >
                                    <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i>Ms. Reeta Saxena </li>
                                    <li><i class="fa fa-mortar-board" aria-hidden="true"></i> Area of Specialization: Sociology</li>
                                    <li><i class="fa fa-id-badge" aria-hidden="true"></i> Experience (years): 21 </li>
                                    <li><i class="fa fa fa-briefcase" aria-hidden="true"></i>Professional Status in IASDS: Assistant Director (Social Sciences)</li>                                   
                                    <li><i class="fa fa-globe"></i> <a href="#">Present Involvement: IASDS</a></li>
                                </ul>
                            </div>
                        </div>-->
</div>

                </div>


                <?php include './footer.php'; ?>
            </div>

            <!-- JQUERY SCRIPTS -->
            <?php include './footerlinks.php'; ?>
</html>

