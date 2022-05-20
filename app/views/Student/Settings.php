<!DOCTYPE html>
<html lang="en">
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
    <meta name="description" content="<?=Meta_tag?>" /> 
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
    <link href="<?=ASSETS?>light/manifest.json" type="text/json" />
    <link href="<?=ASSETS?>important__stylesheet__file/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ASSETS?>important__stylesheet__file/important__style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/structure.css" />
    <link type="text/css" rel="stylesheet" href="<?=ASSETS?>important__stylesheet__file/responsive.css" />
    <script type="text/javascript" src="<?=ASSETS?>js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/bootstrap.js"></script>
    <style>
        /* Basic styling */
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
nav{
    background: #008bc6;
    padding: 0 15px;

}
a {
    color: white;
    text-decoration: none;
}
.menu,
.submenu {   
    list-style-type: none;
}
.logo {
    font-size: 20px;
    padding: 7.5px 10px 7.5px 0;
}
.item {
    padding: 10px;
}
.item.button {
    padding: 9px 5px;
}
.item:not(.button) a:hover,
.item a:hover::after {
    color: #fff;
}
/* Mobile menu */
.menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.menu li a {
    display: block;
    padding: 15px 5px;
}
.menu li.subitem a {
    padding: 15px;
}
.toggle {
    order: 1;
    font-size: 20px;
}
.item.button {
    order: 2;
}
.item {
    order: 3;
    width: 100%;
    text-align: center;
    display: none;
}
.active .item {
    display: block;
}

/* Submenu up from mobile screens */
.submenu {
    display: none;
    
}
.submenu-active .submenu {
   display: block;
}
.has-submenu > a::after {
    font-family: "Font Awesome 5 Free";
    font-size: 12px;
    line-height: 16px;
    font-weight: 900; 
    content: "\f078";
    color: white;
    padding-left: 5px;
}

/* Tablet menu */
@media all and (min-width: 700px) {
    .menu {
        justify-content: center;
    }
    .logo {
        flex: 1;
    }
    .item.button {
        width: auto;
        order: 1;
        display: block;
    }
    .toggle {
        flex: 1;
        text-align: right;
        order: 2;
        
    }
    /* Button up from tablet screen */
    .menu li.button a {
        padding: 10px 15px;
        margin: 5px 0;
    }
    .button a {
        background: #0080ff;
    }
    .button.secondary {
        border: 0;
    }
    .button.secondary a {
        background: transparent;
   
    }
    .button a:hover {
        text-decoration: none;
    }
    .button:not(.secondary) a:hover {
        background: royalblue;
    }
}
/* Desktop menu */
@media all and (min-width: 960px) {
    .menu {
        align-items: flex-start;     
        flex-wrap: nowrap;
        background: none;
    }
    .logo {
        order: 0;
    }
    .item {
        order: 1;
        position: relative;
        display: block; 
        width: auto;
    }
    .button {
        order: 2;
    }
    .submenu-active .submenu {
        display: block;
        position: absolute;
        left: 0;
        top: 68px;
        color: blue;
        background-color: whitesmoke;
    }
    .toggle {
        display: none;
    }
    .submenu-active {
        border-radius: 0;
    }
}
    </style>
    </head>
<body>
       <nav>
    <ul class="menu">
        <li class="logo"><a href="#">Creative Mind Agency</a></li>
        <li class="item"><a href="#">Home</a></li>
        <li class="item"><a href="#">About</a></li>
        <li class="item has-submenu">
            <a tabindex="0">Services</a>
            <ul class="submenu">
                <li class="subitem"><a href="#">Design</a></li>
                <li class="subitem"><a href="#">Development</a></li>
                <li class="subitem"><a href="#">SEO</a></li>
                <li class="subitem"><a href="#">Copywriting</a></li>
            </ul>
        </li>
        <li class="item has-submenu">
            <a tabindex="0">Plans</a>
            <ul class="submenu">
                <li class="subitem"><a href="#">Freelancer</a></li>
                <li class="subitem"><a href="#">Startup</a></li>
                <li class="subitem"><a href="#">Enterprise</a></li>
            </ul>
        </li>
        <li class="item"><a href="#">Blog</a></li>
        <li class="item"><a href="#">Contact</a>
        </li>
     
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
</nav>
<script >
    const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
 
/* Toggle mobile menu */
function toggleMenu() {
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
         
        // adds the menu (hamburger) icon
        toggle.querySelector("a").innerHTML = "<i class=’fas fa-bars’></i>";
    } else {
        menu.classList.add("active");
         
        // adds the close (x) icon
        toggle.querySelector("a").innerHTML = "<i class=’fas fa-times’></i>";
    }
}
 
const items = document.querySelectorAll(".item");
 
/* Activate Submenu */
function toggleItem() {
  if (this.classList.contains("submenu-active")) {
    this.classList.remove("submenu-active");
  } else if (menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
    this.classList.add("submenu-active");
  } else {
    this.classList.add("submenu-active");
  }
}
 
/* Event Listeners */
for (let item of items) {
    if (item.querySelector(".submenu")) {
      item.addEventListener("click", toggleItem, false);
      item.addEventListener("keypress", toggleItem, false);
    }   
}
/* Close Submenu From Anywhere */
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);
 
  if (!isClickInside && menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
  }
}
 
/* Event listener */
document.addEventListener("click", closeSubmenu, false);
/* Event Listener */
toggle.addEventListener("click", toggleMenu, false);

</script>
<?php $this->view('include/LogandRegFooter');?>