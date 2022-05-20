<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="theme-color" content="#c9190c" />
        <meta name="robots" content="index,follow" />
        <meta htttp-equiv="Cache-control" content="no-cache" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="msapplication-TileColor" content="#c9190c" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="<?=$data['meta_tag_content_Seo']?>" />
        <meta name="description" content="<?=$data['meta_tag_description']?>" />
        <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico" /> 
        <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/structure.css" />
        <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/responsive.css" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
        <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
        <script src="<?=ASSETS?>light/manifest.json" type="text/json"></script>
        <script type="text/javascript" src="<?=ASSETS?>js/jquery2.js"></script>
        <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
        <style>
        #link{text-decoration:none}
        </style>
    </head>
    <body>
    <div id="head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="<?=ROOT?>">
                        <div class="float-left"> 
                            <span>
                                <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:55px;"/>
                            </span>
                        </div>
                    </a>
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
    <!--- Start Body -->
    <div id="content">
        <div class="container"/*single*/>
            <div class="row" style="margin-top:30px;">
                <div class="col-12">
                    <!--<div style="width:100%; align-content:center; text-align:center"> -->
                    <div class="col-sm-4 app-btn-cta">
                        <a href="<?=ROOT?>Application/Registration" id="link">
                            <div class="col-12 text-center" style="border:1px solid #ddd; border-radius:3px;">
                                <span><i class="fa fa-compress fa-3x" style="padding-bottom:10px; color:#2383ad;"></i></span>
                                <h2>Start a Fresh Application</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 app-btn-cta">
                        <a href="<?=ROOT?>Student/Login" id="link">
                            <div class="col-12 text-center" style="border:1px solid #ddd; padding:15px; border-radius:3px;">
                                <span><i class="fa fa-users fa-3x" style="padding-bottom:10px; color:#2383ad;"></i></span>
                                <h2>Student Login Portal</h2>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-4 app-btn-cta">
                        <a href="<?=ROOT?>Application/InitiateOnlinePayment" id="link">
                            <div class="col-12 text-center" style="border:1px solid #ddd; padding:15px; border-radius:3px;">
                                <span><i class="fa fa-credit-card fa-3x" style="padding-bottom:10px; color:#2383ad;"></i></span>
                                <h2>Pay Application Fee Online</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- end row div here -->
        </div><!-- end container div here -->
        <div class="container" style="margin-top: 70px; margin-bottom: 30px;">
            <div class="row text-center">
                <div class="col-12 cta-btn">
                        <a href="<?=ROOT?>Application/EntryRequirements/"> 
                            <button class="btn btn-danger btn-sm" type"button">Click To View Programmes&#39; Entry Requirements</button>
                        </a> 
                    <br class="clear" />
                </div>
            </div>
        </div>
    </div><!-- end content div here -->
        <br class="clear" />
    <!-- begin popup content -->    
    <!-- end popup -->
    <!-- End Body --><br />
    <!-- footer div starts here -->
        <div class="container-fluid" style="margin-top:180px; border-top:1px solid #ddd;" >
            <div class="container footer-wrap">
                <div class="row">
                    <div class="col-sm-6 pull-left footer-left">
                    <p> &copy; All Right Reserved</p> 
                    </div>
                    <div class="col-sm-6 text-right pull-right footer-right">
                        <p> Powered by <a href="http://localhost/MidTech/About/">MidTech </a></p>     
                    </div>
                </div>
            </div>
        </div>
    <!-- footer div ends here -->
</body>
</html>
