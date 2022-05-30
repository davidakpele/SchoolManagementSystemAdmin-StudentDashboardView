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
    <title>Application Form for Freshers | Mercy College School Managment System Software</title>
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/> 
    <link type="text/json" href="http://localhost/Student/public/assets/light/manifest.json"/>
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=ASSETS?>important__stylesheet__file/responsive.css" rel="stylesheet" />
    <style type="text/css">
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
        </div><!-- end row here -->
    </div><!-- close container -->
</div>
<div id="payment__validate" style="display:none">
    <div class="loading">
        <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...</div>
    </div>
</div>
<!--- Start Body -->
   
    <div class="mini-container login-widget" style="padding-bottom:40px"> 
        <div id="messagediv" class="success success-ico" style="display:none"></div>
        <div id="error" class="error error-ico" style="display:none"></div>
        <form role="form" class="form-group" method="POST" id="zoomform" action="javascript:void(0)" autocomplete="off">
            <div class="col-md-12" >
                <label for="inputToPIC">Topic:</label>
                <input type="text" class="form-control" value="" id="inputToPIC" placeholder="David Akpele's Zoom Meeting"/>
            </div>
            <div class="col-md-6">
                <label for="FromTime">From:</label>
                <input type="time" class="form-control" id="FromTime" value="" placeholder="09:00 PM"  />
            </div>
            <div class="col-md-6">
                    <label for="totime">To:</label>
                <input type="time" class="form-control" value="" id="totime" placeholder="09:00 PM" />
            </div>
            <div class="col-md-12" >
                <label for="timeZone">Time Zone:</label>
                <select name="timeZone" id="timeZone" value="" class="form-control">
                    <option value="" selected="selected" >-Empty-</option>
                    <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                    <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                    <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                    <option value="US/Alaska">(GMT-09:00) Alaska</option>
                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                    <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                    <option value="US/Arizona">(GMT-07:00) Arizona</option>
                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                    <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                    <option value="America/Managua">(GMT-06:00) Central America</option>
                    <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                    <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                    <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                    <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                    <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                    <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                    <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                    <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                    <option value="America/Manaus">(GMT-04:00) Manaus</option>
                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                    <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                    <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                    <option value="America/Godthab">(GMT-03:00) Greenland</option>
                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                    <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                    <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                    <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                    <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                    <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                    <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                    <option value="Asia/Amman">(GMT+02:00) Amman</option>
                    <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                    <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                    <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                    <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                    <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                    <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                    <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                    <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                    <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                    <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                    <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                    <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                    <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                    <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                    <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                    <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                    <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                    <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                    <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                    <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                    <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                    <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                    <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                    <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                    <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                    <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputMeetingID">Meeting ID:</label>
                <input type="text" class="form-control" id="meetingId" value="<?=$data['Meetingid']?>" readOnly/>
            </div>
            <div class="col-md-6">
                <label for="securitykey">Passcode:</label>
                <input type="text" class="form-control" value="" id="securitykey" placeholder="hYz21"/>
            </div>
        <!-- Modal Footer -->
            <div class="col-sm-12 col-md-12 col-xs-12  col-gray-dark pull-left">
                <br/>
                <button class="btn btn-primary submit_btn" type="submit" style="width: 50%">Done</button>
            </div>
        </form>
     </div>
</div>
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
            $(document).ready(($)=> {
                $("#error").hide();
                $("#messagediv").hide();
                //on submit
                $('#zoomform').submit((e)=> {
                    e.preventDefault();
                    $("#error").hide();
                    $("#messagediv").hide();
                    //validate the input now
                    let inputToPIC = $("#inputToPIC").val();
                    if (inputToPIC == "") {
                        $("#error").fadeIn().html("Please Provide The Meeting Topic..!");
                        $("#inputToPIC").focus();
                        return false;
                    }       
                    let FromTime = $("#FromTime").val();
                    if (FromTime == "") {
                        $("#error").fadeIn().html("This meeting will start when ?? <b>(Please Set the time)</b>");
                        $("#FromTime").focus();
                        return false;
                    }
                    let totime = $("#totime").val();
                    if (totime == "") {
                        $("#error").fadeIn().html("This meeting will end's when ?? <b>(Please Set the time)</b>");
                        $("#totime").focus();
                        return false;
                    }
                    let timeZone= $("#timeZone").val();
                    if (timeZone == "") {
                        $("#error").fadeIn().html("Please Select your timezone.");
                        $("#timeZone").focus();
                        return false;
                    }
                    let meetingId = $("#meetingId").val();
                    if (meetingId == "") {
                        $("#error").fadeIn().html("Sorry...! Make sure your device is connected to network first.");
                        $("#meetingId").focus();
                        return false;
                    }
                    let securitykey = $("#securitykey").val();
                    if (securitykey == "") {
                        $("#error").fadeIn().html("Please Provide The (Passcode) For Other User's To Again Access.");
                        $("#securitykey").focus();
                        return false; 
                    }
                    
                const Plug = { 
                                "inputToPIC": inputToPIC, "FromTime":FromTime, 
                                "totime":totime, "timeZone": timeZone, 
                                "meetingId":meetingId, "securitykey":securitykey
                            };
                let RouteUserDateToPhp = JSON.stringify(Plug);
                $.ajax({
                    type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: RouteUserDateToPhp,// our data object
                    url: "http://localhost/Student/PagesController/ProcessNewStudentOnline",// the url where we want to POST
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
                    if(response.status == 3){
                        $("#AppRegistration").fadeOut();
                        $("#messagediv").fadeIn().html(response.Successmessage);
                        
                    }else{
                        $("#error").fadeIn().html(response.message);
                    }
                }).fail((xhr, error) => {
                    $("#error").fadeIn().html('Oops...Server is down! error');
                });
            });
        });
    </script>
<!-- footer div ends here -->
</body>
</html>
