const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
function validInput(e) {
  e = (e) ? e : window.event;
  a = document.getElementById('nin');
  cPress = (e.which) ? e.which : e.keyCode;

  if (cPress > 31 && (cPress < 48 || cPress > 57)) {
    return false;
  } else if (a.value.length >= 11) {
    return false;
  }
  return true;
}
//please dont mess with the code here
    $(document).ready(function($) {
        $("#Application__Type").change(function () {
            let ___ApplicationType = $("#Application__Type").val();
            const JavascriptHook = {
                "DataId": ___ApplicationType
            };
            let StringData = JSON.stringify(JavascriptHook);
            const Url = base_url+'PageController/RenderRequirementData'; // the url where we want to POST
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
                Responed.forEach(function(CallRecieve) {
                    $('#Department__Type').append('<option value="' + CallRecieve
                        .Child_id + '">' + CallRecieve.Child_name + '</option>')
                });
            }).fail((xhr, status, error) => {
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

    $(document).ready(function() {
        $('.summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
	
    

$(document).ready(function() {
    $('#iz').hide();
    $('#chk_all').on('change', function() {
        let inputs = $(".checkboxid");
        count = 0;
        let boolx = [];
        for (let i = 0; i < inputs.length; i++) {
            let type = inputs[i].getAttribute("type");
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
    const ConsData = { "DataId": boolx };
    let data = JSON.stringify(ConsData);
    const element = document.getElementById('delete__Btn')
    element.addEventListener("click", () => {
        Swal.fire({
            title: "Are you sure?",
            text: "Data will be deleted!",
            type: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            background: '#fff',
            backdrop: `rgba(0,0,123,0.4)`,
            confirmButtonText: 'Yes, Delete!',
            // using theN & done promise callback
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: data, // our data object
                    url: base_url+'Admin/deletestudents', // the url where we want to POST
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
                }).done((response) => {
                    if (response.status == 200) {
                            Swal('Success', response.message, 'success');
                        setTimeout(function() {
                            window.location.reload(1);
                        }, 500);
                    } else {
                        Swal({
                            title: "Failed",
                            text: "No data selected",
                            type: "error",
                            color: '#716add',
                            background: '#fff',
                            backdrop: `rgba(0,0,123,0.4)`,
                            timer: 2500,
                            });
                    }
                }).fail((xhr, status, error) => {
                    Swal.fire('Oops...',
                        'Something went wrong with ajax !',
                        'error');
                });
            } else {
                return false;
            }
        });
    });
});

    $('.checkboxid').on('change', function() {
        $('#iz').hide();
        let items = document.querySelectorAll('.checkboxid');
        let StringData = [];
        let count = 0;
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
        const ConsData = {"DataId": StringData};
        let data = JSON.stringify(ConsData);
        const element = document.getElementById('delete__Btn')
        element.addEventListener("click", () => {
            Swal.fire({
                title: "Are you sure?",
                text: "Data will be deleted!",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                background: '#fff',
                backdrop: `rgba(0,0,123,0.4)`,
                confirmButtonText: 'Yes, Delete!',
                // using theN & done promise callback
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        dataType: 'JSON',
                        contentType: "application/json; charset=utf-8",
                        data: data, // our data object
                        url: base_url+'Admin/deletestudents', // the url where we want to POST
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
                    }).done((response) => {
                        if (response.status == 200) {
                            Swal('Success', response.message, 'success');
                            setTimeout(function() {
                                window.location.reload(1);
                            }, 500);
                        } else {
                            Swal({
                                title: "Failed",
                                text: "No data selected",
                                type: "error",
                                color: '#716add',
                                background: '#fff',
                                backdrop: `rgba(0,0,123,0.4)`,
                                timer: 2500,
                                });
                        }
                    }).fail((xhr, status, error) => {
                            Swal({
                                title: "Failed",
                                text: "No data selected",
                                type: "error",
                                color: '#716add',
                                background: '#fff',
                                backdrop: `rgba(0,0,123,0.4)`,
                                timer: 2500,
                            });
                    });
                } else {
                    return false;
                }
            });
        });
    });
});
// Validate add student data
$(document).ready(($) => {
    //hide messages
    $("#error").hide();
    $("#messagediv").hide();
    $("#addstudent").show();
    //on submit
    $('#addstudent').submit((e) => {
        e.preventDefault();
        $("#error").hide();
        $("#messagediv").hide();
        //validate the  now
        let StudentIdNo = $("#id").val();
        if (StudentIdNo == "") {
            $("#error").show().html("&nbsp; &nbsp;Sorry...! Your ID Number Fail To Generate.");
            $("#id").addClass('invalid');
            $("#id").focus();
            return false;
        }
        let EnrollmentNo = $("#EnrollmentNumber").val();
        if (EnrollmentNo == "") {
            $("#error").show().html("&nbsp; &nbsp; Sorry...! Your Enrollment Number Fail To Generate.");
            $("#EnrollmentNumber").addClass('invalid');
            $("#EnrollmentNumber").focus();
            return false;
        }
        let App = $("select#Application__Type").val();
        if (App == "") {
            $("#error").show().html("&nbsp; &nbsp;Select Student Application Type.");
            $("#Application__Type").addClass('invalid');
            $("select#Application__Type").focus();
            return false;
        }else {
            $("#Application__Type").removeClass('invalid');
        }
        let Dpt = $("select#Department__Type").val();
        if (Dpt == "") {
            $("#error").show().html("&nbsp; &nbsp;Select Student Course Type.");
            $(".Gline").addClass('invalid');
            $("select#Department__Type").focus();
            return false;
        }else {
            $("#Department__Type").removeClass('invalid');
        }
        let Prg = $("select#Program").val();
        if (Prg == "") {
            $("#error").show().html("&nbsp; &nbsp;Select Student Program For This Course.");
            $("#Program").addClass('invalid');
            $("select#Program").focus();
            return false;
        }else {
            $("#Program").removeClass('invalid');
        }
        let Nin = $("#nin").val();
        if (Nin == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Student National Identification Number [NIN].");
            $("#nin").addClass('invalid');
            $("#nin").focus();
            return false;
        }else {
            $("#nin").removeClass('invalid');
        }
        let Ety = $("#EtyLevel").val();
        if (Ety == "") {
            $("#error").show().html("&nbsp; &nbsp;Select Student Entry Level.");
            $("#EtyLevel").addClass('invalid');
            $("#EtyLevel").focus();
            return false;
        }else {
            $("#EtyLevel").removeClass('invalid');
        }
        // Personal Data validation
        let su = $("#surname").val();
        if (su == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Student Surname.");
            $("#surname").addClass('invalid');
            $("#surname").focus();
            return false;
        }else {
            $("#surname").removeClass('invalid');
        }
        let othername = $("#othername").val();
        if (othername == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Student Othername.");
            $("#othername").addClass('invalid');
            $("#othername").focus();
            return false;
        }else {
            $("#othername").removeClass('invalid');
        }
        if (su == othername) {
            $("#error").show().html("&nbsp; &nbsp;Unaccepted Data.. Please Student Surname can't be the same with Othername.");
            $("#othername").addClass('invalid');
            $("#othername").focus();
            return false;
        }else {
            $("#othername").removeClass('invalid');
        }
        let Dob = $("#Date__of__birth").val();
        if (Dob == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Provide Student Date Of Birth");
            $("#Date__of__birth").addClass('invalid');
            $("#Date__of__birth").focus();
            return false;
        }else {
            $("#Date__of__birth").removeClass('invalid');
        }
        let Gn = $("#gender").val();
        if (Gn == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Select Student Gender.");
            $("#gender").addClass('invalid');
            $("#gender").focus();
            return false;
        }else {
            $("#gender").removeClass('invalid');
        }
        let email = $("#email").val();
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
        }else {
            $("#email").removeClass('invalid');
        }
        let rel = $("#relationship").val();
        if (rel == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Select Student Relationship Status.");
            $("#relationship").addClass('invalid');
            $("#relationship").focus();
            return false;
        }else {
            $("#relationship").removeClass('invalid');
        }
        let tel = $("#mobile").val();
        if (tel == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Student Mobile Number.");
            $("#mobile").addClass('invalid');
            $("#mobile").focus();
            return false;
        }else {
            $("#mobile").removeClass('invalid');
        }
        let sec = $("#session").val();
        if (sec == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Student Year Of Entry.");
            $("#session").addClass('invalid');
            $("#session").focus();
            return false;
        }else {
            $("#session").removeClass('invalid');
        }
        let guidence = $(".Gline").val();
        if (guidence == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Student Guidence.");
            $(".Gline").addClass('invalid');
            $(".Gline").focus();
            return false;
        }else {
            $("#Gline").removeClass('invalid');
        }
        let guidanceID = $("#guidanceID").val();
        if (guidanceID == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Provide Guidence ID is Empty.");
            $("#guidanceID").addClass('invalid');
            $("#guidanceID").focus();
            return false;
        }else {
            $("#guidanceID").removeClass('invalid');
        }
        let who = $("#who").val();
        if (who == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Provide Guidence.");
            $("#who").addClass('invalid');
            $("#who").focus();
            return false;
        }else {
            $("#who").removeClass('invalid');
        }
        let GSurname = $("#GSurname").val();
        if (GSurname == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Surname.");
            $("#GSurname").addClass('invalid');
            $("#GSurname").focus();
            return false;
        }else {
            $("#GSurname").removeClass('invalid');
        }
        let GLastname = $("#GLastname").val();
        if (GLastname == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Lastname.");
            $("#GLastname").addClass('invalid');
            $("#GLastname").focus();
            return false;
        }else {
            $("#GLastname").removeClass('invalid');
        }
        let GEmail = $("#GEmail").val();
        if (GEmail == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Emaill Address.");
            $("#GEmail").addClass('invalid');
            $("#GEmail").focus();
            return false;
        }else {
            $("#GEmail").removeClass('invalid');
        }
        let Gmobile = $("#Gmobile").val();
        if (Gmobile == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Mobile Number.");
            $("#Gmobile").addClass('invalid');
            $("#Gmobile").focus();
            return false;
        }else {
            $("#Gmobile").removeClass('invalid');
        }
        let GDOB = $("#GDOB").val();
        if (GDOB == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Date of Birth.");
            $("#GDOB").addClass('invalid');
            $("#GDOB").focus();
            return false;
        }else {
            $("#GDOB").removeClass('invalid');
        }
        let GAddress = $("#GAddress").val();
        if (GAddress == "") {
            $("#error").show().html("&nbsp; &nbsp;Please Enter Guidence Home / Office Address.");
            $("#GAddress").addClass('invalid');
            $("#GAddress").focus();
            return false;
        }else {
            $("#GAddress").removeClass('invalid');
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
        const claims = {"role": "Student"}
        const encodedPlayload = btoa(JSON.stringify(claims));
        // create the signature part you have to take the encoded header, 
        // the encoded payload, a secret, the algorithm specified in the header, 
        // and sign that.
        const signature = HMACSHA256(`${encodedHeaders}.${encodedPlayload}`, "mysecret");
        const encodedSignature = btoa(signature);
        const jwt = `${encodedHeaders}.${encodedPlayload}.${encodedSignature}`
        
        const Plug = {
            "JwtApi": jwt,
            "NewStudentId": StudentIdNo,
            "EnrollmentNumber": EnrollmentNo,
            "Application": App,
            "Program": Prg,
            "Department": Dpt,
            "Entry Level": Ety,
            "National Identification Number": Nin,
            "Othername": othername,
            "Surname": su,
            "Gender": Gn,
            "Date of birth": Dob,
            "Relationship Status": rel,
            "Student Email": email,
            "Session": sec,
            "Telephone Number": tel,
            //Guidiance
            "guidanceID":guidanceID,
            "who": who,
            "GSurname": GSurname,
            "GLastname": GLastname,
            "GEmail": GEmail,
            "Gmobile": Gmobile,
            "GDOB": GDOB,
            "GAddress":GAddress
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
            if (response.status == 505) {
                $("#error").show().text(response.message);
                $('#email').focus();
                return false;
            } else if (response.status == 3) {
                Swal('Success', response.Successmessage, 'success');
                 let delay = 2000;
                setTimeout(() => {
                    window.location.replace(base_url+'Admin/Students/');
                }, delay);
            }
            else {
                $("#error").show().text(response.message);
            }
        }).fail((xhr, error) => {
            $("#error").show().text('Oops...Server is down! error');
        });
    });
 });
$(document).ready(function() {
    $(".Gline").change(function() {
		let element = document.getElementById('guidanceform');
		$(this).find("option:selected").each(function() {
            let optionValue = $(this).attr("value");
            if (optionValue) {
				element.innerHTML = 
				`<hr style="height: 0px;border: none;border-top: 1px solid black;"/>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<input type="text" id="guidanceID" value="${pid}" style="display:none"/>
					<input type="text" id="ChildId" value="${id}" style="display:none"/>
					<input type="text" id="who" value="${optionValue}" style="display:none"/>
					<label for="${optionValue} Surname">${optionValue} Surname:</label>
					<input type="text" class="form-control" id="GSurname" value="" placeholder="${optionValue} Surname"/>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label for="${optionValue} Lastname">${optionValue} Lastname:</label>
					<input type="text" class="form-control" id="GLastname" value="" placeholder="${optionValue} Lastname"/>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label for="${optionValue}'s Email Address">${optionValue}'s Email Address:</label>
					<input type="email" class="form-control" id="GEmail" value="" placeholder="${optionValue} Email Addres"/>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label for="${optionValue} Mobile Number">${optionValue} Mobile Number:</label>
					<input type="tel" class="form-control" id="Gmobile" value="" placeholder="+(121) 2122-1212-22"/>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label for="${optionValue} Date of Birth">${optionValue} Date of Birth:</label>
					<input type="date" class="form-control" id="GDOB" value="" />
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<label for="${optionValue} House Addres:">${optionValue} House Addres:</label>
					<textarea class="form-control" id="GAddress" value="" cols="0" rows="4" placeholder="${optionValue} House Addres"></textarea>
				</div>`;
            }else{
				element.innerHTML = "" //empty 
			}
        });
    }).change();
});


$(document).ready(function () {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    // $('#nin').mask('000-000-000-00');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('#mobile').mask('+(000) 0000-0000-00');
    $('#Gmobile').mask('+(000) 0000-0000-00');
    $('#mobile_no').mask('+(000) 0000-0000-00');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money').mask('000.000.000.000.000,00', { reverse: true });
    $('.money2').mask("#.##0,00", { reverse: true });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
});
