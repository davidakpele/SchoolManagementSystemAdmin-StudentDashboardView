<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/css/style.min.css" />
<!-- Material Design Lite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<style>
    .inValidFeedBack{color:red}
    .action-btn{display: inline-block;}
    .action-btn > .btn:not(:last-child) {margin-right: 7.4px; }
    .btn {display: inline-block;padding: 6px 6px 6px 6px;margin-bottom: 0;font-size: 11px;font-weight: 400;line-height: 1.243;text-align: center;white-space: nowrap;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;background-image: none;border: 1px solid transparent;border-radius: 4px;}
    .photo_fix{position:right;float:right; width:12%; height:10%;margin-left: auto;margin-right: auto;max-width: 40%;max-height: 40%;object-fit: contain;}
	#pid{align-items: center;cursor: pointer;background-color: white;border: 1px solid lightgray;border-bottom: 0;flex: 0.2;height: fit-content;border-top-left-radius: 10px;border-top-right-radius: 10px;text-align:right;object-fit: contain;vertical-align: middle;margin-right:40px;justify-content: space-evenly;}

</style>
</head>
<body class="font-muli theme-cyan gradient">
<div class="page-loader-wrapper">
<div class="loader">
</div>
</div>
<div id="main_content">
<div id="header_top" class="header_top">
<div class="container">
<div class="hleft">
<a class="header-brand" href="<?=ROOT?>Admin/index"><i class="fa fa-graduation-cap brand-logo"></i></a>
<div class="dropdown">
<a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
<a href="<?=ROOT?>Admin/page-search" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
<a href="<?=ROOT?>Admin/app-email" class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
<a href="<?=ROOT?>Admin/app-filemanager" class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
<a href="<?=ROOT?>Admin/app-social" class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
<a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a>
<a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
</div>
</div>
<div class="hright">
<a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
<a href="<?=ROOT?>Admin/Login" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>
</div>
</div>
</div>

<div id="rightsidebar" class="right_sidebar">
<a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
<div class="mb-4">
<h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
<ul class="choose-skin list-unstyled mb-0">
<li data-theme="azure"><div class="azure"></div></li>
<li data-theme="indigo"><div class="indigo"></div></li>
<li data-theme="purple"><div class="purple"></div></li>
<li data-theme="orange"><div class="orange"></div></li>
<li data-theme="green"><div class="green"></div></li>
<li data-theme="cyan" class="active"><div class="cyan"></div></li>
<li data-theme="blush"><div class="blush"></div></li>
<li data-theme="white"><div class="bg-white"></div></li>
</ul>
</div>
<div class="mb-4">
<h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
<div class="custom-controls-stacked font_setting">
<label class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
<span class="custom-control-label">Muli Google Font</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" name="font" value="font-montserrat">
<span class="custom-control-label">Montserrat Google Font</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input" name="font" value="font-poppins">
<span class="custom-control-label">Poppins Google Font</span>
</label>
</div>
</div>
<div>
<h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
<ul class="setting-list list-unstyled mt-1 setting_switch">
<li>
<label class="custom-switch">
<span class="custom-switch-description">Night Mode</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Fix Navbar top</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Header Dark</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Min Sidebar Dark</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Sidebar Dark</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Icon Color</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Gradient Color</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked="">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Box Shadow</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">RTL Support</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
<span class="custom-switch-indicator"></span>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Box Layout</span>
<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
<span class="custom-switch-indicator"></span>
</label>
</li>
</ul>
</div>
<hr>
<div class="form-group">
<label class="d-block">Storage <span class="float-right">77%</span></label>
<div class="progress progress-sm">
<div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
</div>
<button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
</div>
</div>
<div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
<ul class="new_timeline mt-3">
<li>
<div class="bullet pink"></div>
<div class="time">11:00am</div>
<div class="desc">
<h3>Attendance</h3>
<h4>Computer Class</h4>
</div>
</li>
<li>
<div class="bullet pink"></div>
<div class="time">11:30am</div>
<div class="desc">
<h3>Added an interest</h3>
<h4>“Volunteer Activities”</h4>
</div>
</li>
<li>
<div class="bullet green"></div>
<div class="time">12:00pm</div>
<div class="desc">
<h3>Developer Team</h3>
<h4>Hangouts</h4>
<ul class="list-unstyled team-info margin-0 p-t-5">
<li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
<li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
<li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
<li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
</ul>
</div>
</li>
<li>
<div class="bullet green"></div>
<div class="time">2:00pm</div>
<div class="desc">
<h3>Responded to need</h3>
<a href="javascript:void(0)">“In-Kind Opportunity”</a>
</div>
</li>
<li>
<div class="bullet orange"></div>
<div class="time">1:30pm</div>
<div class="desc">
<h3>Lunch Break</h3>
</div>
</li>
<li>
<div class="bullet green"></div>
<div class="time">2:38pm</div>
<div class="desc">
<h3>Finish</h3>
<h4>Go to Home</h4>
</div>
</li>
</ul>
</div>
</div>
</div>

<div class="theme_div">
<div class="card">
<div class="card-body">
<ul class="list-group list-unstyled">
<li class="list-group-item mb-2">
<p>Light Version</p>
<a href="<?=ROOT?>Admin/index"><img src="../assets/images/themes/default.png" class="img-fluid" alt="" /></a>
</li>
<li class="list-group-item mb-2">
<p>Dark Version</p>
<a href="<?=ROOT?>Admin/"><img src="../assets/images/themes/dark.png" class="img-fluid" alt="" /></a>
</li>
<li class="list-group-item mb-2">
<p>RTL Version</p>
<a href="<?=ROOT?>Admin/"><img src="../assets/images/themes/rtl.png" class="img-fluid" alt="" /></a>
</li>
</ul>
</div>
</div>
</div>

<div class="user_div">
<ul class="nav nav-tabs">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#righttab-statistics">Statistics</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Result">Result</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Students">Student</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Todo">Todo</a></li>
</ul>
<div class="tab-content mt-3">
<div class="tab-pane fade show active" id="righttab-statistics" role="tabpanel">
<div class="card">
<div class="card-body">
<div>Total Revenue</div>
<div class="py-3 m-0 text-center h1 text-success">$79,452</div>
<div class="d-flex">
<span class="text-muted">Income</span>
<div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
</div>
</div>
<div class="card-footer">
<ul class="list-unstyled mb-0">
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>$43,320</strong></div>
<div class="float-right"><small class="text-muted">Bank of America</small></div>
 </div>
