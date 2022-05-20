<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?=ASSETS?>fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?=ASSETS?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- full calendar -->
	<link href='<?=ASSETS?>assets/plugins/fullcalendar/packages/core/main.min.css' rel='stylesheet' />
	<link href='<?=ASSETS?>assets/plugins/fullcalendar/packages/daygrid/main.min.css' rel='stylesheet' />
	<link href='<?=ASSETS?>assets/plugins/fullcalendar/packages/timegrid/main.min.css' rel='stylesheet' />
	<link href='<?=ASSETS?>assets/css/pages/fullcalendar.css' rel='stylesheet' />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>assets/css/material_style.css">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- Theme Styles -->
	<link href="<?=ASSETS?>assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?=ASSETS?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?=ASSETS?>assets/img/favicon.ico" />
    <style>
    .img-thumbnail{
        align-items: center;
        cursor: pointer;
        background-color: white;
        border: 1px solid lightgray;
        border-bottom: 0;
        flex: 0.2;
        height: fit-content;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align:center;
        position: relative;
        object-fit: contain;
        vertical-align: middle;
        display: flex;
        flex-direction: column;
    }
    .bold{
         text-transform: uppercase;
    }
    #imgs{
        margin-left: auto;
        margin-right: auto;
        max-width: 50%;
        max-height: 50%;
        height: 100px;
        width: 80px;
        object-fit: contain;
        
    }
    </style>
