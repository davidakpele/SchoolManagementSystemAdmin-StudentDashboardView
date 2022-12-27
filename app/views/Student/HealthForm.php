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
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
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
        body{
            background-image:url('<?=ASSETS?>img/medical2.jpg');
            background-attachment:fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    .savebuttons{
         margin: 0 auto;
        display: block;
        width:90%
    }
    .help-block1, .help-block2, .help-block3{
        color:red;
    }
    </style>
</head>
 <body>
    <div id="head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?=ROOT?>"><img src="<?=ASSETS?>img/product/1.png"  style="max-width:55px;"/></a>
                </div><!--end col div here -->
            </div><!-- end row here -->
        </div><!-- close container -->
    </div>
    <!--- Start Body -->
<div class="container reg__container" style="margin-top:100px">
    <?php
    if (isset($_SESSION['flash_message'])) {
        echo "<div class='alert alert-info' role='alert' id='errorMsg'><i class='primary fa fa-exclamation-triangle' aria-hidden='true' style='color:#31708f'></i><span>  ".$_SESSION['flash_message']."</span></div>";
        unset($_SESSION['flash_message']);
    } 
    ?>
    <div class='alert alert-success' role='alert' style="display:none" id="message"></div>
 <p class="fs-4 fw-bold m-0 mt-4 h3 text-center Reg__header primary" style="font-size:30px;color:#337ab7; font-weight:600">STUDENT HEALTH FORM</p>
    <div class="container" style="margin-top:20px;background:#FFF; border-radius: 5px; max-width:500px; margin:0 auto;padding: 25px;" id="App1">
        <div class="row"> 
            <form method="POST" class="form-group" autocomplete="off" action="javascript:void(0)">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 "> 
                    <input type="hidden" name="id" id="uid" value="<?=($_SESSION['student__Id']) ? $_SESSION['student__Id'] : '';?>">
                    <div class="col-md-12 invalid1">
                       <label for="Blood_Type">Blood Type: </label>
                        <select name="Blood_Type" id="Blood_Type" class="form-control" >
                        <option value="" selected>---</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <small class="help-block1"></small>
                    </div>
                    <div class="col-md-12 invalid2">
                        <label for="Height">Height:</label>
                        <div class="flex-grid" style="display:flex; gap:0.5rem">
                           <input type="text" name="height" id="height" class="form-control" value="" placeholder="63.00"> 
                           <span style="font-size:20px">cm</span>
                        </div>
                        <small class="help-block2"></small>
                    </div>
                    <div class="col-md-12 invalid3">
                        <label for="Weight">Weight:</label>
                        <div class="flex-grid" style="display:flex; gap:0.5rem">
                            <input type="number" name="Weight" id="Weight" class="form-control" value="" placeholder="18.00" 
                            step="any"/>
                            <span style="font-size:20px">kg</span>
                        </div>
                        <small class="help-block3"></small>
                    </div>
                </div>
                <div class="savebuttons text-center"> 
                    <button class="btn btn-primary submit_btn" id= "submit" value="Signup" type="submit">Save Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(($) => {
     $('#message').hide();
    })
    let base_url="<?=ROOT?>";
   $("#Weight").on('change', function() {
        this.value = parseFloat(this.value).toFixed(2);
    });
    $("#height").on('change', function() {
        this.value = parseFloat(this.value).toFixed(2);
    });
     $("#submit").on('click', function() {
        let id =$('#uid').val();
        let Blood_Type =$('#Blood_Type').val();
        let height = $('#height').val();
        let Weight = $('#Weight').val();
        let data = {
            'id':id, 
            'Blood_Type':Blood_Type, 
            'height':height, 
            'Weight':Weight};
        let stringify = JSON.stringify(data);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: stringify, // our data object
            url: base_url+'PageControllers/MedicalReport', // the url where we want to POST
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
            if (response.status == true) {
                $('#errorMsg').hide;
                $(".invalid1").removeClass('has-error');
                $('.help-block1').hide();
                $(".invalid2").removeClass('has-error');
                $('.help-block2').hide();
                $(".invalid3").removeClass('has-error');
                $('.help-block3').hide();
                 $('#message').fadeIn().html(response.message);
                setTimeout(() => {
                    window.location.replace(base_url+'Student/Login');
                }, 2000);
            } else {
                if (response.status1 == false) {
                    $(".invalid1").addClass('has-error');
                    $('#Blood_Type').focus();
                    $('.help-block1').show().html(response.message);
                } else {
                    $(".invalid1").removeClass('has-error');
                    $('.help-block1').hide();
                }
                if (response.status2 == false) {
                    $(".invalid2").addClass('has-error');
                    $('#height').focus();
                    $('.help-block2').show().html(response.message);
                } else {
                    $(".invalid2").removeClass('has-error');
                    $('.help-block2').hide();
                }
                if (response.status3 == false) {
                    $(".invalid3").addClass('has-error');
                    $('#Weight').focus();
                    $('.help-block3').show().html(response.message);
                } else {
                    $(".invalid3").removeClass('has-error');
                    $('.help-block3').hide();
                }
                
                return false;
            }
        }).fail((xhr, error) => {
            Swal({
                "title": "Error",
                "text": response.message,
                "type": "error"
            });
        });
    });
</script>
<script src="<?=ASSETS?>important__stylesheet__file/maskfile.js" type="text/javascript"></script>
<?php $this->view("include/LogandRegFooter",$data); ?>