<div class="progress progress-xxs">
<div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<div class="clearfix">
<div class="float-left"><strong>$36,132</strong></div>
<div class="float-right"><small class="text-muted">Wells Fargo</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
</ul>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-yellow"><i class="fa fa-users"></i> </div>
<div class="content">
<span>Total Student</span>
<h5 class="number mb-0">2,051</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-gray"><i class="fa fa-sitemap"></i> </div>
<div class="content">
<span>Department</span>
<h5 class="number mb-0">14</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-dark"><i class="fa fa-black-tie"></i> </div>
<div class="content">
<span>Total Teacher</span>
<h5 class="number mb-0">27</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-azure"><i class="fa fa-tags"></i> </div>
<div class="content">
<span>Total Courses</span>
<h5 class="number mb-0">31</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-pink"><i class="fa fa-credit-card"></i> </div>
<div class="content">
<span>Expense</span>
<h5 class="number mb-0">$7,254</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-green"><i class="fa fa-bank"></i> </div>
<div class="content">
<span>Total Income</span>
<h5 class="number mb-0">$27,852</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-cyan"><i class="fa fa-map-o"></i> </div>
<div class="content">
<span>Our Center</span>
<h5 class="number mb-0">52</h5>
</div>
</div>
</div>
<div class="card">
<div class="card-body top_counter">
<div class="icon bg-indigo"><i class="fa fa-smile-o"></i> </div>
<div class="content">
<span>Smiley Face</span>
<h5 class="number mb-0">10K</h5>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="righttab-Result" role="tabpanel">
<div class="card">
<div class="card-header">
<h3 class="card-title">Result 2019</h3>
<div class="card-options">
<a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
</div>
</div>
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>87%</strong></div>
<div class="float-right"><small class="text-muted">Art & Design</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>80%</strong></div>
<div class="float-right"><small class="text-muted">Fashion</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>63%</strong></div>
<div class="float-right"><small class="text-muted">Sports Science</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>91%</strong></div>
<div class="float-right"><small class="text-muted">Computers</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<div class="clearfix">
<div class="float-left"><strong>35%</strong></div>
<div class="float-right"><small class="text-muted">Biological Sciences</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
</li>
</ul>
</div>
<div class="card-footer">
<div class="row text-center">
<div class="col-6 border-right">
<label class="mb-0">Total Pass</label>
<div class="font-20 font-weight-bold">1,052</div>
</div>
<div class="col-6">
<label class="mb-0">Total Fail</label>
<div class="font-20 font-weight-bold">198</div>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-header">
<h3 class="card-title">Result 2018</h3>
<div class="card-options">
<a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
</div>
</div>
<div class="card-body">
<ul class="list-unstyled">
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>80%</strong></div>
<div class="float-right"><small class="text-muted">Fashion</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>87%</strong></div>
<div class="float-right"><small class="text-muted">Art & Design</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>91%</strong></div>
<div class="float-right"><small class="text-muted">Computers</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li class="mb-3">
<div class="clearfix">
<div class="float-left"><strong>35%</strong></div>
<div class="float-right"><small class="text-muted">Biological Sciences</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<div class="clearfix">
<div class="float-left"><strong>63%</strong></div>
<div class="float-right"><small class="text-muted">Sports Science</small></div>
</div>
<div class="progress progress-xxs">
<div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
</ul>
</div>
<div class="card-footer">
<div class="row text-center">
<div class="col-6 border-right">
<label class="mb-0">Total Pass</label>
<div class="font-20 font-weight-bold">845</div>
</div>
<div class="col-6">
<label class="mb-0">Total Fail</label>
<div class="font-20 font-weight-bold">142</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="righttab-Students" role="tabpanel">
<div id="users">
<div class="input-group mt-2 mb-2">
<input type="text" class="form-control search" placeholder="Search Student">
</div>
<ul class="right_chat list-unstyled list">
<li class="alfabet">A</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
<div class="media-body">
<span class="name">Abigail Churchill</span>
<span class="message">Art & Design</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
<div class="media-body">
<span class="name">Alexandra Carr</span>
<span class="message">Fashion</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
<div class="media-body">
<span class="name">Alison Berry</span>
<span class="message">Fashion</span>
</div>
</a>
</li>
<li class="alfabet">B</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
<div class="media-body">
<span class="name">Bella Alan</span>
<span class="message">Sports Science</span>
</div>
</a>
</li>
<li class="alfabet">C</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
<div class="media-body">
 <span class="name">Caroline Alan</span>
<span class="message">Sports Science</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">
<div class="media-body">
<span class="name">Connor Campbell</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar7.jpg" alt="">
<div class="media-body">
<span class="name">Charles Campbell</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li class="alfabet">D</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar8.jpg" alt="">
<div class="media-body">
<span class="name">Donna Hudson</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar9.jpg" alt="">
<div class="media-body">
<span class="name">Dylan Jones</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li class="alfabet">G</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar8.jpg" alt="">
<div class="media-body">
<span class="name">Gordon Hudson</span>
<span class="message">Sports Science</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar9.jpg" alt="">
<div class="media-body">
<span class="name">Gabrielle Walker</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar10.jpg" alt="">
<div class="media-body">
<span class="name">Gavin North</span>
<span class="message">Computers</span>
</div>
</a>
</li>
<li class="alfabet">S</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
<div class="media-body">
<span class="name">Stephanie Hudson</span>
<span class="message">Sports Science</span>
</div>
</a>
</li>
<li class="alfabet">W</li>
<li>
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
<div class="media-body">
<span class="name">William Paige</span>
<span class="message">Fashion</span>
</div>
</a>
</li>
</ul>
</div>
<div class="user_chatbody chat_app">
<div class="card-header bline pt-1 pl-0 pr-0">
<h3 class="card-title">Abigail Churchill <small>Online</small></h3>
<div class="card-options">
<a href="javascript:void(0)" class="p-1" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
<a class="dropdown-item active" href="#">Online</a>
<a class="dropdown-item" href="#">Away</a>
<a class="dropdown-item" href="#">Do not disturb</a>
<a class="dropdown-item" href="#">Invisible</a>
</div>
<a href="javascript:void(0)" class="p-1 chat_close"><i class="fa fa-close"></i></a>
</div>
</div>
<div class="chat_windows">
<ul class="mb-0">
<li class="other-message">
<img class="avatar mr-3" src="../assets/images/xs/avatar1.jpg" alt="avatar">
<div class="message">
<p class="bg-light-blue">Are we meeting today?</p>
<span class="time">10:10 AM, Today</span>
</div>
</li>
<li class="other-message">
<img class="avatar mr-3" src="../assets/images/xs/avatar1.jpg" alt="avatar">
<div class="message">
<p class="bg-light-blue">Hi Aiden, how are you? How is the project coming along?</p>
<p class="bg-light-blue">Are we meeting today?</p>
<span class="time">10:15 AM, Today</span>
</div>
</li>
<li class="my-message">
<div class="message">
<p class="bg-light-gray">Project has been already finished and I have results to show you.</p>
<div class="file_folder">
<a href="javascript:void(0);">
<div class="icon">
<i class="fa fa-file-excel-o text-success"></i>
</div>
<div class="file-name">
<p class="mb-0 text-muted">Report2017.xls</p>
<small>Size: 68KB</small>
</div>
 </a>
