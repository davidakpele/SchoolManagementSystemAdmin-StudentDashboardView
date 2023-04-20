"use strict";

var Validemailfilter = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;

function validInput(e) {
  e = e ? e : window.event;
  a = document.getElementById('nin');
  cPress = e.which ? e.which : e.keyCode;

  if (cPress > 31 && (cPress < 48 || cPress > 57)) {
    return false;
  } else if (a.value.length >= 11) {
    return false;
  }

  return true;
} //please dont mess with the code here


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

$.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
  return {
    "iStart": oSettings._iDisplayStart,
    "iEnd": oSettings.fnDisplayEnd(),
    "iLength": oSettings._iDisplayLength,
    "iTotal": oSettings.fnRecordsTotal(),
    "iFilteredTotal": oSettings.fnRecordsDisplay(),
    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
  };
};

$(document).ready(function () {
  $('.summernote').summernote({
    toolbar: [// [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough', 'superscript', 'subscript']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['height', ['height']]]
  });
});
$(document).ready(function () {
  $('#iz').hide();
  $('#chk_all').on('change', function () {
    var inputs = $(".checkboxid");
    count = 0;
    var boolx = [];

    for (var i = 0; i < inputs.length; i++) {
      var type = inputs[i].getAttribute("type");

      if (type == "checkbox") {
        if (this.checked) {
          count++;
          $('#iz').show();
          boolx.push(inputs[i].value);
          inputs[i].checked = true;
        } else {
          $('#iz').hide();
          inputs[i].checked = false;
        }
      }
    }

    document.getElementById("deletebadge").innerHTML = count;
    var ConsData = {
      "DataId": boolx
    };
    var data = JSON.stringify(ConsData);
    var element = document.getElementById('delete__Btn');
    element.addEventListener("click", function () {
      Swal.fire({
        title: "Are you sure?",
        text: "Data will be deleted!",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        background: '#fff',
        backdrop: "rgba(0,0,123,0.4)",
        confirmButtonText: 'Yes, Delete!' // using theN & done promise callback

      }).then(function (result) {
        if (result.value) {
          $.ajax({
            type: 'POST',
            // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: data,
            // our data object
            url: base_url + 'Admin/deletestudents',
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
          }).done(function (response) {
            if (response.status == 200) {
              Swal('Success', response.message, 'success');
              setTimeout(function () {
                window.location.reload(1);
              }, 500);
            } else {
              Swal({
                title: "Failed",
                text: "No data selected",
                type: "error",
                color: '#716add',
                background: '#fff',
                backdrop: "rgba(0,0,123,0.4)",
                timer: 2500
              });
            }
          }).fail(function (xhr, status, error) {
            Swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
          });
        } else {
          return false;
        }
      });
    });
  });
  $('.checkboxid').on('change', function () {
    $('#iz').hide();
    var items = document.querySelectorAll('.checkboxid');
    var StringData = [];
    var count = 0;

    for (var i in items) {
      if (items[i].checked) {
        count++;
      }
    }

    if (count == 1) {
      $('#iz').show();

      for (var i = 0; i < items.length; i++) {
        if (items[i].checked) {
          StringData.push(items[i].value);
          document.getElementById("deletebadge").innerHTML = count;
        }
      }
    } else if (count > 1) {
      $('#iz').show();

      for (var i = 0; i < items.length; i++) {
        if (items[i].checked) {
          StringData.push(items[i].value);
          document.getElementById("deletebadge").innerHTML = count;
        }
      }
    } else {
      $('#iz').hide();
      items[i].checked = false;
    }

    console.log(StringData);
    var ConsData = {
      "DataId": StringData
    };
    var data = JSON.stringify(ConsData);
    var element = document.getElementById('delete__Btn');
    element.addEventListener("click", function () {
      Swal.fire({
        title: "Are you sure?",
        text: "Data will be deleted!",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        background: '#fff',
        backdrop: "rgba(0,0,123,0.4)",
        confirmButtonText: 'Yes, Delete!' // using theN & done promise callback

      }).then(function (result) {
        if (result.value) {
          $.ajax({
            type: 'POST',
            // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: data,
            // our data object
            url: base_url + 'Admin/deletestudents',
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
          }).done(function (response) {
            if (response.status == 200) {
              Swal('Success', response.message, 'success');
              setTimeout(function () {
                window.location.reload(1);
              }, 500);
            } else {
              Swal({
                title: "Failed",
                text: "No data selected",
                type: "error",
                color: '#716add',
                background: '#fff',
                backdrop: "rgba(0,0,123,0.4)",
                timer: 2500
              });
            }
          }).fail(function (xhr, status, error) {
            Swal({
              title: "Failed",
              text: "No data selected",
              type: "error",
              color: '#716add',
              background: '#fff',
              backdrop: "rgba(0,0,123,0.4)",
              timer: 2500
            });
          });
        } else {
          return false;
        }
      });
    });
  });
}); // Validate add student data

$(document).ready(function ($) {
  //hide messages
  var classid;
  var sess;
  $("#error").hide();
  $("#messagediv").hide();
  $("#addstudent").show(); //on submit

  $('#addstudent').submit(function (e) {
    var App = $("#Application__Type").val();

    if (App == 1) {
      classid = '1';
      sess = '1';
    } else if (App == 3) {
      classid = '1';
      sess = '1';
    } else {
      classid = '';
      sess = '';
    }

    e.preventDefault();
    $("#error").hide();
    $("#messagediv").hide(); //validate the  now

    if (App == "") {
      $("#error").show().html("&nbsp; &nbsp;Select Student Application Type.");
      $("#Application__Type").addClass('invalid');
      $("select#Application__Type").focus();
      return false;
    } else {
      $("#Application__Type").removeClass('invalid');
    }

    var Fac = $("select#Faculty__Type").val();

    if (Fac == "") {
      $("#error").fadeIn().html("&nbsp; &nbsp;Select Your Prefere Faculty.");
      $("select#Faculty__Type").focus();
      return false;
    } else {
      $("#Application__Type").removeClass('invalid');
    }

    var Dpt = $("select#Department__Type").val();

    if (Dpt == "") {
      $("#error").show().html("&nbsp; &nbsp;Select Student Department Type.");
      $(".Depty").addClass('invalid');
      $(".Depty").focus();
      return false;
    } else {
      $(".Depty").removeClass('invalid');
    }

    var Prg = $("select#Program").val();

    if (Prg == "") {
      $("#error").show().html("&nbsp; &nbsp;Select Student Program For This Course.");
      $("#Program").addClass('invalid');
      $("select#Program").focus();
      return false;
    } else {
      $("#Program").removeClass('invalid');
    }

    var Nin = $("#nin").val();

    if (Nin == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Enter Student National Identification Number [NIN].");
      $("#nin").addClass('invalid');
      $("#nin").focus();
      return false;
    } else {
      $("#nin").removeClass('invalid');
    }

    var Ety = $("#EtyLevel").val();

    if (Ety == "") {
      $("#error").show().html("&nbsp; &nbsp;Select Student Entry Level.");
      $("#EtyLevel").addClass('invalid');
      $("#EtyLevel").focus();
      return false;
    } else {
      $("#EtyLevel").removeClass('invalid');
    } // Personal Data validation


    var su = $("#surname").val();

    if (su == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Enter Student Surname.");
      $("#surname").addClass('invalid');
      $("#surname").focus();
      return false;
    } else {
      $("#surname").removeClass('invalid');
    }

    var othername = $("#othername").val();

    if (othername == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Enter Student Othername.");
      $("#othername").addClass('invalid');
      $("#othername").focus();
      return false;
    } else {
      $("#othername").removeClass('invalid');
    }

    if (su == othername) {
      $("#error").show().html("&nbsp; &nbsp;Unaccepted Data.. Please Student Surname can't be the same with Othername.");
      $("#othername").addClass('invalid');
      $("#othername").focus();
      return false;
    } else {
      $("#othername").removeClass('invalid');
    }

    var Dob = $("#Date__of__birth").val();

    if (Dob == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Provide Student Date Of Birth");
      $("#Date__of__birth").addClass('invalid');
      $("#Date__of__birth").focus();
      return false;
    } else {
      $("#Date__of__birth").removeClass('invalid');
    }

    var Gn = $("#gender").val();

    if (Gn == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Select Student Gender.");
      $(".Gender").addClass('invalid');
      $(".Gender").focus();
      return false;
    } else {
      $(".Gender").removeClass('invalid');
    }

    var email = $("#email").val();

    if (email == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Student Email Address.");
      $("#email").addClass('invalid');
      $("#email").focus();
      return false;
    } else if (!Validemailfilter.test(email)) {
      $("#error").show().html("&nbsp; &nbsp; Invaid Email Address..! Please Enter A Valid Email Address.");
      $("#email").addClass('invalid');
      $("#email").focus();
      return false;
    } else {
      $("#email").removeClass('invalid');
    }

    var rel = $("#relationship").val();

    if (rel == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Select Student Relationship Status.");
      $("#relationship").addClass('invalid');
      $("#relationship").focus();
      return false;
    } else {
      $("#relationship").removeClass('invalid');
    }

    var tel = $("#mobile").val();

    if (tel == "") {
      $("#error").show().html("&nbsp; &nbsp;Please Enter Student Mobile Number.");
      $("#mobile").addClass('invalid');
      $("#mobile").focus();
      return false;
    } else {
      $("#mobile").removeClass('invalid');
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
      if (response.status == 505) {
        $("#error").show().html("&nbsp; &nbsp;" + response.message);
        $('#email').focus();
        return false;
      } else if (response.status == 200) {
        Swal('Success', response.Successmessage, 'success');
        var delay = 5000;
        setTimeout(function () {
          window.location.replace(base_url + 'Admin/Students/');
        }, delay);
      } else {
        $("#error").show().html("&nbsp; &nbsp;" + response.message);
      }
    }).fail(function (xhr, error) {
      $("#error").show().html('Oops...Server is down! error');
    });
  });
}); //can be use in another project.. 

