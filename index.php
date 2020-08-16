<?php
session_start();
 include './admin/connection.php';
$query = "SELECT * FROM `mainslider`";
$execute = mysqli_query($conn, $query);
$num = mysqli_num_rows($execute);                                   
 ?>
<!DOCTYPE html>
<html lang="en">


    <?php include './headerlinks.php'; ?>
    <body class="body-wrapper">

        <div class="main_wrapper">

            <?php include './header.php'; ?>

            <div id="main_slider" class="banner carousel slide" id="recommended-item-carousel" data-ride="carousel">
                <div class="slides carousel-inner">
                     <?php
                                                $count=0;
                                                    while($row = mysqli_fetch_assoc($execute))
                                                    {
                                                    
                                                        $count++;
                                                        if($count==1)
                                                        {
                                                            echo ' <div class="item active">';
                                                        }
                                                        else{
                                                            echo ' <div class="item">';
                                                            
                                                        }
                                                ?>
                   
                    
                    <img src="admin/<?php echo $row['url']; ?>" alt="<?php echo $row['name']; ?>" />

                    </div>
                                                <?php }?>
 <!--
                    <div class="item">
                        <img src="img/home/slider/2.jpg" alt="" />

                    </div>
                    <div class="item">
                        <img src="img/home/slider/3.jpg" alt="" />

                    </div>
                    <div class="item">
                        <img src="img/home/slider/4.jpg" alt="" />

                    </div>
                    <div class="item">
                        <img src="img/home/slider/5.jpg" alt="" />

                    </div>
                    <div class="item">
                        <img src="img/home/slider/6.jpg" alt="" />

                    </div>
                    -->

                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <img src="img/home/slider/prev.png">
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <img src="img/home/slider/next.png">
                </a>
            </div><!--end banner-->
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-xs-12">
						<img src="img/csoreport.jpg" alt="" class="img-responsive" />
					</div>
				</div>
			</div>
            <div class="aboutArea">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-xs-12">
                            <div class="aboutTitle">
                                <h2>Our Research Areas</h2>
                            </div><!-- aboutTitle -->
                        </div><!-- col-sm-3 col-xs-12 -->
                    </div><!-- row clearfix -->

                    <div class="about_inner clearfix">
                        <div class="row" style="">
                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    
                                        <img src="img/home/learn/innovation.jpg" alt="" class="img-responsive" />
                                        
                                        
                                    
                                </div><!-- aboutImage -->
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    
                                        <img src="img/home/learn/primaryedu.jfif" alt="" class="img-responsive" />
                                        
                                       
                                   
                                </div><!-- aboutImage -->
                            </div>


                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    
                                        <img src="img/home/learn/agriandrural.jfif" alt="" class="img-responsive" />
                                        
                                        
                                   
                                </div><!-- aboutImage -->
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                <div class="aboutImage">
                                    
                                        <img src="img/home/learn/public-health.jpg" alt="" class="img-responsive" />
                                        
                                       
                                   
                                </div><!-- aboutImage -->
                            </div>


                        </div><!-- row -->
                    </div><!-- about_inner -->

                </div><!-- container -->
            </div><!-- aboutArea -->

            <div class="mainContent clearfix">
                <div class="container">
                    <div class="row clearfix">

                        <div class="col-sm-8 col-xs-12">
                            <div class="videoNine clearfix">

                                <div class="videoArea clearfix">
                                    <h3>Founder</h3>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-xs-12 videoLeft">
                                            <img class="img-responsive" src="img/home/profARROY.jpg"><br>
                                            <span><h4>Late Prof. A.R. Roy</h4></span>
                                            <span><a href="#">Founder Director/ Member Secretary</a><br></span>
                                            <span><a href="#">October 1985 to May 01, 1990</a></span>
                                        </div><!-- videoLeft -->
                                        <div class="col-lg-7 col-md-7 col-xs-12 videoRight" STYLE="text-align: justify">
                                            <p>
                                                <strong>Professor Anadi Ranjan Roy</strong> (1920-1990) took M.Sc. Degree in Pure Mathematics in 1942 and in Statistics in 1944, both from Calcutta University. After completing his postgraduate, he joined the Indian Council of Agricultural Research and rose to the position of Professor of Statistics there. During his stay at Calcutta, he had the privilege of being taught by Professor P.C. Mahalanobis, Professor R.C. Bose, and Professor P.K. Bose among others. Subsequently, he proceeded to USA for doctoral degree from Stanford University on a Fulbright Grant where he worked with several stalwarts including Professor Charles Stein, Herman Chernoff, and Meyer Girshick. His teachers and research associates/supervisors were highly impressed by his research work and potentials. In 1959, he joined the Department of Statistics, Lucknow University as Professor and Head and continued to hold the position till his retirement in 1980.

                                            </p>
                                            <a href="prof_A_K_ROY.php" class="btn btn-block learnBtn">Learn More</a>
                                        </div><!-- videoRight -->
                                    </div><!-- row -->
                                </div><!-- videoArea -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="photo_gallery custom">
                                            <h1 style="text-align:center"> Our Publication</h1>
          <ul class="gallery ">
              <li>
              <a href="#" title="">
                
              </a>
            </li>
            <li>
              <a href="img/decadalgrowth.jpg" title="">
                <img src="img/decadalgrowth.jpg" alt="">
                
              </a>
            </li>
            <li>
              <a href="img/bookaknigam.jpg" title="">
                <img src="img/bookaknigam.jpg" alt="">
                
              </a>
            </li>
            
            
           
          </ul>