</div>
<span class="time">10:17 AM, Today</span>
</div>
</li>
<li class="other-message">
<img class="avatar mr-3" src="../assets/images/xs/avatar1.jpg" alt="avatar">
<div class="message">
<div class="media_img">
<img src="../assets/images/gallery/1.jpg" class="w100 img-thumbnail" alt="">
<img src="../assets/images/gallery/2.jpg" class="w100 img-thumbnail" alt="">
</div>
<span class="time">10:15 AM, Today</span>
</div>
</li>
<li class="other-message">
<img class="avatar mr-3" src="../assets/images/xs/avatar1.jpg" alt="avatar">
<div class="message">
<p class="bg-light-blue">Are we meeting today I have results?</p>
<span class="time">10:18 AM, Today</span>
</div>
</li>
<li class="my-message">
<div class="message">
<p class="bg-light-gray">Well we have good budget for the project</p>
<span class="time">10:25 AM, Today</span>
</div>
</li>
</ul>
<div class="chat-message clearfix">
<a href="javascript:void(0);"><i class="icon-camera"></i></a>
<a href="javascript:void(0);"><i class="icon-camcorder"></i></a>
<a href="javascript:void(0);"><i class="icon-paper-plane"></i></a>
<div class="input-group mb-0">
<input type="text" class="form-control" placeholder="Enter text here...">
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="righttab-Todo" role="tabpanel">
<ul class="list-unstyled mb-0 todo_list">
<li>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
<span class="custom-control-label">Report Panel Usag</span>
</label>
</li>
<li>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
<span class="custom-control-label">Report Panel Usag</span>
</label>
</li>
<li>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
<span class="custom-control-label">New logo design for Angular Admin</span>
</label>
</li>
<li>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
<span class="custom-control-label">Design PSD files for Angular Admin</span>
</label>
</li>
<li>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
<span class="custom-control-label">New logo design for Angular Admin</span>
</label>
</li>
</ul>
</div>
</div>
</div>
<?php $this->view('Admin/bootstrapModal/SidebarNav');?>
<div class="page">

<div class="section-body" id="page_top">
<div class="container-fluid">
<div class="page-header">
<div class="left">
<div class="input-group">
<input type="text" class="form-control" placeholder="What you want to find">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button">Search</button>
</div>
</div>
</div>
<div class="right">
<ul class="nav nav-pills">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="page-empty">Empty page</a>
<a class="dropdown-item" href="page-profile">Profile</a>
<a class="dropdown-item" href="page-search">Search Results</a>
<a class="dropdown-item" href="page-timeline">Timeline</a>
<a class="dropdown-item" href="page-invoices">Invoices</a>
<a class="dropdown-item" href="page-pricing">Pricing</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Auth</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="<?=ROOT?>Admin/Login">Login</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/Register">Register</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/Forgot-password">Forgot password</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=ROOT?>Admin/404">404 error</a>
<a class="dropdown-item" href="<?=ROOT?>Admin/500">500 error</a>
</div>
</li>
</ul>
<div class="notification d-flex">
<div class="dropdown d-flex">
<a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-language"></i></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
<a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://nsdbytes.com/template/ericssion/assets/images/flags/us.svg" alt="">English</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://nsdbytes.com/template/ericssion/assets/images/flags/es.svg" alt="">Spanish</a>
<a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://nsdbytes.com/template/ericssion/assets/images/flags/jp.svg" alt="">japanese</a>
<a class="dropdown-item" href="#"><img class="w20 mr-2" src="https://nsdbytes.com/template/ericssion/assets/images/flags/bl.svg" alt="">France</a>
</div>
</div>
<div class="dropdown d-flex">
<a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
<ul class="right_chat list-unstyled w350 p-0">
<li class="online">
<a href="javascript:void(0);" class="media">
<img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
<div class="media-body">
<span class="name">Donald Gardner</span>
<div class="message">It is a long established fact that a reader</div>
<small>11 mins ago</small>
<span class="badge badge-outline status"></span>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);" class="media">
<img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
<div class="media-body">
<span class="name">Wendy Keen</span>
<div class="message">There are many variations of passages of Lorem Ipsum</div>
<small>18 mins ago</small>
<span class="badge badge-outline status"></span>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);" class="media">
<img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
<div class="media-body">
<span class="name">Matt Rosales</span>
<div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
<small>27 mins ago</small>
<span class="badge badge-outline status"></span>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);" class="media">
<img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
<div class="media-body">
<span class="name">Phillip Smith</span>
<div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
<small>33 mins ago</small>
<span class="badge badge-outline status"></span>
</div>
</a>
</li>
</ul>
<div class="dropdown-divider"></div>
 <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
