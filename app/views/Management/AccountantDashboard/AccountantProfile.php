<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- icons -->
	<link href="<?=ASSETS?>fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?=ASSETS?>fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?=ASSETS?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- full calendar -->
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="pull left">Account</h2>
                <p class="">Update your info to keep your account secure.</p>
                <a href="<?=ROOT?>Management/AccountantInformations/">
                    <p>
                        <i class="fa fa-users"></i>
                        Personal and Account Information
                        </i>
                    </p>
                </a>
                 <a href="<?=ROOT?>Management/ChangePassword/">
                    <p>
                        <i class="fa fa-cog"></i>
                            Password and Security
                    </p>
                </a>
            </div>
            
        </div>
   </div>
</body>
</html>