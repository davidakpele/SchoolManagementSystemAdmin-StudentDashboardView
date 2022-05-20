<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <title>:: Epic :: Forgot Password</title>
        <link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/plugins/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminFirstassets/css/style.min.css" />
        <link rel="stylesheet" href="<?=ASSETS?>RequirementJs/AdminRoute/assets/css/default.css" />
    </head>
    <body class="font-muli theme-cyan gradient">
        <div class="auth option2">
            <div class="auth_left">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <a class="header-brand" href="index-2.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                            <div class="card-title">Forgot password</div>
                        </div>
                        <form action="" method="post">
                            <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">
                                <br/><input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new Password">
                                <br/><input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
                                <div class="text-muted mt-4">Forget it, <a href="login.html">Send me Back</a> to the Sign in screen.</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="<?=ASSETS?>RequirementJs/AdminFirstassets/bundles/lib.vendor.bundle.js" type="cd5a7d9665228cad5b1ef879-text/javascript"></script>
    <script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/core.js" type="cd5a7d9665228cad5b1ef879-text/javascript"></script>
    <script src="<?=ASSETS?>RequirementJs/AdminFirstassets/js/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="cd5a7d9665228cad5b1ef879-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b538d8ebb9c406c","version":"2021.11.0","r":1,"token":"f79813393a9345e8a59bb86abc14d67d","si":100}' crossorigin="anonymous"></script>
    <script>
      $(document).ready(($)=> {
            //hide messages
            $("#errorMessage").hide();
            $("#messagediv").hide();
            //on submit

              $('#___UpdateAdminPassword').submit((e)=> {
                e.preventDefault();
                $("#errorMessage").hide();
                $("#messagediv").hide();
                //validate the input now
                
                // The strong and weak password Regex pattern checker
               
                let Uid = $("input#Userid").val();
                if (Uid == "") {
                    $("#errorMessage").fadeIn().text("Please Provide Your Identity Number");
                    $("input#oldpassword").focus();
                    return false;
                }
                let oldpas = $("input#oldpassword").val();
                if (oldpas == "") {
                    $("#errorMessage").fadeIn().text("Enter Your Old Password To Confirm User Identity.");
                    $("input#oldpassword").focus();
                    return false;
                }     
                let newpas = $("input#newpass").val();
                const isNonWhiteSpace = /^\S*$/;
                const isContainsUppercase = /^(?=.*[A-Z]).*$/;
                const isContainsLowercase = /^(?=.*[a-z]).*$/;
                const isContainsNumber = /^(?=.*[0-9]).*$/;
                const isContainsSymbol = /^(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]).*$/;
                const isValidLength = /^.{10,25}$/;
                if (newpas == "") {
                    $("#errorMessage").fadeIn().text("Enter Your New Password.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isNonWhiteSpace.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password Must Not Contain Whitespaces.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isContainsUppercase.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password must have at least one Uppercase  Character.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isContainsLowercase.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password Must Have at least One Lowercase Character.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isContainsNumber.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password Must Contain at least 0ne Digit.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isContainsSymbol.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password Must Contain at least One Special Symbol.");
                    $("input#newpass").focus();
                    return false;
                }else if (!isValidLength.test(newpas)) {
                    $("#errorMessage").fadeIn().text("Password Must Be 10-16 Characters Long.");
                    $("input#newpass").focus();
                    return false;
                }
                let confirmpas = $("input#conpass").val();
                if (confirmpas == "") {
                    $("#errorMessage").fadeIn().text("Please Confirm Your New Password.");
                    $("input#conpass").focus();
                    return false;
                } if (newpas != confirmpas) {
                    $("#errorMessage").fadeIn().text("Passwords Are Not The Same");
                    $("input#conpass").focus();
                    return false;
                }
                const RouteStringifyData = { "AdminId":Uid, "AdminOldPassword":oldpas, "NewPassword": newpas};
                let GrabData = JSON.stringify(RouteStringifyData);
               
                $.ajax({
                    type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: GrabData,// our data object
                    url: "http://localhost/school/Admin/AdminUpdatePassword",// the url where we want to POST
                    processData: false,
                    encode: true,
                    crossOrigin: true,
                    async: true,
                    crossDomain: true,
                    headers: {
                                'Access-Control-Allow-Methods': '*',
                                "Access-Control-Allow-Credentials": true,
                                "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                                "Access-Control-Allow-Origin": "*",
                                "Control-Allow-Origin": "*",
                                "cache-control": "no-cache",
                                'Content-Type': 'application/json'
                            },
                }).then((response) => {
                    if(response.status == 200){
                        $("#messagediv").fadeIn().html(response.Successmessage);
                    }else{
                        $("#errorMessage").fadeIn().text(response.message);
                    }
                }).fail((xhr, error) => {
                    $("#errorMessage").fadeIn().text('Oops...Server is down! error');
                });
            });
        });
</script>
    </body>
    </html>