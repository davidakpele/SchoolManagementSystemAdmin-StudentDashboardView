<div id="left-sidebar" class="sidebar">
    <h5 class="brand-name">Logo<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">University</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Admin</a></li>
    </ul>
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="active"><a href="<?=ROOT?>Admin/index"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Professors"><i class="fa fa-black-tie"></i><span>Professors</span></a></li>
                    <li><a href="<?=ROOT?>Admin/staff"><i class="fa fa-user-circle-o"></i><span>Staff</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Students"><i class="fa fa-users"></i><span>Students</span></a></li>
                    <li><a href="<?=ROOT?>Admin/departments"><i class="fa fa-users"></i><span>Departments</span></a></li>
                    <li><a href="<?=ROOT?>Admin/courses"><i class="fa fa-graduation-cap"></i><span>Courses</span></a></li>
                    <li><a href="<?=ROOT?>Admin/library"><i class="fa fa-book"></i><span>Library</span></a></li>
                    <li><a href="<?=ROOT?>Admin/holiday"><i class="fa fa-bullhorn"></i><span>Holiday</span></a></li>
                    <li class="g_heading">Extra</li>
                    <li><a href="<?=ROOT?>Admin/events"><i class="fa fa-calendar"></i><span>Calender</span></a></li>
                    <li><a href="<?=ROOT?>Admin/App-chat"><i class="fa fa-comments-o"></i><span>Chat App</span></a></li>
                    <li><a href="<?=ROOT?>Admin/App-contact"><i class="fa fa-address-book"></i><span>Contact</span></a></li>
                    <li><a href="<?=ROOT?>Admin/App-filemanager"><i class="fa fa-folder"></i><span>FileManager</span></a></li>
                    <li><a href="<?=ROOT?>Admin/our-centres"><i class="fa fa-map"></i><span>OurCentres</span></a></li>
                    <li><a href="<?=ROOT?>Admin/gallery"><i class="fa fa-camera-retro"></i><span>Gallery</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="tab-pane fade" id="menu-admin" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li><a href="<?=ROOT?>Admin/Payments"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Noticeboard"><i class="fa fa-dashboard"></i><span>Noticeboard</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Taskboard"><i class="fa fa-list-ul"></i><span>Taskboard</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Hostel"><i class="fa fa-bed"></i><span>Hostel</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Transport"><i class="fa fa-truck"></i><span>Transport</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Attendance"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Leave"><i class="fa fa-flag"></i><span>Leave</span></a></li>
                    <li><a href="<?=ROOT?>Admin/Setting"><i class="fa fa-gear"></i><span>Settings</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="page">

<div class="section-body" id="page_top">
<div class="container-fluid">
<div class="page-header">
<div class="left">
<div class="input-group">
<input type="text" class="form-control" placeholder="What you want to find">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button">Search</button>
</div>
</div>
</div>
<div class="right">
<ul class="nav nav-pills">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="page-empty">Empty page</a>
<a class="dropdown-item" href="page-profile">Profile</a>
<a class="dropdown-item" href="page-search">Search Results</a>
<a class="dropdown-item" href="page-timeline">Timeline</a>
<a class="dropdown-item" href="page-invoices">Invoices</a>
<a class="dropdown-item" href="page-pricing">Pricing</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Auth</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="<?=ROOT?>Admin/Login">Login</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/Register">Register</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/Forgot-password">Forgot password</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=ROOT?>Admin/404">404 error</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/500">500 error</a>
</div>
</li>
</ul>
<div class="notification d-flex">
<div class="notification d-flex">
		<div class="dropdown d-flex" id="emailbox">
			<a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown">
				<i class="fa fa-envelope"></i>
				<span class="badge badge-success <?=(($data['emailstmt'])?'nav-unread' :'')?>"></span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
				<ul class="<?=(($data['emailstmt'])?'right_chat list-unstyled w350 p-0' :'')?>">
				<!-- Start  -->
				<?php 
				if ($data['emailstmt']):
					foreach ($data['emailstmt'] as $emailLoop): ?>
				<?php 
					$emailid =  $emailLoop['EmailID'];
					$sendername = $emailLoop['SenderName'];
					$senderemail=  $emailLoop['SenderMail'];
					$emailsubject=  $emailLoop['Subject'];
					$emailbody =  $emailLoop['message'];
					$emailtimesent= $emailLoop['Time'];
				?>
					<li class="online">
						<a href="<?=((isset($emailid))?ROOT.'Admin/Professors/Inbox?'.$emailid: '#')?>" class="media">
							<img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
							<div class="media-body">
								<span class="name"><?=((isset($sendername))?$sendername: '')?></span>
								<div class="message"><?=((isset($emailsubject))?$emailsubject:'')?></div>
								<small><?=((isset($emailtimesent))?$emailtimesent:'')?></small>
								<span class="badge badge-outline status"></span>
							</div>
						</a>
					</li>
					<!-- End -->
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
			<?php endforeach;?>
			<?php else: ?>
					<span class="text-center text-muted-dark" style="text-align:center">Empty Inbox</span>
			<?php endif;?>
				</ul>
			</div>
		</div>

<div class="dropdown d-flex">
<a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
<ul class="list-unstyled feeds_widget">
<li>
<div class="feeds-left">
<span class="avatar avatar-blue"><i class="fa fa-check"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">Campaign <strong class="text-blue font-weight-bold">Holiday</strong> is nearly reach budget limit.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-green"><i class="fa fa-user"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">New admission <strong class="text-green font-weight-bold">32</strong> in computer department.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-red"><i class="fa fa-info"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">6th sem result <strong class="text-red font-weight-bold">67%</strong> in computer department.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-azure"><i class="fa fa-thumbs-o-up"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">New Feedback <strong class="text-azure font-weight-bold">53</strong> for university assessment.</p>
</div>
</li>
</ul>
<div class="dropdown-divider"></div>
<a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
</div>
</div>
<div class="dropdown d-flex">
 <?php if(!isLoggedInAdmin()): ?>
 <?php header('location:' . ROOT . 'Administration/Default'); ?>
 <?php else: ?>
	<a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
		<span class="avatar" style="background-image: url(<?=ASSETS?>assets/img/dp.jpg)"></span> 
		<?=((isLoggedInAdmin())?$_SESSION['Fullname']: ' ');?>
	</a>
	<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
		<a class="dropdown-item" href="<?=ROOT?>Management/Page-profile"><i class="dropdown-icon fe fe-user"></i> Profile</a>
		<a class="dropdown-item" href="<?=ROOT?>Management/Settings/"><i class="dropdown-icon fe fe-settings"></i>Reset Passwors</a>
		<div class="dropdown-divider"></div>
		<?php if (isLoggedDashboardController()){?>
			<a class="dropdown-item" href="<?=ROOT?>PagesController/Migrate"><i class="dropdown-icon fe fe-log-out"></i>Migrate Dashboard</a>
			<a class="dropdown-item" href="<?=ROOT?>PagesController/LogoutLectural"><i class="dropdown-icon fe fe-power"></i> Sign out</a>
		<?php } else {?>
			<a class="dropdown-item" href="<?=ROOT?>PagesController/LogoutLectural"><i class="dropdown-icon fe fe-power"></i> Sign out</a>
		<?php } ?>
	</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>