<!DOCTYPE html>
<html <html lang="en">

<head>
    <meta name="theme-color" content="#c9190c">
    <meta name="robots" content="index,follow">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#c9190c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="<?=$data['meta_tag_content_Seo']?>" />
    <meta name="description" content="<?=$data['meta_tag_description']?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png"
        media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png"
        media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png"
        media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png"
        media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png"
        media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png"
        media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png"
        media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico">
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css" />
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ASSETS?>important__stylesheet__file/important__style.css" rel="stylesheet">
    <!-- Alternative loader -->
    <link rel="manifest" href="<?=ASSETS?>GeneralAccess/Manifest_files/js/manifest.json" />
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>vendor_plugins/jquery.mask.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>vendor_plugins/jquery.mask.min.js"></script>
    <style>
    .gap9 {
        margin-top: 10px;
        text-align: left;
        margin-left: 15px;
        font-size: 16px;
        font-weight: 600;
    }

    .success {
        background: #E4FFDE;
        border: 1px solid #8EBD86;
        padding: 10px;
        border-radius: 5px;
        margin: 7px;
        width: auto;
        height: auto;
        color: #333;
        display: block;
    }

    .success-ico {
        padding-left: 60px;
        background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;
    }

    .error {
        background: #FAE8E8;
        border: 1px solid #DAB3B6;
        padding: 10px;
        border-radius: 5px;
        margin: 7px;
        width: auto;
        height: auto;
        color: #333;
        display: block;
    }

    .error-ico {
        padding-left: 70px;
        background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;
    }

    .form-control:focus {
        outline: none !important;
        border: 1px solid red;
        box-shadow: 0 0 5px red;
    }

    .buttonResendEmail {
        padding: 5px;
        background: #2383ad;
        color: #FFF;
        font-size: 13px;
        /* font-weight: bold; */
        border: none;
        border-radius: 3px;
        cursor: pointer;
        outline: 0px;
    }

    .buttonResendEmail:hover {
        color: #fff
    }

    .box {
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }

    .Father {
        color: gray;
    }

    .Mother {
        color: gray;
    }

    input {
        display: block;
        margin: auto;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 110%;
        outline: 0;
    }

    select {
        display: block;
        margin: auto;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 110%;
        outline: 0;
    }
    </style>
    <script>
    const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    const emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;