</div>
</div>
<div class="dropdown d-flex">
<a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
<ul class="list-unstyled feeds_widget">
<li>
<div class="feeds-left">
<span class="avatar avatar-blue"><i class="fa fa-check"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">Campaign <strong class="text-blue font-weight-bold">Holiday</strong> is nearly reach budget limit.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-green"><i class="fa fa-user"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">New admission <strong class="text-green font-weight-bold">32</strong> in computer department.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-red"><i class="fa fa-info"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">6th sem result <strong class="text-red font-weight-bold">67%</strong> in computer department.</p>
</div>
</li>
<li>
<div class="feeds-left">
<span class="avatar avatar-azure"><i class="fa fa-thumbs-o-up"></i></span>
</div>
<div class="feeds-body ml-3">
<p class="text-muted mb-0">New Feedback <strong class="text-azure font-weight-bold">53</strong> for university assessment.</p>
</div>
</li>
</ul>
<div class="dropdown-divider"></div>
<a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
</div>
</div>
<div class="dropdown d-flex">
 <?php if(!isLoggedInAdmin()): ?>
 <?php header('location:' . ROOT . 'Administration/Default'); ?>
 <?php else: ?>
	<a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
		<span class="avatar" style="background-image: url(<?=ASSETS?>assets/img/dp.jpg)"></span> 
		<?=((isLoggedInAdmin())?'Administrator': 'No user');?>
	</a>
	<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
		<a class="dropdown-item" href="<?=ROOT?>Admin/Page-profile"><i class="dropdown-icon fe fe-user"></i> Profile</a>
		<a class="dropdown-item" href="<?=ROOT?>Admin/Settings/"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
		<a class="dropdown-item" href="<?=ROOT?>Admin/App-email">
			<span class="float-right">
				<span class="badge badge-primary">6</span>
			</span>
			<i class="dropdown-icon fe fe-mail"></i> Inbox
		</a>
		<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
		<a class="dropdown-item" href="<?=ROOT?>PagesController/Logout"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
	</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="section-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center ">
