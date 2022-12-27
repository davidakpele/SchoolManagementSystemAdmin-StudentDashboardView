
<!DOCTYPE html>
<html>

<head>

	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<!-- Required CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/dist/css/skins/skin-yellow.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/pace/pace-theme-flash.css">
	
	<!-- Datatables Buttons -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

	<!-- textarea editor -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>admin/assets/bower_components/froala_editor/css/themes/royal.min.css">
	<!-- /texarea editor; -->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>admin/assets/dist/css/mystyle.css">
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<!-- Must Load First -->
<script src="<?=ASSETS?>admin/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>		
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<?php include_once 'components/HeaderLogo.php';?> 		
			<?php include_once 'components/Nav.php';?> 		
		</header>
    <!-- Sidebar -->
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <?php include_once 'components/SideBarHeader.php';?> 		
            <?php include_once 'components/SideBar.php';?>
        </section>
        <!-- /.sidebar -->
    </aside>
<!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dashboard <small>Application Data</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Dashboard</li>
                <li class="active">Application Data</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">		
    <div class="row">
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
        <div class="inner">
            <h3><?=(($data['NumParent'])?$data['NumParent'] : '0');?></h3>
            <p>Parents</p>
        </div>
        <div class="icon">
            <i class="">
                <img src="<?=ASSETS?>assets/img/parent1.png" alt="" style="max-width:90px">
            </i>
        </div>
        <a href="<?=ROOT?>Admin/Parents" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box"  style="background-color:#483D8B; color:#fff">
        <div class="inner">
            <h3><?=(($data['Studentcount'])?$data['Studentcount'] : '0');?></h3>
            <p>Student</p>
        </div>
        <div class="icon">
            <i class="">
                 <img src="<?=ASSETS?>assets/img/student.png" alt="" style="max-width:90px">
            </i>
        </div>
        <a href="<?=ROOT?>Admin/Students" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-maroon">
        <div class="inner">
            <h3><?=($data['lecturalCount'])?></h3>
            <p>Lecturer</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/professor.png" alt="" style="max-width:90px">        
        </div>
        <a href="<?=ROOT?>Admin/Professors" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-navy">
        <div class="inner">
            <h3><?=(($data['ReadOnly'])?$data['ReadOnly'] : '0');?></h3>
            <p>Administrators</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/admin.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/users" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>

     <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
        <div class="inner">
            <h3><?=(($data['App'])?$data['App'] : '0');?></h3>
            <p>Application</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/app.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/Application" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
     <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#8B008B; color:#fff">
        <div class="inner">
            <h3><?=(($data['faculty'])?$data['faculty'] : '0');?></h3>
            <p>Faculties</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/ft.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/Faculties" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
     <div class="col-lg-3 col-xs-6">
        <div class="small-box" style="background-color:#B22222; color:#fff">
        <div class="inner">
            <h3><?=(($data['department'])?$data['department'] : '0');?></h3>
            <p>Departments</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/dp.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/Department" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
     <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
        <div class="inner">
            <h3><?=(($data['CourseRow'])?$data['CourseRow'] : '0');?></h3>
            <p>Courses</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/cs.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/Courses" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-purple">
        <div class="inner">
            <h3>2</h3>
            <p>Data Analysis</p>
        </div>
        <div class="icon">
            <img src="<?=ASSETS?>assets/img/piedata.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/Analysis" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>1</h3>
            <p>Questions</p>
        </div>
        <div class="icon">
           <img src="<?=ASSETS?>assets/img/visa.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/soal" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
        <div class="inner">
            <h3>2</h3>
            <p>Results Generated</p>
        </div>
        <div class="icon">
             <img src="<?=ASSETS?>assets/img/dollar.png" alt="" style="max-width:90px">
        </div>
        <a href="<?=ROOT?>Admin/hasilujian" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
        <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-orange">
        <div class="inner">
            <h3>3</h3>
            <p>System Users</p>
        </div>
        <div class="icon">
            <img src="<?=ASSETS?>assets/img/setting.png" alt="" style="max-width:90px">
        </div>
        <a href="http://localhost/ci_exam/users" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    </div>

			</section>
			<!-- /.content -->
			</div>
			<?php include_once 'components/Footer.php';?>

			</div>
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

				function ajaxcsrf() {
					var csrfname = 'csrf_test_name';
					var csrfhash = '4546c4c40312eb1a952fb0d1002c7246';
					var csrf = {};
					csrf[csrfname] = csrfhash;
					$.ajaxSetup({
						"data": csrf
					});
				}

				function reload_ajax() {
					table.ajax.reload(null, false);
				}

				$(document).ready(function() {
					$('.summernote').summernote({
						toolbar: [
							// [groupName, [list of button]]
							['style', ['bold', 'italic', 'underline', 'clear']],
							['font', ['strikethrough', 'superscript', 'subscript']],
							['fontsize', ['fontsize']],
							['color', ['color']],
							['para', ['ul', 'ol', 'paragraph']],
							['height', ['height']]
						]
					});
				});
			</script>

			</body>

			</html>