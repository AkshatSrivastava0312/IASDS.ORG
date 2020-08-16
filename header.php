<?php
include './admin/connection.php';
$q = "SELECT * FROM `website_details`";
$e = mysqli_query($conn, $q);
while ($row = mysqli_fetch_assoc($e)) 
    {    
        $title=$row['title'];
        $key=$row['metakey'];
        $des=$row['metades'];
        $url=$row['logourl'];
    }
    ?>
<header class="header-wrapper">
    
	  <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo"><i class="fa fa-phone"></i>:+91-522-2304849  </li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="mailto:iasds_lko@hotmail.com">iasds_lko@hotmail.com</a>
             
            </li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
             
              <a href="mailto:director.iasds@gmail.com">director.iasds@gmail.com</a>
            </li>
            
                    
          </ul>
          <ul class="topbar-right">
            <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
            <li class="top-search list-inline">
              <a href="#"><i class="fa fa-search"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <span class="input-group">
                    <input type="text" class="form-control" placeholder="Article Name">
                    <button type="submit" class="btn btn-default commonBtn">Search</button>
                  </span>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-2" >
			<center>                            
                            <a  href="<?php echo $des;?>"><img src="admin/<?php echo $url;?>" alt="<?php echo $title;?>" class="img-responsive" STYLE="width: 100PX;height: 100PX; " />
			
			</a>
			</center>
                
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-10" style="padding-top: 27px">
			<center><h2>Institute of Applied Statistics & Development Studies[ I A S D S ]</h2>
			
			<div style="text-align:center;padding-top:5px">( Registered under Societies’ Registration Act. 1860, Registration no. 3458/85-86 dated 26.10.1985 )</div></center>
			</div>
			 </div>
			  <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12" style="padding-top: 5px">
                <div class="header_inner" >

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
					<!--
                    <a class="navbar-brand logo clearfix" href="index.php"><img src="img/logofinal.jpg" alt="" class="img-responsive" STYLE="width: 100PX;height: 100PX; " /></a>
                  -->
				  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-left" >
                      <li>
                        <a href="index" >Home</a>
                       
                      </li>
                      <li>
                        <a href="about" >About Us</a>
                      </li>
                      <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members</a>
                        <ul class="dropdown-menu">
                              <li><a href="expertteam">Experts Team</a></li>
                              <li><a href="governingbody">Governing Body</a></li>
                             
                             
                              
                         </ul>
                      </li>
                       <li>
                        <a href="incumbency" >Incumbency</a>
                      </li>                     
					<li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Work</a>
                        <ul class="dropdown-menu">
							  
                              <li><a href="projects">Projects</a></li>
                              <li><a href="trainingworkshop">Training & Workshop</a></li>
                              <li><a href="consultancy">Consultancy</a></li>
                              
                              
                         </ul>
                      </li>
                   
                     <li>
                         <a href="gallery" >Gallery</a>
                      </li>
                     
					  <li>
                         <a href="contact" >Contact Us</a>
                      </li>

                      
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>
