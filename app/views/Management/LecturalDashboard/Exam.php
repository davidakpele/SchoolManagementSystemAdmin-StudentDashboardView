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
	<script src="<?=ASSETS?>js/pages/jquery.min.js"></script>
	<script src="<?=ASSETS?>js/pages/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="<?=ASSETS?>assets/img/favicon.ico" />
    <style>
		.img-thumbnail{align-items: center;background-color: white;border: 1px solid lightgray;border-bottom: 0;flex: 0.2;height: fit-content;border-top-left-radius: 10px;border-top-right-radius: 10px;text-align:center;position: relative;object-fit: contain;vertical-align: middle;display: flex;justify-content: space-evenly;flex-direction: column;}
		.img-thumbnail::hover{background-color:red;}
		.bold{text-transform: uppercase;}
		#imgs{margin-left: auto;margin-right: auto;max-width: 50%;max-height: 50%;height: 100px;width: 80px;object-fit: contain;justify-content: space-evenly;}
		.inValidFeedBack {color: #fd5d5d;font-weight: 600;font-size: 12.1px;}
		#ExamButtonSave{color: #fff; font-size:13px; margin-top:20px; border: 1px solid lightgray; border-radius: 8px 8px 8px 8px; height:35px; width:90px; background-color:#1f8ded; text-align:center;}
		#ExamButtonCancel{color: black; font-size:13px; border: 1px solid lightgray; border-radius: 8px 8px 8px 8px; height:35px; width:90px; background-color:#fff;text-align:center;}
		.error{font-size:13px; background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
		.error-ico{padding-left:70px;background: url(http://localhost/school/public/assets/bullet_error.png) #FAE8E8 no-repeat 30px center;}
		.success {background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
		.success-ico {padding-left: 60px;background: url(http://localhost/school/public/assets/bullet_add.png) #E4FFDE no-repeat 30px center;}
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
					<a href="<?=ROOT?>Management/LecturalDashboard/index">
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
								<span class="username username-hide-on-mobile"> <?=((isLoggedInLectural())?$_SESSION['Accesscode']: 'No User Found');?> </span> <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
							 <?php if(!isLoggedInLectural()): ?>
								<?php header('location:' . ROOT . 'Management/Log/'); ?>
								<?php else: ?>
								<li>
									<a href="<?=ROOT?>Management/LecturalDashboard/">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="<?=ROOT?>Management/LecturalDashboard/Settings/">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="<?=ROOT?>PagesController/LogoutLectural">
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
										<p><?=((null !== isLoggedInLectural())?$_SESSION['Accesscode']: 'David');?> </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
										<?=((null !==isLoggedInLectural())? 'Online': 'Offline');?> </span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start ">
								<a href="<?=ROOT?>Management/LecturalDashboard/" class="nav-link nav-toggle">
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
				<div class="page-content" id="formexam">
					<div class="page-bar"></div> 
					<?php 
					if ($_GET['Add']) {?>
						
					<?php }
					elseif ($_GET['Edit']) {
						# code...
					}else {?>
					
						<button type="button" class="btn btn-primary btn-xs" id="XBtn" data-toggle="modal" 
						data-target="#SeTExamTime__modalForm" >Set Time For All Exam
						<i class="fa fa-clock-o" ></i></button>
						<a href="<?=ROOT?>Management/Exam?Add=1"
					 class="btn btn-primary btn-sm pull-right" type="button">
					Add New Exam</a>
					<?php }?>
                    <?php if(isset($_GET['Add']) || isset($_GET['Set'])){?>
                    <a href="<?=ROOT?>Management/Exam/" class="btn btn-primary btn-sm pull-left"><i class="fa fa-arrow-left"></i>Go Back</a>
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="text-center">Setting New Exam</h3>
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="question">Ask Question</label>
                                        <input type="text" class="form-control" id="question" name="question" 
										placeholder="Enter your question here" 
                                        value="<?=((isset($_POST['question']))?$_POST['question']: '');?>">
                                        <span class="inValidFeedBack"><?=$data['questionError']?></span>
                                    </div>
									 <div class="form-group">
                                        <label for="question">How Do You Want The Questions To Be Answer??</label>
                                        <select class="form-control" id="AnswersButtonType" name="AnswersButtonType" 
											value="<?=((isset($_POST['AnswersButtonType']))?$_POST['AnswersButtonType']: '');?>">
											<option selected="selected" value="">--Select--</option>
											<option value="radio">Radio Button Format</option>
											<option value="checkbox">CheckBox Button Format</option>
											
                                        </select>
										<span class="inValidFeedBack"><?=$data['AnswersButtonTypeError']?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="correct_answer">Correct answer</label>
                                        <input type="text" class="form-control" id="correct_answer" 
                                        name="correct_answer" placeholder="Enter the correct answer here"
                                         value="<?=((isset($_POST['correct_answer']))?$_POST['correct_answer']: '');?>">
                                        <span class="inValidFeedBack"><?=$data['correct_answerError']?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="step-label" for="wrong_answer1">Option 1</label>
                                        <input type="text" class="form-control" id="wrong_answer1" 
                                        name="wrong_answer1" placeholder="Wrong answer 1" 
                                        value="<?=((isset($_POST['wrong_answer1']))?$_POST['wrong_answer1']: '');?>">
                                        <span class="inValidFeedBack"><?=$data['wrong_answer1Error']?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="step-label" for="wrong_answer2">Option 2</label>
                                        <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" 
                                        placeholder="Wrong answer 2" value="<?=((isset($_POST['wrong_answer2']))?$_POST['wrong_answer2']: '');?>">
                                        <span class="inValidFeedBack"><?=$data['wrong_answer2Error']?></span>
                                    </div>
                                     <div class="form-group">
                                        <label class="step-label" for="wrong_answer3">Option 3</label>
                                        <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" 
                                        placeholder="Wrong answer 3" value="<?=((isset($_POST['wrong_answer3']))?$_POST['wrong_answer3']: '');?>">
                                        <span class="inValidFeedBack"><?=$data['wrong_answer3Error']?></span>
                                    </div>
                                    <div class="form-group container1">
                                        <label class="step-label" for="wrong_answer3">Option 4</label>
                                        <div class="flex" style="display:flex">
                                            <br/>
                                            <input type="text" class="form-control" id="wrong_answer4" name="wrong_answer4" 
											placeholder="Wrong answer 4" value="<?=((isset($_POST['wrong_answer4']))?$_POST['wrong_answer4']: '');?>"/>
                                        </div>
                                        <span class="inValidFeedBack"><?=$data['wrong_answer4Error']?></span>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-large" value="submit" name="SetNewExamination">+ Add Question</button>
                                   
                                </form>
                            </div>
                        </div>
                    <?php }else{?>
                        <div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>POST EXAMINATIONS LIST </header>
													</div>
													<div class="card-body ">
														<div class="table-scrollable" style="max-width:990px">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4" style="max-width:990px">
																<thead>
																	<tr class="bg-primary">
																		<th class="text-center">#</th>
																		<th class="text-center">Examination ID</th>
																		<th class="text-center"> Question </th>
																		<th class="text-center"> Answer </th>
																		<th class="text-center"> Option 1 </th>
																		<th class="text-center"> Option 2 </th>
																		<th class="text-center"> Option 3 </th>
                                                                        <th class="text-center"> Actions </th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="odd gradeX">
																	 <?php foreach ($data['examTable'] as $presult): ?>
																	 <td><?=$presult['#']?></td>
                                                                     <td><?=$presult['Courseid'];?></td>
																	 <td><?=$presult['question'];?></td>
																	 <td><?=$presult['answer']?></td>
																	    <td><?=$presult['option 1'];?></td>
                                                                         <td><?=$presult['option 2']?></td>
                                                                         <td><?=$presult['option 3']?></td>
																		 <td style="display:flex">
                                                                         <?php $SSD = $presult['Courseid']; ?>
                                                                            <a href="<?=ROOT?>Management/Exam?Edit=<?=$SSD ;?>" class="btn btn-warning btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button onclick="___CallAcctFun(<?=$SSD?>);" data-id="<?=$SSD?>" class="btn btn-danger btn-xs" id="delete">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </button>
																		</td>
																	</tr>
																	    <?php endforeach?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal -->
						<div class="modal fade" id="SeTExamTime__modalForm" role="dialog" 
							tabindex="-1" aria-labelledby="SeTExamTime__modalForm"
							aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header" style="background-color:#008bc6; height: fit-content; justify-content: space-evenly;color:whitesmoke;flex-direction: column; object-fit: contain; align-items: center;">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title text-center" id="myModalLabel">Setting Examination Time Frame </h4>
									</div>
									<!-- Modal Body -->
									<div id="messagediv" class="success success-ico" style="display:none"></div>
									<div class="modal-body">
										<div id="error" class="error error-ico" style="display:none"></div>
										<form role="form" class="form-group" method="POST" id="ExamTimeSetUp" action="javascript:void(0)" autocomplete="off">
											<div class="col-md-12" >
												<label class="step-label" for="minute" >Minutes & Seconds</label>
                                        		<input type="time" id="emaxTime" class="form-control input-group-lg reg_name" value="<?=((isset($_POST['time']))?$_POST['time']: '');?>" name="time" placeholder="Minute & Second"/>
											</div>
										<!-- Modal Footer -->
											<div class="modal-footer" >
												<button type="submit" id="ExamButtonSave" class="submitBtn" name="SaveZoomDetails">Save</button>
												<button type="button" id="ExamButtonCancel" data-dismiss="modal">Cancel</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
                    <?php } ?>
			    </div>
			<!-- end page content -->
		</div>
	<!-- end page container -->
	<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="#" target="_top" class="makerCss">Redstar Theme</a>
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
        <script>
        function ___CallAcctFun(SSD) {
		const JavascriptHook = 
		{"____ExaminationID":SSD};
		let StringData = JSON.stringify(JavascriptHook);
        console.log(StringData);
        }
	$(document).ready(() => {
		$("#XBtn").click(() => {
			$("#SeTExamTime__modalForm").modal();
		});
	}); 
	$(document).ready(($) => {
    //hide messages
    $("#error").hide();
	$("#messagediv").hide();
	$("#ExamButtonCancel").hide();
    //on submit
    $('#ExamTimeSetUp').submit((e) => {
        e.preventDefault();
		$("#error").hide();
		let time = $("input#emaxTime").val();
        if (time == "") {
            $("#error").fadeIn().text(`Please Set The Exam Time For Your Students.`);
            $("input#emaxTime").focus();
            return false;
		}
		const Setcons = {"TimeSet": time};
		let TimeWrapper = JSON.stringify(Setcons);
		$.ajax({
            type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: TimeWrapper,// our data object
            url: "http://localhost/school/PagesController/ExamTime",// the url where we want to POST
            processData: false,
            encode: true,
            crossOrigin: true,
            async: true,
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Methods': '*',
                "Access-Control-Allow-Credentials": true,
                "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                "Access-Control-Allow-Origin": "*",
                "Control-Allow-Origin": "*",
                "cache-control": "no-cache",
                'Content-Type': 'application/json'
            },
        }).then((response) => {
            if (response.status == '200OK') {
				$("#error").fadeOut();
				$("#ExamButtonCancel").fadeIn();
                $("#messagediv").fadeIn().html(response.Successmessage);
            } else {
                $("#error").fadeIn().text(response.message);
            }
        }).fail((xhr, error) => {
            $("#error").fadeIn().text('Oops...Server is down! error');
        });
	});
});
    </script>
</body>
</html>