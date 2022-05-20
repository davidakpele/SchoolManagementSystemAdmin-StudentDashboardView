<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="theme-color" content="#c9190c">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#c9190c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" media="(prefers-color-scheme: dark)"  content="black">
    <meta name="description" content="Mercy College School Management System Software."/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>img/favicon-32x32.png">
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <link href="<?=ASSETS?>fonts/font-awesome/css/all.css" rel="stylesheet" />
    <link href="<?=ASSETS?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Alternative loader -->
    <link rel="manifest" href="<?=ASSETS?>light/manifest.json">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <link href="<?=ASSETS?>fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=ASSETS?>fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
    <link rel="manifest" href="<?=ASSETS?>light/manifest.json">
	<link rel="stylesheet" href="<?=ASSETS?>assets/plugins/flatpicker/css/flatpickr.min.css" />
    <link href="<?=ASSETS?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <script>
    if (typeof(Worker) !== "undefined") {
        // Yes! Web worker support!
        console.log('Is Okay');
        // Some code.....
        } else {
              console.log('Undefine');
        // Sorry! No Web Worker support..
        }
    </script>
    <style>
        body{
            font-display: optional;
        }
    .inValidFeedBack {
    color: #fd5d5d;
    font-weight: 300;
    font-size: 12px;
    }
    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?=ROOT?>Management/Log/" class="navbar-brand">MidTech</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?=ROOT?>Management/Log/"><i class="icon-home"></i>Home</a></li>
				<li><a href="<?=ROOT?>Management/Log/">Product</a></li>
			</ul>
			<form class="navbar-form navbar-left" method="GET" autocomplete="off">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn">search</button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></span>SignIn</a>
					<ul class="dropdown-menu">
                        <p> <?php if(isset($_SESSION['username'])): ?> </p>
                            <a href="<?=ROOT?>PagesController/Logout">
                            <i class="icon-logout"></i>Log Out</a>
                        <?php endif; ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<p><br><br><br></p>
<div class="container reg__container">
 <p class="fs-4 fw-bold m-0 mt-4 h3 text-center Reg__header" style="font-size:24px">Add New Lectural</p>
    <div class="container" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width:990px; margin:0 auto;padding: 25px;">
        <div class="row ">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> 
                  <div class="card-body" id="bar-parent">
                    <form  method="POST" class="form-horizontal form-group"  autocomplete="off"/>
                        <div class="CyberSecurityResponVal">
                            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTUyNDQ3MTU1NQ9kFgQCAQ8WAh4HVmlzaWJsZWgWAgIBDxYCHgRUZXh0ZWQCAw9kFgQCAw8QDxYGHg1EYXRhVGV4dEZpZWxkBRNBcHBsaWNhdGlvblR5cGVOYW1lHg5EYXRhVmFsdWVGaWVsZAURQXBwbGljYXRpb25UeXBlSUQeC18hRGF0YUJvdW5kZ2QQFQ4ADFBvc3RncmFkdWF0ZRxTY2hvb2wgb2YgRm91bmRhdGlvbiBTdHVkaWVzA0lDRQ1VbmRlcmdyYWR1YXRlNUh1bWFuIFJlc291cmNlcyBEZXZlbG9wbWVudCBDZW50cmUgRGlwbG9tYSBQcm9ncmFtbWVzG0Rpc3RhbmNlIExlYXJuaW5nIEluc3RpdHV0ZQ5JQ0UgKFNhbmR3aWNoKQ1VbmRlcmdyYWR1YXRlAAEtA0lNUyNVbml2ZXJzaXR5IG9mIExhZ29zIEJ1c2luZXNzIFNjaG9vbDZVbml2ZXJzaXR5IG9mIExhZ29zIEJ1c2luZXNzIFNjaG9vbCAoU2hvcnQgUHJvZ3JhbW1lcykVDgAMUG9zdGdyYWR1YXRlCkZvdW5kYXRpb24DSUNFDVVuZGVyZ3JhZHVhdGUESFJEQwNETEkPSUNFIChFRFVDQVRJT04pDVVuZGVyZ3JhZHVhdGUAAS0DSU1TBFVMQlMHVUxCUy1TUBQrAw5nZ2dnZ2dnZ2dnZ2dnZxYBZmQCBQ8QZGQWAGRk2/T7ZMkY7ntGcd/botvxcKAzneuyj4BSIpLHIhWxR58=" />
                        </div>
                        <div class="form-body">
                        <div class="form-group row">
                         <label class="control-label col-md-3">Access ID
                                    <span class="required"> * </span>
                                </label>
                            <div class="col-md-5">
                                <input type="text" name="Accesscode" class="form-control" value="<?= $_SESSION['Accesscode'];?>"/>
                                <span  class="inValidFeedBack"><?=$data['AccesscodeError']; ?></span>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Old Password
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="password" name="password" placeholder="Password" class="form-control" value="<?=((isset($_POST['password']))?$_POST['password']: '')?>"/>
                                    <span  class="inValidFeedBack"><?=$data['passwordError']; ?></span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="control-label col-md-3">New Password
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="password" name="Newpassword"  placeholder="Newpassword" class="form-control" value="<?=((isset($_POST['Newpassword']))?$_POST['Newpassword']: '')?>"/>
                                    <span  class="inValidFeedBack"><?=$data['NewpasswordError']; ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Confirm password
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-5">
                                    <input type="password" name="Confirmpassword"  placeholder="Confirm mpassword" class="form-control" value="<?=((isset($_POST['Confirmpassword']))?$_POST['Confirmpassword']: '')?>"/>
                                    <span  class="inValidFeedBack"><?=$data['ConfirmpasswordError']; ?></span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="offset-md-3 col-md-9" style="text-align:center">
                                        <button type="submit" class="btn btn-info btn-sm" style="width:16rem">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Nav tabs -->
</body>
</html>