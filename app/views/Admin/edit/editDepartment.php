<?php $this->view('Admin/components/HeaderLinks');?> 
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
			<?php $this->view('Admin/components/HeaderLogo');?> 		
			<?php $this->view('Admin/components/Nav');?> 		
		</header>
		<!-- Sidebar -->
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<?php $this->view('Admin/components/SideBarHeader');?> 		
				<?php $this->view('Admin/components/SideBar');?>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Edit Department <small>Edit Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Edit Department</li>
					<li class="active">Edit Data</li>
				</ol>
                <div class="box-tools pull-left mt-2 mb-4">
                    <a href="<?=ROOT?>Admin/Department" class="btn btn-sm btn-flat btn-primary">
                        <i class="fa fa-arrow-left"></i>Go Back
                    </a>
                </div>
			</section>
			<!-- Main content -->
			<section class="content container-fluid" style="margin-top:50px">
                <div class="row">
                    <div class="max-width" style="max-width: 540px;margin: 0 auto;background: #FFF;border-radius: 5px;margin: 0 auto;padding: 25px;">
                        <form action="javascript:void(e)" method="post" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="<?=$data['Dep']->DepartmentID?>">
                            <div class="form-group invalid1">	
                            <label for="Faculty Name" style=":#73879C;">Faculty Name:</label>
                            <select id="faculty" class="form-control select2" disabled multiple="multiple">
                               <option value="<?=$data['Fact']->FacultyID?>" selected="selected" ><?=$data['Fact']->FacultyName?></option>
                            </select>
                            <small class="help-block1" style="color:red"></small>
                            </div>
                            <div class="form-group invalid2">
                                <label for="Factname">Departement Name: </label>
                                <input type="text" disabled value="<?=$data['Dep']->DepartmentName?>" id="isEditData" class="form-control">
                                <small class="help-block2" style="color:red"></small>
                            </div>
                        </form>
                        <div class="footer">
                            <button type="button" class="btn btn-secondary" id="kv" name="SubmitAppoint" onclick="enable()">Deactivite Disabled</button>
                            <button type="submit" class="btn btn-success" onclick="isEditData();">Save Data</button>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
        </div>
			<!-- /.content-wrapper -->
                        <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    <p style="color:#b9b9b9;">&copy; All Right Reserved</p>
                </div>
                <!-- Default to the left -->
                <strong style="color:#b9b9b9;">Powered by <a href="<?=ROOT?>" style="text-decoration:none">Davap Integrated Services Ltd</a></strong>    
            </footer>
        </div>

<!-- Required JS -->
<script src="<?=ASSETS?>admin/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Datatables Buttons -->
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/pace/pace.min.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/adminlte.min.js"></script>
<!-- Textarea editor -->
<script src="<?=ASSETS?>admin/assets/bower_components/codemirror/lib/codemirror.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/codemirror/mode/xml.min.js"></script>
<script src="<?=ASSETS?>admin/assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- App JS -->
<script src="<?=ASSETS?>admin/assets/dist/js/app/dashboard.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/plugins/table/datatable.js" type="text/javascript"></script>
<script src="<?=ASSETS?>js/adminEdituser.js"></script>
<script>
     enable = () =>{
        document.getElementById('isEditData').disabled= false;
        document.getElementById('faculty').disabled = false;
        let curInnerHTML = document.getElementById('kv').innerHTML;
        curInnerHTML = curInnerHTML.replace(/Deactivite Disabled/g, "Cancel");
        document.getElementById("kv").innerHTML = curInnerHTML;
     }
      isEditData = ()=>{
        let id = $('#id').val();
        let name = $('#isEditData').val();
        let fact = $('#faculty').val();
        let data = {'faculty':fact, 'Depname':name, 'id':id};
        let stringify = JSON.stringify(data);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: stringify, // our data object
            url: base_url + 'Admin/IsEditDep', // the url where we want to POST
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
                $(".invalid").removeClass('has-error');
                $('.help-block').hide();
                $('#appname').val("");
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
                    $('#faculty').focus();
                    $('.help-block1').show().html(response.message);
                } else {
                    $(".invalid1").removeClass('has-error');
                    $('.help-block1').hide();
                }
                if (response.status2 == false) {
                    $(".invalid2").addClass('has-error');
                    $('#isEditData').focus();
                    $('.help-block2').show().html(response.message);
                } else {
                    $(".invalid").removeClass('has-error');
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