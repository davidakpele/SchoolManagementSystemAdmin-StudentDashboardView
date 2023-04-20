"use strict";

var Validemailfilter = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
var emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;
$(document).ready(function ($) {
  var classid;
  var sess;
  $("#error").hide();
  $("#messagediv").hide();
  $("#AppRegistration").show(); //on submit

  $('#AppRegistration').submit(function (e) {
    var _apptype = $("#Application__Type").val();

    if (_apptype == 1) {
      classid = '1';
      sess = '1';
    } else if (_apptype == 3) {
      classid = '1';
      sess = '1';
    } else {
      classid = '';
      sess = '';
    }

    e.preventDefault();
    $("#error").hide();
    $("#messagediv").hide();
    var App = $("select#Application__Type").val();

    if (App == "") {
      $("#error").fadeIn().text("Select Your Application Type.");
      $("select#Application__Type").focus();
      return false;
    }

    var Fac = $("select#Faculty__Type").val();

    if (Fac == "") {
      $("#error").fadeIn().text("Select Your Prefere Faculty.");
      $("select#Faculty__Type").focus();
      return false;
    }

    var Dpt = $("select#Department__Type").val();

    if (Dpt == "") {
      $("#error").fadeIn().text("Select Your Course Type.");
      $("select#Department__Type").focus();
      return false;
    }

    var Prg = $("#Program").val();

    if (Prg == "") {
      $("#error").fadeIn().text("Select Your Program For This Course.");
      $("#Program").focus();
      return false;
    }

    var Nin = $("#nin").val();

    if (Nin == "") {
      $("#error").fadeIn().text("Please Enter Your National Identification Number [NIN].");
      $("#nin").focus();
      return false;
    }

    var Ety = $("#EtyLevel").val();

    if (Ety == "") {
      $("#error").fadeIn().text("Select Your Entry Level.");
      $("#EtyLevel").focus();
      return false;
    } // Personal Data validation


    var su = $("#surname").val();

    if (su == "") {
      $("#error").fadeIn().text("Please Enter Your Surname.");
      $("#surname").focus();
      return false;
    }

    var othername = $("#othername").val();

    if (othername == "") {
      $("#error").fadeIn().text("Please Enter Your Othername.");
      $("#othername").focus();
      return false;
    }

    if (su == othername) {
      $("#error").fadeIn().text("Unaccepted Data.. Please Surname can't be the same with your Othername.");
      $("#othername").focus();
      return false;
    }

    var Dob = $("#Date__of__birth").val();

    if (Dob == "") {
      $("#error").fadeIn().text("Please Provide Your Date Of Birth");
      $("#Date__of__birth").focus();
      return false;
    }

    var Gn = $("#gender").val();

    if (Gn == "") {
      $("#error").fadeIn().text("Please Select Your Gender.");
      $("#gender").focus();
      return false;
    }

    var email = $("#email").val();

    if (email == "") {
      $("#error").fadeIn().text("Please Enter Your Email Address.");
      $("#email").focus();
      return false;
    } else if (!Validemailfilter.test(email)) {
      $("#error").fadeIn().text("Invaid Email Address..! Please Enter A Valid Email Address.");
      $("#email").focus();
      return false;
    } else if (!emailblockReg.test(email)) {
      $("#error").fadeIn().text("Sorry..!! yahoo.com or hotmail.com is not allow, Please Use Another Email Address.");
      $("#email").focus();
      return false;
    }

    var HMACSHA256 = function HMACSHA256(stringToSign, secret) {
      return "not_implemented";
    }; // The header typically consists of two parts: 
    // the type of the token, which is JWT, and the signing algorithm being used, 
    // such as HMAC SHA256 or RSA.


    var header = {
      "alg": "HS256",
      "typ": "JWT",
      "kid": "vpaas-magic-cookie-1fc542a3e4414a44b2611668195e2bfe/4f4910"
    };
    var encodedHeaders = btoa(JSON.stringify(header)); // The second part of the token is the payload, which contains the claims.
    // Claims are statements about an entity (typically, the user) and 
    // additional data. There are three types of claims: 
    // registered, public, and private claims.

    var claims = {
      "role": "Student"
    };
    var encodedPlayload = btoa(JSON.stringify(claims)); // create the signature part you have to take the encoded header, 
    // the encoded payload, a secret, the algorithm specified in the header, 
    // and sign that.

    var signature = HMACSHA256("".concat(encodedHeaders, ".").concat(encodedPlayload), "mysecret");
    var encodedSignature = btoa(signature);
    var jwt = "".concat(encodedHeaders, ".").concat(encodedPlayload, ".").concat(encodedSignature);
    $.ajax({
      type: 'POST',
      // define the type of HTTP verb we want to use (POST for our form)
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      data: JSON.stringify({
        Email: email,
        JwtApi: jwt
      }),
      // our data object
      url: base_url + "PagesController/isExistStudentEmail",
      // the url where we want to POST
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
      }
    }).then(function (response) {
      if (response.status == 303) {
        $("#error").fadeIn().text(response.message);
        $("#email").focus();
        return false;
      }
    }).fail(function (xhr, error) {
      $("#error").fadeIn().text("Sorry..! you can't continue this Application. we are unable to verify you Data.");
    });
    var rel = $("#relationship").val();

    if (rel == "") {
      $("#error").fadeIn().text("Please Select Your Relationship Status.");
      $("#relationship").focus();
      return false;
    }

    var tel = $("#mobile").val();

    if (tel == "") {
      $("#error").fadeIn().text("Please Enter Your Mobile Number.");
      $("#mobile").focus();
      return false;
    }

    var Plug = {
      "JwtApi": jwt,
      "Application": App,
      "Faculty": Fac,
      "Program": Prg,
      "Department": Dpt,
      "Entry Level": Ety,
      'classid': classid,
      'semester': sess,
      "National Identification Number": Nin,
      "Othername": othername,
      "Surname": su,
      "Gender": Gn,
      "Date of birth": Dob,
      "Relationship Status": rel,
      "Student Email": email,
      "Telephone Number": tel
    };
    var RouteUserDateToPhp = JSON.stringify(Plug);
    $.ajax({
      type: 'POST',
      // define the type of HTTP verb we want to use (POST for our form)
      dataType: 'JSON',
      contentType: "application/json; charset=utf-8",
      data: RouteUserDateToPhp,
      // our data object
      url: base_url + "PagesController/ProcessNewStudentOnline",
      // the url where we want to POST
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
      }
    }).then(function (response) {
      if (response.status == 200) {
        $("#error").hide();
        $("#error").remove();
        $("#AppRegistration").fadeOut();
        $("#messagediv").fadeIn().html(response.Successmessage);
      } else {
        $("#error").fadeIn().text(response.message);
      }
    }).fail(function (xhr, error) {
      $("#error").fadeIn().text('Oops...Server is down! error');
    });
  });
}); //please dont mess with the code here

