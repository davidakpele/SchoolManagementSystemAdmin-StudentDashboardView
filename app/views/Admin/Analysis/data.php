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
	     
    <link href="<?=ASSETS?>admin/assets/library/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="<?=ASSETS?>admin/assets/library/daterangepicker.css" rel="stylesheet" />
    <script src="<?=ASSETS?>admin/assets/library/jquery.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/bootstrap-5/bootstrap.bundle.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/moment.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/daterangepicker.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/Chart.bundle.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/jquery.dataTables.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/library/dataTables.bootstrap5.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>		

    <script type="text/javascript">
        let base_url = '<?=ROOT?>Admin/';
    </script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
    </style>
</head>


<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
            <a href="<?=ROOT?>Admin/" class="logo">
                <span class="logo-mini"><b>SMS</b></span>
                <span class="logo-lg"><b><?=$data['settings']->schoolname?></b?> <b>S</b>ystem </span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- View  Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="<?=ASSETS?>assets/img/dp.jpg" class="user-image" alt="View  Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?=((isLoggedInAdmin())?'Administrator': 'No View ');?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?=ASSETS?>assets/img/dp.jpg" class="img-circle" alt="View  Image">
                                    <p>
                                        Admin Williams                            <small>Member Since Mar, 2010</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?=ROOT?>Admin/edituser/<?=$_SESSION['Admin__id']?>" class="btn btn-primary btn-flat">
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
                            <img src="<?=ASSETS?>assets/img/dp.jpg" class="img-circle" alt="View  Image">
                        </div>
                        <div class="pull-left info">
                            <p class="hidden-xs"><?=((isLoggedInAdmin())?'Administrator': 'No View ');?></p>
                            <small>admin@mail.com</small>
                        </div>
                    </div>
                   <ul class="sidebar-menu" data-widget="tree">
						<li class="header">MAIN MENU</li>
						<!-- Optionally, you can add icons to the links -->
							<li class="active">
								<a href="<?=ROOT?>Admin/dashboard">
									<i class="fa fa-dashboard"></i> 
									<span>Dashboard</span>
								</a>
							</li>
							<li class="">
								<a href="<?=ROOT?>Admin/Application">
									<i class="fa fa-bars"></i> 
									<span>Program</span>
								</a>
							</li>
							<li class="">
								<a href="<?=ROOT?>Admin/Faculties">
									<i class="fa fa-bars"></i>
									<span>Faculties</span>
								</a>
							</li>
							<li class="">
								<a href="<?=ROOT?>Admin/Department">
									<i class="fa fa-bars"></i>
									<span>Departments</span>
								</a>
							</li>
							<li class="">
								<a href="<?=ROOT?>Admin/Professors">
									<i class="fa fa-bars"></i>
									<span>Lecturers</span>
								</a>
							</li>
							<li class="">
								<a href="<?=ROOT?>Admin/Students">
									<i class="fa fa-bars"></i>
									<span>Students</span>
								</a>
							</li>
							<li class="">
								<a href="<?php echo ROOT.'Admin/Courses'?>">
									<i class="fa fa-bars"></i>
									<span>Courses</span>
								</a>
							</li>
							<li class="">
								<a href="<?php echo ROOT.'Admin/Class'?>">
									<i class="fa fa-bars"></i>
									<span>Classs</span>
								</a>
							</li>
							<li class="">
								<a href="<?php echo ROOT.'Admin/Semester'?>">
									<i class="fa fa-bars"></i>
									<span>Semesters</span>
								</a>
							</li>
							
							<li class="treeview ">
								<a href="#"><i class="fa fa-book"></i> <span>Manage Exam</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li class="">
										<a href="<?=ROOT.'Admin/exam'?>">
											<i class="fa fa-bars"></i>
											Exam Settings
										</a>
									</li>
									<li class="">
										<a href="<?=ROOT.'Admin/payment_record'?>">
											<i class="fa fa-bars"></i>
											Student Payment Records
										</a>
									</li>
								</ul>
							</li>
								<li class="header">ADMINISTRATOR</li>
									<li class="">
										<a href="<?=ROOT?>Admin/users" rel="noopener noreferrer">
											<i class="fa fa-users"></i> <span>User Management</span>
										</a>
									</li>
									<li class="">
										<a href="<?=ROOT?>Admin/settings?action=role" rel="noopener noreferrer">
											<i class="fa fa-cogs"></i> <span>Settings</span>
										</a>
									</li>
								</li>
							</li>
						</ul>
                </section>
                <!-- /.sidebar -->
            </aside>		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					View  User					<small>View  Data</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">View  User</li>
					<li class="active">View  Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
                <div class="modal-body">
				    <div class="x_panel" >
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <a href="<?=ROOT?>Admin/Students" class="btn btn-default">
                                    <i class="fa fa-arrow-left"></i> Cancel
                                </a>
                            </div>
                        </div>
                        <div class="x_content col-md-12">
                            <div class="container-fluid panel">
                                <div class="tab-content">
                                    <div class="container">
                                        <h1 class="mt-2 mb-3 text-center text-primary">
                                            Data Chart over the years <?=schoolname?> exist</h1>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col col-sm-9">Sales Data</div>
                                                    <div class="col col-sm-3">
                                                        <input type="text" id="daterange_textbox" class="form-control" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <div class="chart-container pie-chart">
                                                        <canvas id="bar_chart" height="40"> </canvas>
                                                    </div>
                                                    <table class="table table-striped table-bordered" id="order_table">
                                                        <thead>
                                                            <tr>
                                                                <th>Student Id</th>
                                                                <th>Student Name</th>
                                                                <th>Student Enrollment No</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
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
<!-- App JS -->
<script src="<?=ASSETS?>admin/assets/dist/js/app/dashboard.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/plugins/table/datatable.js" type="text/javascript"></script>
<script src="<?=ASSETS?>js/adminEdituser.js"></script>
<noscript>
	<style>
		table.table{
			width:100%;
			border-collapse:collapse
		}
		table.table td,table.table th{
			border:1px solid
		}
		.text-center{
			text-align:center
		}
	</style>