<?php 
    if (isset($_SESSION['api'])){?>
    $(document).ready(($) => {
        $("#AppRegistration").hide();
        $('#Fatherinfo').submit((e) => {
            $("#error").hide();
            // $("#messagediv").hide();
            e.preventDefault();
            let fid = $('#fid').val();
            let ChildId = $('#ChildId').val();
            let gender = $('#gender').val();
            let Father__first__name = $('#Father__first__name').val();
            let Father__last__name = $('#Father__last__name').val();
            let Father__email__address = $('#Father__email__address').val();
            let Father__address = $('#Father__address').val();
            let DOb = $('#Father__DOB').val();
            let mobile = $('#mobile').val();
            if (fid == "") {
                $("#error").fadeIn().text("Sorry you can't process this form now.*");
                $("#fid").focus();
                return false;
            }
            if (Father__first__name == "") {
                $("#error").fadeIn().text("Please Provide Your Father's First Name.*");
                $("#Father__first__name").focus();
                return false;
            }
            if (Father__last__name == "") {
                $("#error").fadeIn().text("Please Provide Your Father's Last Name.*");
                $("#Father__last__name").focus();
                return false;
            }
            if (Father__email__address == "") {
                $("#error").fadeIn().text("Please Provide Your Father's Email Address.*");
                $("#Father__email__address").focus();
                return false;
            } else if (!Validemailfilter.test(Father__email__address)) {
                $("#error").fadeIn().text(
                    "Invaid Email Address..! Please Enter A Valid Email Address.");
                $("#Father__email__address").focus();
                return false;
            } else if (!emailblockReg.test(Father__email__address)) {
                $("#error").fadeIn().text(
                    "Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address."
                );
                $("#Father__email__address").focus();
                return false;
            }
            if (mobile == "") {
                $("#error").fadeIn().text("Please Provide Your Father's Mobile Number..*");
                $("#mobile").focus();
                return false;
            }
            if (DOb == "") {
                $("#error").fadeIn().text("Please Provide Your Father's Date of Birth.*");
                $("#Father__DOB").focus();
                return false;
            }
            if (Father__address == "") {
                $("#error").fadeIn().text("Please Provide Your Father's Address.*");
                $("#Father__address").focus();
                return false;
            }

            var formdata = new FormData();
            let photo = $("#Father__profile__photo").val();
            let files = $("#Father__profile__photo")[0].files;
            var extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
            var allowedExtensions = ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
            if (files.length == 0) {
                $("#error").fadeIn().html(
                    "<span style='margin-left:42px'>Please Select Your Profile Photo.!</span>");
                $("#Father__profile__photo").focus();
                return false;
            } else if (allowedExtensions.indexOf(extension) === -1) {
                $("#error").fadeIn().html(
                    "<span style='margin-left:42px'>Invalid file Format. Only <b>" +
                    allowedExtensions.join(', ') + "</b> are allowed.</span>");
                $("#Father__profile__photo").focus();
                return false;
            }
            formdata.append('file', files[0]);
            formdata.append('fname', Father__first__name);
            formdata.append('lname', Father__last__name);
            formdata.append('DOB', DOb);
            formdata.append('Gender', gender);
            formdata.append('email', Father__email__address);
            formdata.append('mobile', mobile);
            formdata.append('address', Father__address);
            formdata.append('ChildId', ChildId);
            formdata.append('Fatherid', fid);

            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                data: formdata, // our data object
                url: "<?=ROOT?>PagesController/registerParentData", // the url where we want to POST
                cache: false,
                dataType: 'text',
                contentType: false,
                processData: false,
                success: function(response) {
                    var data_array = $.parseJSON(response);
                    //access your data like this:
                    var plub = data_array['status'];
                    let messg = data_array['message'];
                    let errormessg = data_array['errormsg'];
                    //continue from here...
                    if (plub == 300) {
                        $("#error").fadeIn().text(errormessg);
                        $("#Father__profile__photo").focus();
                        return false;
                    } else if (plub == 200) {
                        $("#messagediv").fadeIn().html(messg);
                        $("#Fatherinfo").fadeOut();
                        let delay = 3000;
                        setTimeout(function() {
                            window.location.reload(1);
                        }, delay);
                    } else {
                        $("#error").fadeIn().text(messg);
                    }
                }
            });
        });
        $('#Motherinfo').submit((e) => {
            e.preventDefault();
            $("#error").hide();
            $("#messagediv").hide();
            let mid = $('#mid').val();
            let ChildId = $('#ChildId').val();
            let gender = $('#mgender').val();

            let Mother__first__name = $('#Mother__first__name').val();
            let Mother__last__name = $('#Mother__last__name').val();
            let Mother__email__address = $('#Mother__email__address').val();
            let Mother__address = $('#Mother__address').val();
            let DOb = $('#Mother__DOB').val();
            let Momobile = $('#mobile_no').val();
            if (mid == "") {
                $("#error").fadeIn().text("Sorry you can't process this form now.*");
                $("#mid").focus();
                return false;
            }
            if (Mother__first__name == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's First Name.*");
                $("#Mother__first__name").focus();
                return false;
            }
            if (Mother__last__name == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's Last Name.*");
                $("#Mother__last__name").focus();
                return false;
            }
            if (Mother__email__address == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's Email Address.*");
                $("#Mother__email__address").focus();
                return false;
            } else if (!Validemailfilter.test(Mother__email__address)) {
                $("#error").fadeIn().text(
                    "Invaid Email Address..! Please Enter A Valid Email Address.");
                $("#Mother__email__address").focus();
                return false;
            } else if (!emailblockReg.test(Mother__email__address)) {
                $("#error").fadeIn().text(
                    "Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address."
                );
                $("#Mother__email__address").focus();
                return false;
            }
            if (Momobile == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's Mobile Number..*");
                $("#mobile_no").focus();
                return false;
            }
            if (DOb == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's Date of Birth.*");
                $("#Mother__DOB").focus();
                return false;
            }
            if (Mother__address == "") {
                $("#error").fadeIn().text("Please Provide Your Mother's Address.*");
                $("#Mother__address").focus();
                return false;
            }
            var formdata = new FormData();
            let photo = $("#Mother__profile__photo").val();
            let files = $("#Mother__profile__photo")[0].files;
            var extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
            var allowedExtensions = ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
            if (files.length == 0) {
                $("#error").fadeIn().html(
                    "<span style='margin-left:42px'>Please Select Your Profile Photo.!</span>");
                $("#Mother__profile__photo").focus();
                return false;
            } else if (allowedExtensions.indexOf(extension) === -1) {
                $("#error").fadeIn().html(
                    "<span style='margin-left:42px'>Invalid file Format. Only <b>" +
                    allowedExtensions.join(', ') + "</b> are allowed.</span>");
                $("#Mother__profile__photo").focus();
                return false;
            }
            formdata.append('file', files[0]);
            formdata.append('fname', Mother__first__name);
            formdata.append('lname', Mother__last__name);
            formdata.append('DOB', DOb);
            formdata.append('Gender', gender);
            formdata.append('email', Mother__email__address);
            formdata.append('mobile', Momobile);
            formdata.append('address', Mother__address);
            formdata.append('ChildId', ChildId);
            formdata.append('Fatherid', mid);

            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                data: formdata, // our data object
                url: "<?=ROOT?>PagesController/registerParentData", // the url where we want to POST
                cache: false,
                dataType: 'text',
                contentType: false,
                processData: false,
                success: function(response) {
                    var data_array = $.parseJSON(response);
                    //access your data like this:
                    var plub = data_array['status'];
                    let messg = data_array['message'];
                    let errormessg = data_array['errormsg'];
                    //continue from here...
                    if (plub == 300) {
                        $("#error").fadeIn().text(errormessg);
                        $("#Father__profile__photo").focus();
                        return false;
                    } else if (plub == 200) {
                        $("#messagediv").fadeIn().html(messg);
                        $("#Motherinfo").fadeOut();
                        let delay = 3000;
                        setTimeout(function() {
                            window.location.reload(1);
                        }, delay);
                    } else {
                        $("#error").fadeIn().text(messg);
                    }
                }
            });
        });
    });
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });

    <?php }else {?>
    $(document).ready(($) => {
        var classid;
        var sess;
        $("#error").hide();
        $("#messagediv").hide();
        $("#AppRegistration").show();
        //on submit
        $('#AppRegistration').submit((e) => {
            let _apptype = $("#Application__Type").val();
            console.log(_apptype);
            if (_apptype == 1) {
               classid = '1';
               sess='1';
            }else if(_apptype ==3){
                classid = '1';
                sess='1';
            }else{
                classid = '';
                sess='';
            }
            e.preventDefault();
            $("#error").hide();
            $("#messagediv").hide();
            //validate the  now
            let StudentIdNo = $("#___NewStudentIdNo").val();
            if (StudentIdNo == "") {
                $("#error").fadeIn().text("Sorry...! Your ID Number Fail To Generate.");
                $("#Application__Type").focus();
                return false;
            }
            let EnrollmentNo = $("#EnrollmentNumber").val();
            if (EnrollmentNo == "") {
                $("#error").fadeIn().text("Sorry...! Your Enrollment Number Fail To Generate.");
                $("#EnrollmentNumber").focus();
                return false;
            }
            let App = $("select#Application__Type").val();
            if (App == "") {
                $("#error").fadeIn().text("Select Your Application Type.");
                $("select#Application__Type").focus();
                return false;
            }
            let Fac = $("select#Faculty__Type").val();
            if (Fac == "") {
                $("#error").fadeIn().text("Select Your Prefere Faculty.");
                $("select#Faculty__Type").focus();
                return false;
            }
            let Dpt = $("select#Department__Type").val();
            if (Dpt == "") {
                $("#error").fadeIn().text("Select Your Course Type.");
                $("select#Department__Type").focus();
                return false;
            }
            let Prg = $("#Program").val();
            if (Prg == "") {
                $("#error").fadeIn().text("Select Your Program For This Course.");
                $("#Program").focus();
                return false;
            }
            let Nin = $("#nin").val();
            if (Nin == "") {
                $("#error").fadeIn().text("Please Enter Your National Identification Number [NIN].");
                $("#nin").focus();
                return false;
            }
            let Ety = $("#EtyLevel").val();
            if (Ety == "") {
                $("#error").fadeIn().text("Select Your Entry Level.");
                $("#EtyLevel").focus();
                return false;
            }
            // Personal Data validation
            let su = $("#surname").val();
            if (su == "") {
                $("#error").fadeIn().text("Please Enter Your Surname.");
                $("#surname").focus();
                return false;
            }
            let othername = $("#othername").val();
            if (othername == "") {
                $("#error").fadeIn().text("Please Enter Your Othername.");
                $("#othername").focus();
                return false;
            }
            if (su == othername) {
                $("#error").fadeIn().text(
                    "Unaccepted Data.. Please Surname can't be the same with your Othername.");
                $("#othername").focus();
                return false;
            }
            let Dob = $("#Date__of__birth").val();
            if (Dob == "") {
                $("#error").fadeIn().text("Please Provide Your Date Of Birth");
                $("#Date__of__birth").focus();
                return false;
            }
            let Gn = $("#gender").val();
            if (Gn == "") {
                $("#error").fadeIn().text("Please Select Your Gender.");
                $("#gender").focus();
                return false;
            }
            let email = $("#email").val();
            if (email == "") {
                $("#error").fadeIn().text("Please Enter Your Email Address.");
                $("#email").focus();
                return false;
            } else if (!Validemailfilter.test(email)) {
                $("#error").fadeIn().text(
                    "Invaid Email Address..! Please Enter A Valid Email Address.");
                $("#email").focus();
                return false;
            } else if (!emailblockReg.test(email)) {
                $("#error").fadeIn().text(
                    "Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address."
                );
                $("#email").focus();
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
            const claims = {
                "role": "Student"
            }
            const encodedPlayload = btoa(JSON.stringify(claims));
            // create the signature part you have to take the encoded header, 
            // the encoded payload, a secret, the algorithm specified in the header, 
            // and sign that.
            const signature = HMACSHA256(`${encodedHeaders}.${encodedPlayload}`, "mysecret");
            const encodedSignature = btoa(signature);
            const jwt = `${encodedHeaders}.${encodedPlayload}.${encodedSignature}`
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({
                    Email: email,
                    JwtApi: jwt
                }), // our data object
                url: "<?=ROOT?>PagesController/isExistStudentEmail", // the url where we want to POST
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
                if (response.status == 303) {
                    $("#error").fadeIn().text(response.message);
                    $("#email").focus();
                    return false;
                }
            }).fail((xhr, error) => {
                $("#error").fadeIn().text(
                    "Sorry..! you can't continue this Application. we are unable to verify you Data."
                );
            });
            let rel = $("#relationship").val();
            if (rel == "") {
                $("#error").fadeIn().text("Please Select Your Relationship Status.");
                $("#relationship").focus();
                return false;
            }
            let tel = $("#mobile").val();
            if (tel == "") {
                $("#error").fadeIn().text("Please Enter Your Mobile Number.");
                $("#mobile").focus();
                return false;
            }
            const Plug = {
                "JwtApi": jwt,
                "NewStudentId": StudentIdNo,
                "EnrollmentNumber": EnrollmentNo,
                "Application": App,
                "Faculty": Fac,
                "Program": Prg,
                "Department": Dpt,
                "Entry Level": Ety,
                'classid':classid,
                'semester':sess,
                "National Identification Number": Nin,
                "Othername": othername,
                "Surname": su,
                "Gender": Gn,
                "Date of birth": Dob,
                "Relationship Status": rel,
                "Student Email": email,
                "Telephone Number": tel,
            };
            let RouteUserDateToPhp = JSON.stringify(Plug);
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: RouteUserDateToPhp, // our data object
                url: "<?=ROOT?>PagesController/ProcessNewStudentOnline", // the url where we want to POST
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
                    $("#error").hide();
                    $("#error").remove();
                    $("#AppRegistration").fadeOut();
                    $("#messagediv").fadeIn().html(response.Successmessage);

                } else {
                    $("#error").fadeIn().text(response.message);
                }
            }).fail((xhr, error) => {
                $("#error").fadeIn().text('Oops...Server is down! error');
            });
        });
    });

    //please dont mess with the code here
    $(document).ready(function($) {
        $("#Application__Type").change(function() {
            let ___ApplicationType = $("#Application__Type").val();
            if(___ApplicationType == ""){
                $('#Faculty__Type').empty();
                $('#Department__Type').empty();
                $('#Program').empty();
                $('#StartClass').empty();
                return false;
            }
            xl1 = 
            [
                {
                    'parentChild':'100 Level'
                },
                {
                    'parentChild':'200 Level (DIRECT ENTRY)'
                },
            ];
            
            var entryplug='<div class="EntryDevchild"><label for="Entry Level">Entry Level:</label><select class="form-control" name="Entrylevel" id="EtyLevel" ></select></div>';
            if (___ApplicationType == 1) {
                $(".EntryDevchild").remove();
                $(".EntryDevparent").append(entryplug);
                $('#EtyLevel').empty();
                classid = '1';
                xl1.forEach(function(element) {
                    $('#EtyLevel').append('<option value="' + element.parentChild+ '">' + element.parentChild + '</option>')
                });
            }else if(___ApplicationType ==3){
                $(".EntryDevchild").remove();
                $(".EntryDevparent").append(entryplug);
                $('#EtyLevel').empty();
                classid = '1';
                xl1.forEach(function(element) {
                    $('#EtyLevel').append('<option value="' + element.parentChild+ '">' + element.parentChild + '</option>')
                });
            }else{
                classid = '';
                $(".EntryDevchild").remove();
                $("#EtyLevel").val('');
            }
            const JavascriptHook = {"DataId": ___ApplicationType};
            let StringData = JSON.stringify(JavascriptHook);
            const p_url ='<?=ROOT?>ApisController/RenderProgram';
            const c_url ='<?=ROOT?>ApisController/RenderClass';
            const Url ='<?=ROOT?>ApisController/RenderFaculty'; 
            // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData, // our data object
                url: Url, //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).done(function(response) {
                Responed = response.result;
                $('#Faculty__Type').empty();
                $('#Department__Type').empty();
                $('#Program').empty();
                $('#Department__Type').append('<option value=""></option>')
                Responed.forEach(function(CallRecieve) {
                    $('#Faculty__Type').append('<option value="' + CallRecieve.FacultyID + '">' + CallRecieve.FacultyName + '</option>')
                });
                // Program class
                 $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON', //the type of data we are sending is json
                    contentType: "application/json; charset=utf-8",
                    data: StringData, // our data object
                    url: p_url, //the post destination
                    processData: false, //false because the preprocessor are not trigger
                    encode: true, //turn on json encoding
                    crossOrigin: true, // true because we are sending data with ajax as json format to php
                    async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                    crossDomain: true, //just in case we host the site
                    headers: {
                        'Access-Control-Allow-Methods': '*',
                        "Access-Control-Allow-Credentials": true,
                        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                        "Access-Control-Allow-Origin": "*",
                        "Control-Allow-Origin": "*",
                        "cache-control": "no-cache",
                        'Content-Type': 'application/json'
                    },
                }).done(function(response) {
                    Rprogram = response.result;
                    Rprogram.forEach(function(result) {
                        $('#Program').append('<option value="' + result.Program__name + '">' + result.Program__name + '</option>')
                    });
                }).fail((xhr, status, error) => {
                    console.log('Oops...', 'Something went wrong with ajax !', 'error');
                });                
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });
    $(document).ready(function($) {
        $("#Faculty__Type").change(function() {
            let ___FacultyType = $("#Faculty__Type").val();
            const JavascriptHook = {"DataId": ___FacultyType};
            let StringData = JSON.stringify(JavascriptHook);
            const Url ='<?=ROOT?>ApisController/fetchDepartment'; // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData, // our data object
                url: Url, //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).done(function(response) {
                Responed = response.result;
                $('#Department__Type').empty();
                Responed.forEach(function(CallRecieve) {
                    $('#Department__Type').append('<option value="' + CallRecieve.DepartmentID + '">' + CallRecieve.DepartmentName + '</option>')
                });
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });
    <?php }?>
    </script>
</head>