$(document).ready(function () {
  $(".Gline").change(function () {
    var element = document.getElementById('guidanceform');
    $(this).find("option:selected").each(function () {
      var optionValue = $(this).attr("value");

      if (optionValue) {
        element.innerHTML = "<hr style=\"height: 0px;border: none;border-top: 1px solid black;\"/>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<input type=\"text\" id=\"guidanceID\" value=\"".concat(pid, "\" style=\"display:none\"/>\n\t\t\t\t\t<input type=\"text\" id=\"ChildId\" value=\"").concat(id, "\" style=\"display:none\"/>\n\t\t\t\t\t<input type=\"text\" id=\"who\" value=\"").concat(optionValue, "\" style=\"display:none\"/>\n\t\t\t\t\t<label for=\"").concat(optionValue, " Surname\">").concat(optionValue, " Surname:</label>\n\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"GSurname\" value=\"\" placeholder=\"").concat(optionValue, " Surname\"/>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<label for=\"").concat(optionValue, " Lastname\">").concat(optionValue, " Lastname:</label>\n\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"GLastname\" value=\"\" placeholder=\"").concat(optionValue, " Lastname\"/>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<label for=\"").concat(optionValue, "'s Email Address\">").concat(optionValue, "'s Email Address:</label>\n\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"GEmail\" value=\"\" placeholder=\"").concat(optionValue, " Email Addres\"/>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<label for=\"").concat(optionValue, " Mobile Number\">").concat(optionValue, " Mobile Number:</label>\n\t\t\t\t\t<input type=\"tel\" class=\"form-control\" id=\"Gmobile\" value=\"\" placeholder=\"+(121) 2122-1212-22\"/>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<label for=\"").concat(optionValue, " Date of Birth\">").concat(optionValue, " Date of Birth:</label>\n\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"GDOB\" value=\"\" />\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-4 col-sm-12 col-xs-12\">\n\t\t\t\t\t<label for=\"").concat(optionValue, " House Addres:\">").concat(optionValue, " House Addres:</label>\n\t\t\t\t\t<textarea class=\"form-control\" id=\"GAddress\" value=\"\" cols=\"0\" rows=\"4\" placeholder=\"").concat(optionValue, " House Addres\"></textarea>\n\t\t\t\t</div>");
      } else {
        element.innerHTML = ""; //empty 
      }
    });
  }).change();
});
$(document).ready(function () {
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00'); // $('#nin').mask('000-000-000-00');

  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('#mobile').mask('+(000) 0000-0000-00');
  $('#Gmobile').mask('+(000) 0000-0000-00');
  $('#mobile_no').mask('+(000) 0000-0000-00');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {
    reverse: true
  });
  $('.cnpj').mask('00.000.000/0000-00', {
    reverse: true
  });
  $('.money').mask('000.000.000.000.000,00', {
    reverse: true
  });
  $('.money2').mask("#.##0,00", {
    reverse: true
  });
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/,
        optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {
    reverse: true
  });
  $('.clear-if-not-match').mask("00/00/0000", {
    clearIfNotMatch: true
  });
  $('.placeholder').mask("00/00/0000", {
    placeholder: "__/__/____"
  });
  $('.fallback').mask("00r00r0000", {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  });
  $('.selectonfocus').mask("00/00/0000", {
    selectOnFocus: true
  });
});