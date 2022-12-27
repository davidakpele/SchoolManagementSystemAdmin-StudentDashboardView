
<!doctype html>
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
</head>
<body class="font-muli theme-cyan gradient">
        <!--Sidebar Menu -->
        <?php 
        // Color settings Component
        $this->view('Admin/bootstrapModal/ColorSettings');
        // Sidebar menu component
        $this->view('Admin/bootstrapModal/SidebarNav');
        // this is admin header
        include_once('../app/views/Admin/bootstrapModal/header.php');
        ?>
        </div>
    </div>
<div class="section-body">
<div class="container-fluid">
<div class="d-flex justify-content-between align-items-center ">
<div class="header-action">
<h1 class="page-title">Library</h1>
<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="#">Ericsson</a></li>
<li class="breadcrumb-item active" aria-current="page">Library</li>
</ol>
</div>
<ul class="nav nav-tabs page-header-tab">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Library-all">List View</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Library-add">Add New Library</a></li>
</ul>
</div>
</div>
</div>
<div class="section-body mt-4">
<div class="container-fluid">
<div class="tab-content">
<div class="tab-pane active" id="Library-all">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover js-basic-example dataTable table-striped table_custom border-style spacing5">
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Subject</th>
<th>Department</th>
<th>Year</th>
<th>Type</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Management Basics</td>
<td>Designing</td>
<td>Architecture</td>
<td>Second Year</td>
<td>CD</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>2</td>
<td>Java Black Book</td>
<td>Graphics</td>
<td>MBA</td>
<td>Third Year</td>
<td>DVD</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>3</td>
<td>Parallel Computing</td>
<td>Politics</td>
<td>Architecture</td>
<td>Third Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>4</td>
<td>Networking</td>
<td>Computer</td>
<td>MBA</td>
<td>Last Year</td>
<td>Newspaper</td>
<td>In Stock</td>
</tr>
<tr>
<td>5</td>
<td>Web Programming</td>
<td>Mechanics</td>
<td>Computer</td>
<td>Third Year</td>
<td>Book</td>
<td>In Stock</td>
</tr>
<tr>
<td>6</td>
<td>Designing</td>
<td>Mechanics</td>
<td>Computer</td>
<td>Third Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>7</td>
<td>Mechanics</td>
<td>Computer</td>
<td>Computer Engineering</td>
<td>Second Year</td>
<td>DVD</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>8</td>
<td>Computer Fundamental</td>
<td>Animation</td>
<td>Mechanical</td>
<td>Third Year</td>
<td>CD</td>
<td>In Stock</td>
</tr>
<tr>
<td>9</td>
<td>Time History</td>
<td>Management</td>
<td>Mechanical</td>
<td>Third Year</td>
 <td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>10</td>
<td>Politics</td>
<td>Designing</td>
<td>Mechanical</td>
<td>Second Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>11</td>
<td>Designing</td>
<td>Mechanics</td>
<td>Computer</td>
<td>Third Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>12</td>
<td>Mechanics</td>
<td>Computer</td>
<td>Computer Engineering</td>
<td>Second Year</td>
<td>DVD</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>13</td>
<td>Computer Fundamental</td>
<td>Animation</td>
<td>Mechanical</td>
<td>Third Year</td>
<td>CD</td>
<td>In Stock</td>
</tr>
<tr>
<td>14</td>
<td>Time History</td>
<td>Management</td>
<td>Mechanical</td>
<td>Third Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
<tr>
<td>15</td>
<td>Politics</td>
<td>Designing</td>
<td>Mechanical</td>
<td>Second Year</td>
<td>Newspaper</td>
<td>Out of Stock</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="Library-add">
<div class="card">
<div class="card-header">
<h3 class="card-title">Add Library</h3>
<div class="card-options ">
<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
</div>
</div>
<form class="card-body" method="POST" >
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Title: <span class="text-danger">*</span></label>
        <div class="col-md-7">
            <input type="text" class="form-control" id="title" spellcheck="true">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Application Type: <span class="text-danger">*</span></label>
        <div class="col-md-7">
           <select class="form-control input-height" name="Application__Type" id="Application__Type">
                <option selected="" value="">--Select--</option>
                <?php foreach ($data['DisplayCateogries'] as $stmt): ?>
                <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>"> <?=$stmt['Category__name']?> </option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Department <span class="text-danger">*</span></label>
        <div class="col-md-7">
            <select name="Department__Type" id="Department__Type" class="form-control">
                <option value=""  selected="">--select--</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Asset Type <span class="text-danger">*</span></label>
        <div class="col-md-7">
            <select class="form-control input-height" id="assttype" spellcheck="true">
                <option value="">Select...</option>
                <option value="Category 1">Book</option>
                <option value="Category 2">CD</option>
                <option value="Category 3">DVD</option>
                <option value="Category 3">NewsPaper</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label">Asset Details <span class="text-danger">*</span></label>
        <div class="col-md-7">
            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3 col-form-label"></label>
        <div class="col-md-7">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
        </div>
    </div>
</form>
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
Copyright © 2019 <a href="#">PuffinTheme</a>.
</div>
<div class="col-md-6 col-sm-12 text-md-right">
<ul class="list-inline mb-0">

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
<script src="<?=ASSETS?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=ASSETS?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/bundles/lib.vendor.bundle.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/bundles/dataTables.bundle.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/sweetalert/sweetalert.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="../assets/bundles/dataTables.bundle.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/core.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminRoute/assets/js/page/dialogs.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminRoute/assets/js/table/datatable.js" type="fd2038d860dbfd0f5be6f0db-text/javascript"></script>
<script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fd2038d860dbfd0f5be6f0db-|49" defer=""></script>
<script>
 $(document).ready(function ($) {
    $("#Application__Type").change(function () {
        let ___ApplicationType = $("#Application__Type").val();
        const JavascriptHook =
            { "DataId": ___ApplicationType };
        let StringData = JSON.stringify(JavascriptHook);
        const Url = 'http://localhost/student/PageController/RenderRequirementData'; // the url where we want to POST
        $.ajax({
            type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',//the type of data we are sending is json
            contentType: "application/json; charset=utf-8",
            data: StringData,// our data object
            url: Url,//the post destination
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
            Responed = response.result; 
            $('#Department__Type').empty();
            Responed.forEach(function (CallRecieve) {
                $('#Department__Type').append('<option value="' + CallRecieve.Child_id + '">' + CallRecieve.Child_name + '</option>')
            });
        }).fail((xhr, status, error) => {
            console.log('Oops...', 'Something went wrong with ajax !', 'error');
        });
    });
});
</script>
</body>
</html>
