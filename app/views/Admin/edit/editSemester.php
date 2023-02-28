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
				<h1>Edit Course <small>Edit Data</small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active">Edit Course</li>
					<li class="active">Edit Data</li>
				</ol>
                <div class="box-tools pull-left mt-2 mb-4">
                    <a href="<?=ROOT?>Admin/semester" class="btn btn-sm btn-flat btn-primary">
                        <i class="fa fa-arrow-left"></i>Go Back
                    </a>
                </div>
			</section>
			<!-- Main content -->
			<section class="content container-fluid" style="margin-top:50px">
                <div class="row">
                    <div class="max-width" style="max-width: 540px;margin: 0 auto;background: #FFF;border-radius: 5px;margin: 0 auto;padding: 25px;">
                         <form action="javascript:void(e)" method="post" class="form-group" autocomplete="off">
                            <input type="hidden" name="sid" id="sid" value="<?=((isset($data['id']))?$data['id']:'')?>" >
                            <input type="hidden" name="parent" id="parent" value="<?=((isset($data['semesterdata']->Parent))?$data['semesterdata']->Parent:'')?>" >
                                <div class="col-md-12 invalid1">
                                    <label for="Class">Class: </label>
                                    <select type="text" name="Class" id="ClassVal" class="form-control select2">
                                        <option value="<?=$data['class']->ClassID?>"><?=$data['class']->Title?></option>
                                    </select>
                                    <small class="help-block1" style="color:#dd4b39;"></small>
                                </div>
                                <div class="col-md-6 invalid2">
                                    <label for="Classname1">Semester:* </label>
                                    <input type="text" name="Classname1" id="Classname1" class="form-control" readonly>
                                    <small class="help-block2" style="color:#dd4b39;"></small>
                                </div>
                                <div class="col-md-6 invalid3">
                                    <label for="Classname2">Select (1) Options:* </label>
                                    <input name="Classname2" id="Classname2" class="form-control">
                                    <div class="select_default" style="display:none">
                                        <select name="Classnamep" id="Classnamep" class="form-control select2">
                                            <option value="">--Select--</option>
                                            <option value="FIRST SEMESTER">FIRST SEMESTER</option>
                                            <option value="SECOND SEMESTER">SECOND SEMESTER</option>
                                        </select>
                                    </div>
                                    <small class="help-block3" style="color:#dd4b39;"></small>
                                </div>
                                <div class="col-md-12 invalid4">
                                    <label for="CombinedData">EXPECTED OUTPUT:* </label>
                                    <input type="text" name="CombinedData" id="CombinedData" class="form-control" readonly>
                                    <small class="help-block4" style="color:#dd4b39;"></small>
                                </div>
                            </form>
                        <div class="footer">
                            <button type="submit" style="margin-top:10px;margin-left:15px; max-width:100%" class="btn btn-default" onclick="isReset();">Reset Everything</button>
                            <button type="submit" style="margin-top:10px;margin-left:15px; max-width:100%" class="btn btn-success" onclick="isEditData();">Save Data</button>
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
<!-- App JS -->
<script src="<?=ASSETS?>admin/assets/dist/js/app/dashboard.js"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/dist/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/plugins/table/datatable.js" type="text/javascript"></script>
<script src="<?=ASSETS?>admin/assets/plugins/js/editSemester.js" type="text/javascript"></script>
<script>
    $(document).ready(function ($) {
        let ClassVal, opt, Classname1, opt2;
        ClassVal= $("#ClassVal").val(); 
        opt2 = $("#parent").val(); 
        Classname1 = $("#Classname1").val();

        if (ClassVal == 1) {
            opt = '(100)';
            $("#Classname1").val(opt);
            if (opt2 ==1) {
                opt2 = 'FIRST SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }else{
                opt2 = 'SECOND SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }
        }else if(ClassVal == 2){
            opt = '(200)';
            $("#Classname1").val(opt);
            if (opt2 ==1) {
                opt2 = 'FIRST SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }else{
                opt2 = 'SECOND SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }
        }else if(ClassVal == 3){
            opt = '(300)';
            $("#Classname1").val(opt);
            if (opt2 ==1) {
                opt2 = 'FIRST SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }else{
                opt2 = 'SECOND SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }
        }else if(ClassVal == 4){
            opt = '(400)';
            $("#Classname1").val(opt);
            if (opt2 ==1) {
                opt2 = 'FIRST SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }else{
                opt2 = 'SECOND SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }
        }else if(ClassVal == 5){
            opt = '(500)';
            $("#Classname1").val(opt);
            if (opt2 ==1) {
                opt2 = 'FIRST SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }else{
                opt2 = 'SECOND SEMESTER';
                $("#Classname2").val(opt2);
                $('#CombinedData').val(opt+' '+opt2);
            }
        }
 });
</script>
    </body>
</html>