</noscript>
<script>
	$('#print_att').click(function () {
		var _c = $('.content-box').html();
		var ns = $('noscript').clone();
		var nw = window.open('', '_blank', 'width=900,height=600')
		nw.document.write(_c)
		nw.document.write(ns.html())
		nw.document.close()
		nw.print()
		setTimeout(() => {
			nw.close()
		}, 500);
	})
</script>
<script>

$(document).ready(function(){

    fetch_data();

    var sale_chart;

    function fetch_data(start_date = '', end_date = '')
    {
        var dataTable = $('#order_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"<?=ROOT?>Admin/_indexchart",
                type:"POST",
                data:{action:'fetch', start_date:start_date, end_date:end_date}
            },
            "drawCallback" : function(settings)
            {
                var sales_date = [];
                var sale = [];

                for(var count = 0; count < settings.aoData.length; count++)
                {
                    sales_date.push(settings.aoData[count]._aData[2]);
                    sale.push(parseFloat(settings.aoData[count]._aData[1]));
                }

                var chart_data = {
                    labels:sales_date,
                    datasets:[
                        {
                            label : 'Sales',
                            backgroundColor : '#337ab7',
                            color : '#fff',
                            data:sale
                        }
                    ]   
                };

                var group_chart3 = $('#bar_chart');

                if(sale_chart)
                {
                    sale_chart.destroy();
                }

                sale_chart = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data
                });
            }
        });
    }

    $('#daterange_textbox').daterangepicker({
        ranges:{
            'Today' : [moment(), moment()],
            'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days' : [moment().subtract(29, 'days'), moment()],
            'This Month' : [moment().startOf('month'), moment().endOf('month')],
            'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        format : 'YYYY-MM-DD'
    }, function(start, end){

        $('#order_table').DataTable().destroy();

        fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

    });

});

</script>
    </body>
</html>