<div class="header-action">
<h1 class="page-title">Professors</h1>
<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="#">Mercy College University </a></li>
<li class="breadcrumb-item active" aria-current="page">Professors</li>
</ol>
</div>
<ul class="nav nav-tabs page-header-tab">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Library-all">View Table</a></li>
</ul>
</div>
</div>
	<?php if(isset($_GET['View'])){?>
		<!-- View Profession data on table form-->
		<button class="btn btn-primary pull-left" onclick="window.print()"><i class="fa fa-print"></i>Print Data Sheet</button>
		<a href="<?=ROOT?>Admin/Professors/" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i>Go Back</a>
		<div class="clearfix"></div>
		
			<div class="modal-body">
				<div class="x_panel" >
					<div class="x_content col-md-12" >
						<div class="container-fluid" style="border: 2px solid">
							<div class="tab-content">
								<!-- Personal info tab -->
								<div id="pds" class="tab-pane active">
									<div class="row">
										<div class="col-md-4">
											<small>CS FORM (Revised 2021-2022)</small>
										</div>
										<div class="col-md-4">
											<center><h5><strong>PERSONAL DATA SHEET</strong></h5></center>
										</div>
										<div class="col-md-4 pull-right" style="display:block ">
											<strong>PROFESSOR ID NO: <span style="text-decoration: underline;"><?=$data['returnIdS'];?></span> </strong>
										</div>
										<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
											<thead>
												<tr>
													<td colspan="4"><h5><strong>I. Personal Information</strong></h5></td>
												</tr>
											</thead>
											<tbody>
											<tr border="0">
												<td colspan="4">
													<center id="pid"><b>PHOTO</b></center>
													<img src="<?=PATHROOT. $data['photo']?>" class="img-responsive img-thumbnail photo_fix">
												</td>
											</tr>
												<tr>
													<td>Surname</td>
													<td ><?=$data['sname']?></td>
													<td>Middle Name</td>
													<td ><?= $data['mname']?></td>
												</tr>
												<tr>
													<td>Other Name</td>
													<td><?=$data['Oname']?></td>
													<td width="17%">Name Extension</td>
													<td><?= 'None'?></td>
												</tr>
												<tr>
													<td>Date of Birth</td>
													<td><?=$data['DoB']?></td>
													<td rowspan="2">Residential Address</td>
													<td rowspan="2"><?=$data['Add'] ?></td>
												</tr>
												<tr>
													<td>Place of Birth</td>
													<td><?=$data['PoD']?></td>
												</tr>
												<tr>
													<td>Sex</td>
													<td><?= $data['gn']?></td>
													<td><div class="pull-right">Zip Code</div></td>
													<td><?= 'Not yet define' ?></td>
												</tr>
												<tr>
													<td>Civil Status</td>
													<td>
														<?= $data['Cst']?>
													</td>
													<td>Telephone No.</td>
													<td><?=$data['tel'] ?></td>
												</tr>
												<tr>
													<td>Citizenship</td>
													<td><?=$data['Ctz'] ?></td>
													<td rowspan="2">Permanent Address</td>
													<td rowspan="2"><?= $data['Add'] ?></td>
												</tr>
												<tr>
													<td>Height</td>
													<td><?= $data['Hat']?></td>
												</tr>
												<tr>
													<td>Weight</td>
													<td><?= $data['Wat']?> kg</td>
													<td rowspan="2">Blood Type</td>
													<td rowspan="2">Type:  <?= $data['Bty']?></td>
												</tr>
												<tr>
												</tr>
												<tr>
													<td colspan="3">Email Address</td>
													<td><?= $data['email'] ?></td>
												</tr>
												<tr>
													<td colspan="3">National Identification Number</td>
													<td><?=$data['nin'] ?></td>
												</tr>
											</tbody>
										</table>
										<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
											<thead>
												<tr>
													<td colspan="4"><h5><strong>II. Family Background</strong></h5></td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td colspan="4" class="text-center bold">Father Details</td>
												</tr>
												<tr>
													<td>Surname</td>
													<td>--</td>
													<td>Middlename</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Lastname</td>
													<td>--</td>
													<td >Email</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Address</td>
													<td>--</td>
													<td>Mobile Number</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Occupation</td>
													<td>--</td>
												</tr>
												<tr>
													<td colspan="4" class="text-center bold">Mother's Details</td>
												</tr>
												<tr>
													<td>Surname</td>
													<td>--</td>
													<td>Middlename</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Lastname</td>
													<td>--</td>
													<td >Email</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Address</td>
													<td>--</td>
													<td>Mobile Number</td>
													<td>--</td>
												</tr>
												<tr>
													<td>Occupation</td>
													<td>--</td>
												</tr>	
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					<?php }else if(isset($_GET['Add']) || isset($_GET['Edit'])){
						// HERE WE HAVE OUR LOGIC ..
						$this->DB = new Database;
						$this->DB->query('SELECT * FROM lecturals ORDER BY Professor__id DESC');
						$stt = $this->DB->single();
						$returnAvid = $stt->Professor__id;
						if(empty($returnAvid)){
							$User_id = '10';
						}else {
							$AVA53 = str_replace("10", "", $returnAvid);
							$id =str_pad($AVA53 + 1,1,0, STR_PAD_LEFT);
							$User_id = '' .$id;
						}
						$length = 7;
						$key = 'MUC.STP';
						$number = '1234567890';
						$numberLength = strlen($number);
						$randomNumber = '';
						for($i = 0; $i<$length; $i++) {
							$randomNumber .= $number[rand(0, $numberLength - 1)];
							$randcount = $key.$randomNumber;
						}
						$id = $User_id;
						$rand = $randcount;
						if(isset($_POST['Professor__id'])){
							// Assign a default id value to the same value avaliable
							$id = $_POST['Professor__id'];
						}
						if (isset($_POST['Accesscode'])) {
							$rand = $_POST['Accesscode'];
						}
						if(isset($_GET['Edit'])){ /**CLONE EVERYTHING INSIDE HERE */ }
					 	?>
                    <!-- This page display when the add new accountant is click -->

            <div class="tab-pane" id="Library-add-Boot">
                <a href="<?=ROOT?>Admin/Professors/" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i>Go Back</a>
				<h3 class="text-center"><?=((isset($_GET['Edit']))?'Edit': 'Add New');?> Professor</h3><hr style="background-color:black">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">The Professor Details</h3>
                        <div class="card-options ">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <form class="card-body" Method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Professor__id">Accountant ID:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" readonly class="form-control" name="Professor__id" id="Professor__id" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['id'], FILTER_SANITIZE_STRING)):trim(filter_var($id, FILTER_SANITIZE_STRING)))?>" required="required" />
							    <span class="inValidFeedBack"><?=((isset($data['Professor__idError']))?$data['Professor__idError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Surname">Surname:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Surname" id="Surname" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['sname'])) : ((isset($_POST['Surname']))? trim(filter_var($_POST['Surname'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['SurnameError'])) ? $data['SurnameError'] : '')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Middel Name">Middle Name <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Middle__name" id="Middle__name" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['sname'])) : ((isset($_POST['Middle__name']))? trim(filter_var($_POST['Middle__name'], FILTER_SANITIZE_STRING)): ''))?>"required="required" />
								<span class="inValidFeedBack"><?=((isset($data['Middle__nameError']))?$data['Middle__nameError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="LastName">Last Name: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Othername" id="Othername" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Oname'])) : ((isset($_POST['Othername']))? trim(filter_var($_POST['Othername'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['OthernameError']))?$data['OthernameError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Access Code">Access Code: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input readonly type="text" class="form-control" name="Accesscode" id="Accesscode" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Ascode'])) : trim(filter_var($rand, FILTER_SANITIZE_STRING)))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['AccesscodeError']))?$data['AccesscodeError']:'')?></span>
                            </div>
                        </div>
                        <?php if(isset($_GET['Edit'])): ?>
						<?php else: ?>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Password">Password: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="password" class="form-control" name="Password" id="Password" value="123" />
								<span class="inValidFeedBack"><?=((isset($data['PasswordError']))?$data['PasswordError']:'')?></span>
                            </div>
                        </div>
                        <?php endif?>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Email">Email: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="email" class="form-control" name="Email" id="Email" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['email'])) : ((isset($_POST['Email']))? trim(filter_var($_POST['Email'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['EmailError']))?$data['EmailError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Telephone_No">Mobile Number: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                               <input type="tel" class="form-control" name="Telephone_No" id="Telephone_No" 
							   value="<?=((isset($_GET['Edit']))?trim(filter_var($data['tel'])) : ((isset($_POST['Telephone_No']))? trim(filter_var($_POST['Telephone_No'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['Telephone_NoError']))?$data['Telephone_NoError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Place of birth">Place of Birth: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Place__of__birth" id="Place__of__birth" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['PoD'])) : ((isset($_POST['Place__of__birth']))? trim(filter_var($_POST['Place__of__birth'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['Place__of__birthError']))?$data['Place__of__birthError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Date of Birth">Date of Birth: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input data-provide="datepicker" data-date-autoclose="true"  class="form-control" name="Date_of_Birth" id="Date_of_Birth"  value="<?=((isset($_GET['Edit']))?trim(filter_var($data['DoB'])) : ((isset($_POST['Date_of_Birth']))? trim(filter_var($_POST['Date_of_Birth'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['Date_of_BirthError']))?$data['Date_of_BirthError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Gender">Gender: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                               <input list="GenderList" class="form-control" name="Gender" id="Gender" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['gn'])) : ((isset($_POST['Gender']))? trim(filter_var($_POST['Gender'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="GenderList">
									<option value="Female">
									<option value="Male">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['GenderError']))?$data['GenderError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Relationship_sts">Relationship Status : <span class="text-danger">*</span></label>
                            <div class="col-md-7">
								<input list="Relationship" class="form-control" name="Relationship_sts" id="Relationship_sts" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['relatx'])) : ((isset($_POST['Relationship_sts']))? trim(filter_var($_POST['Relationship_sts'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="Relationship">
									<option value="Single">
									<option value="Divored">
									<option value="Married">
									<option value="Complicated">
									<option value="Window">
									<option value="In -Contract Marrige">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['Relationship_stsError']))?$data['Relationship_stsError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Civil Status">Civil Status: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input list="Civil_statusList" class="form-control" name="Civil_status" id="Civil_status" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Cst'])) : ((isset($_POST['Civil_status']))? trim(filter_var($_POST['Civil_status'], FILTER_SANITIZE_STRING)): ''))?>"  required="required" />
								<datalist id="Civil_statusList">
									<option value="Legal as Citizen">
									<option value="Migrant">
								</datalist>
                                <span class="inValidFeedBack"><?=((isset($data['Civil_statusError']))?$data['Civil_statusError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Citizenship">Citizenship: <span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Citizenship" id="Citizenship" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Ctz'])) : ((isset($_POST['Citizenship']))? trim(filter_var($_POST['Citizenship'], FILTER_SANITIZE_STRING)): ''))?>"  required="required" />
								<span class="inValidFeedBack"><?=((isset($data['CitizenshipError']))?$data['CitizenshipError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="NIN">NIN:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input type="number" class="form-control" name="NIN" id="NIN" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['nin'])) : ((isset($_POST['NIN']))? trim(filter_var($_POST['NIN'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<span class="inValidFeedBack"><?=((isset($data['NINError']))?$data['NINError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Height">Height:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                               <input list="HeightList" class="form-control" name="Height" id="Height" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Hat'])) : ((isset($_POST['Height']))? trim(filter_var($_POST['Height'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="HeightList">
									<option value="1.45m">
									<option value="1.55m">
									<option value="1.60m">
									<option value="1.66m">
									<option value="1.71m">
									<option value="1.78m">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['HeightError']))?$data['HeightError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Weight">Weight:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input list="WeightList" class="form-control" name="Weight" id="Weight" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Wat'])) : ((isset($_POST['Weight']))? trim(filter_var($_POST['Weight'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="WeightList">
									<option value="1.55m">
									<option value="1.45m">
									<option value="1.30m">
									<option value="1.35m">
									<option value="1.25m">
									<option value="1.20m">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['WeightError']))?$data['WeightError']:'')?></span>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Blood Type">Blood Type:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input list="BloodGroupist" class="form-control" name="Blood_Type" id="Blood_Type" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Bty'])) : ((isset($_POST['Blood_Type']))? trim(filter_var($_POST['Blood_Type'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="BloodGroupist">
									<option value="Group: A">
									<option value="Group: B">
									<option value="Group: AB">
									<option value="Group:-: O">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['Blood_TypeError']))?$data['Blood_TypeError']:'')?></span>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Religion">Religion:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                               <input list="ReligionList" class="form-control"name="Religion" id="Religion" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Religion'])) : ((isset($_POST['Religion']))? trim(filter_var($_POST['Religion'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
								<datalist id="ReligionList">
									<option value="Christianity">
									<option value="Islam">
									<option value="Hinduism">
									<option value="Buddhism">
									<option value="Unaffiliated">
									<option value="Folk religions">
									<option value="None">
								</datalist>
								<span class="inValidFeedBack"><?=((isset($data['ReligionError']))?$data['ReligionError']:'')?></span> 
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Qualification">Qualification:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <input list="QualificationList" class="form-control" name="Qualification" id="Qualification" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['QCT'])) : ((isset($_POST['Qualification']))? trim(filter_var($_POST['Qualification'], FILTER_SANITIZE_STRING)): ''))?>" required="required" />
									<datalist id="QualificationList">
										<option value="BSc" selected="">
										<option value="PhD">
										<option value="HnD">
										<option value="College Degree">
										<option value="OND">
									</datalist>
								<span class="inValidFeedBack"><?=((isset($data['QualificationError']))?$data['QualificationError']:'')?></span>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Profile Photo">Profile Photo:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                            <?php
								if(isset($_GET['Edit']) && ($data['Saved_image'] != '')):  ?>
                                    <div class="clearfix"></div>
                                    <div class="responsive ">
										<img src="<?=PATHROOT. $data['Saved_image']?>" class="img-responsive img-thumbnail" style="width:30%; height:8.9rem"><br/>
										<a href="<?=ROOT?>Admin/Professors?delete_image=1&Edit=<?=$data['id'];?>"  class="btn btn-danger btn-xs"style="margin-top:5px">
											<i class="fa fa-trash"></i>Remove Image
										</a><br/>
										<span class="inValidFeedBack" style="font-size:11px"><?=$data['SavephotoError']?></span>
									</div>
							<?php else: ?>
									<input type="file" class="form-control" name="Profile__Picture" id="Profile__Picture" value="" />
									<span class="inValidFeedBack"><?=((isset($data['Profile__PictureError']))?$data['Profile__PictureError']:'')?></span>
							<?php endif; ?>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="Address">Address:<span class="text-danger">*</span></label>
                            <div class="col-md-7">
                                <textarea class="form-control" name="Address" id="Address" value="<?=((isset($_GET['Edit']))?trim(filter_var($data['Add'])) : ((isset($_POST['Add']))? trim(filter_var($_POST['Add'], FILTER_SANITIZE_STRING)): ''))?>" cols="0" rows="6" required="required" ><?=((isset($_GET['Edit']))?trim(filter_var($data['Add'])) : ((isset($_POST['Add']))? trim(filter_var($_POST['Add'], FILTER_SANITIZE_STRING)): ''))?></textarea>
								<span class="inValidFeedBack"><?=((isset($data['AddressError']))?$data['AddressError']:'')?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <button type="submit" name="<?=((isset($_GET['Edit']))?'__EditProfessor': '___AddNewProfessor');?>" class="btn btn-success pull-right"><?=((isset($_GET['Edit']))?'Edit': 'Add New');?> Professor</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{?>
<a href="<?=ROOT?>Admin/Professors?<?=((isset($_GET['Edit'])?'Edit='.$data['Professor__id']: 'Add=1'));?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i>&nbsp;Add New Professor</a><div class="clearfix"></div>
<h4 class="text-center">PROFESSOR TABLE</h4>
<hr />
</div>
	<div class="section-body mt-4">
		<div class="container-fluid">
			<div class="tab-content">
				
			</div>
		</div>
	</div>
<div class="section-body mt-4">
	<div class="container-fluid">
		<div class="tab-content">
			<div class="tab-pane active" id="Library-all">
				<div class="card">
					<div class="container-fluid">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover js-basic-example dataTable table-striped table_custom border-style spacing5" id="myTable">
									<thead>
									<tr style="background:#21495c">
										<th colspan="8">
											<strong>ADINISTRATOR ONLY</strong>
											<strong class="text-center" style="float:center; color:#fff;">Mercy College Professors Management Table</strong>
										</th>
									</tr>
										<tr style="background:#ceede8">
											<th>#</th>
											<th><input type="checkbox" id="primarySelect" /></th>
											<th class="text-center">User Permit</th>
											<th class="text-center">AccessCode</th>
											<th class="text-center">Name </th>
											<th class="text-center">Email</th>
											<th class="text-center"> Image </th>
											<th class="text-center"> Action </th>
										</tr>
									</thead>
									<tbody>
								<?php $i = 0?>
									<?php foreach ($data['All'] as $presult): ?>
									<?php if ($presult > 0) 
										$i ++;?>
									<tr>
										<td><?=$i?></td>
										<?php 
											$SSD = $presult['Professor__id']; 
											$ToSendMail = $presult['Email'];
											$RecipicientName = $presult['Surname'].' '. $presult['Othername'];
											$Sender =  $_SESSION['adminEmail'] ;
											$n1 = $_SESSION['adminSurname'];
											$n2 = $_SESSION['adminothername'];
											$SenderName = $n1 . " " .$n2;
											$ai =0;
										?>
											<td><input type="checkbox" name="checkedId[]" value="<?= $SSD??''?>"></td>
											<td class="left" style="font-size: 11px;">
												<a href="<?=ROOT . "Admin/Professors?featured=".(($presult['featured'] == 0)?'1' : '0')?>&Professor__id=<?=$presult['Professor__id'];?>" class="btn btn-<?=(($presult['featured'] ==1)?'default':'danger')?> btn-xs" title="Grant Professor Access To Account">
													<i class="fa fa-<?=(($presult['featured'] ==1)?'minus':'plus')?>"></i>
													&nbsp <?=(($presult['featured'] == 1)? 'Access Granted': 'Account Disabled')?>
												</a>
											</td>
												<td class="left"><?=$presult['Accesscode']?></td>
												<td><?=$presult['Surname'].' '. $presult['Othername']?></td>
												<td>
													<button style="content: "\a";white-space: pre;" type="button" class="btn btn-primary btn-xs" id="myBtn" title="Compose Email & Send" data-toggle="modal" data-target="#modalForm" data-senderMailTo="<?=$ToSendMail?>" data-recipientName="<?=$RecipicientName?>">Send Email <i class="fa fa-envelope-square"></i></button>
												</td>
												<td class="left">
													<img src="<?=PATHROOT.$presult['Profile__Picture']?>" class="rounded img-thumbnail" alt="<?=$presult['Surname'].' '.$presult['Othername']?>" style="width:40px; height:40.7px">
												</td>
												<td style="display:flex" class="action-btn">
													<a href="<?=ROOT?>Admin/Professors?<?=((isset($_GET['Add'])?'Add=1': 'Edit='.$SSD));?>" class="btn btn-success btn-xs" title="Edit Professor Profile">
														<i class="fa fa-pencil"></i>
													</a>
													<button onclick="___CallProfFun(<?=$SSD?>);" data-id="<?=$SSD?>" class="btn btn-danger btn-xs" id="delete" title="Delete This Professor"><i class="fa fa-trash-o"></i></button>
													<a href="<?=ROOT. "Admin/Professors?View=".$SSD ?>" class="btn btn-warning btn-xs" title="View Profile In Table Form"><i class="fa fa-eye"></i></a>
													<button type="button" class="btn btn-success btn-xs" onclick="___SubmitAppointment(<?=$SSD;?>)" title="Appoint Professor To Certain Department">
														<i class="fa fa-calendar"></i>
													</button>
												</td>
										</tr>
										<?php $ai ++;?>
										<?php endforeach?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php }?>