</head>
<!-- END HEAD -->
<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="<?=ROOT?>Management/AccountantDashboard/index">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
									src="<?=ASSETS?>assets/img/flags/gb.png" class="position-left" alt=""> English <span
									class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="<?=ASSETS?>assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="<?=ASSETS?>assets/img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="<?=ASSETS?>assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="<?=ASSETS?>assets/img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="<?=ASSETS?>assets/img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="<?=ASSETS?>assets/img/prof/prof2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="<?=ASSETS?>assets/img/prof/prof3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="<?=ASSETS?>assets/img/prof/prof1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="<?=ASSETS?>assets/img/prof/prof8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="<?=ASSETS?>assets/img/prof/prof5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="<?=PATHROOT.$_SESSION['Profile__Picture']?>" style="width:35px; height:30px"/>
								<span class="username username-hide-on-mobile"> <?=((isLoggedInAccountant())?'Accountant': 'No User Found');?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
							 <?php if(!isLoggedInAccountant()): ?>
								<?php header('location:' . ROOT . 'Management/Log/'); ?>
								<?php else: ?>
								<li>
									<a href="<?=ROOT?>Management/AccountantProfile/">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="<?=ROOT?>Management/AccountantDashboard/Settings/">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="<?=ROOT?>PagesController/LogoutAccountant">
										<i class="icon-logout"></i> Log Out </a>
								</li>
								<?php endif; ?>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="<?=PATHROOT.$_SESSION['Profile__Picture']?>" class="img-circle user-img-circle"
											alt="User Image" style="width:66px; height:67px"/>
									</div>
									<div class="pull-left info">
										<p><?=((null !== isLoggedInAccountant())?$_SESSION['Accesscode']: 'David');?> </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
										<?=((null !==isLoggedInAccountant())? 'Online': 'Offline');?> </span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start ">
								<a href="<?=ROOT?>Management/Accountant/" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=ROOT?>Admin/All_professors/" class="nav-link "> <span class="title">All
												Professors</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=ROOT?>Admin/Add_professor" class="nav-link "> <span class="title">Add
												Professor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?=ROOT?>Admin/All_students/" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?=ROOT?>Admin/Add_student/" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Email</span>
									<span class="arrow"></span>
									<span class="label label-rouded label-menu label-danger">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.php" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.php" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.php" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.php" class="nav-link "> <span class="title">Fees
												Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees.php" class="nav-link "> <span class="title">Add Fees </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees_bootstrap.php" class="nav-link "> <span class="title">Add
												Fees Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fees_receipt.php" class="nav-link "> <span class="title">Fee
												Receipt</span>
										</a>
									</li>
								</ul>
							</li>
							
						
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i
										class="material-icons">description</i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item  ">
										<a href="login.php" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="sign_up.php" class="nav-link "> <span class="title">Sign Up</span>
										</a>
									</li>
									<li class="nav-item  ">
										<a href="forgot_password.php" class="nav-link "> <span class="title">Forgot
												Password</span>
										</a>
									</li>
									<li class="nav-item"><a href="user_profile.php" class="nav-link "><span
												class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contact.php" class="nav-link "> <span class="title">Contact Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.php" class="nav-link "> <span class="title">Lock
												Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.php" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-500.php" class="nav-link "> <span class="title">500 Page</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="blank_page.php" class="nav-link "> <span class="title">Blank
												Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle">
									<i class="material-icons">slideshow</i>
									<span class="title">Multi Level Menu</span>
									<span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-university"></i> Item 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="javascript:;" class="nav-link nav-toggle">
													<i class="fa fa-bell-o"></i> Arrow Toggle
													<span class="arrow "></span>
												</a>
												<ul class="sub-menu">
													<li class="nav-item">
														<a href="javascript:;" class="nav-link">
															<i class="fa fa-calculator"></i> Sample Link 1</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-clone"></i> Sample Link 2</a>
													</li>
													<li class="nav-item">
														<a href="#" class="nav-link">
															<i class="fa fa-cogs"></i> Sample Link 3</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-rss"></i> Sample Link 2</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-hdd-o"></i> Sample Link 3</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="javascript:;" class="nav-link nav-toggle">
											<i class="fa fa-gavel"></i> Arrow Toggle
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-paper-plane"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-power-off"></i> Sample Link 1</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="fa fa-recycle"></i> Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="fa fa-volume-up"></i> Item 3 </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar"></div>
                      <div class="row center">
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/student2.png" class="img-responsive center" id="imgs"/>
                                <span class="bold">students</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/Exam/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/notewrite.jpg" class="img-responsive center" id="imgs"/>
                                <span class="bold">set exam</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/file2.jpg" class="img-responsive center" id="imgs"/>
                                <span class="bold">manage files</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/sendemail.jpg" class="img-responsive center" id="imgs"/>
                                <span class="bold">email</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/Attendence.jpg" class="img-responsive center" id="imgs"/>
                                <span class="bold">Attendance</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/addNote.png" class="img-responsive center" id="imgs"/>
                                <span class="bold">add note</span> 
                            </div>
                        </a>
                        <div class="clearfix"></div>
                        <hr color="lightgray"/>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/parent1.png" class="img-responsive center" id="imgs"/>
                                <span class="bold">parents</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/zoom.jpg" class="img-responsive center" id="imgs"/>
                                <span class="bold">zoom class</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/class.png" class="img-responsive center" id="imgs"/>
                                <span class="bold">class</span> 
                            </div>
                        </a>
                       <a href="<?=ROOT?>Management/AccountantDashboard/">
                            <div class="col-md-2 col-2 col-lg-2 col-sm-6 col-xs-6 img-thumbnail  ">
                                <img src="<?=ASSETS?>icons/material-design-iconic-font/settings.png" class="img-responsive center" id="imgs"/>
                                <span class="bold">settings</span> 
                            </div>
                        </a> 
                    </div>
			    </div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="https://radixtouch.com/cdn-cgi/l/email-protection#2f5d4a4b5c5b4e5d5b474a424a6f48424e4643014c4042" target="_top" class="makerCss">Redstar Theme</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script data-cfasync="false" src="<?=ASSETS?>js/email-decode.min.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?=ASSETS?>assets/plugins/popper/popper.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?=ASSETS?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- bootstrap -->
	<script src="<?=ASSETS?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=ASSETS?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="<?=ASSETS?>assets/plugins/moment/moment.min.js"></script>

	<script src="<?=ASSETS?>assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<!-- calendar -->
	<script src='<?=ASSETS?>assets/plugins/fullcalendar/packages/core/main.min.js'></script>
	<script src='<?=ASSETS?>assets/plugins/fullcalendar/packages/interaction/main.min.js'></script>
	<script src='<?=ASSETS?>assets/plugins/fullcalendar/packages/daygrid/main.min.js'></script>
	<script src='<?=ASSETS?>assets/plugins/fullcalendar/packages/timegrid/main.min.js'></script>
	<script src="<?=ASSETS?>assets/js/pages/calendar/calendar.min.js"></script>

	<!-- Common js-->
	<script src="<?=ASSETS?>assets/js/app.js"></script>
	<script src="<?=ASSETS?>assets/js/layout.js"></script>
	<script src="<?=ASSETS?>assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?=ASSETS?>assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>
</html>