</div>
                                    </div>
                                    
                                </div>

                                <div class="related_post_sec single_post">
                                    <h3>Ongoing Projects</h3>
                                    <ul>
                                        <li>
                                            <span class="rel_thumb">
                                                <a href="single-post-right-sidebar.html"><img src="img/events/ongoing1.jpg" alt="inauguration"></a>
                                            </span><!--end rel_thumb-->
                                            <div class="rel_right">
                                                <h4><a href="single-post-right-sidebar.html">Construction of SDG Index and Development of Monitoring Framework  for the State of Uttrakhand </a></h4>
                                                <div class="meta">
                                                    <span class="author">Posted in: <a href="#">Ongoing Projects</a></span>
                                                    <span class="date">on: <a href="#">25th March, 2019, Uttarakhand, India</a></span>
													<span class="author"><h4>Source of fund:</h4> <a href="#">Directorate of Economics & Statistics, Govt. of Uttrakhand, Dehradun</a></span>
                                                </div>
                                               
                                            </div><!--end rel right-->
                                        </li>
                                       <li>
                                            <span class="rel_thumb">
                                                <a href="single-post-right-sidebar.html"><img src="img/events/ongoing1.jpg" alt="inauguration"></a>
                                            </span><!--end rel_thumb-->
                                            <div class="rel_right">
                                                <h4><a href="single-post-right-sidebar.html">Preparation of Food and Nutrition  Insecurity Atlas of  Uttrakhand </a></h4>
                                                <div class="meta">
                                                    <span class="author">Posted in: <a href="#">Ongoing Projects</a></span>
                                                    <span class="date">on: <a href="#">25th March, 2019, Uttarakhand, India</a></span>
													<span class="author"><h4>Source of fund:</h4> <a href="#">Directorate of Economics & Statistics, Govt. of Uttrakhand, Dehradun</a></span>
                                                </div>
                                               
                                            </div><!--end rel right-->
                                        </li>
                                    </ul>
                                </div><!--related_post_sec-->

                            </div><!--videoNine-->
                        </div><!-- col-sm-8 col-xs-12 -->

                        <div class="col-sm-4 col-xs-12" >
                            <div class="list_block related_post_sec" style="display:none">
                                <div class="upcoming_events" >
                                    <h3>Upcoming Events</h3>
                                    <ul>
                                        <marquee direction="up">
                                            <li class="related_post_sec single_post">
                                                <span class="date-wrapper">
                                                    <span class="date"><span>12</span>March,20</span>
                                                </span>
                                                <div class="rel_right">
                                                    <h4><a href="single-events.html">Workshop on Public Health</a></h4>
                                                    <div class="meta">
                                                        <span class="place"><i class="fa fa-map-marker"></i>BBAU, Main Campus</span>
                                                        <span class="event-time"><i class="fa fa-clock-o"></i>09.00 am</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="related_post_sec single_post">
                                                <span class="date-wrapper">
                                                    <span class="date"><span>02</span>April,20</span>
                                                </span>
                                                <div class="rel_right">
                                                    <h4><a href="single-events.html">Discussion on latest Trends and techniques in data analysis</a></h4>
                                                    <div class="meta">
                                                        <span class="place"><i class="fa fa-map-marker"></i>Lucknow University, Statistics Dept</span>
                                                        <span class="event-time"><i class="fa fa-clock-o"></i>11.00 am</span>
                                                    </div>
                                                </div>
                                            </li>                  
                                        </marquee>
                                    </ul>
                                    <a href="events-3col.html" class="btn btn-default btn-block commonBtn">More Events</a>
                                </div>
                            </div><!-- end list_block -->
                            <div class="formArea clearfix">
							<a href="#" class="btn btn-block btn-success" style="font-size:30px">Donate Us |<span class="glyphicon glyphicon-heart"></span></a>
                                <div class="formTitle">
                                    <h3>LEGAL STATUS</h3>
                                    <ul>
                                        <li><strong><i class="fa fa-balance-scale" aria-hidden="true"></i>  Registered: </strong> Under Societies Registration Act. 1860, Registration no. 3458/85-86, renewed on 26/10/2015</li>
                                        <li><strong><i class="fa fa-credit-card" aria-hidden="true"></i>   PAN Card Details: </strong> AAATI0945C</li>
                                        <li><strong><i class="fa fa-credit-card-alt" aria-hidden="true"></i>  TAN No.: </strong> LKN105015D</li>
                                        <li><strong><i class="fa fa-line-chart" aria-hidden="true"></i>  12A: </strong> IASDS is registered under 12A of Income Tax  - Sl. No.9/87-88 vide letter no.58/59 {23}/85-86/rd0 dated 19.08.1987.</li>
                                        <li><strong><i class="fa fa-heart" aria-hidden="true"></i>  80 G Donation Exempted: </strong> Approval no. CIT Exemption, Lucknow/80G/2019-20/10174; 