<!-- Modal -->
    <div class="modal fade" id="modalForm" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn btn-default btn-xs pull-right" data-dismiss="modal"><i class="fa fa-remove"></i></button>
                    <h4 class="modal-title" id="myModalLabel">New Message</h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form role="form" method="POST" action="javascript:void(0)" id="ajax-form">
                        <div class="form-group" style="display:none">
                            <label for="inputSenderName">SenderName:</label>
                            <input type="text" class="form-control" value="<?=$SenderName?>" id="SenderName" placeholder="Sender Name:" />
                        </div>
                        <div class="form-group" style="display:none">
                            <label for="inputFrom">From:</label>
                            <input type="email" class="form-control" value="<?=$Sender?>" id="SenderMail" placeholder="From:" />
                        </div>
                        <div class="form-group" style="display:none">
                            <label for="inputFrom">Recipient Name:</label>
                            <input type="text" class="form-control" value="" id="RecipientName" placeholder="From:" />
                        </div>
                        <div class="form-group">
                            <label for="inputTo">To:</label>
                            <input type="email" class="form-control" value="" id="inputEmail" placeholder="Recipients" />
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject:</label>
                            <input type="text" class="form-control" id="inputSubject" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message:</label>
                            <textarea class="form-control" id="inputMessage" placeholder="Message" cols="0" rows="3" ></textarea>
                        </div>
                
                    <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i>Close</button>
                            <button type="submit" class="btn btn-primary btn-sm submitBtn" >Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="section-body">
