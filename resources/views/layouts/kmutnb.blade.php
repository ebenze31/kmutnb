<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StudentAffairs</title>
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	<link href="{{ asset('kmutnb/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="{{ asset('kmutnb/css/fullcalendar.css') }}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{ asset('kmutnb/css/owl.carousel.css') }}" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="{{ asset('kmutnb/css/prettyPhoto.css') }}" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="{{ asset('kmutnb/css/jquery.bxslider.css') }}" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="{{ asset('kmutnb/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('kmutnb/svg/style.css') }}" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="{{ asset('kmutnb/css/widget.css') }}" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="{{ asset('kmutnb/css/typography.css') }}" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="{{ asset('kmutnb/css/shortcodes.css') }}" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="{{ asset('kmutnb/style.css') }}" rel="stylesheet">
	<!-- Color CSS -->
	<link href="{{ asset('kmutnb/css/color.css') }}" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="{{ asset('kmutnb/css/responsive.css') }}" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="{{ asset('kmutnb/css/selectric.css') }}" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="{{ asset('kmutnb/css/jquery.sidr.dark.css') }}">
     <!-- icon -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">

    <style>
    	.main-shadow{
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.15), 0 4px 10px 0 rgba(0, 0, 0, 0.15);
        }
        .main-radius{
            border-radius: 8px;
        }
    </style>
	
</head>

<body>
	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
    <!-- register Modal -->
    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
            	<!--SIGNIN AS USER START-->
                <div class="user-box">
                	<h2>Sign up as a User</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="Name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign Up</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                </div>
                <!--SIGNIN AS USER END-->
                <div class="user-box-footer">
                    Already have an account? <a href="#">Sign In</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- register Modal end-->
    
    <!-- SIGNIN MODEL START -->
    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <div class="user-box">
                    <h2>Sign In</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign In</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                
                </div>
                <div class="user-box-footer">
                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- SIGNIN MODEL END -->
    
	<div id="sidr">
		<div class="logo_wrap">
			<a href="#"><img src="extra-images/logo.png') }}" alt=""></a>
		</div>
		<div class="clearfix clear"></div>
		<!-- Your content -->
		<div class="kf-sidebar">
			<!--KF_SIDEBAR_SEARCH_WRAP START-->
			<div class="widget widget-search">
				<h2>Search Course</h2>
				<form>
					<input type="search" placeholder="Keyword...">
				</form>
			</div>
			<!--KF_SIDEBAR_SEARCH_WRAP END-->

			<!--KF_SIDEBAR_ARCHIVE_WRAP START-->
			<div class="widget widget-archive ">
				<h2>Archives</h2>
				<ul class="sidebar_archive_des">
					<li>
						<a href=""><i class="fa fa-angle-right"></i>January 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>February 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>March 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>April 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>May 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>June 2016</a>
					</li>
					<li>
						<a href=""><i class="fa fa-angle-right"></i>August 2016</a>
					</li>
				</ul>
			</div>
			<!--KF_SIDEBAR_ARCHIVE_WRAP END-->

			<p class="copy-right-sidr">Design and Developed by Viicheck @ All Rights Reserved by Viicheck</p>
		</div>
	</div>
    	<!--HEADER START-->
    	<header id="header_2">
    		<!--kode top bar start-->
    		<div class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-5">
	    					<div class="pull-left">
	    						<em class="contct_2"><i class="fa fa-phone"></i> Call Us  on 0800 123 46 4747</em>
	    					</div>
	    				</div>
	    				<div class="col-md-7">
    						<div class="lng_wrap">
	    						<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fa fa-globe"></i>Language
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#"><i><img src="{{ asset('/kmutnb/images/english.jpg') }}" alt=""></i>English</a></li>
										<li><a href="#"><i><img src="{{ asset('/kmutnb/images/german.jpg') }}" alt=""></i>German</a></li> 
									</ul>
								</div>
	    					</div>
    						<ul class="login_wrap">
    							<!-- <li><a href="#" data-toggle="modal" data-target="#reg-box"><i class="fa fa-user"></i>Register</a></li> -->
    							<li><a href="#" data-toggle="modal" data-target="#signin-box"><i class="fa fa-sign-in"></i>เข้าสู่ระบบ</a></li>
    						</ul>	    					
	    					<ul class="top_nav">
	    						<li><a href="blog-detail.html">เกี่ยวกับ</a></li>
	    						<li><a href="event-detail.html">ผลงาน</a></li>
	    						<li><a href="our-courses.html">บริการ</a></li>
	    						<li><a href="contactus.html">ติดต่อ</a></li>
	    					</ul>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    		<!--kode top bar end-->
        	
	    	<!--kode navigation start-->
    		<div class="kode_navigation">
    			<div id="mobile-header">
                	<a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                </div>
    			<div class="container">
    				<div class="row">
    					<div class="col-md-2">
    						<div class="logo_wrap">
    							<a href="#"><img src="{{ asset('/kmutnb/images/logo/logo.gif') }}" alt="" width="100%"></a>
    						</div>
    					</div>
    					<div class="col-md-10 d-flex justify-content-end">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							<ul>
									<li style="float: right;"><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li>
									
									<li style="float: right;"><a href="aboutus.html">CONTACT</a></li>
									<li style="float: right;"><a href="aboutus.html">BLOG</a></li>
									<li style="float: right;"><a href="aboutus.html">SERVICES</a></li>
									<li style="float: right;"><a href="aboutus.html">STAFF</a></li>
    								<li style="float: right;"><a href="{{ asset('') }}">HOME</a></li>
									
									
									
									

		                            <!-- <li><a href="#">Event</a>
		                            	<ul>
		                                    <li><a href="our-event.html">our Event</a></li>
		                                    <li><a href="event-list.html">Event List</a></li>
		                                    <li><a href="event-detail.html">Event Detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Blog</a>
		                            	<ul>
		                                    <li><a href="our-blog.html">our Blog</a></li>
		                                    <li><a href="blog-2-column.html">blog 2 column</a></li>
		                                    <li><a href="blog-3-column.html">blog 3 column</a></li>
		                                    <li><a href="blog-left-sidebar.html">blog with left sidebar</a></li>
		                                    <li><a href="blog-right-sidebar.html">blog with right sidebar</a></li>
		                                    <li><a href="blog-detail.html">blog-detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Course</a>
		                            	<ul>
		                                	<li><a href="our-courses.html">Our Course</a></li>
		                                    <li><a href="courses-list.html">Course List</a></li>
		                                	<li><a href="courses-detail.html">Course Detail</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Teacher</a>
		                            	<ul>
		                                	<li><a href="our-teacher.html">Our Teacher</a></li>
		                                    <li><a href="our-teacher-details.html">our teacher details</a></li>
		                                </ul>
		                            </li>
		                            <li><a href="#">Gallery</a>
		                            	<ul>
		                                	<li><a href="gallery-masonary-2col.html">Masonary 2 Col </a></li>
		                                	<li><a href="gallery-masonary.html">Masonary 3 Col </a></li>
		                                	<li><a href="gallery-masonary-4col.html">Masonary 4 Col </a></li>
		                                    <li><a href="filterable-gallery.html">Simple gallery</a></li>
		                                </ul>
		                            </li>
									<li><a href="#">Pages</a>
		                            	<ul>
		                                    <li><a href="404.html">404 Page</a></li>
		                                </ul>
		                            </li>
									<li><a href="#">Contact US</a>
		                            	<ul>
		                                    <li><a href="contactus.html">Contact Us 1</a></li>
		                                    <li><a href="contactus-2.html">Contact Us 2</a></li>
		                                </ul>
		                            </li> -->
    							</ul>
    						</div>
    						<!--kode nav_2 end-->
    					</div>
    				</div>
    			</div>
    		</div>
    		<!--kode navigation end-->
		</header>
		<!--HEADER END-->




		
			<!--COURSE OUTER WRAP END-->
			@yield('content')
		<!--FOOTER START-->
		<footer>
			<!--EDU2 FOOTER CONTANT WRAP START-->
				<div style="padding: 0px 50px;">
					<div class="row">
						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>ประกาศ</h5>
								<ul>
									<li><a href="https://www.studentaffairs.kmutnb.ac.th/DWL-form/Letter/2564/2.%20PR/1.%20change%20hospital%202022.pdf">การเปลี่ยนสถานพยาบาลในโครงการประกันสังคม ประจำปี 2565</a></li>
									<li><a href="https://www.studentaffairs.kmutnb.ac.th/DWL-form/Letter/2564/2.%20PR/2.%20Board%20of%20STD..pdf">คำสั่งแต่งตั้งคณะกรรมการบริหารกองกิจการนักศึกษา</a></li>
									<li><a href="https://www.studentaffairs.kmutnb.ac.th/DWL-form/Letter/2564/2.%20PR/3.%20scholarship.pdf">รับสมัครสอบแข่งขันเพื่อรับทุนรัฐบาลฯ ระหว่างวันที่ 1 - 28 ธันวาคม 2564</a></li>
									<li><a href="https://www.studentaffairs.kmutnb.ac.th/DWL-form/Letter/2564/1.%20circular%20letter/1.%20cost%20of%20treatment%20Covid19.pdf">แนวทางการเบิกค่าตรวจหาเชื้อไวรัสโคโรน่า 2019 (Covid-19)</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-3">
							<div class="widget widget-links">
								<h5>แบบประเมิน</h5>
								<ul>
									<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfIAvi2ROQElKCKn-0PNf0UoE-71VtAGRCsV7WjRhx31pQsXw/closedform">แบบสอบถามความพึงพอใจการให้บริการกองกิจการนักศึกษา อาคาร 40 ปี มจพ.</a></li>
									<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSe48RyQ4fNLliute2gwrtwXel00DwLCNEf2j8kgCRzVN5TOlg/viewform">แบบสอบถามความพึงพอใจการให้บริการศูนย์อาหาร ชั้น 2 อาคาร 40 ปี มจพ.</a></li>
									<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfKP2AEP5WggK74lGLP2pcmqtj6Cwybffj3Hd7y31lr7-Bk-w/viewform">แบบสอบถามความพึงพอใจการให้บริการสนามกีฬา อาคาร 40 ปี มจพ.</a></li>
									<li><a href="https://docs.google.com/forms/d/e/1FAIpQLScWU3hFHOEtNQD5_30LCG7UpVfHlFHq5XprHJrCPCFCABNAiQ/viewform">แบบสอบถามความพึงพอใจ การให้บริการสนามกีฬา อาคารปฏิบัติการวิทยาศาสตร์การกีฬา</a></li>
								</ul>
							</div>
						</div>
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<div class="col-md-6">
							<div class="widget wiget-instagram">
								<h5>Link</h5>
								<div class="row">
										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fab fa-facebook-f"></i></span>
														<p>FACEBOOK</p>
													</a> 
													<!-- <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat.</p>
													-->
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-search-dollar"></i></span>
														<p>Job Fiar</p>
													</a> 
													<!-- <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat.</p>
													-->
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										
										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-database"></i></span>
														<p>ฐานข้อมูล</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										

										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-radio-alt"></i></span>
														<p>ON Air</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-trophy-alt"></i></span>
														<p>ผู้มีความสามารถ</p>
													</a> 
													<!-- <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat.</p>
													-->
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>

										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="far fa-futbol"></i></span>
														<p>จองสนามออนไลน์</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-building"></i></span>
														<p>หอพัก</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>

										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-phone-alt"></i></span>
														<p>สุขภาพจิต</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>

										<div class="col-md-2 col-xs-4">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-mail-bulk"></i></span>
														<p>ระบบสำนักงาน</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										<div class="col-md-3 col-xs-6">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="">
													<span><i class="fal fa-users-class"></i></span>
													<p>จรรยาบรรณ บุคลากร</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
										<div class="col-md-2 col-xs-6">
											<!-- INTERO DES START-->
											<div class="kf_intro_des2">
												<div class="kf_intro_des_caption2">
													<a href="#">
														<span><i class="fal fa-server"></i></span>
														<p>ฐานข้อมูลศิษย์เก่าดีเด่น</p>
													</a>
												</div>
											</div>
											<!-- INTERO DES END-->
										</div>
									</div>
							</div>
						</div>
				
							
									
							
						
						<!--EDU2 FOOTER CONTANT DES END-->

						<!--EDU2 FOOTER CONTANT DES START-->
						<!-- <div class="col-md-3">
							<div class="widget widget-contact">
								<h5>Contact</h5>
								<ul>
									<li>PO Box UN152468, 1 Street North, New Towm, California, USA</li>
									<li>Phone : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Fax : <a href="#"> 5 (012) 4565 789</a></li>
									<li>Email : <a href="#"> Info@info.com</a></li>
								</ul>
							</div>
						</div> -->
						<!--EDU2 FOOTER CONTANT DES END-->
					</div>
				</div>
		</footer>
		<!--FOOTER END-->
		<!--COPYRIGHTS START-->
		<div class="edu2_copyright_wrap">
			<div class="container">
				<div class="row ">
					<div class="col-md-1 ">
						<div class="d-flex justify-content-center" style="margin-top:7px;">
							<a class="" href="#"><img src="{{ asset('/kmutnb/images/logo/logo_kmutnb.png') }}" width="40px;" alt=""/></a>
						</div>
					</div>
					<div class="col-md-2 " style="margin-top:10px;">
						<div class="edu2_ft_logo_wrap">
						<span id="sfc29fg51hqetnket4mhnq72fpfgjzmgntt"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="copyright_des">
							<span>&copy; All Rights reserved. Powered By <a href="{{ asset('https://www.viicheck.com') }}"><img style="margin-top:-5px;" src="{{ asset('/kmutnb/images/logo/logo-flex-line.png') }}" width="60px;" alt=""/></a></span>
						</div>
					</div>

					<div class="col-md-3">
						<ul class="cards_wrap">
							<!-- <li style="float: right;"><a href="#"><img src="{{ asset('/kmutnb/images/logo/logo-flex-line.png') }}" width="60px;" alt=""/></a></li> -->
							<!-- <li><a href="#"><img src="{{ asset('/kmutnb/extra-images/mastercard.png') }}" alt=""/></a></li>
							<li><a href="#"><img src="{{ asset('/kmutnb/extra-images/americancard.png') }}" alt=""/></a></li>
							<li><a href="#"><img src="{{ asset('/kmutnb/extra-images/card.png') }}" alt=""/></a></li>
							<li><a href="#"><img src="{{ asset('/kmutnb/extra-images/descoverycard.png') }}" alt=""/></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--COPYRIGHTS START-->
    </div>
    <!--KF KODE WRAPPER WRAP END-->
	<!--Bootstrap core JavaScript-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://counter2.stat.ovh/private/counter.js?c=29fg51hqetnket4mhnq72fpfgjzmgntt&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="free counter"><img src="https://counter2.stat.ovh/private/freecounterstat.php?c=29fg51hqetnket4mhnq72fpfgjzmgntt" border="0" title="free counter" alt="free counter"></a></noscript>
	<script src="{{ asset('kmutnb/js/jquery.js') }}"></script>
	<script src="{{ asset('kmutnb/js/bootstrap.min.js') }}"></script>
	<!--Bx-Slider JavaScript-->
	<script src="{{ asset('kmutnb/js/jquery.bxslider.min.js') }}"></script>
	<!--Owl Carousel JavaScript-->
	<script src="{{ asset('kmutnb/js/owl.carousel.min.js') }}"></script>
	<!--Pretty Photo JavaScript-->
	<script src="{{ asset('kmutnb/js/jquery.prettyPhoto.js') }}"></script>
	<!--Full Calender JavaScript-->
	<script src="{{ asset('kmutnb/js/moment.min.js') }}"></script>
	<script src="{{ asset('kmutnb/js/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('kmutnb/js/jquery.downCount.js') }}"></script>
	<!--Image Filterable JavaScript-->
	<script src="{{ asset('kmutnb/js/jquery-filterable.js') }}"></script>
	<!--Accordian JavaScript-->
	<script src="{{ asset('kmutnb/js/jquery.accordion.js') }}"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="{{ asset('kmutnb/js/waypoints-min.js') }}"></script>
	<!--v ticker-->
	<script src="{{ asset('kmutnb/js/jquery.vticker.min.js') }}"></script>
	<!--select menu-->
	<script src="{{ asset('kmutnb/js/jquery.selectric.min.js') }}"></script>
	<!--Side Menu-->
	<script src="{{ asset('kmutnb/js/jquery.sidr.min.js') }}"></script>
	<!--Custom JavaScript-->
	<script src="{{ asset('kmutnb/js/custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
</body>
</html>
