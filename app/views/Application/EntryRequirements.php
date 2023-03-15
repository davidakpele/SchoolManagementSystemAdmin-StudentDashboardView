<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#c9190c" />
    <meta htttp-equiv="Cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-TileColor" content="#c9190c" />
    <meta name="description" content="Mercy College School Management System Software." />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <link rel="icon" href="<?=ASSETS?>img/favicon-32x32.png" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico" />
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/structure.css" />
    <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/responsive.css" />
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css" />
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <link rel="manifest" href="<?=ASSETS?>light/manifest.json" />
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <style type="text/css">
    .panel {
        max-width: 960px;
        width: 100%;
        margin: 0 auto;
    }

    @media screen and (max-width: 960px) {
        .panel {
            width: 90% !important;
        }
    }
    </style>
    <script>
        var base_url="<?=ROOT?>";
    </script>
</head>

<body style="font-size: 14px; font-family: 'Exo 2'/*'Bookman Old Style'*/">
    <div id="head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?=ROOT?>">
                        <div class="float-left">
                            <span>
                                <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center"
                                    style="max-width:55px;" alt="logo" />
                            </span>
                        </div>
                    </a>
                </div>
                <!--end col div here -->
                <div class="float-right">
                    <div class="horizontal-list">
                        <ul>
                        </ul>
                    </div>
                </div>
                <br class="clear" />
            </div>
            <!-- end row here -->
        </div>
        <!-- close container -->
    </div>
    <div class="single">
        <div class="panel">
            <h2 class="h-1">Check Any Programme Requirements</h2>
            <div class="panel-in">
                <form method="POST" class="form-horizontal form-group">
                    <div class="form-ui-panel">
                        <div class="pane form-group">
                            <label id="apptypelabel" class="col-sm-12 col-md-3 col-lg-3 make-full">ApplicationType
                                :</label>
                            <div class="col-sm-12 col-md-9 col-lg-9 select-drop-down">
                                <select class="form-control" name="Application__Type" id="Application__Type"
                                    style="width:75%;">
                                    <option selected="" disabled value="">--Select--</option>
                                    <?php foreach ($data['DisplayCateogries'] as $stmt): ?>

                                    <option id="<?=$stmt['Category__ID']?>" value="<?=$stmt['Category__ID']?>">
                                        <?=$stmt['Category__name']?> </option>
                                    <?php endforeach;?>

                                </select>
                            </div>
                        </div>
                        <div class="pane form-group">
                            <label class="col-sm-12 col-md-3 col-lg-3 make-full">Faculty :</label>
                            <div class="col-sm-12 col-md-9 col-lg-9 select-drop-down">
                                <select name="Faculty" id="Faculty" class="form-control select2" style="width:75%;">
                                    <option value="" selected="" disabled="">--Empty--</option>
                                </select>
                            </div>
                        </div>
                        <div class="pane form-group">
                            <label class="col-sm-12 col-md-3 col-lg-3 make-full">Programme :</label>
                            <div class="col-sm-12 col-md-9 col-lg-9 select-drop-down">
                                <select name="Program__Type" id="Program__Type" class="form-control" style="width:75%;">
                                    <option value="" selected="" disabled="">--Empty--</option>
                                </select>
                            </div>
                        </div>
                        <div id="generaldiv">
                            <div id="RequirementDiv"></div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- footer div starts here -->
    <div class="container-fluid" style="margin-top: 260px; border-top: 1px solid #ddd;">
        <div class="container footer-wrap">
            <div class="row flex">
                <div class="col-sm-6 pull-left footer-left">
                    <p>&copy; All Right Reserved</p>
                </div>
                <div class="col-sm-6 text-right pull-right footer-right">
                    <p>Powered by <a href="http://localhost/MidTech/" style="text-decoration:none">MidTech Microsystem
                            Pvt Ltd</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer div ends here -->
    <script type="text/javascript" src="<?=ASSETS?>RequirementJs/Route.js"></script>
</body>

</html>