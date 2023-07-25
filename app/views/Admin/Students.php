<?php include_once 'components/HeaderLinks.php';?> 
    <style>
       /* checkbox checked */
       	.dropdown-menu {position: absolute;top: 100%;left: 0;z-index: 1000;display: none;float: left;min-width: 10rem;padding: 0.5rem 0;margin: 0.125rem 0 0;font-size: 1.0rem;color: #212529;text-align: left;list-style: none;background-color: #fff;background-clip: padding-box;border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 0.25rem;box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 18%);}
		.dropdown-item {display: block;width: 100%;padding: 0.25rem 1rem;clear: both;font-weight: 400;color: #212529;text-align: inherit;white-space: nowrap;background-color: transparent;border: 0;}
		.dropdown-divider {height: 0;margin: 0.5rem 0;overflow: hidden;border-top: 1px solid #e9ecef;}
        input[type="checkbox"]:checked:before {content: '';display: block;width: 4px;height: 8px;border: solid #fff;border-width: 0 2px 2px 0;-webkit-transform: rotate(45deg);transform: rotate(45deg);margin-left: 4px;margin-top: 1px;}
        #idm{overflow: scroll;}
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
				<h1>
					Student 					<small>Data Student</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Student </a></li>
					<li class="active">Master </li>
					<li class="active">Student  Data</li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Master Student  Data</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
	</div>
    <div class="box-body">
		<div class="mt-2 mb-4">
            <a href="<?=ROOT?>Admin/adds"><button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> Add Data</button></a>
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
					<tr>
						<th>S/N</th>
						<th><input type="checkbox" id="chk_all" value=""/></th>
						<th>Enrollment Number</th>
						<th>Name</th>
						<th>Email</th>
						<th>ACTION</th>
					</tr>
				</thead>
					<tbody>
					<?php 
						$i = 0; 
						$this->DB = new Database;
					?>
					<?php
					if ($data['select'])
						foreach ($data['select'] as $presult): ?>
					<?php $department = $presult['Department_id'];
						$this->DB->query('SELECT * FROM `departments` WHERE DepartmentID = :department');
						$this->DB->bind(':department', $department);
						$return = $this->DB->resultSet();
						if ($return):
							foreach ($return as $returnvalue): 
								$departmentname = $returnvalue['DepartmentName'];
								$departmentid = $returnvalue['DepartmentID'];
					?>
					<?php if ($presult > 0)
						$SSD = $presult['student__Id'];
						$i ++;?>
					<tr>
						<td><?=$i?></td>
						<?php 
							$ToSendMail = $presult['email'];
							$RecipicientName = $presult['Surname'].' '. $presult['othername'];
						?>
						<th><input type="checkbox" id="dataX" class="checkboxid" name="checkuser[]" value="<?=$SSD?>"/></th>
						<th style='font-weight:normal'><?=$presult['Roll__No'];?></th>
						<td><?=$presult['Surname'].' ~ '. $presult['othername']?></td>
						<td class="left"><?=$presult['email']?></td>
						<?php 
						endforeach;
						endif;
						?>
						<td style="display:flex" class="action-btn">
                            <div class="dropdown">
                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    Action&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="font-size:12px"></i>
                                    <span class="sr-only">Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size:14px">
                                    <a class="dropdown-item" href="<?=ROOT. "Admin/edits/".$SSD?>">
                                        <span class="fa fa-edit text-primary"></span>
                                        &nbsp;&nbsp;Edit
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=ROOT. "Admin/record/".$SSD?>">
                                        <span class="fa fa-eye text-primary"></span>
                                        &nbsp;View Record
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=ROOT. "Admin/views/".$SSD ?>">
                                        <span class="fa fa-calendar text-success"></span>
                                        &nbsp;Details
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <span class="dropdown-item" onClick="juioDT(<?=$SSD?>);" style="cursor:pointer">
                                        <span class="fa fa-trash text-danger"></span>
                                        &nbsp;Delete
                                    </span>
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
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include_once 'components/Footer.php';?>
<script type="text/javascript" src="<?=ASSETS?>js/student.js"></script>
<script>
	juioDT=(SSD)=>{
		//set static array
		let boolx = [];
		//push the student id inside our array
		boolx.push(SSD);
		//nutralize data
		const ConsData = { "DataId": boolx };
		//stringify data
    	let data = JSON.stringify(ConsData);
		//asking is sure to proceed delete process
		Swal.fire({
            title: "Are you sure?",
            text: "Data will be deleted!",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            background: '#fff',
            backdrop: `rgba(0,0,123,0.4)`,
            confirmButtonText: 'Yes, Delete!',
            // if yes button is clicked, using then & done promise callback
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: data, // our data object
                    url: base_url+'Admin/deletestudents', // the url where we want to POST
                    processData: false,
                    encode: true,
                    crossOrigin: true,
                    async: true,
                    crossDomain: true,
                    headers: {
                        'Access-Control-Allow-Methods': '*',
                        "Access-Control-Allow-Credentials": true,
                        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                        "Access-Control-Allow-Origin": "*",
                        "Control-Allow-Origin": "*",
                        "cache-control": "no-cache",
                        'Content-Type': 'application/json'
                    },
                }).done((response) => {
                    if (response.status == 200) {
                            Swal('Success', response.message, 'success');
                        setTimeout(function() {
                            window.location.reload(1);
                        }, 500);
                    } else {
                        Swal({
                            title: "Failed",
                            text: "Delete Processing Failed..",
                            type: "error",
                            color: '#716add',
                            background: '#fff',
                            backdrop: `rgba(0,0,123,0.4)`,
                            timer: 2500,
                            });
                    }
                }).fail((xhr, status, error) => {
                    Swal.fire('Oops...',
                        'Something went wrong with ajax !',
                        'error');
                });
            } else {
                return false;
            }
        });
	}
</script>
	</body>
</html>