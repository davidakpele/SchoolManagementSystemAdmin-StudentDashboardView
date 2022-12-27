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
				<h1>Administrative <small>User Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">User Data</li>
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
            <a href="<?=ROOT?>Admin/addUser"><button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> Add User</button></a>
			<div class="pull-right insiderBox" id="iz" style="display:none">
				<button id="delete__Btn" title="Delete This Professor" class="btn btn-sm btn-danger btn-flat" type="button"><i class="fa fa-trash"></i> Delete</button>
                <button disabled="disabled" class="btn btn-sm" style="background-color: #000000; border-radius:25px"><span class="pull-left" id="deletebadge" style="color: #fff;">Selected</span></button>
            </div>
		</div>
          <form action="" method="post" id="idm">
			<table class="w-100 table js-basic-example dataTable table-striped table-bordered table-hover" id="myTable" >
				<thead>
                <tr>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Created On</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
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
								$SSD = $presult['Admin__id']; 
								$ToSendMail = $presult['Email'];
								$RecipicientName = $presult['Surname'].' '. $presult['Othername'];
							?>
						<td><?=$presult['Surname']?></td>
						<td><?=$presult['Othername']?></td>
						<td><?=$presult['username']?></td>
						<td><?=$presult['Email']?></td>
                        <td><span style="display: inline-block;min-width: 10px;padding: 3px 7px;font-size: 12px;font-weight: 700;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: middle;background-color: #777;border-radius: 10px;"><?=$presult['Level']?></span></td>
                        <td><?=pretty_date($presult['Create_on'])?></td>
						<td>
                            <div class="text-center">
                                <span class="badge bg-green">Active</span>
                            </div>
                        </td>
                        <td>
                            <div class="flex" style="display:flex">
                                <div class="text-center">
                                    <a class="btn btn-xs btn-primary" href="<?=ROOT?>Admin/edituser/<?=$SSD?>">
                                        <i class="fa fa-pencil"></i>
                                    </a>&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" onclick="hapus(<?=$SSD?>)">
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
<!-- /.content -->
</div>
            
<?php include_once 'components/Footer.php'; ?>
<!-- Custom JS -->
<script type="text/javascript" src="<?=ASSETS?>js/professor.js"></script>
<script>
    hapus =(SSD) =>{
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
                    url: base_url + 'Admin/dndUser', // the url where we want to POST
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