$(document).ready(function ($) {
  $("#Application__Type").change(function () {
    var ___ApplicationType = $("#Application__Type").val();

    if (___ApplicationType == "") {
      $('#Faculty__Type').empty();
      $('#Department__Type').empty();
      $('#Program').empty();
      $('#StartClass').empty();
      return false;
    }

    xl1 = [{
      'parentChild': '100 Level'
    }, {
      'parentChild': '200 Level (DIRECT ENTRY)'
    }];
    var entryplug = '<div class="EntryDevchild"><label for="Entry Level">Entry Level:</label><select class="form-control" name="Entrylevel" id="EtyLevel" ></select></div>';

    if (___ApplicationType == 1) {
      $(".EntryDevchild").remove();
      $(".EntryDevparent").append(entryplug);
      $('#EtyLevel').empty();
      classid = '1';
      xl1.forEach(function (element) {
        $('#EtyLevel').append('<option value="' + element.parentChild + '">' + element.parentChild + '</option>');
      });
    } else if (___ApplicationType == 3) {
      $(".EntryDevchild").remove();
      $(".EntryDevparent").append(entryplug);
      $('#EtyLevel').empty();
      classid = '1';
      xl1.forEach(function (element) {
        $('#EtyLevel').append('<option value="' + element.parentChild + '">' + element.parentChild + '</option>');
      });
    } else {
      classid = '';
      $(".EntryDevchild").remove();
      $("#EtyLevel").val('');
    }

    var JavascriptHook = {
      "DataId": ___ApplicationType
    };
    var StringData = JSON.stringify(JavascriptHook);
    var p_url = base_url + 'ApisController/RenderProgram';
    var c_url = base_url + 'ApisController/RenderClass';
    var Url = base_url + 'ApisController/RenderFaculty'; // the url where we want to POST

    $.ajax({
      type: 'POST',
      // define the type of HTTP verb we want to use (POST for our form)
      dataType: 'JSON',
      //the type of data we are sending is json
      contentType: "application/json; charset=utf-8",
      data: StringData,
      // our data object
      url: Url,
      //the post destination
      processData: false,
      //false because the preprocessor are not trigger
      encode: true,
      //turn on json encoding
      crossOrigin: true,
      // true because we are sending data with ajax as json format to php
      async: true,
      //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
      crossDomain: true,
      //just in case we host the site
      headers: {
        'Access-Control-Allow-Methods': '*',
        "Access-Control-Allow-Credentials": true,
        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
        "Access-Control-Allow-Origin": "*",
        "Control-Allow-Origin": "*",
        "cache-control": "no-cache",
        'Content-Type': 'application/json'
      }
    }).done(function (response) {
      Responed = response.result;
      $('#Faculty__Type').empty();
      $('#Department__Type').empty();
      $('#Program').empty();
      $('#Faculty__Type').append('<option value="">Choose Faculty</option>');
      $('#Department__Type').append('<option value="">Select Any Faculty First</option>');
      Responed.forEach(function (CallRecieve) {
        $('#Faculty__Type').append('<option value="' + CallRecieve.FacultyID + '">' + CallRecieve.FacultyName + '</option>');
      }); // Program class

      $.ajax({
        type: 'POST',
        // define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        //the type of data we are sending is json
        contentType: "application/json; charset=utf-8",
        data: StringData,
        // our data object
        url: p_url,
        //the post destination
        processData: false,
        //false because the preprocessor are not trigger
        encode: true,
        //turn on json encoding
        crossOrigin: true,
        // true because we are sending data with ajax as json format to php
        async: true,
        //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
        crossDomain: true,
        //just in case we host the site
        headers: {
          'Access-Control-Allow-Methods': '*',
          "Access-Control-Allow-Credentials": true,
          "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
          "Access-Control-Allow-Origin": "*",
          "Control-Allow-Origin": "*",
          "cache-control": "no-cache",
          'Content-Type': 'application/json'
        }
      }).done(function (response) {
        Rprogram = response.result;
        Rprogram.forEach(function (result) {
          $('#Program').append('<option value="' + result.Program__name + '">' + result.Program__name + '</option>');
        });
      }).fail(function (xhr, status, error) {
        console.log('Oops...', 'Something went wrong with ajax !', 'error');
      });
    }).fail(function (xhr, status, error) {
      console.log('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });
});
$(document).ready(function ($) {
  $("#Faculty__Type").change(function () {
    var ___FacultyType = $("#Faculty__Type").val();

    if (___FacultyType == "") {
      $('#Department__Type').empty();
      $('#Department__Type').append('<option value="">Select Any Faculty First</option>');
      return false;
    }

    var JavascriptHook = {
      "DataId": ___FacultyType
    };
    var StringData = JSON.stringify(JavascriptHook);
    var Url = base_url + 'ApisController/fetchDepartment'; // the url where we want to POST

    $.ajax({
      type: 'POST',
      // define the type of HTTP verb we want to use (POST for our form)
      dataType: 'JSON',
      //the type of data we are sending is json
      contentType: "application/json; charset=utf-8",
      data: StringData,
      // our data object
      url: Url,
      //the post destination
      processData: false,
      //false because the preprocessor are not trigger
      encode: true,
      //turn on json encoding
      crossOrigin: true,
      // true because we are sending data with ajax as json format to php
      async: true,
      //because we are expecting long data so we set the whole data  Asynchronous with means configuring our Ajax code
      crossDomain: true,
      //just in case we host the site
      headers: {
        'Access-Control-Allow-Methods': '*',
        "Access-Control-Allow-Credentials": true,
        "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
        "Access-Control-Allow-Origin": "*",
        "Control-Allow-Origin": "*",
        "cache-control": "no-cache",
        'Content-Type': 'application/json'
      }
    }).done(function (response) {
      Responed = response.result;
      $('#Department__Type').empty();
      $('#Department__Type').append('<option value="">Choose Department</option>');
      Responed.forEach(function (CallRecieve) {
        $('#Department__Type').append('<option value="' + CallRecieve.DepartmentID + '">' + CallRecieve.DepartmentName + '</option>');
      });
    }).fail(function (xhr, status, error) {
      console.log('Oops...', 'Something went wrong with ajax !', 'error');
    });
  });
});