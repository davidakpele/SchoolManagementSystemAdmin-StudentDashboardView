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
				<h1>
					Lecturer 					<small>Lecturer Data</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Master </li>
					<li class="active">Lecturer Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
				<div class="box">
					<div class="box-header with-border"> 
						<h3 class="box-title">Master Lecturer Data</h3>
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
								<button id="delete__Btn" title="Delete This Professor" class="btn btn-sm btn-danger btn-flat" type="button"><i class="fa fa-trash"></i> Delete</button>
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
												style="float:center; color:#fff;">Mercy College Professors
												Management Table</strong>
										</th>
									</tr>
									<tr style="background:#ceede8;">
										<th>S/N</th>
										<th><input type="checkbox" id="chk_all" value=""/></th>
										<th>User Permit</th>
										<th>AccessCode</th>
										<th>Name</th>
										<th>Email</th>
										<th>Image</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 0?>
									<?php
										if ($data['All'])
										foreach ($data['All'] as $presult): ?>
										<?php if ($presult > 0) $i ++;?>
										<tr>
											<td><?=$i?></td>
											<?php 
												$SSD = $presult['Professor__id']; 
												$ToSendMail = $presult['Email'];
												$RecipicientName = $presult['Surname'].' '. $presult['Othername'];
											?>
										<th><input type="checkbox" id="dataX" class="checkboxid" name="checkuser[]" value="<?=$SSD?>" /></th>
										<td class="left" style="font-size: 11px;">
											<a href="<?=ROOT . "Admin/Professors?featured=".(($presult['featured'] == 0)?'1' : '0')?>&Professor__id=<?=$presult['Professor__id'];?>"
												class="btn btn-<?=(($presult['featured'] ==1)?'default':'danger')?> btn-xs"
												title="Grant Professor Access To Account">
												<i
													class="fa fa-<?=(($presult['featured'] ==1)?'minus':'plus')?>"></i>
												&nbsp
												<?=(($presult['featured'] == 1)? 'Access Granted': 'Account Disabled')?>
											</a>
										</td>
										<td class="left"><?=$presult['Accesscode']?></td>
										<td><?=$presult['Surname'].' '. $presult['Othername']?></td>
										<td>
											<button style="content:"\a";white-space: pre;" type="button" onclick="EmailComposerBox(<?=$SSD?>)" class="btn btn-primary btn-xs" id="myBtn" title="Compose Email & Send" data-toggle="modal" data-target="#modalForm">Send Email <i class="fa fa-envelope-square"></i></button>
										</td>
										<td class="left">
											<?php if($presult['Profile__Picture'] != ''):  ?>
												<img src="<?=PATHROOT.$presult['Profile__Picture']?>" class="rounded img-thumbnail" alt="<?=$presult['Surname'].' '.$presult['Othername']?>" style="width:40px; height:40.7px">
											<?php else : ?>
												<img src="<?=ASSETS?>img/avatar/emptyProfile.png" class="rounded img-thumbnail" alt="<?=$presult['Surname'].' '.$presult['Othername']?>" style="width:40px; height:40.7px">
											<?php endif; ?>
										</td>
										<td >
											<a href="<?=ROOT?>Admin/edit/<?=$SSD?>" class="btn btn-sm btn-primary btn-flat" title="Edit Professor Profile">Edit&nbsp;<i class="fa fa-edit"></i></a>&nbsp;&nbsp;
											<button type="button" class="btn btn-success btn-sm btn-flat" onclick="___SubmitAppointment(<?=$SSD;?>)" title="Appoint Professor To Certain Department">Appoint&nbsp;<i class="fa fa-calendar"></i></button>
											<button type="button" class="btn btn-sm btn-danger" onClick="juioDT(<?=$SSD?>);"title="Delete a Professor"><i class="fa fa-trash"></i></button>
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
<?php include_once 'components/Footer.php';?>

<script type="text/javascript" src="<?=ASSETS?>js/professor.js"></script>
	</body>
</html>