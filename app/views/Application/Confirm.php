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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ASSETS?>important__stylesheet__file/important__style.css" rel="stylesheet">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <style>
    quote{
        font-size:15px; 
        font-weight:600;
    }
    </style>
</head>
    <body>
        <?php
    $length = 12;
    $number = '1234567890';
    $numberLength = strlen($number);
    $randomNumber = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNumber .= $number[rand(0, $numberLength - 1)];
    }

?>
        
        <div class="container"style="margin-top: 50px;background: #FFF;border-radius: 5px;max-width: 990px;margin: 0 auto;padding: 25px;">
            <div class="row">
                <div class="header___section">
                <div class="col-md-10 ">
                   <div class="col-md-6 pull-left">
                        <div class="section__flex1">
                        <div style="display:flex">
                             <img src="<?=ASSETS?>img/front-end-img/courses/cor-logo-1.png" class="img-responsive" alt="Mercy College Logo"  style="width:73px"/> 
                                <quote style="font-size:18px; font-weight:600; margin-left:40px">Mercy College University<br/>
                                <span style="font-size:15px; font-weight:600">Payment Advice</span> 
                                </quote>
                        </div>
                           <span class="section flex" style="display:flex">
                                <quote>Ref No</quote>
                                <span class="text-left pull-left" style="margin-left:30px"><?=$randomNumber?></span>
                            </span>
                            <span class="section flex" style="display:flex">
                                 <quote>Name:</quote>
                                <span class="text-left pull-left" style="margin-left:30px"><?=$_SESSION['Surname'].' '.$_SESSION['othername'] ?></span>
                            </span>
                            <span class="section flex" style="display:flex; margin-top:7px">
                                 <quote>Generated On:</quote>
                                <span class="text-left pull-left" style="margin-left:30px">01/10/2021 21:17:17</span>
                            </span>
                      
                        </div>
                    </div>
                    <div class="col-md-6 text-right pull-right">
                        
                    </div>
                </div>
                    
                </div>
                <div class="section">
                   <table class="table table-bordered">
                        <thead>
                            <th>Mercy College Postgraduate Application Fee</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Remita RRR: 310552528825</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>22,500.00</td>
                                <td>Outstanding</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                   </table>
                    <div class="section text-center">
                        <quote>Every Remita RRR is subject to transaction charges Please</quote>
                        <p>Please note that RRR numbers contained on this payment advice would be invalidated afterpayment deadline date</p>
                 </div>
                </div>
            </div>
        </div>
        
    </body>
</html>