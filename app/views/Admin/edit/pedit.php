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
    <style>
        .form-group.has-error .help-block1, .help-block2, .help-block3{
            color: #dd4b39;
        }
    </style>
</head>

<!-- Must Load First -->
<script src="<?=ASSETS?>admin/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>		

<script type="text/javascript">
	let base_url = '<?=ROOT?>Admin/';
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
            </nav>		</header>

                    <!-- Sidebar -->
                    <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="http://localhost/ci_exam/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p class="hidden-xs"><?=((isLoggedInAdmin())?'Administrator': 'No User');?></p>
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
                                    <a href="<?=ROOT?>Admin/Student">
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
					User Management					<small>Edit User Data</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">User Management</li>
					<li class="active">Edit User Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
            <div class="row">
                <div class="col-sm-12 mb-4">
                <a href="<?=ROOT?>Admin/Parents" class="btn btn-default">
                    <i class="fa fa-arrow-left"></i> Cancel
                </a>
            </div>
                <div class="max-width" style="max-width: 540px;margin: 0 auto;background: #FFF;border-radius: 5px;margin: 0 auto;padding: 25px;">
                    <h4 class="header text-center">Parent Personal Data</h4>
                    <form action="javascript:void(e)" method="post" autocomplete="off">
                        <div class="form-group invalid1">	
                        <label for="FirstName" style=":#73879C;">FirstName:</label>
                            <input type="text" id="fname" data-id="<?=$data['Sqlreturn']->Parent___id?>" value="<?=$data['Sqlreturn']->First_name?>" class="form-control">
                            <small class="help-block1" style="color:red"></small>
                        </div>
                        <div class="form-group invalid2">
                            <label for="Last_name">LastName: </label>
                            <input type="text" value="<?=$data['Sqlreturn']->Last_name?>" id="lname" class="form-control">
                            <small class="help-block2" style="color:red"></small>
                        </div>
                        <div class="form-group invalid3">
                            <label for="email">Email: </label>
                            <input type="text" value="<?=$data['Sqlreturn']->ParentEmail?>" id="email" class="form-control">
                            <small class="help-block3" style="color:red"></small>
                        </div>
                        <div class="form-group invalid4">
                            <label for="ParentGender">Gender: </label>
                            <input type="text" value="<?=$data['Sqlreturn']->ParentGender?>" id="gender" class="form-control">
                            <small class="help-block4" style="color:red"></small>
                        </div>
                        <div class="form-group invalid5">
                            <label for="ParentDOB">Date of Birth: </label>
                            <input type="date" value="<?=$data['Sqlreturn']->ParentDOB?>" id="DOB" class="form-control">
                            <small class="help-block5" style="color:red"></small>
                        </div>
                        <div class="form-group invalid6">
                            <label for="Mobile">Mobile Number: </label>
                            <input type="text" value="<?=$data['Sqlreturn']->Mobile?>" id="tel" class="form-control">
                            <small class="help-block6" style="color:red"></small>
                        </div>
                         <div class="form-group invalid7">
                             <label for="Address">Address: </label>
                            <textarea class="form-control" col="6" row="4" value="<?=$data['Sqlreturn']->Address?>" id="address"><?=$data['Sqlreturn']->Address?></textarea>
                            <small class="help-block7" style="color:red"></small>
                        </div>
                    </form>
                    <div class="footer">
                        <button type="reset" class="btn btn-secondary btn-sm" id="kv" name="SubmitAppoint">Cancel</button>
                        <button type="submit" class="btn btn-success btn-sm" onclick="isEditData();">Save Data</button>
                    </div>
                </div>
   
        </section><!-- /.content -->
    </div>
			<!-- /.content-wrapper -->
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
<script src="<?=ASSETS?>js/adminEdituser.js"></script>
<script src="<?=ASSETS?>js/Parent.js"></script>
    </body>
</html>