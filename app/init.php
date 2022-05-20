<?php 
// Accessing the config file
require "../app/core/config.php";
// Accessing the Core-fucntion file
require "../app/core/functions.php";
// Accessing the Database file
require "../app/core/database.php";
//Accessing the controller file 
require "../app/core/controller.php";
// Accessing the Application file
require "../app/core/app.php";
// Accessing helpers file
require "../app/helpers/session_helper.php";
// require the php mailer
require "../app/helpers/phpMailer/PHPMailerAutoload.php";
// require the php mailer class
require "../app/helpers/phpMailer/class.phpmailer.php";
// ZOOM APIs
require_once '../app/helpers/vendor/firebase/php-jwt/src/BeforeValidException.php';
require_once '../app/helpers/vendor/firebase/php-jwt/src/ExpiredException.php';
require_once '../app/helpers/vendor/firebase/php-jwt/src/SignatureInvalidException.php';
require_once '../app/helpers/vendor/firebase/php-jwt/src/JWT.php';
// To access my Zoom file
require_once '../app/helpers/zoom.php';