<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-12">
Copyright © 2021 <a href="https://www.midtech.digital">MidTech Digital</a>.
</div>
<div class="col-md-6 col-sm-12 text-md-right">
<ul class="list-inline mb-0">
<li class="list-inline-item"><a href="#">Documentation</a></li>
<li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
<li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
</ul>
</div>
</div>
</div>
</footer>
</div>
</div>
</div>

<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/bundles/lib.vendor.bundle.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/bundles/dataTables.bundle.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/sweetalert/sweetalert.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/core.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminRoute/assets/js/page/dialogs.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminRoute/assets/js/table/datatable.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fd2038d860dbfd0f5be6f0db-|49" defer=""></script>
<script src="<?=ASSETS?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=ASSETS?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=ASSETS?>assets/plugins/sweet-alert/sweetalert2.all.min.js"></script>
<script src="<?=ASSETS?>assets/plugins/sweet-alert/sweetalert2.min.js"></script>
<script src="<?=ASSETS?>assets/js/pages/sweet-alert/sweet-alert-data.js"></script>
<!-- data tables -->
<script>
	 function show(anything){
		 document.querySelector('.textBox').value = anything;
	 }
	function ___CallProfFun(SSD) {
		const JavascriptHook = 
		{"DataId":SSD};
		let StringData = JSON.stringify(JavascriptHook);
		  Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to retrieve this person data!",
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			background: '#fff',
			backdrop: `rgba(0,0,123,0.4)`,
			confirmButtonText: 'Yes, Delete!',
			// using theN & done promise callback
		}).then((result)=>{
			if (result.value){
				$.ajax({
					type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
					dataType     : 'JSON',
					contentType  : "application/json; charset=utf-8",
					data         : StringData,// our data object
					url          : '<?=ROOT .'Admin/deleteProfessor';?>', // the url where we want to POST
					processData  : false,
					encode       : true,
					crossOrigin  : true,
					async        : true,
					crossDomain  : true,
					headers		 : {
								'Access-Control-Allow-Methods': '*',
								"Access-Control-Allow-Credentials": true,
								"Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
								"Access-Control-Allow-Origin": "*",
								"Control-Allow-Origin": "*",
								"cache-control": "no-cache",
								'Content-Type': 'application/json'
							},
				}).done((response)=>{
					Swal.fire('Deleted!', response.message, response.status);
					setTimeout(function(){
						window.location.reload(1);
						}, 1000);
					}).fail((xhr, status, error)=>{
						Swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
				});
			}
		});
	}
	</script>
	<script>
	function ___SubmitAppointment(SSD){
		let data = {"SSD":SSD};
		jQuery.ajax({
			url: '<?=ROOT;?>Admin/toggleProfessor',
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
						"Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
						"Access-Control-Allow-Origin": "*",
						"Control-Allow-Origin": "*",
						"cache-control": "no-cache"
						//"Content-Type": 'application/json'
					},
			success:(data)=>{
				$('body').append(data);
				$('#___AppointmentProfessorModal').modal('show');
			},
			error: ()=>{
				alert("Something went wrong..!");
			}
		});
	}
	// Fetch the post user email 
	$(document).on("click", "#myBtn", function () {
     let ids = $(this).attr('data-senderMailTo');
	 let recipientdataName = $(this).attr('data-recipientName');
	 $("#inputEmail").val(ids);
	 $("#RecipientName").val(recipientdataName);
    });
	// Validate modal data 
