
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
				<?php endforeach;?>
				<div class="dropdown-divider"></div>
				<a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
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
					<?=((isLoggedInAdmin())?'Administrator': '');?>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
					<a class="dropdown-item" href="<?=ROOT?>Admin/Page-profile"><i class="dropdown-icon fe fe-user"></i> Profile</a>
					<a class="dropdown-item" href="<?=ROOT?>Admin/Settings/"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
					<a class="dropdown-item" href="<?=ROOT?>Admin/App-email">
						<span class="float-right">
							<span class="badge badge-primary">6</span>
						</span>
						<i class="dropdown-icon fe fe-mail"></i> Inbox
					</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
					<a class="dropdown-item" href="<?=ROOT?>PagesController/Logout"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>