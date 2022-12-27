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
        .form-group.has-error .help-block1, .help-block2, .help-block3, .help-block4, .help-block5, .help-block6, .help-block7{
            color: #dd4b39;
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
				<h1>Administrative <small>Class Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">Class Data</li>
				</ol>
			</section>
						<!-- Main content -->
			<section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Master Administration Data</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
	</div>
    <div class="box-body">
		<div class="mt-2 mb-4">
            <a data-toggle="modal" href="#matkulId" style="text-decoration:none"><button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> 
                Add New Class</button></a>
			<div class="pull-right insiderBox" id="iz" style="display:none">
				<button id="delete__Btn" title="Delete This Professor" class="btn btn-sm btn-danger btn-flat" type="button"><i class="fa fa-trash"></i> Delete</button>
                <button disabled="disabled" class="btn btn-sm" style="background-color: #000000; border-radius:25px"><span class="pull-left" id="deletebadge" style="color: #fff;">Selected</span></button>
            </div>
		</div>
          <form action="" method="post" id="idm">
			<table class="w-100 table js-basic-example dataTable table-striped table-bordered table-hover" id="myTable" >
				<thead>
                <tr>
                    <th>s/n</th>
                    <th><input type="checkbox" id="chk_all" value=""/></th>
                    <th>ClassTitle</th>
                    <th>Action</th>
                </tr>
            </thead>
				<tbody>
					<?php $i = 0?>
					<?php
						if ($data['class'])
						foreach ($data['class'] as $cresult): ?>
						<?php 
                        $id = $cresult['ClassID'];
                        if ($cresult > 0) $i ++;?>
						<tr>
							<td><?=$i?></td>
                            <th><input type="checkbox" id="dataX" class="checkboxid" name="checkuser[]" value="<?=$id?>" /></th>
                            <td><?=$cresult['Title']?></td>
                            <td>
                                <div class="flex" style="display:flex">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="editclass(<?=$id;?>)" title="Edit Class"> <i class="fa fa-pencil"></i></button>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?=$id?>)">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
					<?php endforeach?>
				</tbody>
			</table>
		</form>
	</div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="matkulId">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">Add New Data</h4>
                        </div>
                        <div class="modal-body">
                            <form action="javascript:void(e)" method="post" class="form-group" autocomplete="off">
                                <div class="col-md-12 invalid1">
                                    <label for="Classname">Class Name:* </label>
                                    <input type="text" name="Classname" id="Classname" class="form-control"  />
                                    <small class="help-block1" style="color:red"></small>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:30px;">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="submit();" style="margin-top:30px;margin-right:20px">Save Data</button>
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
<script type="text/javascript" src="<?=ASSETS?>js/class.js"></script>
<script>
   
</script>
</body>
</html>