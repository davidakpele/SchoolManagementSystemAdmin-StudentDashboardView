<?php include_once 'components/HeaderLinks.php';?> 	
<link href="<?=ASSETS?>RequirementJs/select2.min.css" rel="stylesheet" />
<script src="<?=ASSETS?>RequirementJs/select2.min.js"></script>
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
				<h1>Administrative <small>MY Performance </small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">Record Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid" style="margin-top:50px">
                <div class="card">
					<div class="content container-fluid">
						<div class="box">
							<div class="row">
								<div class="form box-body">
									<div class="text-center"><h2>STUDENT PERFORMANCE</h2></div>
									<form action="javascript:void(0)" method="post" class="form-group">
										<div class="statusMsg1 error-ico" style="display:none"></div>
										<input type="hidden" name="id" id="id" value="<?=$data['id']?>">
										<div class="col-md-4">
											<label for="Application">Application:*</label>
											<input class="form-control" readonly type="text" data-app_id="<?= ((!empty($data['data']->Category__ID)) ? $data['data']->Category__ID: '')?>" value="<?= ((!empty($data['data']->Category__ID)) ? $data['data']->Category__name: '')?>" />
										</div>
										<div class="col-md-4">
											<label for="Faculty">Faculty:*</label>
											<input class="form-control" readonly type="text" data-faculty_id="<?= ((!empty($data['data']->FacultyID)) ? $data['data']->FacultyID: '')?>" value="<?= ((!empty($data['data']->FacultyName)) ? $data['data']->FacultyName: '')?>" />
										</div>
										<div class="col-md-4">
											<label for="Department">Department:*</label>
											<input class="form-control" id="Department" readonly type="text" data-id="<?= ((!empty($data['data']->DepartmentID)) ? $data['data']->DepartmentID: '')?>" value="<?= ((!empty($data['data']->DepartmentName)) ? $data['data']->DepartmentName: '')?>" />
										</div>
										<div class="col-md-4">
											<label for="Class">Class:*</label>
											<select name="Classes" class="form-control Classes">
												<option selected= "selected" value="">--Select Class--</option>
												<?php if (!empty($data['cls'])):?>
												<?php foreach ($data['cls'] as $class):?>
												<option <?=(($data['data']->ClassID==$class['ClassID']) ? 'selected="selected"' : '')?> value="<?=$class['ClassID']?>"><?=$class['Title']?></option>
												<?php endforeach;?>
												<?php endif;?>
											</select>
											<div class="valid-feedback-class" style="color:red;"></div>
										</div>
										<div class="col-md-4">
											<label for="Semester">Semester:*</label>
											<select name="Semester" class="form-control Semester">
												<option value="">--Select Semester--</option>
												<?php if (!empty($data['sme'])):?>
												<?php foreach ($data['sme'] as $semester):?>
												<option <?=(($data['data']->SemesterID==$semester['SemesterID']) ? 'selected="selected"' : '')?> value="<?=$semester['SemesterID']?>"><?=$semester['Title']?></option>
												<?php endforeach;?>
												<?php endif;?>
											</select>
											<div class="valid-feedback-semester" style="color:red;"></div>
										</div>
										<div class="col-md-4">
											<div class="button__space mt-5">
												<button type="submit" style="width:100%;"class="validate btn bg-blue" title="filter data"><i class="pull-left fa fa-search"></i>Search Data</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-group table-group-error" style="display:none">
							<div class="panel panel-danger">
								<div class="panel-heading">Error</div>
								<div class="panel-body"><h5>Sorry..! Student Has't Performan Any Task Yet.</h5></div>
							</div></div>
												
						<div class="panel-group table-group" style="display:none">
							<div class="panel panel-primary">
								<div class="panel-heading">Student Performance Record's</div>
								<div class="panel-body">
									 <table class="table table-striped table-bordered">
										<thead>
										<tr>
										<th>Surname</th>
										<th>Othername</th>
										<th>Department</th>
										<th>Course</th>
										<th>Course Code</th>
										<th>Course Unit</th>
										<th>Course Mark</th>
										</tr>
										</thead>
										<tbody id="table_data"></tbody>
									</table>
								</div>
								<div class="panel-footer">&#169;2023-2024 Footer</div>
							</div>
						</div>
					</div>
				</section>
			</div>
            
<?php include_once 'components/Footer.php'; ?>
<script>
    $('document').ready(function(){
		$('.table-group').hide();
        $('.validate').click(function(id){
            var cls = $('.Classes').val();
            var sem = $('.Semester').val();
			var depid = $("#Department").attr('data-id');
			
			if (cls=='') {
				$('.valid-feedback-class').fadeIn().text('Please Selected Class.!');
				return false;
			}else{
				$('.valid-feedback-class').hide();
			}
			if (sem=='') {
				$('.valid-feedback-semester').fadeIn().text('Please Selected Semester.!');
				return false;
			}else{
				$('.valid-feedback-semester').hide();
			}
			let data = {"class": cls, "semester":sem, "department":depid};
			let StringData = JSON.stringify(data);
            $.ajax({
                url: base_url+'Admin/data?action=get_record',
                type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
				dataType: 'JSON',//the type of data we are sending is json
				contentType: "application/json; charset=utf-8",
				data: StringData,// our data object 
				processData: false,//false because the preprocessor are not trigger
				encode: true,//turn on json encoding
				crossOrigin: true,// true because we are sending data with ajax as json format to php
				async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
				crossDomain: true, //just in case we host the site
				headers: 
					{
						'Access-Control-Allow-Methods': '*',
						"Access-Control-Allow-Credentials": true,
						"Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
						"Access-Control-Allow-Origin": "*",
						"Control-Allow-Origin": "*",
						"cache-control": "no-cache",
						'Content-Type': 'application/json'
					},
            }).done(function (response) {
                if (response.status == 200) {
					$('.table-group-error').hide();
					$('.table-group').fadeIn();
					Respone = response.data;
					$("#table_data > tr").empty();
					var html = '<tr>';
					Respone.forEach(function (result) {
						html += '<td>'+result.Surname+'</td>';
						html += '<td>'+result.othername+'</td>';
						html += '<td>'+result.DepartmentName+'</td>';
						html += '<td>'+result.CourseTitle+'</td>';
						html += '<td>'+result.CourseCode+'</td>';
						html += '<td>'+result.CourseUnit+'</td>';
						html += '<td>'+result.score+'</td></tr>';
					})
					$('#table_data').prepend(html);
				}else{
					$('.table-group').hide();
					$('.table-group-error').fadeIn();
            	}
			}).fail((xhr, status, error) => {
            	console.log('Oops...', 'Something went wrong with ajax !', 'error');
       	 	});
        })
    })
   
</script>
</body>
</html>