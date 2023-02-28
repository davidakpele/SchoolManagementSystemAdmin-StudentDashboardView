<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="theme-color" content="#c9190c" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width">
    <meta htttp-equiv="Cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-TileColor" content="#c9190c" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mercy College School Management System Software." /> 
    <link rel="icon" type="image/png" sizes="16x16" href="<?=ASSETS?>icons/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=ASSETS?>icons/favicon.ico" />
    <link rel="apple-touch-icon" href="<?=ASSETS?>icons/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="apple-touch-startup-image" href="<?=ASSETS?>icons/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)" />
    <link rel="shortcut icon" href="<?=ASSETS?>icons/favicon.ico" type="image/vnd.microsoft.icon"/>
    <title><?=$data['page_title']?></title>
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
    <link rel="stylesheet" href="<?=ASSETS?>students/css/style.css"/>
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/style-starter.css">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
</head>
<body class="sidebar-menu-collapsed" id="bodytag">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">
    <!-- logo start -->
    <div class="logo">
      <h1><a href="<?=ROOT?>student/Dashboard/Default"><img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:35px;"/></a></h1>
    </div>
    <div class="logo-icon text-center">
      <a href="<?=ROOT?>student/Dashboard/Default" title="logo"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->
    <div class="sidebar-menu-inner">
      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active" style="color:#fff; background: #008bc6;border-radius: 2px;">
          <a href="<?=ROOT?>student/Dashboard/Default">
          <i class="fa fa-tachometer"></i>
          <span> Dashboard</span></a>
        </li>
        <li><a href="<?=ROOT?>Student/Dashboard/?redirect=0"><i class="fa fa-home"></i> <span>Site Home</span></a></li>
        <li><a href="<?=ROOT?>Student/event"><i class="fa fa-table"></i> <span>Calendar</span></a></li>
        <li><a href="<?=ROOT?>Student/file"><i class="fa fa-file"></i> <span>Private files</span></a></li>
        <li class="menu-list">
          <a href="javascript:void(0)"><i class="fa fa-graduation-cap"></i>
            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="javascript:void(0)">Carousels</a> </li>
            <li><a href="javascript:void(0)">Default cards</a> </li>
            <li><a href="javascript:void(0)">People cards</a></li>
          </ul>
        </li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Menu</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <div class="user-dropdown-details d-flex">
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <cell style="color:#fff; text-decoration:underline"><?=$_SESSION['globalname']?></cell>
                     <img src="<?=((!empty($data['photo']))?ROOT.$data['photo']: ASSETS.'img/avatar/profile.jpg' )?>" class="rounded-circle mypicture" alt="<?=$_SESSION['globalname']?>" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name"><?=$_SESSION['globalname']?></h5>
                  </li>
                  <li> <a href="<?=ROOT?>Student/StudentProfile"><i class="lnr lnr-user"></i>Profile</a> </li>
                  <li> <a href="<?=ROOT?>Student/Studentgrade"><i class="lnr lnr-users"></i>Grade</a> </li>
                  <hr style="color:black">
                  <li class="logout"> <a href="<?=ROOT?>PageController/LogoutStudent"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->