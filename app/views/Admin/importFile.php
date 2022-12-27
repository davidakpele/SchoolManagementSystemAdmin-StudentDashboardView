<?php include_once 'components/HeaderLinks.php';?> 	
    <style>
       /* checkbox checked */
        input[type="checkbox"]:checked:before {
        content: '';
        display: block;
        width: 4px;
        height: 8px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        margin-left: 4px;
        margin-top: 1px;
        }
        #idm{
            overflow: scroll;
        }
    </style>
    <script>
        let base_url = '<?=ROOT?>';
    </script>
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
				<h1>Lecturer  <small>Import Lecturer Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Lecturer</li>
					<li class="active">Import Lecturer Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Import Lecturer Data</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="alert alert-info" style="padding-left: 40px">
                            <li>Please import data from excel, using the provided format</li>
                            <li>Data must not be empty, all must be filled in.</li>
                            <li>For course data, it can only be filled in using the course ID. <a data-toggle="modal" href="#matkulId" style="text-decoration:none" class="btn btn-xs btn-primary">View ID</a>.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#file" class="btn-default btn">Download Format</a>
                        </div>
                        <br>
                        <div class="row">
                            <form action="#preview" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <input type="hidden" name="csrf_test_name" value="25022f81aa7f34358b22bb702ebd3984" />
                                <label for="file" class="col-sm-offset-1 col-sm-3 text-right">Choose File</label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="file" name="upload_file">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <button name="preview" type="submit" class="btn btn-sm btn-success">Preview</button>
                                </div>
                            </form>            
                            <div class="col-sm-6 col-sm-offset-3">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="matkulId">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title text-center">Course Data</h4>
                            </div>
                            <div class="modal-body">
                                <table id="matkul" class="table table-condensed table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Course</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8</td>
                                            <td>Course 101</td>
                                            </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Course 102</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

<script>
    $(document).ready(function() {
        let table;
        table = $("#matkul").DataTable({"lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
        });
    });
</script>			
</section>
<!-- /.content -->
</div>
			<!--content-wrapper -->

    <?php include_once 'components/Footer.php'; ?>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?=ASSETS?>js/professor.js"></script>
    </body>
</html>