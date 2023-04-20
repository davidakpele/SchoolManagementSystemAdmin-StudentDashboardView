<?php include_once 'components/HeaderLinks.php';?> 
</head>
<script src="<?=ASSETS?>admin/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>			
<style>
	.inValidFeedBack{color:red}
    .error {background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
	.photo_fix{position:right;float:right; width:12%; height:10%;margin-left: auto;margin-right: auto;max-width: 40%;max-height: 40%;object-fit: contain;}
	#pid{align-items: center;cursor: pointer;background-color: white;border: 1px solid lightgray;border-bottom: 0;flex: 0.2;height: fit-content;border-top-left-radius: 10px;border-top-right-radius: 10px;text-align:right;object-fit: contain;vertical-align: middle;margin-right:40px;justify-content: space-evenly;}
	.statusMsg{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
	.error-ico{padding-left:50px; background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
	.success {background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
	.success-ico {padding-left: 60px;background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;}
	.errContainer{margin: 0 auto;}
	.invalid{border:1px solid red;}
    
</style>
<script type="text/javascript">
	const id = '<?=((isset($data['id']))?$data['id']: '')?>';
	const pid = '<?=((isset($data['pid']))?$data['pid']: '')?>';
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
		</aside>		
		<!-- /.sidebar -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Add Student <small>Add Student Data</small></h1>
				<div class="errContainer">
					<div id="messagediv" class="success success-ico" style="display:none"></div>
					<p class="statusMsg error-ico" style="display:none"> </p>
				</div>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Add Student</li>
					<li class="active">Add Student Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
                <div id="error" class="error error-ico" style="display:none"></div>
                <div id="messagediv" class="success success-ico" style="display:none"></div>
				<form action="javascript:void(0)" id="addstudent" method="post" accept-charset="utf-8" enctype="multipart/form-data" autocomplete="off">
					<input type="hidden" name="method" value="add" />
					<input type="hidden" name="csrf_test_name" value="6b6d9318cf86bc2d7cadda3f449273f5" />
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Form Add Student Data</h3>
							<div class="box-tools pull-right">
								<a href="<?=ROOT?>Admin/Students" class="btn btn-sm btn-flat btn-primary">
									<i class="fa fa-arrow-left"></i> Cancel
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Application Type">Application Type:</label>
                                        <select class="form-control" name="Application__Typappe" id="Application__Type">
                                            <option selected value="">--Select--</option>
                                            <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                                            <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                                            <?php endforeach;?>
                                        </select>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Faculty Type">Faculty:</label>
                                        <select name="Faculty__Type" id="Faculty__Type" class="form-control select2">
                                            <option value=""  selected="">--select--</option>
                                        </select>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Department Type">Department:</label>
                                        <select name="Department__Type" id="Department__Type" class="Depty form-control select2">
                                            <option value=""  selected="">--select--</option>
                                        </select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="NIN">Program:</label>
                                        <select id="Program" name="Program__Type" value="<?=((isset($_POST['Program__Type']))?$_POST['Program__Type']: '');?>" id="Program__Type" class="form-control select2" />
                                            <option selected="selected" value="">--Select--</option>
                                            <?php foreach ($data['throw'] as $min): ?>
                                            <option value="<?=$min['Program__name']?> "><?=$min['Program__name']?></option>
                                            <?php endforeach;?>
                                        </select> 
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="NIN">NIN:</label>
                                        <input class="form-control" id="nin" type="number" value="<?=((isset($_POST['NIN']))?$_POST['NIN']: '');?>" placeholder="NIN:"  onkeypress="return validInput(event);"/>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12 EntryDevparent">
										<div class="EntryDevchild">
											<label for="Entry Level">Entry Level:</label>
											<select class="form-control select2" name="Entrylevel" id="EtyLevel" value="<?=((isset($_POST['Entrylevel']))?$_POST['Entrylevel']: '');?>">
												<option selected="selected" value="">--Select--</option>
												<?php foreach($data['StmtEntrylevel'] as $StmtEntry):?>
												<option value="<?=$StmtEntry['Entry__level__Name'];?>"><?=$StmtEntry['Entry__level__Name'];?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div style="margin-top:20px; margin-left:20px;font-weight:bold; font-size:20px;text-decoration:underline">
										<p>Personal Details</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<lable for="Surname">Surname:*</lable>
                                        <input type="text" class="form-control" id="surname" value="<?=((isset($_POST['Surname']))?$_POST['Surname']: '');?>" name="Surname"  placeholder="Surname:">
									</div>	
									<div class="col-md-4 col-sm-12 col-xs-12">
										<lable for="Other name">Other Name*</lable>
                                        <input type="text" id="othername" class="form-control" value="<?=((isset($_POST['othername']))?$_POST['othername']: '');?>" name="othername" placeholder="Other Name" autocomplete="off" />
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<lable for="Date__of__birth">Date Of Birth*</lable>
                                        <input type="date" class="form-control" id="Date__of__birth" value="<?=((isset($_POST['Date__of__birth']))?$_POST['Date__of__birth']: '');?>" name="Date__of__birth" placeholder="Date Of Birth:"  autocomplete="off" />
									</div>
								</div>
								<div class="col-md-12">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
										<label for="Gender">Gender</label>
										<select name="Gender" id="gender" class="Gender form-control select2" value="">
											<option value=""  selected>Select Gender</option>
											<option value="Female">Male</option>
											<option value="Male">Female</option>
										</select>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<lable for="">Email*</lable>
                                        <input type="email" class="form-control" id="email" name="email" value="<?=((isset($_POST['email']))?$_POST['email']: '');?>" placeholder="Email:"  autocomplete="off" />
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<label for="relationship">Relationship Status </label>
										<select name="relationship" id="relationship" class="form-control select2" >
										<option value=""  selected>Select Relationship</option>
											<option value="Single">Single</option>
											<option value="Divored">Divored</option>
											<option value="Married">Married</option>
											<option value="Complicated">Complicated</option>
											<option value="Window">Window</option>
											<option value="In -Contract Marrige">In -Contract Marrige</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4 col-sm-12 col-xs-12">
										 <lable for="Telephone">Tel*</lable>
                                        <input type="tel" class="form-control" id="mobile" name="telephone" value="<?=((isset($_POST['telephone']))?$_POST['telephone']: '');?>" placeholder="+(234) 8032 4552 09"  autocomplete="off" />
									</div>
								</div>
								<div class="col-md-12 hidden">
									<hr/>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<p style="text-transform: uppercase; text-decoration:underline;font-weight:bold;">Student Parent or Guidance Details</p>
										<select class="form-control select2 Gline" style="max-width:300px" >
											<option selected="selected" value="" readonly>Select Parent</option>
											<option value="Father">Father</option>
											<option value="Mother">Mother</option>
											<option value="Guidance">Guidance</option>
										</select>
									</div>
								</div>
								<div class="col-md-12" id="guidanceform"></div>
								<div class="col-md-12">
									<div class="pull-right"  style="margin-top:20px">
										<button type="reset" class="btn btn-flat btn-default">
											<i class="fa fa-rotate-left"></i> Reset
										</button>
										<button type="submit" id="isAddProfessor" class="btn btn-flat bg-purple" style="width:200px">
											<i class="fa fa-save"></i> Save
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
		</section>
			<!-- /.content -->
		</div>
	<?php include_once 'components/Footer.php';?>
	</div> 
<script type="text/javascript" src="<?=ASSETS?>js/student.js"></script>		
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