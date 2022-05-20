<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mercy College School Management System Software." /> 
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
    <link href="<?=ASSETS?>fonts/font-awesome/css/all.css"  rel="stylesheet"/>
    <script src="<?=ASSETS?>light/manifest.json" type="text/javascript"></script>
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ASSETS?>important__stylesheet__file/important__style.css" rel="stylesheet">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <style>
     body {background: linear-gradient(rgba(0,0,0, 0.56), rgba(0,0,0, 0.56)), url(http://localhost/school/public/assets/important__stylesheet__file/login_bg.jpg) no-repeat;background-size: cover;}
        .gap9{margin-top:10px;text-align:left;margin-left:15px;font-size:16px;font-weight:600;}  
        .items{padding-top:70px;}  
    </style>
     <script type="text/javascript">
        $(document).ready(($)=>{
            $("#Application__Type").change(()=>{
              let ___ApplicationType = $("#Application__Type").val();
              $.ajax({
                url: '<?=ROOT?>Fetch__ReadArr/',
                method: 'POST',
                data:$(this).serialize(),
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___ApplicationType=' + ___ApplicationType
              }).done((Cat)=>{
                 //console.log(books);
                  Cat = JSON.parse(Cat);
                  $('#Faculty__Type').empty();
                  Cat.forEach((book)=>{
                      $('#Faculty__Type').append('<option value="' + book.Faculty__ID + '">' + book.Faculty__name + '</option>')
                  })
              })
            });
        }); 
         $(document).ready(($)=>{
            $("#Faculty__Type").change(()=>{
              let facultyID = $("#Faculty__Type").val();
              $.ajax({
                url: '<?=ROOT?>Respond/',
                method: 'POST',
                data:$(this).serialize(),
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___ApplicationSender=' + facultyID
              }).done((books)=>{
                  books = JSON.parse(books);
                  $('#Department__Type').empty();
                  books.forEach((book)=>{
                      $('#Department__Type').append('<option value="<?=((isset($_POST['___ApplicationSender']))?$_POST['___ApplicationSender']: '');?>' + book.Child__faculty__ID +'">' + book.Child__faculty__name + '</option>')
                  })
              })
            });
        });
        $(document).ready(($)=>{
            $("#program").change(()=>{
              let ReadVal = $("#program").val();
              $.ajax({
                url: '<?=ROOT?>RouteDisplay/',
                method: 'POST',
                data:$(this).serialize(),
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___RequirmentTable=' + ReadVal
              }).done((Read)=>{})
            });
        });
     </script>
</head>