$(document).ready(($)=>{
    //hide messages 
    $(".statusMsg").hide();
	//on submit
    $('#ajax-form').submit(function (e) {
        e.preventDefault();
        $(".statusMsg").hide();
		 //validate the input now
		let reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		let SenderName = $('#SenderName').val();
		if (SenderName.trim() == "") {
            $(".statusMsg").fadeIn().html("<span style='color:red;'>Please Enter Your Name As The Sender.</span> ");
            $("#SenderName").focus()
            return false;
        }
		let RecipientName = $('#RecipientName').val();
		if(RecipientName.trim() == ""){
			$(".statusMsg").fadeIn().html("<span style='color:red;'>Please Enter Recipient Name.</span> ");
            $("#RecipientName").focus()
			return false;
		}
		let SenderMail = $('#SenderMail').val();
		if (SenderMail.trim() == "") {
            $(".statusMsg").fadeIn().html("<span style='color:red;'>Please Enter Your Email Address As The Sender..</span> ");
            $("#SenderMail").focus();
            return false;
        }else if(SenderMail.trim() != '' && !reg.test(SenderMail)){
			$(".statusMsg").fadeIn().html('<span style="color:red;">Invalid Email Provided.</span>');
			$('#SenderMail').focus();
			return false;
		}
		let email = $('#inputEmail').val();
		if (email.trim() == "") {
            $(".statusMsg").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter Your Recipient.</b></div>');
            $("#inputEmail").focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
			$(".statusMsg").fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Invalid Email Provided.</span></div>');
			$('#inputEmail').focus();
			return false;
		}
		let subject = $('#inputSubject').val();
		if(subject.trim() == '' ){
			$('.statusMsg').fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter The Subject.</span></div>');
			$('#inputSubject').focus();
			return false;
		}
		
		let message = $('#inputMessage').val();
		if(message.trim() == '' ){
			$('.statusMsg').fadeIn().html('<div class="alert alert-danger"><i class="fa fa-info-circle"></i>&nbsp;<b>Please Enter Your Message.</b></div>');
			$('#inputMessage').focus();
			return false;
		}else{
			$.ajax({
				type:'POST',
				url:'<?=ROOT;?>Admin/MailToProfessor',
				data:'contactFrmSubmit=1&SenderName='+SenderName+'&SenderMail='+SenderMail+'&email='+email+'&RecipientName='+RecipientName+'&Subject='+subject+'&message='+message,
				beforeSend: ()=> {
					$('.submitBtn').attr("disabled","disabled");
					$('.modal-body').css('opacity', '.5');
				},
				success:(msg)=>{
					$('.statusMsg').fadeIn().html('<div class="alert alert-success text-center" style="color:green;">Email Has Successfully Sent..!</div>');
					$(".statusMsg").fadeIn();
                	$("#ajax-form").fadeOut();
					$('.submitBtn').removeAttr("disabled");
					$('.modal-body').css('opacity', '');
					Swal.fire({
						position: "bottom-end",
						icon: "success",
						title: "<h3>Email Has Successfully Sent..!</h3>",
						showConfirmButton: false,
						color: '#716add',
						background: '#fff',
						backdrop: `rgba(0,0,123,0.4)`,
						timer: 1500,
					});
				},
				error:()=>{
					Swal.fire({
						position: "bottom-end",
						icon: 'error',
						title: 'Oops...',
						text: 'Some problem occurred, please try again.!',
						color: '#716add',
						background: '#fff',
						backdrop: `rgba(0,0,123,0.4)`,
						timer: 2500,
					});
				}
			});
		}
	});
});
$(document).ready(()=>{
  $("#myBtn").click(()=>{
    $("#modalForm").modal();
  });
});
 
</script>
</body>
</html>
