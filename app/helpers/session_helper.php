<?php
    function isLoggedDashboardController(){
        if (isset($_SESSION['DashboardID'])){
            return true;
        }else {
            return false;
        }
    }
    function iscsrf(){
        if (isset($_SESSION['base']) && isset($_SESSION['csrf']) && isset($_SESSION['saltcsrf'])) {
            return true;
            } else {
            return false;
        }
    }
    function isLoggedInAdmin() {
        if (isset($_SESSION['Admin__id']) && isset($_SESSION['username']) && isset($_SESSION['Role'])){
               // $now = time();   
        // Then when they get to submitting login details, just check whether they're within the 5 minute window
            // if ($now > $_SESSION['expire']) { // 300 seconds = 5 minutes
            //     unset($_SESSION['Admin__id']);
            //     unset($_SESSION['username']);
            //     unset($_SESSION['adminEmail']);
            //     unset($_SESSION['adminSurname']);
            //     unset($_SESSION['adminothername']);
            //     header('location:' . ROOT . 'Administration/Default/');
            // }else {
            //     // they're within the 30 minutes so save the details to the database 
            //     return true;
            // }
            return true;
        } else {
            return false;
        }
    }
    function isLoggedInLectural(){
       if (isset($_SESSION['ProfessorID']) && isset( $_SESSION['Prof_email']) && isset( $_SESSION['UsenrNin']) && isset($_SESSION['Accesscode']) && isset($_SESSION['Fullname']) && isset($_SESSION['Profile__Picture']) && isset($_SESSION['expire'])) {
            return true;
            } else { 
            return false;
        }
    }
    function isLoggedInStudent(){
        if (isset($_SESSION['globalname']) && isset($_SESSION['Department']) && isset($_SESSION['Classid']) && isset($_SESSION['semsterid']) && isset($_SESSION['Reference']) && isset($_SESSION['student__Id'])) {
            return true;
            } else {
            return false;
        }
    }
    function isLoggedInAccountant(){
        if (isset($_SESSION['AccountantID'])  && isset($_SESSION['Department_name']) && isset($_SESSION['Accesscode']) && isset($_SESSION['Profile__Picture'])) {
            return true;
            } else {
            return false;
        }
    }
     function isLoggedInHr(){
        if (isset($_SESSION['HRID']) && isset($_SESSION['Department_name']) && isset($_SESSION['Accesscode']) && isset($_SESSION['Profile__Picture'])) {
            return true;
            } else {
            return false;
        }
    }
     function isLoggedInStaff(){
        if (isset($_SESSION['StaffID']) && isset($_SESSION['Department_name']) && isset($_SESSION['Accesscode']) && isset($_SESSION['Profile__Picture'])) {
            return true;
            } else {
            return false;
        }
    }
    function isLoggedInParent(){
        if (isset($_SESSION['Email']) && isset($_SESSION['othername'])) {
            return true;
            } else {
            return false;
        }
    }
    function isLoggedIn(){
        if (isset($_SESSION['Access__No']) && isset($_SESSION['username'])) {
            return true;
            } else {
            return false;
        }
    }
 function pretty_date($date){
    return date("M d, Y, h:i A", strtotime($date));
}

function pretty_html_special_characters($text){
    $text = htmlspecialchars($text);
    $text = preg_replace("/=/", "=\"\"", $text);
    $text = preg_replace("/&quot;/", "&quot;\"", $text);
    $tags = "/&lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&quot;\"|)(?|(.*)?&quot;(\")|)([\ ]?)(\/|)&gt;/i";
    $replacement = "<$1$2$3$4$5$6$7$8$9$10>";
    $text = preg_replace($tags, $replacement, $text);
    $text = preg_replace("/=\"\"/", "=", $text);
    return $text;
}
function htmlspanishchars($str){
    return str_replace(array("&lt;", "&gt;"), array("<", ">"), htmlspecialchars($str, ENT_NOQUOTES, "UTF-8"));
}

function AuthCheck(){
    if(!isLoggedInAdmin()){
        header('location:' . ROOT . 'Administration/Default');
    }else{
       if ($_SESSION['Role'] ==1 || $_SESSION['Role'] ==2) {
            return true;
        }else{ 
            return false;
        } 
    }
}


function redirect($url){
    header("Location: " . $url);
    echo "<script>setTimeout(function () { window.location.reload(1); }, delay);</script>";
    exit();
}