<!DOCTYPE html>
    <html lang="en" class="no-js">
    <head id="Head1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#c9190c">
    <meta name="robots" content="index,follow">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#c9190c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <title>Initiate Online Payment Application | Mercy College School Managment System Software</title>
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/> 
    <link type="text/json" href="http://localhost/Student/public/assets/light/manifest.json"/>
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=ASSETS?>important__stylesheet__file/responsive.css" rel="stylesheet" />
    <style type="text/css">
        body {background: linear-gradient(rgba(0,0,0, 0.56), rgba(0,0,0, 0.56)), url(<?=ASSETS?>img/gallery/login_bg.jpg) no-repeat;background-size: cover;}
        #head { border-bottom: 0px;opacity: 0.9;}
        h2 {color: #fff;}
        .login-widget{max-width: 540px;background: #FFF;border-radius: 5px;margin: 0 auto;padding: 25px}
        .login-widget input[type='text'], .login-widget input[type='password'] {border: 1px solid #E2E1E1;color: #999;width: 100%;border-radius: 4px;padding: 7px;font-size: 14px;}
        .login-widget label {display: block;padding: 3px 0px 3px 0px;font-size: 14px;font-weight: 100;width: auto;height: auto;}
        .login-widget input[type='submit'] {border: none;padding: 10px;color: #FFF;width: 100%;text-align: center;background: #2383ad;font-size: 17px;border-radius: 4px;margin-top: 10px;}
        .float-center {text-align: center;color: #fff;font-size: 13px;}
        #content{margin: 0 auto;padding: 25px;}
        .error {background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
        #success {background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
        .float-center a {background: #c60d00;color: #fff;padding: 3px 10px;border-radius: 3px;}
        * {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
        #head{width: 100%; padding: 1%;border-bottom: 1px solid #EEE;position: static; top: 0px;left: 0px;z-index: 99;background: #008bc6; height: 60px; margin-bottom: 30px;}
        .loading {display: flex;justify-content: center;align-items:center;transition: 0.5s;position:fixed;top:0;width:100%;height:100%;}
        .loading::after {content: "";width: 37.6px;height: 37.6px;border: 8px solid #bbdbfc;border-top-color: #0c6cf2;border-radius: 50%;animation: loading 1s linear infinite;}
        @keyframes loading {to {transform: rotate(1turn);}}
        .content {transition: 0.5s;opacity:0;}
    </style>
</head>
<body>
<div id="head">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="float-left"> 
                    <span>
                        <a href="<?=ROOT?>"> <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:45px;"/></a>
                    </span>
                </div>
            </div><!--end col div here -->
            <div class="float-right">
                <div class="horizontal-list">
                <ul>

                </ul>
                </div>
            </div>
            <br class="clear" />
        </div><!-- end row here -->
    </div><!-- close container -->
</div>
<div id="payment__validate" style="display:none">
    <div class="loading">
        <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...</div>
    </div>
</div>
<!--- Start Body -->
    <h2 class="h-2" style="text-align:center">Pay Online</h2>
    <div class="mini-container login-widget"> 
        <div id="errorMessage" class="error invalid-feedba" style="display:none;"></div>
        <div  id="success" style="display:none; color:#000;"></div>
            <form method="POST" action="javascript:void(0)" id="InitiateOnlinePayment" autocomplete="off">
                <div class="element">
                    <label>Reference No </label>
                    <input name="RefNo" type="text" id="RefNo" value=""/>
                </div>
                <div class="element">
                <input name="submit" type="submit" id="submit" value="Continue" />
                </div>
            </form>
        </div>
    <div class="mini-container float-center"  style="margin-top: 20px; width: 100%;"><p>Contact the administrator <a href="#">Support</a></p></div>
    <br class="clear" />
     <br class="clear" />
</div>
<!-- End Body --><br />
    <!-- footer div starts here -->
    <div class="container-fluid" style="position: fixed;bottom: 0px;padding-top: 20px;width: 100%;" >
        <div class="container footer-wrap">
            <div class="row">
                <div class="col-sm-6 pull-left footer-left">
                   <p style="color:#b9b9b9;">&copy; All Right Reserved</p> 
                </div>
                <div class="col-sm-6 text-right pull-right footer-right">
                    <p style="color:#b9b9b9;">Powered by <a href="http://www.midtech.digital" style="color:#2383ad; text-decoration:underline">MidTech Digital Solution</a></p>     
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <script>
    $(document).ready(($) => {
        //hide messages
        $("#errorMessage").hide();
        $("#success").hide();
        $("#payment__validate").hide();
        //on submit
        $('#InitiateOnlinePayment').submit((e) => {
            e.preventDefault();
            let ref = $("input#RefNo").val();
            if (ref == "") {
                $("#errorMessage").fadeIn().text("Please Enter Your Reference Nunber.");
                $("input#RefNo").css('border-color', 'red');
                $("input#RefNo").focus();
                return false;
            }
            const Plug = { "ReferenceNumber": ref };
            let RouteUserDateToPhp = JSON.stringify(Plug);
            $.ajax({
                type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: RouteUserDateToPhp,// our data object
                url: '<?=ROOT?>PageController/InitiateOnlinePaymentController',// the url where we want to POST
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
                if (response.status == 200) {
                    const loading = document.querySelector('.loading');
                    $("#errorMessage").remove();
                    $("body").css('background', '#fff');
                    $("#payment__validate").show();
                    $("input#RefNo").css('border-color', 'green');
                    $("#success").fadeIn().text(response.message);
                    setTimeout(() => {
                    loading.style.opacity = "0";
                    window.location.reload(1);
                    }, 2000);
                }else{
                    $("input#RefNo").css('border-color', 'red');
                    $("#errorMessage").fadeIn().text(response.message);
                }
            }).fail((xhr, error) => {
                $("#errorMessage").fadeIn().text('Oops...Server is down! error');
            });
        });
    });
    </script>
<!-- footer div ends here -->
</body>
</html>