Order no. ITBA/EXM/S/80G/2019-20/1021214118(1) dated 28.11.2019
 issued in perpetuity</li>
                                        <li><strong><i class="fa fa-registered" aria-hidden="true"></i>  NITI AAYOG registration ID: </strong> UP/2012/0052417</li>
                                        <li><strong><i class="fa fa-id-badge" aria-hidden="true"></i>  DSIR: </strong> Recognized by DSIR vide letter no. 13/293/2016-TU-V dated 07/10/2016</li>

                                    </ul>                               
                                </div><!-- formTitle -->

                            </div>
							<div class="formArea clearfix">
							
                                <div class="formTitle">
                                    <h3>MEMORANDUM OF ASSOCIATION</h3>
									<a href="moa.php">
                                    <img src="img/memo.jfif" class="img-thumbnail" alt="moa"> </a>                              
                                </div><!-- formTitle -->

                            </div>
                            <div class="formArea clearfix" style="display:none">
                                <div class="formTitle">
                                    <h3>Find Published Article</h3>
                                    <p>Offered in small class sizes with great emphasis on the demands of the specification and exam technique.</p>
                                </div><!-- formTitle -->
                                <form action="#" method="post">
                                    <div class="selectBox clearfix">
                                        <select name="guiest_id1" id="guiest_id1">
                                            <option value="0">Select Journal</option>
                                            <option value="1">IJSN</option>
                                            <option value="2">IJABR</option>
                                            <option value="3">IJEMS</option>
                                            <option value="3">GJBB</option>
                                        </select>
                                    </div><!-- selectBox -->
                                    <div class="selectBox clearfix">
                                        <select name="guiest_id2" id="guiest_id2">
                                            <option value="0">Select Issue</option>
                                            <option value="1">JAN</option>
                                            <option value="2">FEB</option>
                                            <option value="3">MARCH</option>
                                        </select>
                                    </div><!-- selectBox -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title of the Article">
                                    </div>
                                    <button type="submit" class="btn btn-default btn-block commonBtn">Search</button>
                                </form>
                            </div><!-- formArea -->

                        </div><!-- col-sm-4 col-xs-12 -->

                    </div><!-- row clearfix -->
                </div><!-- container -->
            </div><!-- mainContent -->

            <div class="count clearfix wow fadeIn paralax" data-wow-delay="100ms" style="background-image: url(img/home/paralax/paralax03.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <div class="paralax-text text-center">
                                 <h2>Our Work in various states of India</h2>
                            </div>
							<img class="img-responsive" src="img/ourpresence.png" alt="India">
                        </div><!-- col-sm-3 -->
                       
                      
                        <div class="col-xs-12 col-sm-4">
                            <div class="paralax-text">
                                 <h2>States</h2>
								 <ul>
								 <li>New Delhi</li>
									<li>Uttar Pradesh</li>
									<li>Uttrakhand</li>
									<li>Gujrat</li>
									<li>Himachal Pradesh</li>
									<li>Punjab</li>
									<li>Haryana</li>
									<li>Madhya Pradesh</li>
									<li>Chhattisgarh</li>
									<li>Bihar</li>
									<li>Jharkhand</li>
									<li>West Bengal</li>
									<li>Assam</li>
									<li>Shillong</li>
									<li>Maharashtra</li>
									<li>Karnataka</li>
									<li>Odhisa</li>
									<li>Rajasthan</li>
								 </ul>
                            </div>
                        </div><!-- col-sm-3 -->
                    </div><!-- row -->
                   <!-- row -->
                </div><!-- container -->
            </div><!-- count -->

            <div class="testimonial-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                          <!--  <div class="testimonial">
                                <div class="carousal_content">
                                    <p>I am glad that IASDS will give such a strong emphasis to the role of primary health
                                        care â€“ as a route to equity, prosperity, and social stability. These are the larger rewards of better
                                        health.</p>
                                </div>
                                <div class="carousal_bottom">
                                    <div class="thumb">
                                        <img src="img/about/cmpandey.jpg" alt="" draggable="false">
                                    </div>
                                    <div class="thumb_title">
                                        <span class="author_name">Prof. Chandra Mani Pandey</span>
                                        <span class="author_designation">President (Elect)â€“International Epidemiological Association, North
                                            Carolina<a href="#"> Statistics</a></span>
                                    </div>
                                </div>
                            </div> testimonial -->
							<div class="item_inner slider">
									<h3>Testimonials</h3>
									<div id="single_banner">
										
									<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-984px, 0px, 0px);"><li style="display: block; width: 328px; margin-right: 0px; float: left;" class="clone" aria-hidden="true">
												<p>I am glad that IASDS will give such a strong emphasis to the role of primary health
                                        care â€“ as a route to equity, prosperity, and social stability. These are the larger rewards of better
                                        health.</p>
												<div class="carousal_bottom">
													 <div class="thumb">
                                        <img src="img/about/cmpandey.jpg" alt="" draggable="false">
                                    </div>
                                    <div class="thumb_title">
                                        <span class="author_name">Prof. Chandra Mani Pandey</span>
                                        <span class="author_designation">President (Elect)â€“International Epidemiological Association, North
                                            Carolina<a href="#"> Statistics</a></span>
                                    </div>
												</div>
											</li>
											<li class="" data-thumb-alt="" style="width: 328px; margin-right: 0px; float: left; display: block;">
												<p>We had invited Professor A.K. Nigam to the Academy to help us in rendering the statistical advice for finalizing our All India Report on Land Refprms. He is extremely knowledgeable and his presence in the workshop would be very helpful for the future of this project.</p>
												<div class="carousal_bottom">
													<div class="thumb">
														<img src="img/courses/testi_thumb.png" draggable="false" alt="">
													</div>
													<div class="thumb_title">
														<span class="author_name">S.V. Bhave,

