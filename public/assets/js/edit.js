const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
// Adding new profile process js
$(document).ready(($) => {
	//hide messages 
	$(".statusMsg").hide();
	//on submit
	$('#isEditStudent').click(function (e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		$(".statusMsg").hide();
		let id = $('#id').val();
		if (id.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student ID.</span> ");
			$("#id").focus()
			return false;
		}
		let Enrlid = $('#Accesscode').val();
		if (Enrlid.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Enrollment Number.</span> ");
			$("#Accesscode").focus()
			return false;
		}
		let Surname = $('#Surname').val();
		if (Surname.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Surname.</span> ");
			$("#Surname").focus()
			return false;
		}
		let Othername = $('#Othername').val();
		if (Othername.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Othername.</span> ");
			$("#Othername").focus()
			return false;
		}
		let email = $('#email').val();
		if (email.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Email Address.</span> ");
			$("#email").focus()
			return false;
		}
		let mobile = $('#mobile').val();
		if (mobile.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Mobile Number.</span> ");
			$("#mobile").focus()
			return false;
		}
		let DOB = $('#DOB').val();
		if (DOB.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Student Date of Birth.</span> ");
			$("#DOB").focus()
			return false;
		}
		let gender = $('#gender').val();
		if (gender.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Student Gender.</span> ");
			$("#gender").focus()
			return false;
		}
		let rel = $('#rel').val();
		if (rel.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Student Relationship Status.</span> ");
			$("#rel").focus()
			return false;
		}
		let data ={"id": id, "Enrlid": Enrlid, "Surname": Surname, "Othername": Othername,"email": email,"mobile": mobile,"DOB": DOB, "gender": gender,"rel":rel	};
		let Datax = JSON.stringify(data);
		jQuery.ajax({
			type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			dataType: 'JSON',
			contentType: "application/json; charset=utf-8",
			data: Datax, // our data object
			url: base_url + 'Admin/isEditStudent', // the url where we want to POST
			processData: false,
			encode: true,
			crossOrigin: true,
			async :true,
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
			 success: function (response) {
			 	//continue from here...
			 	if (response.status == 200) {
			 		Swal('Success', response.message, 'success').then((result) => {
			 			if (result.value) {
			 				window.location.href = base_url + 'Admin/Students';
			 			}
			 		});
			 	} else {
			 		$(".statusMsg").fadeIn().text(messg);
			 	}
			 }
		});
	});
});
// Adding new profile process js
$(document).ready(($)=>{
    //hide messages 
    $(".statusMsg").hide();
	//on submit
    $('#isEdit').click(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var btn = $('#submit');
		$(".statusMsg").hide();
        let id = $('#Professor__id').val();
        if (id.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Provide The Professor ID.</span> ");
			$("#Professor__id").focus()
			return false;
		}
		let Surname = $('#Surname').val();
		if (Surname.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Surname.</span> ");
			$("#Surname").focus()
			return false;
		}
		let Middle__name=$('#Middle__name').val();
		if (Middle__name.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Middlename.</span> ");
			$("#Middle__name").focus()
			return false;
		}
		let Othername =$('#Othername').val();
		if (Othername.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Lastname.</span> ");
			$("#Othername").focus()
			return false;
		}
		let Accesscode = $('#Accesscode').val();
		if (Accesscode.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Accesscode.</span> ");
			$("#Accesscode").focus()
			return false;
		}
		let Email=$('#Email').val();
		if (Email.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Email.</span> ");
			$("#Email").focus()
			return false;
		}else if (!Validemailfilter.test(Email)) {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Invaid Email Address..! Please Enter A Valid Email Address.</span>");
			$("#Email").focus();
			return false;
		}
		let Telephone_No =$('#Telephone_No').val();
		if (Telephone_No.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Telephone Number.</span> ");
			$("#Telephone_No").focus()
			return false;
		}
		let Date_of_Birth= $('#Date_of_Birth').val();
		if (Date_of_Birth.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Date of Birth.</span> ");
			$("#Date_of_Birth").focus()
			return false;
        }
        let Place__of__birth = $('#Place__of__birth').val();
		if (Place__of__birth.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Place of birth.</span> ");
			$("#Place__of__birth").focus()
			return false;
		}
		let Gender = $('select#Gender').val();
		if (Gender.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Gender.</span> ");
			$("select#Gender").focus()
			return false;
		}
		let Relationship_sts = $('select#Relationship_sts').val();
		if (Relationship_sts.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Relationship Status.</span> ");
			$("select#Relationship_sts").focus()
			return false;
		}
		let Citizenship =$('#Citizenship').val();
		if (Citizenship.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Citizenship.</span> ");
			$("#Citizenship").focus()
			return false;
		}
		let NIN = $('#NIN').val();
		if (NIN.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor National Identification Number.</span> ");
			$("#NIN").focus()
			return false;
		}
		let Height=$('#Height').val();
		if (Height.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Height.</span> ");
			$("#Height").focus()
			return false;
		}
		let Weight =$('select#Weight').val();
		if (Weight.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Weight.</span> ");
			$("select#Weight").focus()
			return false;
		}
		let Blood_Type = $('select#Blood_Type').val();
		if (Blood_Type.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Enter The Professor Blood Type.</span> ");
			$("select#Blood_Type").focus()
			return false;
		}
		let Religion=$('select#Religion').val();
		if (Religion.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Religion.</span> ");
			$("select#Religion").focus()
			return false;
		}
		let Qualification =$('select#Qualification').val();
		if (Qualification.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Qualification.</span> ");
			$("select#Qualification").focus()
			return false;
		}
		let Address=$('#Address').val();
		if (Address.trim() == "") {
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select The Professor Address.</span> ");
			$("#Address").focus()
			return false;
        }
		let formdata = new FormData();
		let radioYesBtn = document.querySelector('input[name="yesno"]:checked');
		if (radioYesBtn != null) {
			let keyvalue = radioYesBtn.value;
			if (keyvalue == 1) {
				let photo = $("#Profile__Picture").val();
				let files =  $("#Profile__Picture")[0].files;
				let extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
				let allowedExtensions =  ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg', 'jfif'];
				if (files.length == 0) {
					$(".errContainer").show();
					$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Please Select Your Professor Profile Photo.!</span>");
					$("#Profile__Picture").focus();
					return false;
				} else if (allowedExtensions.indexOf(extension) === -1) {
					$(".errContainer").show();
					$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp; Invalid file Format. Only <b>" + allowedExtensions.join(', ') + "</b> are allowed.</span>");
					$("#Profile__Picture").focus();
					return false;
				}formdata.append('file',files[0]);
			} else if (keyvalue == 2) {
				let defaultimg = $('#defaultimg').val();
				$(".errContainer").hide();
			}
		} else if (radioYesBtn == null) {
			$(".errContainer").show();
			$(".statusMsg").fadeIn().html("<span style='margin-left:30px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Select Any Radio Button To Complete Your Edit</span>");
			$('.radiobase').focus();
			return false;
		}
		formdata.append('id',id);
		formdata.append('surname',Surname);
		formdata.append('middlename',Middle__name);
		formdata.append('lastname',Othername);
		formdata.append('Accesscode',Accesscode);
		formdata.append('Email',Email);
		formdata.append('Mobile',Telephone_No);
		formdata.append('POB',Place__of__birth);
		formdata.append('DOB',Date_of_Birth);
		formdata.append('Gender',Gender);
		formdata.append('Rel',Relationship_sts);
		formdata.append('CIZ',Citizenship);
		formdata.append('NIN',NIN);
		formdata.append('Height',Height);
		formdata.append('Weight',Weight);
		formdata.append('BlT',Blood_Type);
		formdata.append('Religion',Religion);
		formdata.append('QTF',Qualification);
		formdata.append('Address',Address);
		formdata.append('DefualtImg', defaultimg);
		$.ajax({
            type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
            data: formdata,// our data object
            url: base_url+"Admin/isSaveEdit",// the url where we want to POST
            cache: false,
            dataType: 'text',
            contentType: false,
            processData: false,
             success: function(response) {
			    var data_array = $.parseJSON(response);
                //access your data like this:
                var plub = data_array['status'];
                let messg = data_array['message'];
                let errormessg = data_array['errormsg'];
                //continue from here...
				 if (plub == 300) {
					 Swal('Error', errormessg, 'Error');
					$(".statusMsg").fadeIn().text(errormessg);
					$("#Profile__Picture").focus();
					return false;
              } else if (plub == 200) {
				  btn.attr('disabled', 'disabled').text('Wait...');
				 Swal('Success', messg,'success').then((result) => {
						if (result.value) {
							window.location.href = base_url+'Admin/Professors';
						}
					});
               
              }else{
                $(".statusMsg").fadeIn().text(messg);
              }
			}
        });
	});
	    $('#formdosen input, #formdosen select').on('change', function () {
        $(this).closest('.form-group').removeClass('has-error has-success');
        $(this).nextAll('.help-block').eq(0).text('');
    });
});
$(document).ready(function () {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    // $('#nin').mask('000-000-000-00');
    $('.phone').mask('0000-0000');
    $('#NIN').mask('0000-0000-000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('#Telephone_No').mask('+(000) 0000-0000-00');
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

//userlevel
$('#isAddUser').submit(function (e) {
	e.preventDefault();
	let id = $('#assign option:selected').attr('data-user_id');
	let username = $('#assign option:selected').attr('data-username');
	let assign = $('#assign').val();
	let Surname = $('#Surname').val();
	let Othername = $('#Othername').val();
	let email = $('#email').val();
	let mobile = $('#mobile').val();
	let DOB = $('#DOB').val();
	let gender = $('#gender').val();
	 
	const data = {
		"id": id,
		"username": username,
		"assign": assign,
		"Surname": Surname,
		"Othername": Othername,
		"email": email,
		"mobile": mobile,
		"DOB": DOB,
		"gender":gender
	};
	let c_i = JSON.stringify(data);
	let btn = $('#btn-pass');
	$.ajax({
		type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
		dataType: 'JSON',
		contentType: "application/json; charset=utf-8",
		data: c_i, // our data object
		url: base_url + 'Admin/miosuer', // the url where we want to POST
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
		if (response.status == true) {
			$(".oji1").removeClass('has-error');
			$('.help-block1').hide();
			$(".oji2").removeClass('has-error');
			$('.help-block2').hide();
			$(".oji3").removeClass('has-error');
			$('.help-block3').hide();
			$(".oji4").removeClass('has-error');
			$('.help-block4').hide();
			$(".oji5").removeClass('has-error');
			$('.help-block5').hide();
			$(".oji6").removeClass('has-error');
			$('.help-block6').hide();
			$(".oji7").removeClass('has-error');
			$('.help-block7').hide();
			$('#Surname').val("");
			$('#Othername').val("");
			$('#email').val("");
			$('#mobile').val("");
			$('#assign').val("");
			$('#DOB').val("");
			$('#gender').val("");
			Swal({
				"title": "Successful",
				"text": response.message,
				"type": "success"
			});
			btn.attr('disabled', 'disabled').text('Process...');
			btn.attr('disabled', 'disabled').text('Updated');
			//btn.removeAttr('disabled', 'disabled').text('Updated');
		} else {
			if (response.status1 == false) {
				$(".oji1").addClass('has-error');
				$('.help-block1').show().html(response.message);
			} else {
				console.log('NOT EMPTY');
				$(".oji1").removeClass('has-error');
				$('.help-block1').hide();
			}
			if (response.status2 == false) {
				$(".oji2").addClass('has-error');
				$('.help-block2').show().html(response.message);
			} else {
				$(".oji2").removeClass('has-error');
				$('.help-block2').hide();
			}
			if (response.status3 == false) {
				$(".oji3").addClass('has-error');
				$('.help-block3').show().html(response.message);
			} else {
				$(".oji3").removeClass('has-error');
				$('.help-block3').hide();
			}
			if (response.status4 == false) {
				$(".oji4").addClass('has-error');
				$('.help-block4').show().html(response.message);
			} else {
				$(".oji4").removeClass('has-error');
				$('.help-block4').hide();
			}
			if (response.status5 == false) {
				$(".oji5").addClass('has-error');
				$('.help-block5').show().html(response.message);
			} else {
				$(".oji5").removeClass('has-error');
				$('.help-block5').hide();
			}
			if (response.status6 == false) {
				$(".oji6").addClass('has-error');
				$('.help-block6').show().html(response.message);
			} else {
				$(".oji6").removeClass('has-error');
				$('.help-block6').hide();
			}
			if (response.status7 == false) {
				$(".oji7").addClass('has-error');
				$('.help-block7').show().html(response.message);
			} else {
				$(".oji7").removeClass('has-error');
				$('.help-block7').hide();
			}
			return false;
		}
	}).fail((xhr, error) => {
		$("#errorMessage").fadeIn().text('Oops...Server is down! error');
	});

});