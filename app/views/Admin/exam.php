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
				<h1>Administrative <small>Exam </small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">Examination Data</li>
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
                            <div class="pull-right insiderBox" id="iz" style="display:none">
                                <button disabled="disabled" class="btn btn-sm" style="background-color: #000000; border-radius:25px"><span class="pull-left" id="deletebadge" style="color: #fff;">Selected</span></button>
                            </div>
                        </div>
                        <form action="" method="post" id="idm">
                            <table class="w-100 table js-basic-example dataTable table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Course</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>DueDate</th>
                                    <th>Total Questions</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
				        <tbody>
					<?php $i = 0?>
					<?php
						if ($data['exam'])
						foreach ($data['exam'] as $exam): ?>
						<?php if ($exam > 0) $i ++;?>
						<tr>
							<td><?=$i?></td>
                            <td><?=$exam['Course']?></td>
                            <td><?=$exam['startTime']?> </td>
                            <td><?=((empty($exam['endTime']))? '': $exam['endTime'])?></td>
                            <td><?=$exam['duedate']?></td>
                            <td><?=$exam['total']?></td>
                        <td>
                            <div class="flex" style="display:flex">
                                <div class="text-center">
                                    <button type="button" data-id="<?=$exam['eid']?>" class="btn btn-xs btn-primary viewbtn"><i class="fa fa-eye"></i></button>
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
<script>
    $('document').ready(function(){
        $('.viewbtn').click(function(id){
            var id = $(this).attr('data-id');
            let data = {"id": id};
            $.ajax({
                url: base_url+'Admin/data?action=view_exam&id='+id+'',
                method: "POST",
                data: data,
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache"
                },
                success: (data) => {
                    $('body').append(data);
                    $('#modal').modal('show');
                },
                error: () => {
                    alert("Something went wrong..!");
                }
            });
        })
    })
   
</script>
</body>
</html>