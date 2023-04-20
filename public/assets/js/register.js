const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
const emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;

$(document).ready(($) => {
        var classid;
        var sess; 
        $("#error").hide();
        $("#messagediv").hide();
        $("#AppRegistration").show();
        //on submit
        $('#AppRegistration').submit((e) => {
        let _apptype = $("#Application__Type").val();
        if (_apptype == 1) {
            classid = '1';
            sess='1'; 
        }else if(_apptype ==3){
            classid = '1';
            sess='1';
        }else{
            classid = '';
            sess='';
        }
            e.preventDefault();
            $("#error").hide();
            $("#messagediv").hide();
        
            let App = $("select#Application__Type").val();
            if (App == "") {
                $("#error").fadeIn().text("Select Your Application Type.");
                $("select#Application__Type").focus();
                return false;
            }
            let Fac = $("select#Faculty__Type").val();
            if (Fac == "") {
                $("#error").fadeIn().text("Select Your Prefere Faculty.");
                $("select#Faculty__Type").focus();
                return false;
            }
            let Dpt = $("select#Department__Type").val();
            if (Dpt == "") {
                $("#error").fadeIn().text("Select Your Course Type.");
                $("select#Department__Type").focus();
                return false;
            }
            let Prg = $("#Program").val();
            if (Prg == "") {
                $("#error").fadeIn().text("Select Your Program For This Course.");
                $("#Program").focus();
                return false;
            }
            let Nin = $("#nin").val();
            if (Nin == "") {
                $("#error").fadeIn().text("Please Enter Your National Identification Number [NIN].");
                $("#nin").focus();
                return false;
            }
            let Ety = $("#EtyLevel").val();
            if (Ety == "") {
                $("#error").fadeIn().text("Select Your Entry Level.");
                $("#EtyLevel").focus();
                return false;
            }
            // Personal Data validation
            let su = $("#surname").val();
            if (su == "") {
                $("#error").fadeIn().text("Please Enter Your Surname.");
                $("#surname").focus();
                return false;
            }
            let othername = $("#othername").val();
            if (othername == "") {
                $("#error").fadeIn().text("Please Enter Your Othername.");
                $("#othername").focus();
                return false;
            }
            if (su == othername) {
                $("#error").fadeIn().text(
                    "Unaccepted Data.. Please Surname can't be the same with your Othername.");
                $("#othername").focus();
                return false;
            }
            let Dob = $("#Date__of__birth").val();
            if (Dob == "") {
                $("#error").fadeIn().text("Please Provide Your Date Of Birth");
                $("#Date__of__birth").focus();
                return false;
            }
            let Gn = $("#gender").val();
            if (Gn == "") {
                $("#error").fadeIn().text("Please Select Your Gender.");
                $("#gender").focus();
                return false;
            }
            let email = $("#email").val();
            if (email == "") {
                $("#error").fadeIn().text("Please Enter Your Email Address.");
                $("#email").focus();
                return false;
            } else if (!Validemailfilter.test(email)) {
                $("#error").fadeIn().text(
                    "Invaid Email Address..! Please Enter A Valid Email Address.");
                $("#email").focus();
                return false;
            } else if (!emailblockReg.test(email)) {
                $("#error").fadeIn().text(
                    "Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address."
                );
                $("#email").focus();
                return false;
            }
            const HMACSHA256 = (stringToSign, secret) => "not_implemented";
            // The header typically consists of two parts: 
            // the type of the token, which is JWT, and the signing algorithm being used, 
            // such as HMAC SHA256 or RSA.
            const header = {
                "alg": "HS256",
                "typ": "JWT",
                "kid": "vpaas-magic-cookie-1fc542a3e4414a44b2611668195e2bfe/4f4910"
            }
            const encodedHeaders = btoa(JSON.stringify(header));
            // The second part of the token is the payload, which contains the claims.
            // Claims are statements about an entity (typically, the user) and 
            // additional data. There are three types of claims: 
            // registered, public, and private claims.
            const claims = {
                "role": "Student"
            }
            const encodedPlayload = btoa(JSON.stringify(claims));
            // create the signature part you have to take the encoded header, 
            // the encoded payload, a secret, the algorithm specified in the header, 
            // and sign that.
            const signature = HMACSHA256(`${encodedHeaders}.${encodedPlayload}`, "mysecret");
            const encodedSignature = btoa(signature);
            const jwt = `${encodedHeaders}.${encodedPlayload}.${encodedSignature}`
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({
                    Email: email,
                    JwtApi: jwt
                }), // our data object
                url: base_url+"PagesController/isExistStudentEmail", // the url where we want to POST
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
                if (response.status == 303) {
                    $("#error").fadeIn().text(response.message);
                    $("#email").focus();
                    return false;
                }
            }).fail((xhr, error) => {
                $("#error").fadeIn().text(
                    "Sorry..! you can't continue this Application. we are unable to verify you Data."
                );
            });
            let rel = $("#relationship").val();
            if (rel == "") {
                $("#error").fadeIn().text("Please Select Your Relationship Status.");
                $("#relationship").focus();
                return false;
            }
            let tel = $("#mobile").val();
            if (tel == "") {
                $("#error").fadeIn().text("Please Enter Your Mobile Number.");
                $("#mobile").focus();
                return false;
            }
            const Plug = {
                "JwtApi": jwt,
                "Application": App,
                "Faculty": Fac,
                "Program": Prg,
                "Department": Dpt,
                "Entry Level": Ety,
                'classid':classid,
                'semester':sess,
                "National Identification Number": Nin,
                "Othername": othername,
                "Surname": su,
                "Gender": Gn,
                "Date of birth": Dob,
                "Relationship Status": rel,
                "Student Email": email,
                "Telephone Number": tel,
            };
            let RouteUserDateToPhp = JSON.stringify(Plug);
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: RouteUserDateToPhp, // our data object
                url: base_url+"PagesController/ProcessNewStudentOnline", // the url where we want to POST
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
                if (response.status == 200) {
                    $("#error").hide();
                    $("#error").remove();
                    $("#AppRegistration").fadeOut();
                    $("#messagediv").fadeIn().html(response.Successmessage);

                } else {
                    $("#error").fadeIn().text(response.message);
                }
            }).fail((xhr, error) => {
                $("#error").fadeIn().text('Oops...Server is down! error');
            });
        });
    });

    //please dont mess with the code here
    $(document).ready(function($) {
        $("#Application__Type").change(function() {
            let ___ApplicationType = $("#Application__Type").val();
            if(___ApplicationType == ""){
                $('#Faculty__Type').empty();
                $('#Department__Type').empty();
                $('#Program').empty();
                $('#StartClass').empty();
                return false;
            }
            xl1 = 
            [
                {
                    'parentChild':'100 Level'
                },
                {
                    'parentChild':'200 Level (DIRECT ENTRY)'
                },
            ];
            
            var entryplug='<div class="EntryDevchild"><label for="Entry Level">Entry Level:</label><select class="form-control" name="Entrylevel" id="EtyLevel" ></select></div>';
            if (___ApplicationType == 1) {
                $(".EntryDevchild").remove();
                $(".EntryDevparent").append(entryplug);
                $('#EtyLevel').empty();
                classid = '1';
                xl1.forEach(function(element) {
                    $('#EtyLevel').append('<option value="' + element.parentChild+ '">' + element.parentChild + '</option>')
                });
            }else if(___ApplicationType ==3){
                $(".EntryDevchild").remove();
                $(".EntryDevparent").append(entryplug);
                $('#EtyLevel').empty();
                classid = '1';
                xl1.forEach(function(element) {
                    $('#EtyLevel').append('<option value="' + element.parentChild+ '">' + element.parentChild + '</option>')
                });
            }else{
                classid = '';
                $(".EntryDevchild").remove();
                $("#EtyLevel").val('');
            }
            const JavascriptHook = {"DataId": ___ApplicationType};
            let StringData = JSON.stringify(JavascriptHook);
            const p_url =base_url+'ApisController/RenderProgram';
            const c_url =base_url+'ApisController/RenderClass';
            const Url =base_url+'ApisController/RenderFaculty'; 
            // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData, // our data object
                url: Url, //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).done(function(response) {
                Responed = response.result;
                $('#Faculty__Type').empty();
                $('#Department__Type').empty();
                $('#Program').empty();
                $('#Faculty__Type').append('<option value="">Choose Faculty</option>')
                $('#Department__Type').append('<option value="">Select Any Faculty First</option>')
                Responed.forEach(function(CallRecieve) {
                    $('#Faculty__Type').append('<option value="' + CallRecieve.FacultyID + '">' + CallRecieve.FacultyName + '</option>')
                });
                // Program class
                 $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON', //the type of data we are sending is json
                    contentType: "application/json; charset=utf-8",
                    data: StringData, // our data object
                    url: p_url, //the post destination
                    processData: false, //false because the preprocessor are not trigger
                    encode: true, //turn on json encoding
                    crossOrigin: true, // true because we are sending data with ajax as json format to php
                    async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                    crossDomain: true, //just in case we host the site
                    headers: {
                        'Access-Control-Allow-Methods': '*',
                        "Access-Control-Allow-Credentials": true,
                        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                        "Access-Control-Allow-Origin": "*",
                        "Control-Allow-Origin": "*",
                        "cache-control": "no-cache",
                        'Content-Type': 'application/json'
                    },
                }).done(function(response) {
                    Rprogram = response.result;
                    Rprogram.forEach(function(result) {
                        $('#Program').append('<option value="' + result.Program__name + '">' + result.Program__name + '</option>')
                    });
                }).fail((xhr, status, error) => {
                    console.log('Oops...', 'Something went wrong with ajax !', 'error');
                });                
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });
    $(document).ready(function($) {
        $("#Faculty__Type").change(function() {
            let ___FacultyType = $("#Faculty__Type").val();
            if (___FacultyType == "") {
                $('#Department__Type').empty();
                $('#Department__Type').append('<option value="">Select Any Faculty First</option>')
                return false;
            }
            const JavascriptHook = {"DataId": ___FacultyType};
            let StringData = JSON.stringify(JavascriptHook);
            const Url =base_url+'ApisController/fetchDepartment'; // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: StringData, // our data object
                url: Url, //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).done(function(response) {
                Responed = response.result;
                $('#Department__Type').empty();
                $('#Department__Type').append('<option value="">Choose Department</option>')
                Responed.forEach(function(CallRecieve) {
                    $('#Department__Type').append('<option value="' + CallRecieve.DepartmentID + '">' + CallRecieve.DepartmentName + '</option>')
                });
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        });
    });