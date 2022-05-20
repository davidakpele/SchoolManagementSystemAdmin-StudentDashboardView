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
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <link rel="stylesheet" href="<?=ASSETS?>fonts/font-awesome/css/all.css"/>
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/style-starter.css">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <style>
    .file-upload {display: none;}
    .circle {border-radius: 100% !important;overflow: hidden;  width: 100px;height: 100px;border: 2px solid rgba(255, 255, 255, 0.2); }
    .upload-button {font-size:2.5em; }
    .labelfocus{color:red;}
    .p-image{ text-align: center;}
    .upload-button:hover {transition: all .3s cubic-bezier(.175, .885, .32, 1.275);color: #999;}
    #successmessagediv{background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
    #successmessagediv{padding-left: 60px;background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;}
    .errormsg{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
    .error-ico{padding-left:25px;background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
    .loading {display: flex;text-align:center.;justify-content: center;align-items:center;transition: 0.5s;position:absolute;top:0;width:100%;height:100%;}
    .loading::after {content: "";width: 57.6px;height: 57.6px;border: 8px solid #bbdbfc;border-top-color: #0c6cf2;border-radius: 50%;animation: loading 1s linear infinite;}
    @keyframes loading {to {transform: rotate(1turn);}}
    #error{text-align:justify;}
    .img-thumbnail{border-radius: 50%;}
    .img-thumbnail:hover{box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5); }
    #successmessagediv{background: #E4FFDE;border: 1px solid #8EBD86;padding: 10px;border-radius: 5px;margin: 7px;width: auto;height: auto;color: #333;display: block;}
    .success-ico {padding-left: 60px;background: url(<?=ASSETS?>bullet_add.png) #E4FFDE no-repeat 30px center;}
    #error{padding-left:70px;background: url(<?=ASSETS?>bullet_error.png) #FAE8E8 no-repeat 30px center;}
    #side_menu{position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;-webkit-background-clip: border-box;background-clip: border-box;border: 1px solid #d7dfe3;    font-family: Arial,Verdana,Helvetica,sans-serif;font-size: .9375rem;font-weight: 400;line-height: 1.6;}
    #side_menu>h6{font-weight:600;margin-top:25px;}
    .dropdown-toggle::after {display: inline-block;margin-left: 0.255em;vertical-align: 0.255em;content: "";border-top: 0.3em solid;border-right: 0.3em solid transparent;border-bottom: 0;border-left: 0.3em solid transparent;}
    .sec_div_flock{position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;-webkit-background-clip: border-box;background-clip: border-box;border: 1px solid #d7dfe3;    font-family: Arial,Verdana,Helvetica,sans-serif;font-size: .9375rem;font-weight: 400;line-height: 1.6;}
    .sec_div_flock>h6{font-weight:600;margin-left:20px;}
    #sec_m{margin:10px; display: flex;justify-content: space-between;}
    .third__sec{margin-top:20px;}
    .card-body{position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;-webkit-background-clip: border-box;background-clip: border-box;border: 1px solid #d7dfe3;    font-family: Arial,Verdana,Helvetica,sans-serif;font-size: .9375rem;font-weight: 400;line-height: 1.6;}
    .user{display:flex;}
    .user .userpicture{border-radius: 50%;}
    .course__Section>h5{font-weight:600}
  </style>

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
        <li class="active"><a href="<?=ROOT?>student/Dashboard/Default"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="carousels.html">Carousels</a> </li>
            <li><a href="cards.html">Default cards</a> </li>
            <li><a href="people.html">People cards</a></li>
          </ul>
        </li>
        <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
        <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
        <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
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
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 3 new notifications</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 4 new messages</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="<?=ASSETS?>important__stylesheet__file/stdfile/fonts/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li>
                    <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all messages</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
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
                  <li> <a href="#"><i class="lnr lnr-users"></i>Grade</a> </li>
                  <li> <a href="#"><i class="lnr lnr-cog"></i>Messages</a> </li>
                  <li> <a href="#"><i class="lnr lnr-heart"></i>Preferences</a> </li>
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