</span>
														<span class="author_designation">Chairman, Land Reforms Unit,
Lal Bahadur Academy of Administration, Mussoorie<a href="#"> Here</a></span>
													</div>
												</div>
											</li>
											<li style="display: block; width: 328px; margin-right: 0px; float: left;" data-thumb-alt="" class="">
												<p>Thank you for inviting me to the Memorial Function on 27th Aug. 07. The fact Dr. Sheila Vir will be a chief guest & will be honoured at the function makes me extremely happy and proud. I met Sheila at a recent Conclave at Chennai and heard about this noble gesture of yours. We in Uttar Pradesh are all proud of Sheila’s work as well as your work personally and through IASDS. 
It will be a privilege to be present in the occasion.
With kind regards.
</p>
												<div class="carousal_bottom">
													<div class="thumb">
														<img src="img/courses/testi_thumb.png" draggable="false" alt="">
													</div>
													<div class="thumb_title">
														<span class="author_name">Sehba Hussain 

</span>
														<span class="author_designation">Executive Director
Beti Foundation<a href="#">Here</a></span>
													</div>
												</div>
											</li>
											<li style="display: block; width: 328px; margin-right: 0px; float: left;" data-thumb-alt="" class="flex-active-slide">
												<p>It was kind of you to send a copy of the Prof. A.R.Roy Memorial Volume- it makes for interesting reading – and reiterates that determination finds favour with God and brings endeavours to fruition.
