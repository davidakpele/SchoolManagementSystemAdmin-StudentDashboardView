
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Exam Reviewer Management System</title>
    <link rel="icon" href="http://localhost/erms/uploads/1644023460_logo.jpg" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/erms/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/erms/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/erms/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/erms/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/erms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/erms/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/erms/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/erms/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="http://localhost/erms/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="http://localhost/erms/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/erms/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/erms/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="http://localhost/erms/plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = 'http://localhost/erms/';
    </script>
    <script src="http://localhost/erms/dist/js/script.js"></script>
</head>
<body>
    <H2>INBOX</H2>
    <div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">System Information</h5>
			<!-- <div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div> -->
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="form-group"></div>
				<div class="form-group">
					<label for="name" class="control-label">System Name</label>
					<input type="text" class="form-control form-control-sm" name="name" id="name" value="Exam Reviewer Management System">
				</div>
				<div class="form-group">
					<label for="short_name" class="control-label">System Short Name</label>
					<input type="text" class="form-control form-control-sm" name="short_name" id="short_name" value="ERMS  - PHP">
				</div>
			<div class="form-group">
				<label for="" class="control-label">Welcome</label>
	             <textarea name="content[welcome]" id="" cols="30" rows="2" class="form-control summernote"><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px;">Aenean nisi mauris, malesuada id efficitur a, placerat nec tortor. Pellentesque commodo lectus quis neque imperdiet dignissim. Aenean sed lobortis justo, sit amet posuere felis. Nam ac lacus odio. Nam euismod posuere leo, a rutrum sem sagittis et. In in augue at est interdum rhoncus. Vestibulum dignissim urna quis lorem faucibus varius. Etiam eu sem eget libero facilisis placerat facilisis sit amet arcu. Nullam lobortis nisl finibus odio viverra, in ornare quam hendrerit. Donec pretium id nisi sed fermentum. Quisque metus purus, ultrices vitae nibh gravida, elementum rutrum mi. Nulla sollicitudin nec metus faucibus porttitor. Nullam volutpat, erat id commodo porta, mauris justo vestibulum mi, in lobortis ligula eros id nisl. Pellentesque in posuere diam.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px;">Nam scelerisque, nisl sed suscipit fermentum, magna odio accumsan lacus, id lacinia libero dolor a orci. Etiam congue urna maximus diam porttitor euismod. Maecenas non nunc congue, suscipit turpis at, rutrum dolor. Suspendisse nisi ante, efficitur vitae dolor placerat, porttitor volutpat risus. Maecenas enim metus, bibendum ut elementum vel, venenatis nec leo. Maecenas malesuada est pellentesque urna facilisis, iaculis dignissim arcu interdum. Maecenas turpis velit, euismod et ex nec, blandit sodales massa. Vivamus tortor dui, molestie sagittis ipsum sed, laoreet cursus quam. Duis in dui sit amet orci aliquet faucibus. Ut id odio in felis tincidunt accumsan et eu augue. Vivamus posuere quis justo feugiat facilisis. Vivamus at magna justo.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px;">Suspendisse dictum interdum nibh et ultrices. Nulla sollicitudin in mi vitae lacinia. Nulla tempor sem eget felis venenatis molestie. Donec malesuada neque lorem, nec auctor nibh tempor non. Ut felis magna, elementum ac consectetur nec, sodales at diam. Sed nibh libero, viverra sit amet libero id, finibus feugiat dui. Ut interdum, nisl ac commodo ornare, sapien orci dictum leo, ut maximus justo sapien gravida lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris lobortis convallis aliquet. Suspendisse commodo dolor elit, nec lobortis ipsum pretium sit amet. Integer sit amet fringilla augue, a placerat est. Sed maximus lectus non bibendum dignissim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></textarea>
			</div>
			<div class="form-group">
				<label for="" class="control-label">About Us</label>
	             <textarea name="content[about]" id="" cols="30" rows="2" class="form-control summernote"><p style="text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 70px; line-height: 90px;">About Us</p><hr style="margin: 0px; padding: 0px; clear: both; border-top: 0px; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));"><div id="Content" style="margin: 0px; padding: 0px; position: relative;"><div id="bannerL" style="margin: 0px 0px 0px -160px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: left; text-align: right; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></div><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></div><div class="boxed" style="margin: 10px 28.7969px; padding: 0px; clear: both; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; text-align: center; background-color: rgb(255, 255, 255);"><div id="lipsum" style="margin: 0px; padding: 0px; text-align: justify;"></div></div></div><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ultrices tortor. Sed at ligula non lectus tempor bibendum a nec ante. Maecenas iaculis vitae nisi eu dictum. Duis sit amet enim arcu. Etiam blandit vulputate magna, non lobortis velit pharetra vel. Morbi sollicitudin lorem sed augue suscipit, eu commodo tortor vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eleifend interdum est, at gravida erat molestie in. Vestibulum et consectetur dui, ac luctus arcu. Curabitur et viverra elit. Cras ac eleifend ipsum, ac suscipit leo. Vivamus porttitor ac risus eu ultricies. Morbi malesuada mi vel luctus sagittis. Ut vestibulum porttitor est, id rutrum libero. Mauris at lacus vehicula, aliquam purus quis, pharetra lorem.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;">Proin consectetur massa ut quam molestie porta. Donec sit amet ligula odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi ex sapien, pulvinar ac arcu at, luctus scelerisque nibh. In dolor velit, pellentesque eu blandit a, mollis ac neque. Fusce tortor lectus, aliquam et eleifend id, aliquet ut libero. Nunc scelerisque vulputate turpis quis volutpat. Vivamus malesuada sem in dapibus aliquam. Vestibulum imperdiet, nulla vitae pharetra pretium, magna felis placerat libero, quis tincidunt felis diam nec nisi. Sed scelerisque ullamcorper cursus. Suspendisse posuere, velit nec rhoncus cursus, urna sapien consectetur est, et lacinia odio leo nec massa. Nam vitae nunc vitae tortor vestibulum consequat ac quis risus. Sed finibus pharetra orci, id vehicula tellus eleifend sit amet.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;">Morbi id ante vel velit mollis egestas. Suspendisse pretium sem urna, vitae placerat turpis cursus faucibus. Ut dignissim molestie blandit. Phasellus pulvinar, eros id ultricies mollis, lectus velit viverra mi, at venenatis velit purus id nisi. Duis eu massa lorem. Curabitur sed nibh felis. Donec faucibus, nulla at faucibus blandit, mi justo efficitur dui, non mattis nisl purus non lacus. Maecenas vel congue tellus, in convallis nisi. Curabitur faucibus interdum massa, eu facilisis ligula pretium quis. Nunc eleifend orci nec volutpat tincidunt.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;">Ut et urna sapien. Nulla lacinia sagittis felis id cursus. Etiam eget lacus quis enim aliquet dignissim. Nulla vel elit ultrices, venenatis quam sed, rutrum magna. Pellentesque ultricies non lorem hendrerit vestibulum. Maecenas lacinia pharetra nisi, at pharetra nunc placerat nec. Maecenas luctus dolor in leo malesuada, vel aliquet metus sollicitudin. Curabitur sed pellentesque sem, in tincidunt mi. Aliquam sodales aliquam felis, eget tristique felis dictum at. Proin leo nisi, malesuada vel ex eu, dictum pellentesque mauris. Quisque sit amet varius augue.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;">Sed quis imperdiet est. Donec lobortis tortor id neque tempus, vel faucibus lorem mollis. Fusce ut sollicitudin risus. Aliquam iaculis tristique nunc vel feugiat. Sed quis nulla non dui ornare porttitor eu vitae nisi. Curabitur at quam ut libero convallis mattis vel eget mauris. Vivamus vitae lectus ligula. Nulla facilisi. Vivamus tristique maximus nulla, vel mollis felis blandit posuere. Curabitur mi risus, rutrum non magna at, molestie gravida magna. Aenean neque sapien, volutpat a ullamcorper nec, iaculis quis est.</p></textarea>
			</div>
			<div class="form-group">
				<label for="" class="control-label">System Logo</label>
				<div class="custom-file">
	              <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
	              <label class="custom-file-label" for="customFile">Choose file</label>
	            </div>
			</div>
			<div class="form-group d-flex justify-content-center">
				<img src="http://localhost/erms/uploads/1644023460_logo.jpg" alt="" id="cimg" class="img-fluid img-thumbnail">
			</div>
			<div class="form-group">
				<label for="" class="control-label">Website Cover</label>
				<div class="custom-file">
	              <input type="file" class="custom-file-input rounded-circle" id="customFile" name="cover" onchange="displayImg2(this,$(this))">
	              <label class="custom-file-label" for="customFile">Choose file</label>
	            </div>
			</div>
			<div class="form-group d-flex justify-content-center">
				<img src="http://localhost/erms/uploads/1644023580_wallpaper.jpg" alt="" id="cimg2" class="img-fluid img-thumbnail">
			</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Update</button>
				</div>
			</div>
		</div>

	</div>
</div>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/erms/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/erms/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/erms/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/erms/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/erms/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/erms/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/erms/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/erms/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/erms/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/erms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/erms/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/erms/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/erms/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/erms/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/erms/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="http://localhost/erms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="http://localhost/erms/dist/js/adminlte.js"></script>
</body>
</html>