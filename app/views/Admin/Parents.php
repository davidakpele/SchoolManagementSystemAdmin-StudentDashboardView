<?php $this->view('Admin/components/HeaderLinks');?> 
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
        let base_url = '<?=ROOT?>Admin';
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
			<?php $this->view('Admin/components/HeaderLogo');?> 		
			<?php $this->view('Admin/components/Nav');?> 		
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
				<h1>
					Parents <small>Parents Data</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Master </li>
					<li class="active">Parents Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Master Parents Data</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
	</div>
    <div class="box-body">
		<div class="mt-2 mb-4">
            <a href="<?=ROOT?>Admin/add"><button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> Add Data</button></a>
            <a href="<?=ROOT?>Admin/import" class="btn btn-sm btn-flat btn-success"><i class="fa fa-upload"></i> Import</a>
			<div class="pull-right insiderBox" id="iz" style="display:none">
				<button id="delete__Btn" title="Delete This Parent" class="btn btn-sm btn-danger btn-flat" type="button"><i class="fa fa-trash"></i> Delete</button>
                <button disabled="disabled" class="btn btn-sm" style="background-color: #000000; border-radius:25px"><span class="pull-left" id="deletebadge" style="color: #fff;">Selected</span></button>
            </div>
		</div>
          <form action="" method="post" id="idm">
			<table
				class="table js-basic-example dataTable table-striped table-bordered table-hover"
				id="myTable" >
				<thead>
					<tr style="background:#21495c">
						<th colspan="8">
							<strong>ADINISTRATOR ONLY</strong>
							<strong class="text-center"
								style="float:center; color:#fff;">Mercy College Parents
								Management Table</strong>
						</th>
					</tr>
					<tr style="background:#ceede8;">
						<th>S/N</th>
						<th><input type="checkbox" id="chk_all" value=""/></th>
						<th>ParentID</th>
						<th>ChildID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Image</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0?>
					<?php
						if ($data['SqlData'])
						foreach ($data['SqlData'] as $presult): ?>
						<?php if ($presult > 0) $i ++;?>
						<tr>
							<td><?=$i?></td>
							<?php 
								$SSD = $presult['Parent___id']; 
								$FullName = $presult['First_name'].' '. $presult['Last_name'];
							?>
						<th><input type="checkbox" id="dataX" class="checkboxid" name="checkuser[]" value="<?=$SSD?>" /></th>
						<td><?=$SSD?></td>
						<td ><?=$presult['child__id']?></td>
						<td><?=$FullName?></td>
						<td><?=$presult['ParentEmail']?></td>
						<td class="left">
                            <?php if($presult['Profile___Picture'] != ''):  ?>
                                <img src="<?=PATHROOT.$presult['Profile___Picture']?>" class="rounded img-thumbnail" alt="<?=$presult['First_name'].' '.$presult['Last_name']?>" style="width:40px; height:40.7px">
                            <?php else : ?>
                                <img src="<?=ASSETS?>img/avatar/emptyProfile.png" class="rounded img-thumbnail" alt="<?=$presult['First_name'].' '.$presult['Last_name']?>" style="width:40px; height:40.7px">
                            <?php endif; ?>
						</td>
						<td >
							<a href="<?=ROOT?>Admin/pedit/<?=$SSD?>" class="btn btn-sm btn-primary btn-flat" title="Edit Parent Profile"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
							<button type="button" id="<?=$SSD?>" class="btn btn-sm btn-danger" onClick="juioDT(this.id);"title="Delete a Parent"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
		</form>
	</div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->view('Admin/components/Footer');?>

<script type="text/javascript" src="<?=ASSETS?>js/Parent.js"></script>
	</body>
</html>