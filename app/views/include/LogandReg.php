<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta name="theme-color" content="#c9190c">
        <meta name="robots" content="index,follow">
        <meta htttp-equiv="Cache-control" content="no-cache">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-TileColor" content="#c9190c">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <meta name="keywords" content="<?=$data['meta_tag_content_Seo']?>" />
        <meta name="description" content="<?=$data['meta_tag_description']?>" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>icons/favicon.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>icons/favicon.ico">
        <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
        <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
        <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
        <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
        <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
        <link href="<?=ASSETS?>important__stylesheet__file/important__style.css" rel="stylesheet">
        <!-- Alternative loader -->
        <script src="<?=ASSETS?>light/manifest.json" type="text/json"></script>
        <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?=ASSETS?>vendor_plugins/jquery.mask.js"></script>
        <script type="text/javascript" src="<?=ASSETS?>vendor_plugins/jquery.mask.min.js"></script>
        <style>
            .gap9{margin-top:10px;text-align:left;margin-left:15px;font-size:16px;font-weight:600;}
            .success {background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
            .success-ico {padding-left: 60px;background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;}
            .error{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
            .error-ico{padding-left:70px;background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
            .form-control:focus{outline: none !important;border:1px solid red;box-shadow: 0 0 5px red;}
            .buttonResendEmail {padding: 5px;background: #2383ad;color: #FFF;font-size: 13px;/* font-weight: bold; */border: none;border-radius: 3px;cursor: pointer;outline: 0px;}
            .buttonResendEmail:hover{color:#fff}
        </style>
        <script>
            $(document).ready(($)=> {
                //hide messages
                const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);;
                const emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;
           
                $("#error").hide();
                $("#messagediv").hide();
                $("#AppRegistration").show();
                     //on submit
                $('#AppRegistration').submit((e)=> {
                    e.preventDefault();
                    $("#error").hide();
                    $("#messagediv").hide();
                    //validate the input now
                    let StudentIdNo = $("input#___NewStudentIdNo").val();
                    if (StudentIdNo == "") {
                        $("#error").fadeIn().text("Sorry...! Your ID Number Fail To Generate.");
                        $("input#Application__Type").focus();
                        return false;
                    }       
                    let EnrollmentNo = $("input#EnrollmentNumber").val();
                    if (EnrollmentNo == "") {
                        $("#error").fadeIn().text("Sorry...! Your Enrollment Number Fail To Generate.");
                        $("input#EnrollmentNumber").focus();
                        return false;
                    }
                    let App = $("select#Application__Type").val();
                    if (App == "") {
                        $("#error").fadeIn().text("Select Your Application Type.");
                        $("select#Application__Type").focus();
                        return false;
                    }
                    let Dpt = $("select#Department__Type").val();
                    if (Dpt == "") {
                        $("#error").fadeIn().text("Select Your Course Type.");
                        $("select#Department__Type").focus();
                        return false;
                    }
                    let Prg = $("input#Program").val();
                    if (Prg == "") {
                        $("#error").fadeIn().text("Select Your Program For This Course.");
                        $("input#Program").focus();
                        return false;
                    }
                    let Nin = $("input#nin").val();
                    if (Nin == "") {
                        $("#error").fadeIn().text("Please Enter Your National Identification Number [NIN].");
                        $("input#nin").focus();
                        return false; 
                    }
                    let Ety = $("input#EtyLevel").val();
                    if (Ety == "") {
                        $("#error").fadeIn().text("Select Your Entry Level.");
                        $("input#EtyLevel").focus();
                        return false;
                    }
                    // Personal Data validation
                    let su = $("input#surname").val();
                    if (su == "") {
                        $("#error").fadeIn().text("Please Enter Your Surname.");
                        $("input#surname").focus();
                        return false;
                    }
                    let othername = $("input#othername").val();
                    if (othername == "") {
                        $("#error").fadeIn().text("Please Enter Your Othername.");
                        $("input#othername").focus();
                        return false;
                    }
                    if (su == othername) {
                        $("#error").fadeIn().text("Unaccepted Data.. Please Surname can't be the same with your Othername.");
                        $("input#othername").focus();
                        return false;
                    }
                    let Dob = $("input#Date__of__birth").val();
                    if (Dob == "") {
                        $("#error").fadeIn().text("Please Provide Your Date Of Birth");
                        $("input#Date__of__birth").focus();
                        return false;
                    }
                    let Gn = $("input#gender").val();
                    if (Gn == "") {
                        $("#error").fadeIn().text("Please Select Your Gender.");
                        $("input#gender").focus();
                        return false;
                    }
                    let email = $("input#email").val();
                    if (email == "") {
                        $("#error").fadeIn().text("Please Enter Your Email Address.");
                        $("input#email").focus();
                        return false;
                    }else if (!Validemailfilter.test(email)) {
                        $("#error").fadeIn().text("Invaid Email Address..! Please Enter A Valid Email Address.");
                        $("input#email").focus();
                        return false;
                    }else if(!emailblockReg.test(email)){
                        $("#error").fadeIn().text("Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address.");
                        $("input#email").focus();
                        return false;
                    }
                    const HMACSHA256 = (stringToSign, secret) => "not_implemented";
                    // The header typically consists of two parts: 
                    // the type of the token, which is JWT, and the signing algorithm being used, 
                    // such as HMAC SHA256 or RSA.
                    const header = {
                    "alg": "HS256",
                    "typ": "JWT",
                    "kid": "vpaas-magic-cookie-1fc542a3e4414a44b2611668195e2bfe/4f4910"
                    }
                    const encodedHeaders = btoa(JSON.stringify(header));
                    // The second part of the token is the payload, which contains the claims.
                    // Claims are statements about an entity (typically, the user) and 
                    // additional data. There are three types of claims: 
                    // registered, public, and private claims.
                    const claims = {"role": "Student"}
                    const encodedPlayload = btoa(JSON.stringify(claims));
                    // create the signature part you have to take the encoded header, 
                    // the encoded payload, a secret, the algorithm specified in the header, 
                    // and sign that.
                    const signature = HMACSHA256(`${encodedHeaders}.${encodedPlayload}`, "mysecret");
                    const encodedSignature = btoa(signature);
                    const jwt = `${encodedHeaders}.${encodedPlayload}.${encodedSignature}`
                      $.ajax({
                        type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                        dataType: 'JSON',
                        contentType: "application/json; charset=utf-8",
                        data: JSON.stringify({ Email: email, JwtApi: jwt}),// our data object
                        url: "<?=ROOT?>PagesController/isExistStudentEmail",// the url where we want to POST
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
                        if(response.status == '200'){
                            $("#error").fadeIn().text(response.message);
                            $("input#email").focus();
                            return false;
                        }else{
                           return;
                        }
                    }).fail((xhr, error) => {
                         $("#error").fadeIn().text("Sorry..! you can't continue this Application. we are unable to verify you Data.");
                    });
                    let rel = $("input#relationship").val();
                    if (rel == "") {
                        $("#error").fadeIn().text("Please Select Your Relationship Status.");
                        $("input#relationship").focus();
                        return false;
                    }
                    let tel = $("input#mobile").val();
                    if (tel == "") {
                        $("#error").fadeIn().text("Please Enter Your Mobile Number.");
                        $("input#mobile").focus();
                        return false;
                    }
                    let sec = $("input#session").val();
                    if (sec == "") {
                        $("#error").fadeIn().text("Please Enter Your Mobile Number.");
                        $("input#session").focus();
                        return false;
                    }
                    const Plug = { 
                                    "JwtApi": jwt, "NewStudentId":StudentIdNo, "EnrollmentNumber":EnrollmentNo, "Application": App, 
                                    "Program":Prg, "Department":Dpt, "Entry Level":Ety, "National Identification Number":Nin,
                                    "Othername":othername, "Surname":su, "Gender":Gn, "Date of birth":Dob,
                                    "Relationship Status": rel, "Student Email":email, "Session":sec, "Telephone Number":tel,
                                };
                   let RouteUserDateToPhp = JSON.stringify(Plug);
                    $.ajax({
                        type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                        dataType: 'JSON',
                        contentType: "application/json; charset=utf-8",
                        data: RouteUserDateToPhp,// our data object
                        url: "<?=ROOT?>PagesController/ProcessNewStudentOnline",// the url where we want to POST
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
                            $("#error").fadeIn().text(response.message);
                        }
                    }).fail((xhr, error) => {
                        $("#error").fadeIn().text('Oops...Server is down! error');
                    });
                });
            });
        //please dont mess with the code here
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
</head>