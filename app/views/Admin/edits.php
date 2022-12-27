<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Student Data</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Required CSS -->
    <?php include_once 'components/HeaderLinks.php';?> 
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
</style>
<script type="text/javascript">
	let base_url = '<?=ROOT?>';
</script>

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
		</aside>		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Edit Student  <small>Edit Student  Data</small>
				</h1>
				<div class="errContainer">
					<div id="messagediv" class="success success-ico" style="display:none"></div>
					<p class="statusMsg error-ico" style="display:none"> </p>
				</div>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Edit Student </li>
					<li class="active">Edit Student  Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
				<form action="javascript:void(0)" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
					<div class="hidden" style="display:none">
						<div class="form-group">
							<label for="id">Student ID:<span class="text-danger">*</span></label>
							<input type="text" readonly class="form-control" name="id" id="id" value="<?=((isset($data['id']))?$data['id']: '')?>"  />
						</div>
						<div class="form-group">
							<label for="Accesscode">Accesscode:<span class="text-danger">*</span></label>
							<input readonly type="text" class="form-control" name="Accesscode" id="Accesscode" value="<?=$data['Ascode']?>"  />
						</div>
						<div class="form-group">
							<label for="NIN">NIN:</label>
							<input type="text" class="form-control" id="NIN" type="number" value="<?=$data['nin']?>" placeholder="NIN:"/>
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Form Edit Student  Data</h3>
							<div class="box-tools pull-right">
								<a href="<?=ROOT?>Admin/Students" class="btn btn-sm btn-flat btn-primary">
									<i class="fa fa-arrow-left"></i> Cancel
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4">
									<div class="form-group">
										<label for="Surname">Surname:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Surname" id="Surname" value="<?=$data['sname']?>" placeholder="Surname"/>
									</div>
									<div class="form-group">
										<label for="Othername">Last Name:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Othername" id="Othername" value="<?=$data['Oname']?>" placeholder="Last Name:" />
									</div>
									
									<div class="form-group">
										<label for="email">Student Email:<span class="text-danger">*</span></label>
										<input type="email" class="form-control" name="Email" id="email" value="<?=$data['email']?>" placeholder="Student Email"/>
									</div>
									<div class="form-group">
										<label for="tel">Mobile:<span class="text-danger">*</span></label>
										<input type="tel" class="form-control" name="mobile" id="mobile" value="<?=$data['tel']?>" placeholder="+(234) 5435-4542-34"/>
									</div>
									<div class="form-group">
										<label for="DBO:">Date of Birth:<span class="text-danger">*</span></label>
										<input type="date" class="form-control" name="Date_of_Birth" id="DOB"  value="<?=$data['DoB']?>" />
									</div>
									<div class="form-group">
										<label for="Gender">Gender</label>
										<select name="Gender" id="gender" class="form-control select2" value="">
											<option value="<?=$data['gn']?>" selected><?=$data['gn']?></option>
											<option value="Female">Male</option>
											<option value="Male">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label for="Relationship_sts">Relationship Status </label>
										<select name="Relationship_sts" id="rel" class="form-control select2" >
										<option value="<?=$data['relatx']?>"  selected><?=$data['relatx']?></option>
											<option value="Single">Single</option>
											<option value="Divored">Divored</option>
											<option value="Married">Married</option>
											<option value="Complicated">Complicated</option>
											<option value="Window">Window</option>
											<option value="In -Contract Marrige">In -Contract Marrige</option>
										</select>
									</div>
									
									<div class="form-group pull-right">
										<button type="reset" class="btn btn-flat btn-danger">
											<i class="fa fa-rotate-left"></i> Reset
										</button>
										<button type="submit" id="isEditStudent" class="btn btn-flat bg-green">
											<i class="fa fa-pencil"></i> Update
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
		<?php include_once 'components/Footer.php';?>
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