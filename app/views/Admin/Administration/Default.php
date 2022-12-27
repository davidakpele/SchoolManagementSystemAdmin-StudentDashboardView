<?php  if(isset($_SESSION['username'])){header('location:' . ROOT . 'Admin/');}?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#c9190c" />
    <meta name="robots" content="index,follow" />
    <meta htttp-equiv="Cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-TileColor" content="#c9190c" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mercy College School Management System Software." /> 
    <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>img/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>img/favicon-32x32.png" />
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico" />
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/important__style.css" />
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/jquery.jgrowl.css" media="screen"/>
    <!-- Alternative loader -->
    <link type="text/json" href="<?=ASSETS?>light/manifest.json"/>
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <style>
        .error{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
        .error-ico{padding-left:70px;background: url(http://localhost/Student/public/assets/bullet_error.png) #FAE8E8 no-repeat 30px center;}
        input:focus{outline: none !important;border:1px solid red;box-shadow: 0 0 5px red;}
    </style>
</head>
    <body>
        <div class="s-background animated fadeIn">
            <!-- Gradient Effect ============================================= -->
            <div class="gradients">
                <div class="blue"></div>
            </div>
                <img class="slider img-responsive" src="<?=ASSETS?>img/gallery/cia.jpg">
                <img class="slider img-responsive" src="<?=ASSETS?>img/gallery/b.jpg">
                <img class="slider img-responsive" src="<?=ASSETS?>img/gallery/b3.jpg">
                <img class="slider img-responsive" src="<?=ASSETS?>img/gallery/s.jpg">
                <img class="slider img-responsive" src="<?=ASSETS?>img/gallery/s.jpg">
            </div>
            <center>
                <img src="<?=ASSETS?>img/product/1.png" class="img-responsive" style="max-width:120px">
                <h1 style="font-size: 22px; color: white;">Mercy College University Of Nigeria</h1>
                <h1 style="font-size: 39px; color: white;">Administration Login</h1>
            </center>
            <div class="items">
                <div class="mini-container login-widget"> 
                    <div class="container__login">
                        <div id="AdminLoginerrorMessage" class="error error-ico" style="display:none"></div>
                        <form method="POST" id="__AdminBoxText" class="form-group" autocomplete="off" action="<?=ROOT?>PageController/SecretInterfaceBug">
                            <div class="row p-0">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0">
                                    <div class="col-12 p-0 px-4"> 
                                        <span class="text text-muted">Username:</span> 
                                    </div>
                                    <div class="col-12 p-0 px-4"> 
                                        <input type="text" id="username" name="username" class="form-control" value="<?=((isset($_POST['username']))?$_POST['username']: '')?>" placeholder="username" />
                                    </div>
                                    <div class="col-12 p-0 px-4"> 
                                        <span class="text text-muted">Password:</span> 
                                    </div>
                                    <div class="col-12 p-0 px-4"> 
                                        <input type="password" id="password" name="password" value="<?=((isset($_POST['password']))?$_POST['password']: '');?>" class="form-control"  placeholder="Password"/>
                                    </div>
                                    <div class="col-12 p-0 px-4_btn">
                                        <button class="btn btn-primary w-100" value="Login" type="submit">
                                            <i class="fa fa-sign-in"></i>Login
                                        </button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- This Jquery below is not really neccessary TWO REASONS -->
<!-- 1: Because this version of jquery is Vulnerable [Some third-party scripts may contain known security vulnerabilities that are easily identified and exploited by attackers.] -->
<!-- 2: It here because it enable the Success message Model that flies in and fadeout when the User Data are correct. so if you remove it then be way assure that if a user enter his correct data and click login button, the page wont redirect to dashboard unless you or they manually refresh the page.-->
<!-- NOTE. you can fix this bug from the DataValidation js file, instead of setting success delay function in sec, you just need to use " setTimeout(() => {window.location.reload(1); }, 0);" which will automatically reload and reidrect without you refreshing the page yourself. it as simple as that. Choose is yours.-->
<!-- BUT i hope The Jquery Group Org release and new version of jquery that contains same functionalities of older and new version only then vulnerabilities Will reduce -->
<script type="text/javascript" src="<?=ASSETS?>js/jquery2.js"></script>
<?php $this->view("include/LogandRegFooter",$data); ?>