<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$data['page_title'];?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Required CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>Admin/assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>Admin/assets/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>Admin/assets/dist/css/skins/skin-yellow.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/pace/pace-theme-flash.css">
	<!-- Datatables Buttons -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/plugins/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">
	<!-- textarea editor -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/themes/royal.min.css">
	<!-- /texarea editor; -->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/dist/css/mystyle.css">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<script src="<?=ASSETS?>admin/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>			
<style>
	.inValidFeedBack{color:red}
	.photo_fix{position:right;float:right; width:12%; height:10%;margin-left: auto;margin-right: auto;max-width: 40%;max-height: 40%;object-fit: contain;}
	#pid{align-items: center;cursor: pointer;background-color: white;border: 1px solid lightgray;border-bottom: 0;flex: 0.2;height: fit-content;border-top-left-radius: 10px;border-top-right-radius: 10px;text-align:right;object-fit: contain;vertical-align: middle;margin-right:40px;justify-content: space-evenly;}
	.statusMsg{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
	.error-ico{padding-left:25px;background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
	.success {background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
	.success-ico {padding-left: 60px;background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;}
	.errContainer{margin: 0 auto;}
    .form-group.has-error .help-block1, .help-block2, .help-block3, .help-block4, .help-block5, .help-block6, .help-block7{color: #dd4b39;}
</style>
<script type="text/javascript">
	let base_url = '<?=ROOT?>';
</script>

<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?=ROOT?>Admin/" class="logo">
                <span class="logo-mini"><b>SMS</b></span>
                <span class="logo-lg"><b>M</b>ecry <b>C</b>ollege <b>S</b>ystem </span>
            </a>
			<nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://localhost/ci_exam/assets/dist/img/usersys-min.png" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?=((isLoggedInAdmin())?'Administrator': 'No User');?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://localhost/ci_exam/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
                                    <p>
                                        Admin Williams                            <small>Member Since Mar, 2010</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?=ROOT?>Admin/edituser/1" class="btn btn-primary btn-flat">
                                            Edit Profile                            </a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" id="logout" class="btn btn-danger btn-flat">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>		
		</header>

		<!-- Sidebar -->
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?=ASSETS?>admin/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?=((isLoggedInAdmin())?'Administrator': 'No User');?></p>
                        <small>admin@mail.com</small>
                    </div>
                </div>	
				<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN MENU</li>
    <!-- Optionally, you can add icons to the links -->
        <li class=""><a href="<?=ROOT?>Admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview active menu-open">
        <a href="#"><i class="fa fa-folder-open"></i> <span>Master Data</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="">
                <a href="<?=ROOT?>Admin/Department">
                    <i class="fa fa-bars"></i> 
                        Department
                </a>
            </li>
            <li class="">
                <a href="<?=ROOT?>Admin/Class">
                    <i class="fa fa-bars"></i>
                        Class
                </a>
            </li>
            <li class="">
                <a href="<?=ROOT?>Admin/Course">
                    <i class="fa fa-bars"></i>
                        Course
                </a>
            </li>
            <li class="active">
                <a href="<?=ROOT?>Admin/Professors">
                    <i class="fa fa-bars"></i>
                        Lecturer
                </a>
            </li>
            <li class="">
                <a href="<?=ROOT?>Admin/Students">
                    <i class="fa fa-bars"></i>
                        Student
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview ">
        <a href="#"><i class="fa fa-link"></i> <span>Relation</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="">
                <a href="http://localhost/ci_exam/kelasdosen">
                    <i class="fa fa-bars"></i>
                    Class - Lecturer
                </a>
            </li>
            <li class="">
                <a href="http://localhost/ci_exam/jurusanmatkul">
                    <i class="fa fa-bars"></i>
                    Department - Course
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="<?=ROOT?>Admin/soal" rel="noopener noreferrer">
            <i class="fa fa-file-text"></i> <span>Question Bank</span>
        </a>
    </li>
	<li class="header">REPORTS</li>
        <li class="">
            <a href="<?=ROOT?>Admin/hasilujian" rel="noopener noreferrer">
                <i class="fa fa-file"></i> <span>Exam Results</span>
            </a>
        </li>
		<li class="header">ADMINISTRATOR</li>
			<li class="">
				<a href="<?=ROOT?>Admin/users" rel="noopener noreferrer">
					<i class="fa fa-users"></i> <span>User Management</span>
				</a>
			</li>
			<li class="">
				<a href="<?=ROOT?>Admnin/settings" rel="noopener noreferrer">
					<i class="fa fa-cogs"></i> <span>Settings</span>
				</a>
			</li>
	</ul>

			</section>
			<!-- /.sidebar -->
		</aside>		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Add Users  <small>Add Users  Data</small>
				</h1>
				<div class="errContainer">
					<div id="messagediv" class="success success-ico" style="display:none"></div>
					<p class="statusMsg error-ico" style="display:none"> </p>
				</div>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Add Users </li>
					<li class="active">Add Users  Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
				<form action="javascript:void(0)" id="isAddUser"  method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Form Add Users  Data</h3>
							<div class="box-tools pull-right">
								<a href="<?=ROOT?>Admin/users" class="btn btn-sm btn-flat btn-primary">
									<i class="fa fa-arrow-left"></i> Cancel
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4">
									<div class="form-group oji1">
										<label for="Surname">Surname:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Surname" id="Surname" value="" placeholder="Surname"/>
                                        <small class="help-block1"></small>
                                    </div>
									<div class="form-group oji2">
										<label for="Othername">Last Name:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Othername" id="Othername" value="" placeholder="Last Name:" />
                                        <small class="help-block2"></small>
                                    </div>
									<div class="form-group oji3">
										<label for="email">Student Email:<span class="text-danger">*</span></label>
										<input type="email" class="form-control" name="Email" id="email" value="" placeholder="Email"/>
                                        <small class="help-block3"></small>
									</div>
									<div class="form-group oji4">
										<label for="tel">Mobile:<span class="text-danger">*</span></label>
										<input type="tel" class="form-control" name="mobile" id="mobile" value="" />
                                        <small class="help-block4"></small>
									</div>
									<div class="form-group oji5">
										<label for="DBO:">Date of Birth:<span class="text-danger">*</span></label>
										<input type="date" class="form-control" name="Date_of_Birth" id="DOB"  value="" />
                                        <small class="help-block5"></small>
									</div>
									<div class="form-group oji6">
										<label for="Gender">Gender<span class="text-danger">*</span></label>
										<select name="Gender" id="gender" class="form-control select2" value="">
											<option value="" selected>--Empty--</option>
											<option value="Female">Male</option>
											<option value="Male">Female</option>
										</select>
                                        <small class="help-block6"></small>
									</div>
									<div class="form-group oji7">
										<label for="assign">Assign Role:<span class="text-danger">*</span></label>
										<select name="assign" id="assign" class="form-control select2" value="" name="rl[][rel]">
											<option value="" selected>--Empty--</option>
											<?php 
											$arr = array();
											foreach ($data['role'] as $i): ?>
											<option value="<?=$i['Id']?>" data-username="<?=$i['Level']?>"  data-user_id="<?=$data['id']?>"><?=$i['Level']?></option>
                                            <?php endforeach ;?>
										</select>
                                        <small class="help-block7"></small>
									</div>
									<div class="form-group pull-right">
										<button type="reset" class="btn btn-flat btn-danger">
											<i class="fa fa-rotate-left"></i> Reset
										</button>
										<button type="submit" id="isAddUser" class="btn btn-flat bg-green">
											<i class="fa fa-pencil"></i> Save
										</button>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</form>
			<script src="<?=ASSETS?>js/edit.js"></script>			
		</section>
			<!-- /.content -->
		</div>
		<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
         <p style="color:#b9b9b9;">&copy; All Right Reserved</p>
    </div>
    <!-- Default to the left -->
    <strong style="color:#b9b9b9;">Powered by <a href="<?=ROOT?>" style="text-decoration:none">Davap Integrated Services Ltd</a></strong>    
</footer>
</div>
<!-- Required JS -->
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Datatables Buttons -->
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/pace/pace.min.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/adminlte.min.js"></script>
<!-- Textarea editor -->
<script src="<?=ASSETS?>admin/assets/bower_components/codemirror/lib/codemirror.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/codemirror/mode/xml.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- App JS -->
<script src="<?=ASSETS?>admin/assets/dist/js/app/dashboard.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/plugins/table/datatable.js" type="text/javascript"></script>
</div> 
<!-- Custom JS -->
<script type="text/javascript">
	$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
		return {
			"iStart": oSettings._iDisplayStart,
			"iEnd": oSettings.fnDisplayEnd(),
			"iLength": oSettings._iDisplayLength,
			"iTotal": oSettings.fnRecordsTotal(),
			"iFilteredTotal": oSettings.fnRecordsDisplay(),
			"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
			"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
		};
	};
	function yesnoCheck() {
		yes1 = document.getElementById('Profile__Picture')
		if (document.getElementById('yesCheck').checked) {
			yes1.type = 'file';
		} else {
			yes1.type = 'hidden';
		}
	}
</script>

</body>

</html>