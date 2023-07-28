<?php include_once 'components/HeaderLinks.php';?> 	
    <style>
       /* checkbox checked */
        input[type="checkbox"]:checked:before {content: '';display: block;width: 4px;height: 8px;border: solid #fff;border-width: 0 2px 2px 0;-webkit-transform: rotate(45deg);transform: rotate(45deg);margin-left: 4px;margin-top: 1px;}
        #idm{overflow: scroll;}
        .form-group.has-error .help-block1, .help-block2{color: #dd4b39;}
    </style>
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
				<h1>Administrative <small>Department  Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">Subject</li>
				</ol>
			</section>
						<!-- Main content -->
			<section class="content container">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Courses Subjects</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="mt-2 mb-4">
                            <a data-toggle="modal" href="#add_new_subject" style="text-decoration:none">
                            <button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> 
                                Add New Subject </button></a>
                            <div class="pull-right insiderBox" id="iz" style="display:none">
                                <button id="delete__Btn" title="Delete " class="btn btn-sm btn-danger btn-flat" type="button"><i class="fa fa-trash"></i> Delete</button>
                                <button disabled="disabled" class="btn btn-sm" style="background-color: #000000; border-radius:25px"><span class="pull-left" id="deletebadge" style="color: #fff;">Selected</span></button>
                            </div>
                        </div>
                        <form action="" method="post" id="idm">
                            <table class="w-100 table js-basic-example dataTable table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th><input type="checkbox" id="chk_all" value=""/></th>
                                    <th>Course code</th>
                                    <th>Subject</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php $i = 0?>
                                    <?php
                                        if (!empty($data['subject_data'])):
                                            foreach ($data['subject_data'] as $presult): 
                                        $id = $presult['id'];
                                        if ($presult > 0) $i ++;?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <th><input type="checkbox" id="dataX" class="checkboxid" name="checkuser[]" value="<?=$id?>"/></th>
                                            <td><?=$presult['CourseCode']?></td>
                                            <td><?=$presult['subject_name']?></td>
                                        <td>
                                            <div class="flex" style="display:flex">
                                                <div class="text-center">
                                                    <a class="btn btn-xs btn-primary" href="<?=ROOT?>Admin/edit_subject/<?php echo $id;?>">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>&nbsp;
                                                    <button type="button" class="btn btn-xs btn-danger" onclick="hapus(<?=$id?>)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                    
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal fade" id="add_new_subject">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title text-center">Add New Data</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="javascript:void(e)" method="post" autocomplete="off">
                                            <div class="form-group invalid1">
                                                <label for="Course">Select Course: </label>
                                                <select  name="course" id="course" class="form-control" >
                                                    <option value="" selected>--Select--</option>
                                                    <?php foreach ($data['courses_data'] as $i): ?>
                                                        <option value="<?=$i['CourseID']?>"><?=$i['CourseTitle']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                                <small class="help-block1"></small>
                                            </div>

                                            <div class="form-group">
                                                <label for="coursecode">Course Code: </label>
                                                <input type="text" readonly value="" name="coursecode" id="coursecode" class="form-control">
                                                <input type="hidden" readonly value="" name="courseid" id="courseid" class="form-control">
                                            </div>
                                            <div class="form-group invalid2">
                                                <label for="subject">Subject name: </label>
                                                <input type="text" name="subject" id="subject" class="form-control">
                                                <small class="help-block2"></small>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" onclick="submit();">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
    <?php include_once 'components/Footer.php'; ?>
    <!-- Custom JS -->
<script type="text/javascript" src="<?=ASSETS?>js/add_subjects.js"></script>
</body>
</html>