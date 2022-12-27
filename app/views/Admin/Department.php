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
        .form-group.has-error .help-block1, .help-block2{
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
				<h1>Administrative <small>Department  Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Administrative</li>
					<li class="active">Department  Data</li>
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
            <a data-toggle="modal" href="#matkulId" style="text-decoration:none">
            <button type="button" class="btn btn-sm bg-blue btn-flat"><i class="fa fa-plus"></i> 
                Add New Department </button></a>
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
                    <th>Dept. Name</th>
                    <th>Dept. Head</th>
					<th>Faculty</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
				<tbody>
					<?php $i = 0?>
					<?php
						if ($data['dp'])
						foreach ($data['dp'] as $presult): ?>
						<?php 
                        $id = $presult['DepartmentID'];
                        if ($presult > 0) $i ++;?>
						<tr>
							<td><?=$i?></td>
                            <td><?=$presult['DepartmentName']?> </td>
                            <td><?=(($presult['DepartmentHead'] == '')? 'Empty':$presult['DepartmentHead'])?></td>
							<td><?=$presult['FacultyID']?></td>
                        <td>
                            <div class="flex" style="display:flex">
                                <div class="text-center">
                                    <a class="btn btn-xs btn-primary" href="<?=ROOT?>Admin/editDep/<?php echo $id;?>">
                                        <i class="fa fa-pencil"></i>
                                    </a>&nbsp;
                                    <button type="button" class="btn btn-xs btn-danger" onclick="hapus(<?=$id?>)">
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">Add New Data</h4>
                        </div>
                        <div class="modal-body">
                            <form action="javascript:void(e)" method="post" autocomplete="off">
                                <div class="form-group invalid1">
                                    <label for="fty">Faculty: </label>
                                    <select  name="fty" id="fty" class="form-control select2" >
                                        <option value=""  selected>--Select--</option>
                                        <?php foreach ($data['App'] as $i): ?>
                                            <option value="<?=$i['FacultyID']?>"><?=$i['FacultyName']?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <small class="help-block1"></small>
                                </div>
                                <div class="form-group invalid2">
                                    <label for="Dptname">Department Name: </label>
                                    <input type="text" name="Dptname" id="Dptname" class="form-control">
                                    <small class="help-block2"></small>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="submit();">Add</button>
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
<script type="text/javascript" src="<?=ASSETS?>js/professor.js"></script>
<script>
    hapus = (id)=>{
        //set static array
		let boolx = [];
		//push the student id inside our array
		boolx.push(id);
		//nutralize data
		const ConsData = { "id": id };
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
                    url: base_url + 'Admin/deleteDep', // the url where we want to POST
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
                        }, 1000);
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
    submit =()=>{
        var Dname = $('#Dptname').val();
        var Fname = $('#fty').val();
        let data = { 'FtyName':Fname, 'Depname':Dname};
        let stringify = JSON.stringify(data);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: stringify, // our data object
            url: base_url + 'Admin/addDep', // the url where we want to POST
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
        }).then((response) => {
            if (response.status == true) {
                $(".invalid1").removeClass('has-error');
                $('.help-block1').hide();
                $(".invalid2").removeClass('has-error');
                $('.help-block2').hide();
                $('#fty').val("");
                $('#Dptname').val("");
                Swal({
                    "title": "Successful",
                    "text": response.message,
                    "type": "success"
                });
                setTimeout(() => {
                    window.location.reload(true);
                }, 1000);
            } else {
                if (response.status1 == false) {
                    $(".invalid1").addClass('has-error');
                    $('.help-block1').show().html(response.message);
                    $('#fty').focus();
                    
                }else {
                    $(".invalid1").removeClass('has-error');
                    $('.help-block1').hide();
                }
                if (response.status2 == false) {
                    $(".invalid2").addClass('has-error');
                    $('.help-block2').show().html(response.message);
                    $('#Dptname').focus();
                }else {
                    $(".invalid2").removeClass('has-error');
                    $('.help-block2').hide();
                }
                return false;
            }
        }).fail((xhr, error) => {
            Swal({
                "title": "Error",
                "text": response.message,
                "type": "error"
            });
        });
    }
</script>
</body>
</html>