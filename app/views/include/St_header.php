<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE;?></title>
    <meta name="theme-color" content="#c9190c" />
    <meta name="robots" content="index,follow" />
    <meta htttp-equiv="Cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-TileColor" content="#c9190c" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="Mercy College Unversity Student Portal" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="Mercy College University Online Examination Student Portal." />
    <!-- Google Font: Source Sans Pro -->
    <!-- Font Awesome -->
    <link href="<?=ASSETS?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="<?=ASSETS?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
    <link rel="stylesheet" href="<?=ASSETS?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=ASSETS?>plugins/style/adminlte.css">
    <link rel="stylesheet" href="<?=ASSETS?>plugins/style/custom.css">
    <link rel="stylesheet" href="<?=ASSETS?>plugins/style/styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=ASSETS?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=ASSETS?>plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=ASSETS?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
      ul{list-style: none;}
      .DropdownList{color:#fff;font-size:16px;font-weight:500;text-decoration:none;}
      .DropdownList:hover{ color:#fff;}
      .sub-menu{line-height: 2rem;position:absolute;justify-content: space-between;background-color: whitesmoke;
        flex: 0.6;border: 1px solid lightgray;border-bottom: 0;border-top-left-radius: 5px;
        border-top-right-radius: 5px;/* justify-content: space-evenly; */
        justify-content: space-between;object-fit: contain;flex-direction: column;
        align-items: center;width:15rem;z-index:100;top:16rem;
        overflow-wrap: anywhere;transition: all 650ms ease; 
        opacity: 0;visibility: hidden;cursor: pointer;transition: all 1050ms ease; 
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s ease-in-out 0s; 
        transition: all 0.3s ease-in-out 0s;}
      .sub-menu::before{content: "";position: absolute;top:-2.5rem;left: 3rem;}
      .navbar-nav li:hover > .sub-menu{top: 3rem;  opacity: 1;visibility: visible;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        -webkit-transition: all 0.3s ease-in-out 2s; 
        transition: all 0.3s ease-in-out 0s; }
      .navbar-nav li .sub-menu li a{text-decoration:none; font-size:18px;}
      .listMenu{flex-direction: column;margin-right:50px;align-items:center; row-gap: 10px;}
      .navbar-nav li .sub-menu li a:hover{border-bottom: 1px solid Blue;font-size:15px;margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',sans-serif;-webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;  }
      .footer-wrap {position: fixed;bottom: 0px;padding-top: 20px;width: 100%;background-color: #fff;}    
    </style>

     <!-- jQuery -->
    <script src="<?=ASSETS?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=ASSETS?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?=ASSETS?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?=ASSETS?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?=ROOT?>';
    </script>
    <script src="<?=ASSETS?>plugins/js/script.js"></script>
    <style>
    html,
    body {height: 100%;width: 100%;}
    .badge {color: #fff;background-color: #008bc6;font-size: 13px;border-radius: 12px 12px 12px}
    .badge {display: inline-block;padding: 0.35em 0.65em;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;}
    #main-header{position:relative;background: rgb(0,0,0)!important;background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;height:70vh;}
 </style>
  </head>