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
    <link rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/style-starter.css">
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <style>
    .sidebar-menu .sidebar-menu-inner ul >li a:hover{color:#fff; background: #008bc6;border-radius: 2px;}
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
    .course__Section>h5{font-weight:600;}
    .courses__display__section{display:block; margin:10px;}
    .breaker{max-width:280px; max-height:150px;margin-bottom:190px; clear:both}
    .breaker .f1-img >img{border:3px solid #fff; }
    .img__bottom{border:1px solid #fff; color:gray; font-size:14px;margin:0;}
    .active__online__std{width: 15px;height: 15px;background: #4CAF50;position: absolute;border: 3px solid #ffffff;border-radius: 50%;}
    .s-time{color:green;}
    .button_element{margin-bottom:50px;display: table;width: 100%;padding: 1px;background:#fff;}
    .button_element .summary-icons{display: table-row;padding: 5px;justify-content: space-between;}
    .button_element .summary-icons .btn {display: table-cell;text-align: center;padding: 0.8333333333rem 0;border: none;border-radius: 0;border-right: 1px solid #d7dfe3;background: transparent;}
    .button_element .summary-icons .btn.link-participants .icon:before { font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f500";}
    .button_element .summary-icons .btn.link-grades .icon:before { font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f518";}
    .button_element .summary-icons .btn.link-badges .icon:before { font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f2c1";}
    .button_element .summary-icons .btn.link-course .icon:before { font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f0a9";}
    .button_element .summary-icons .btn .icon {display: block;font-size: 1.55rem;color: #e02928;width: inherit;height: inherit;margin: 0;padding: 0;-webkit-transition: .4s;-o-transition: .4s;transition: .4s;}
    .courseName .more-text{display: none;}
    .pagination {list-style-type: none;padding: 10px 0;display: inline-flex;justify-content: space-between;box-sizing: border-box;}
    .pagination li {box-sizing: border-box;padding-right: 10px;}
    .pagination li a {box-sizing: border-box;background-color: #e2e6e6;padding: 8px;text-decoration: none;font-size: 15px;font-weight: bold;color: #616872;border-radius: 4px;}
    .pagination li a:hover {background-color: #d4dada;}
    .pagination .next a, .pagination .prev a {text-transform: uppercase;font-size: 15px;background-color:#008bc6;color:#fff;}
    .pagination .currentpage a {background-color: #518acb;color: #fff;}
    .pagination .currentpage a:hover {background-color: #518acb;} 
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
        <li class="active" style="color:#fff; background: #008bc6;border-radius: 2px;">
          <a href="<?=ROOT?>student/Dashboard/Default">
          <i class="fa fa-tachometer"></i>
          <span> Dashboard</span></a>
        </li>
        <li><a href="<?=ROOT?>Student/Dashboard/?redirect=0"><i class="fa fa-home"></i> <span>Site Home</span></a></li>
        <li><a href="<?=ROOT?>Student/SEvent"><i class="fa fa-table"></i> <span>Calendar</span></a></li>
        <li><a href="<?=ROOT?>Student/Dashboard/SPrivateFile"><i class="fa fa-file"></i> <span>Private files</span></a></li>
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
                     <img src="<?=((!empty($data['returnData']))?ROOT.$data['returnData']->image: ASSETS.'img/avatar/profile.jpg' )?>" class="rounded-circle mypicture" alt="<?=$_SESSION['globalname']?>" />
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
<?php if(!empty($data['returnData'])):?>
<div class="main-content" style="background: #e9ecef;">
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
      </ol>
    </nav>
   
    <!-- modals -->
    <section class="template-cards">
      <div class="card card_border">
        <div class="clearfix"><br/></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content page-container" id="page-content mb-5" style="margin-bottom:40px">
                      <div class="padding">
                          <div class="row container d-flex justify-content-center">
                              <div class="col-md-5">
                                <div class="card">
                                  <div class="card-body text-center">
                                    <div>
                                      <img src="<?=((!empty($data['returnData']))?ROOT.$data['returnData']->image: ASSETS.'img/avatar/profile.jpg' )?>" width="100" height="100"  class="rounded-circle mypicture" alt="<?=$_SESSION['globalname']?>" alt="Picture of <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)" title="Picture of <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)"/>
                                      <h4><?=((!empty($data['returnData']))?$data['returnData']->Surname.' '.$data['returnData']->othername: ASSETS.'img/avatar/profile.jpg' )?></h4>
                                      <p class="text-muted mb-0"><?=((!empty($data['returnData']))?$data['returnData']->Roll__No: '' )?></p>
                                    </div>
                                    <p class="mt-2 card-text">
                                        For what reason would it be advisable for me to think about business content?
                                    </p>
                                    <button class="btn btn-info btn-sm mt-3 mb-4">Follow</button>
                                    <div class="border-top pt-3">
                                      <div class="row">
                                        <div class="col-4">
                                          <h6>4354</h6>
                                          <p>Post</p>
                                        </div>
                                        <div class="col-4">
                                          <h6>455K</h6>
                                          <p>Followers</p>
                                        </div>
                                        <div class="col-4">
                                          <h6>34K</h6>
                                          <p>Likes</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
</section>
  </div>
  <!-- //content -->
</div>
<?php else:?>
  
      <div class="section" style="margin:70px">
        <div class="alert alert-warning alert-sm" role="alert" style="margin-top:70px">
      <span>Sorry..! We count not find this Student.</span>
    </div>
      </div>
 
  <?php endif;?>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-1.10.2.min.js"></script>

<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery.nicescroll.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?=ASSETS?>important__stylesheet__file/stdfile/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/bootstrap.min.js"></script>

</body>

</html>
  