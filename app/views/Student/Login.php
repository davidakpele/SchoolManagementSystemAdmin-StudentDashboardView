<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="theme-color" content="#c9190c" />
            <meta name="robots" content="index,follow" />
            <meta http-equiv="Content-Language" content="en" /> 
            <meta htttp-equiv="Cache-control" content="no-cache"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="msapplication-TileColor" content="#c9190c"/>
            <meta name="apple-mobile-web-app-capable" content="yes"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="keywords" content="<?=$data['meta_tag_content_Seo']?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="description" content="<?=$data['meta_tag_description']?>" />
            <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>icons/favicon.ico"/>
            <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>icons/favicon.ico"/>
            <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" />
            <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
            <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
            <link rel="stylesheet" type="text/css" href="<?=ASSETS?>important__stylesheet__file/structure.css" />
            <link rel="stylesheet" type="text/css" href="<?=ASSETS?>important__stylesheet__file/responsive.css" />
            <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/jquery.jgrowl.css" media="screen"/>
            <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico" type="image/vnd.microsoft.icon"/>
            <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/> 
            <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
            <script type="text/javascript" src="<?=ASSETS?>js/jquery2.js"></script>
            <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
            <link type="text/json" href="<?=ASSETS?>light/manifest.json"/>
            <style type="text/css">
                body{background:#EAEAEA;}
                login-widget .element{width:auto; height:auto; padding:5px; margin-bottom:5px;}
                label{color:#7D7D7D;}
                .header-element {font-size: 18px; padding-top:5px;tex-algin:center;color: #535353;}
                .login-widget {margin-top: 20px;padding: 1.5%;background: #FFF;border-radius: 5px;box-shadow: 2px 2px 2px 0px #666;margin-bottom: 20px}
                .mini-container{margin: 0 auto;}
                .login-widget .element {width: auto;height: auto;padding: 5px;margin-bottom: 5px;}
                .login-widget label {display: block;padding: 3px 0px 3px 0px;font-size: 12px;font-weight: bold;width: auto;height: auto;}
                .inValidFeedBack {color: #fd5d5d;font-weight: 300;font-size: 12px;}
                .footerContent{margin:auto;color: #000;border-top: 1px solid #CCCCCC;position: fixed;bottom: 0px;width: 100%;}
                .png{max-width:100px; display: block;  margin-left: auto; margin-right: auto;}
                .header-toggle{padding:15px;}
                .error{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
                .error-ico{padding-left:70px;background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
                input:focus{outline: none !important;border:1px solid red;box-shadow: 0 0 5px red;}
            </style>
        </head>
    <body>
        <div class="header-toggle container">
            <h2 class="text-center header-element">Student Login Application</h2>
        </div>
        <div class="mini-container float-center">
            <img src="<?=ASSETS?>/lock.png" class="img-responsive png center"/><br/>
        </div>
        <div class="mini-container login-widget"> 
            <div id="errorMessage" class="error error-ico" style="display:none"></div>
            <form method="POST" action="javascript:void(0)" class="form-group" id="__LoginMercyCollegeStudent" autocomplete="off">
                <div class="PhpHookSecurityAsycHidden">
                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE4MDcwNzMxNA9kFgJmD2QWAgIJDxYCHgRocmVmBQ5pbWFnZXMvZmF2LnBuZ2RkdYzl8Hjtn1iQpAnQ2VIr7SmJgXUuALwWK9Wvj3RVCFg=" />
                </div>
                <div class="PhpHookSecurityAsycHidden">
                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="" />
                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="\wEdAAP007iSoED3ruvRlOgE2aU70L2DLJhpxQ2WXTNAV4E6IuKXTPonOLALxhfCJ/svpfnXFhUSRRFCO2nvUvXw7+LyP1GSkIx9bbfcVNzli3f8hw==" />
                </div>
                <div class="element">
                    <label>Matric No / Application No</label>
                    <input name="Roll__No" id="Roll__No" type="text" value="<?=(isset($_POST['Roll__No']))?$_POST['Roll__No']: '' ?>" />
                </div>
                <div class="element">
                    <label>Password</label>
                    <input name="Surname" type="password" id="Password" value="<?=(isset($_POST['Surname']))?$_POST['Surname']: '' ?>"/>
                </div>
                <div class="element">
                    <input type="submit" value="Login"  class="btn btn-xs">
                    </div>
                <div class="element">
                    <strong>Note:</strong> Your default
                    password is your surname in lowercase
                </div>
                    <br />
                <div class="element">
                    <div class="float-left">
                        <input type="checkbox" name="rememberMe" value="on" id="rememberMe"><span class="setCookie">Remember Me</span>
                    </div>
                    <div class="float-right res_link">
                        <a href="<?=ROOT?>Application/RetrieveMatricNo" class="ulink">Retrieve Matric No.</a> |  
                        <a href="<?=ROOT?>Application/Recover" class="ulink">Forgot your password?</a> | 
                        <a href="<?=ROOT?>Parents/ParentsViewStartPage" class="ulink">Parents' Corner</a>
                    </div>
                <br class="clear" />
                </div>
            </form>
        </div>
    <div class="clearfix"><br /><br /><br /><br /></div>
    <!-- footer div starts here -->
    <div class="container footer-wrap footerContent">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-sm-6 footer-left pull-left">
                    <p style="color:#b9b9b9;">&copy; All Right Reserved</p> 
                </div>
                <div class="col-sm-6 text-right footer-right pull-right">
                    <p style="color:#b9b9b9;">Powered by <a href="https://www.MidTech.digital/" style="text-decoration:none">MidTech Microsystem Pvt Ltd</a></p>     
                </div>
            </div>
        </div>
    </div>
<!-- footer div ends here -->
<script src="<?=ASSETS?>important__stylesheet__file/jquery.jgrowl.js"></script> 
<script type="text/javascript" src="<?=ASSETS?>vendor_plugins/DataValidation.js"></script>
<script>
    $(function() {
        $('.tooltip').tooltip();	
        $('.tooltip-left').tooltip({ placement: 'left' });	
        $('.tooltip-right').tooltip({ placement: 'right' });	
        $('.tooltip-top').tooltip({ placement: 'top' });	
        $('.tooltip-bottom').tooltip({ placement: 'bottom' });
        $('.popover-left').popover({placement: 'left', trigger: 'hover'});
        $('.popover-right').popover({placement: 'right', trigger: 'hover'});
        $('.popover-top').popover({placement: 'top', trigger: 'hover'});
        $('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
        $('.notification').click(function() {
            var $id = $(this).attr('id');
            switch($id) {
                case 'notification-sticky':
                    $.jGrowl("Stick this!", { sticky: true });
                break;
                case 'notification-header':
                    $.jGrowl("A message with a header", { header: 'Important' });
                break;
                default:
                    $.jGrowl("Hello world!");
                break;
            }
        });
    });
</script>
</body>
</html>

