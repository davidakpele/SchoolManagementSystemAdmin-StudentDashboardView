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
        <a href="<?=ROOT?>Admin/users" class="btn btn-default">
            <i class="fa fa-arrow-left"></i> Cancel
        </a>
    </div>
  
    <div class="<?=(($data['id'] ==1)?'col-sm-4':'col-sm-6')?>">
        <div id="errorMessage" class="error invalid-feedba" style="display:none;"></div>
        <div id="success" style="display:none; color:#000;"></div>
        <form action="javascript:void(0)"  id="user_info" method="post" accept-charset="utf-8">
            <input type="hidden" id="id" value="<?=$data['editdata']->Admin__id;?>"/>
            <input type="hidden" name="csrf_test_name" value="ffaba3dc06f075ce61743afbc7447b62" />                                             
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data User</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body pb-0">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control" value="<?=$data['editdata']->username;?>">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="first_name">First Name</label>
                                <input type="text" id="fname" class="form-control" value="<?=$data['editdata']->Surname;?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="lname" class="form-control" value="<?=$data['editdata']->Othername;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" value="<?=$data['editdata']->Email;?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btn-info" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>    
        </div>
        <div class="<?=(($data['id'] ==1)?'col-sm-4':'col-sm-6')?>">
            <form action="javascript:void(0)" id="<?=(($data['id'] ==1)?'isUpdataPassword':'user_level')?>" method="post" accept-charset="utf-8">
                <input type="hidden" name="id" value="<?=$data['editdata']->Admin__id;?>" />
                <input type="hidden" name="csrf_test_name" value="ffaba3dc06f075ce61743afbc7447b62" />
                <div class="box <?=(($data['id'] ==1)?'box-warning':'box-primary')?>">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?=(($data['id'] ==1)?'Change Password':'Level')?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body pb-0">
                        <div class="form-group oji1">
                            <label for="<?=(($data['id'] ==1)?'old':'level')?>"><?=(($data['id'] ==1)?'Current Password':'Level User')?></label>
                            <?php if($data['id'] ==1):?>
                            <input type="password" placeholder="Current Password" id="old" class="form-control">  
                            <?php else: ?>
                            <select id="level" name="level" class="form-control select2" style="width: 100%!important">
                                <option value="">Choose Level</option>
                                <?php foreach ($data['rolelist'] as $value):?>
                                <option <?=($value['Id'] === $data['editdata']->Role?'selected': '');?> data-username="<?=((isset($value['Id']))?$value['Level'] : '');?>" value="<?=((isset($value['Id']))?$value['Id'] : '');?>"><?=$value['Level'];?></option>
                                <?php endforeach;?>
                            </select>
                            <?php endif; ?>
                            <small class="help-block1"></small>
                        </div>
                    <?php if($data['id'] ==1):?>
                        <div class="form-group">
                            <div class="form-group oji2">
                                <label for="new">New Password</label>
                                <input type="password" placeholder="New Password" id="new" class="form-control">
                                <small class="help-block2"></small>
                            </div>
                            <div class="form-group oji3">
                                <label for="new_confirm">Confirmation Password</label>
                                <input type="password" placeholder="Confirmation Password" id="new_confirm" class="form-control">
                                <small class="help-block3"></small>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if($data['id'] ==1):?>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-flat btn-danger"><i class="fa fa-rotate-left"></i> Reset</button>
                            <button type="submit" id="btn-pass" class="btn btn-flat btn-primary">Change Password</button>            
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="box-footer">
                        <button type="submit" id="btn-level" class="btn btn-success">Save</button>
                    </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</section>
			<!-- /.content -->
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
    </body>
</html>