Please accept the heartiest felicitation from A2Z on completion of two fruitful decades of IASDS.
I am sure that the Institute will continue to serve the public by illuminating statistical research under your able stewardship.
</p>
												<div class="carousal_bottom">
													<div class="thumb">
														<img src="img/courses/testi_thumb.png" draggable="false" alt="">
													</div>
													<div class="thumb_title">
														<span class="author_name">Suneel K. Muttoo

</span>
														<span class="author_designation">Resident Advisor 
A2Z Project India<a href="#">Here</a></span>
													</div>
												</div>
											</li>
										<li class="clone" aria-hidden="true" style="width: 328px; margin-right: 0px; float: left; display: block;">
												<p>There is something very special about you and it becomes almost impossible for anyone not to be i8nfluenced by it. I am sorry that I could not be there from the beginning but it was very important for me to listen to the proceedings. Values are fast fading and I was able to see it in you and that’s enough for me to have liked every bit of the day. Congratulations!!!
I will be away for 10 days but I will give you a call once I am back.

</p>
												<div class="carousal_bottom">
													<div class="thumb">
														<img src="img/courses/testi_thumb.png" draggable="false" alt="">
													</div>
													<div class="thumb_title">
														<span class="author_name">Vishwajeet</span>
														<span class="author_designation">Jhon-Hopkins<a href="#"> Here</a></span>
													</div>
												</div>
											</li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="flex-active">3</a></li></ol></div><!--end banner-->
								</div>
                        </div><!-- col-xs-12 -->
                        <div class="col-xs-12 col-sm-6">
                            <div class="features">
                                <h3>Why Choose Us?</h3>
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i>Strives to generate statistical thinking and synthesize statistical sciences among other sciences in organizations engaged in development research so as to emerge with sound knowledge of implementable recommendations.
                                    </li>
                                    <li><i class="fa fa-check-circle-o"></i>Endeavors in capacity building of such organizations by advising them to use modern and appropriate statistical tools for evidence based, scalable and replicable outcomes.</li>
                                    <li><i class="fa fa-check-circle-o"></i>Conducts research studies, in-service training programs, provides consultancy, organises workshops on themes of global importance for other research organizations.</li>
                                    <li><i class="fa fa-check-circle-o"></i>Proves its merit by successfully intertwining statistical sciences in diversified areas like Primary Education, Agriculture & Rural Development, Health, Nutrition, HIV/AIDS, Urban Infrastructure Development including Water supply, Sanitation and Drainage, Waste Management, Hygiene and Socio-economic aspects.</li>

                                </ul>
                            </div>
                        </div><!-- col-xs-12 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- testimonial-section -->

            <div class="brandSection clearfix">
                <div class="container">
                    <div class="row">
                        <h2>Important Links: </h2>
                        <div class="col-xs-12">
                            <div class="owl-carousel partnersLogoSlider">
                                  <?php
                                  $sql="SELECT * FROM `implinks`";
                                  $run=mysqli_query($conn,$sql);
                                  while($row = mysqli_fetch_assoc($run))
                                  {
                                  ?>   
                                <div class="slide">
                                    <div class="partnersLogo clearfix">
                                        <a href="<?php echo $row['linkname'];?>"><img src="admin/<?php echo $row['brandurl'];?>" /></a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Brand-section -->

            <?php include './footer.php'; ?>

        </div>

        <?php include './footerlinks.php'; ?>
    </body>


</html>

