<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Lecturer Data</title>
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
					Edit Lecturer  <small>Edit Lecturer  Data</small>
				</h1>
				<div class="errContainer">
					<div id="messagediv" class="success success-ico" style="display:none"></div>
					<p class="statusMsg error-ico" style="display:none"> </p>
				</div>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Edit Lecturer </li>
					<li class="active">Edit Lecturer  Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
				<form action="javascript:void(0)" id="formdosen" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
					<input type="hidden" name="method" value="add" />
					<input type="hidden" name="csrf_test_name" value="6b6d9318cf86bc2d7cadda3f449273f5" />
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Form Edit Lecturer  Data</h3>
							<div class="box-tools pull-right">
								<a href="<?=ROOT?>Admin/Professors" class="btn btn-sm btn-flat btn-primary">
									<i class="fa fa-arrow-left"></i> Cancel
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Professor__id">Professor ID:<span class="text-danger">*</span></label>
										<input type="text" readonly class="form-control" name="Professor__id" id="Professor__id" value="<?=$data['id']?>"  />
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Surname">Surname:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Surname" id="Surname" value="<?=$data['sname']?>" placeholder="Surname"/>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Middle__name">Middle Name:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Middle__name" id="Middle__name" value="<?=$data['mname']?>" placeholder="Middle Name:"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Othername">Last Name:<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="Othername" id="Othername" value="<?=$data['Oname']?>" placeholder="Last Name:" />
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Accesscode">Accesscode:<span class="text-danger">*</span></label>
										<input readonly type="text" class="form-control" name="Accesscode" id="Accesscode" value="<?=$data['Ascode']?>"  />
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="email">Lecturer Email"</label>
										<input type="email" class="form-control" name="Email" id="Email" value="<?=$data['email']?>" placeholder="Lecturer Email"/>
										<small class="help-block"></small>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="tel">Mobile:</label>
										<input type="tel" class="form-control" name="Telephone_No" id="Telephone_No" value="<?=$data['tel']?>" placeholder="+(234) 5435-4542-34"/>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="DBO:">Date of Birth:</label>
										<input type="date" class="form-control" name="Date_of_Birth" id="Date_of_Birth"  value="<?=$data['DoB']?>" />
									</div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Place of Birth:">Place of Birth:</label>
										<input type="text" class="form-control" name="Place__of__birth" id="Place__of__birth" value="<?=$data['PoD']?>" placeholder="Lagos"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Gender">Gender</label>
										<select name="Gender" id="Gender" class="form-control select2" value="">
											<option value="<?=$data['gn']?>" selected><?=$data['gn']?></option>
											<option value="Female">Male</option>
											<option value="Male">Female</option>
										</select>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Relationship_sts">Relationship Status </label>
										<select name="Relationship_sts" id="Relationship_sts" class="form-control select2" >
										<option value="<?=$data['relatx']?>"  selected><?=$data['relatx']?></option>
											<option value="Single">Single</option>
											<option value="Divored">Divored</option>
											<option value="Married">Married</option>
											<option value="Complicated">Complicated</option>
											<option value="Window">Window</option>
											<option value="In -Contract Marrige">In -Contract Marrige</option>
										</select>
									</div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Citizenship:">Citizenship:</label>
										<input type="text" class="form-control" name="Citizenship" id="Citizenship" value="<?=$data['Ctz']?>" placeholder="Africa (Nigeria)"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="NIN">NIN:</label>
										<input type="text" class="form-control" id="NIN" type="number" value="<?=$data['nin']?>" placeholder="NIN:"/>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Height">Height: </label>
										<select name="Height" id="Height" class="form-control select2" >
										<option value="<?=$data['Wat']?>"  selected><?=$data['Wat']?></option>
											<option value="1.45m">1.45m</option>
											<option value="1.55m">1.55m</option>
											<option value="1.60m">1.60m</option>
											<option value="1.66m">1.66m</option>
											<option value="1.71m">1.71m</option>
											<option value="1.78m">1.78m</option>
										</select>
									</div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Weight">Weight: </label>
										<select name="Weight" id="Weight" class="form-control select2" >
										<option value="<?=$data['Wat']?>"  selected>Select <?=$data['Wat']?></option>
											<option value="1.55m">1.55m</option>
											<option value="1.45m">1.45m</option>
											<option value="1.30m">1.30m</option>
											<option value="1.35m">1.35m</option>
											<option value="1.25m">1.25m</option>
											<option value="1.20m">1.20m</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Blood_Type">Blood Type: </label>
										<select name="Blood_Type" id="Blood_Type" class="form-control select2" >
										<option value="<?=$data['Bty']?>"  selected><?=$data['Bty']?></option>
											<option value="Group: A">Group: A</option>
											<option value="Group: B">Group: B</option>
											<option value="Group: AB">Group: AB</option>
											<option value="Group:-: O">Group:-: 0</option>
										</select>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Religion">Religion: </label>
										<select name="Religion" id="Religion" class="form-control select2" >
											<option value="<?=$data['Religion']?>"  selected><?=$data['Religion']?></option>
											<option value="Christianity">Christianity</option>
											<option value="Islam">Islam</option>
											<option value="Hinduism">Hinduism</option>
											<option value="Buddhism">Buddhism</option>
											<option value="Unaffiliated">Unaffiliated</option>
											<option value="Folk religions">Folk religions</option>
											<option value="None">None</option>
										</select>
									</div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Qualification">Qualification: </label>
										<select name="Qualification" id="Qualification" class="form-control select2" >
											<option value="<?=$data['QCT']?>"  selected><?=$data['QCT']?></option>
												<option value="BSc">BSc</option>
												<option value="PhD">PhD</option>
												<option value="HnD">HnD</option>
												<option value="College Degree">College Degree</option>
												<option value="OND">OND</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<label for="Address:">Address:</label>
										<textarea class="form-control" name="Address" id="Address" value="<?=$data['Add']?>" cols="10" rows="6" placeholder="Address: Plot 28 Kingstone Bridge K29Q HighWay"><?=$data['Add']?></textarea>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<br/>
										<label for="Profile Photo:">Profile Photo:</label>
										<?php if($data['Saved_image'] != ''):  ?>
                                                <div class="clearfix"></div>
                                                <div class="responsive ">
                                                    <img src="<?=PATHROOT. $data['Saved_image']?>" id="peck" class="img-responsive img-thumbnail" style="width:30%; height:8.9rem"><br/>
                                                    <br/>
													<a href="<?=ROOT?>Admin/deleteimg/<?=$data['id'];?>"  class="btn btn-danger btn-xs"style="margin-top:5px">
														<i class="fa fa-trash"></i>Remove Image
													</a><br/>
													<span style="text-decoration:underline; font-size:15px; font-weight:bold">Make a change?</span>&nbsp;&nbsp;&nbsp;
													Yes <input type="radio" value="1" onclick="yesnoCheck();" class="radiobase" name="yesno" id="yesCheck"/>&nbsp;&nbsp;
													No <input type="radio" value="2" onclick="yesnoCheck();" class="radiobase" name="yesno" id="noCheck"/>
													<br>
													<input type="text" name="img" id="defaultimg" value="<?=$data['Saved_image']?>" style="display:none">
													<input type="hidden" class="form-control" name="Profile__Picture" id="Profile__Picture" value="" />
                                                </div>
                                            <?php else: ?>
											<div class="clearfix"></div>
											<div class="responsive ">
												<img src="<?=ASSETS?>img/avatar/emptyProfile.png" id="peck" class="img-responsive img-thumbnail" style="width:20%; height:8.9rem"><br/>
												<br/>
												<span style="text-decoration:underline; font-size:15px; font-weight:bold">Make a change?</span>&nbsp;&nbsp;&nbsp;
												Yes <input type="radio" value="1" onclick="yesnoCheck();" class="radiobase" name="yesno" id="yesCheck"/>&nbsp;&nbsp;
												No <input type="radio" value="2" onclick="yesnoCheck();" class="radiobase" name="yesno" id="noCheck"/>
												<br/><small>The profile empty at the moment..!</small>
												<br>
												<input type="text" name="img" id="defaultimg" value="<?=$data['Saved_image']?>" style="display:none">
												<input type="hidden" class="form-control" name="Profile__Picture" id="Profile__Picture" value="" />
											</div>
								<?php endif; ?>
									</div>
								</div>
								<div class="col-md-12">
									<div class="pull-right"  style="margin-top:20px">
										<button type="reset" class="btn btn-flat btn-default">
											<i class="fa fa-rotate-left"></i> Reset
										</button>
										<button type="submit" id="isEdit" class="btn btn-flat bg-purple" style="width:200px">
											<i class="fa fa-save"></i> Save Data
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