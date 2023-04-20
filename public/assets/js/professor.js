    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
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
			
        $(document).ready(($) => {
            //hide messages 
            $(".statusMsg").hide();
            //on submit
            $('#isEditFunction').click(function(e) {
                e.preventDefault();
                $(".statusMsg").hide();
                let id = $('#Professor__id').val();
                let Surname = $('#Surname').val();
                if (Surname.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Surname.</span> "
                    );
                    $("#Surname").focus()
                    return false;
                }
                let Middle__name = $('#Middle__name').val();
                if (Middle__name.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Middleame.</span> "
                    );
                    $("#Middle__name").focus()
                    return false;
                }
                let Othername = $('#Othername').val();
                if (Othername.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Lastname.</span> "
                    );
                    $("#Othername").focus()
                    return false;
                }
                let Accesscode = $('#Accesscode').val();
                if (Accesscode.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Accesscode.</span> "
                    );
                    $("#Accesscode").focus()
                    return false;
                }
                let Email = $('#Email').val();
                if (Email.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Email.</span> ");
                    $("#Email").focus()
                    return false;
                }
                let mobile = $('#mobile').val();
                if (mobile.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Telephone Number.</span> "
                    );
                    $("#mobile").focus()
                    return false;
                }
                let Place__of__birth = $('#Place__of__birth').val();
                if (Place__of__birth.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Place of birth.</span> "
                    );
                    $("#Place__of__birth").focus()
                    return false;
                }
                let Date_of_Birth = $('#Date_of_Birth').val();
                if (Date_of_Birth.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Date of Birth.</span> "
                    );
                    $("#Date_of_Birth").focus()
                    return false;
                }
                let Gender = $('#Gender').val();
                if (Gender.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Gender.</span> "
                    );
                    $("#Gender").focus()
                    return false;
                }
                let Relationship_sts = $('#Relationship_sts').val();
                if (Relationship_sts.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Relationship Status.</span> "
                    );
                    $("#Relationship_sts").focus()
                    return false;
                }
                let Civil_status = $('#Civil_status').val();
                if (Civil_status.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Civil Status.</span> "
                    );
                    $("#Civil_status").focus()
                    return false;
                }
                let Citizenship = $('#Citizenship').val();
                if (Citizenship.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Citizenship.</span> "
                    );
                    $("#Citizenship").focus()
                    return false;
                }
                let NIN = $('#NIN').val();
                if (NIN.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor National Identification Number.</span> "
                    );
                    $("#NIN").focus()
                    return false;
                }
                let Height = $('#Height').val();
                if (Height.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Height.</span> "
                    );
                    $("#Height").focus()
                    return false;
                }
                let Weight = $('#Weight').val();
                if (Weight.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Weight.</span> "
                    );
                    $("#Weight").focus()
                    return false;
                }
                let Blood_Type = $('#Blood_Type').val();
                if (Blood_Type.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Blood Type.</span> "
                    );
                    $("#Blood_Type").focus()
                    return false;
                }
                let Religion = $('#Religion').val();
                if (Religion.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Religion.</span> "
                    );
                    $("#Religion").focus()
                    return false;
                }
                let Qualification = $('#Qualification').val();
                if (Qualification.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Qualification.</span> "
                    );
                    $("#Qualification").focus()
                    return false;
                }

                let formdata = new FormData();
                let photo = $("#Profile__Picture").val();
                let files = $("#Profile__Picture")[0].files;
                let extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
                let allowedExtensions = ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
                if (files.length == 0) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select Your Professor Profile Photo.!</span>"
                    );
                    $("#Profile__Picture").focus();
                    return false;
                } else if (allowedExtensions.indexOf(extension) === -1) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Invalid file Format. Only <b>" +
                        allowedExtensions.join(', ') + "</b> are allowed.</span>");
                    $("#Profile__Picture").focus();
                    return false;
                }
                let Address = $('#Address').val();
                if (Address.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Address.</span> "
                    );
                    $("#Address").focus()
                    return false;
                }
                formdata.append('id', id);
                formdata.append('surname', Surname);
                formdata.append('middlename', Middle__name);
                formdata.append('lastname', Othername);
                formdata.append('Accesscode', Accesscode);
                formdata.append('Email', Email);
                formdata.append('Mobile', mobile);
                formdata.append('POB', Place__of__birth);
                formdata.append('DOB', Date_of_Birth);
                formdata.append('Gender', Gender);
                formdata.append('Rel', Relationship_sts);
                formdata.append('CVS', Civil_status);
                formdata.append('CIZ', Citizenship);
                formdata.append('NIN', NIN);
                formdata.append('Height', Height);
                formdata.append('Weight', Weight);
                formdata.append('BlT', Blood_Type);
                formdata.append('Religion', Religion);
                formdata.append('QTF', Qualification);
                formdata.append('Address', Address);
                formdata.append('file', files[0]);
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    data: formdata, // our data object
                    url: base_url+"Admin/isEditProf", // the url where we want to POST
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
                            $(".statusMsg").fadeIn().text(errormessg);
                            $("#Profile__Picture").focus();
                            return false;
                        } else if (plub == 200) {
                            $("#messagediv").fadeIn().html(messg);
                            window.location.replace("<?=ROOT?>Admin/Professors");
                        } else {
                            $(".statusMsg").fadeIn().text(messg);
                        }
                    }
                });
            });
        });

        // Adding new profile process js
        $(document).ready(($) => {
            //hide messages 
            $(".statusMsg").hide();
            //on submit
            $('#isAddProfessor').click(function(e) {
                e.preventDefault();
                const Validemailfilter = (
                    /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i
                );
                const emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;
                $(".statusMsg").hide();
                let id = $('#Professor__id').val();
                let Surname = $('#Surname').val();
                if (Surname.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Surname.</span> "
                    );
                    $("#Surname").focus()
                    return false;
                }
                let Middle__name = $('#Middle__name').val();
                if (Middle__name.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Middlename.</span> "
                    );
                    $("#Middle__name").focus()
                    return false;
                }
                let Othername = $('#Othername').val();
                if (Othername.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Lastname.</span> "
                    );
                    $("#Othername").focus()
                    return false;
                }
                let Accesscode = $('#Accesscode').val();
                if (Accesscode.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Accesscode.</span> "
                    );
                    $("#Accesscode").focus()
                    return false;
                }
                let Password = $('#Password').val();
                if (Password.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Password.</span> "
                    );
                    $("#Password").focus()
                    return false;
                }
                let Email = $('#Email').val();
                if (Email.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Email.</span> ");
                    $("#Email").focus()
                    return false;
                } else if (!Validemailfilter.test(Email)) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Invaid Email Address..! Please Enter A Valid Email Address.</span>"
                    );
                    $("#Email").focus();
                    return false;
                } else if (!emailblockReg.test(Email)) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Sorry..!! yahoo.com or hotmail.com is not allow</span>"
                    );
                    $("#Email").focus();
                    return false;
                }
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify({
                        Email: Email
                    }), // our data object
                    url: base_url+"Admin/isProfessorEmailExist", // the url where we want to POST
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
                        $(".statusMsg").fadeIn().html("<span style='margin-left:30px'>" +
                            response.message + "</span>");
                        $("#Email").focus();
                        return false;
                    } else {
                        return;
                    }
                }).fail((xhr, error) => {
                    $("#error").fadeIn().text(
                        "Sorry..! you can't continue this Application. we are unable to verify you Data."
                    );
                });
                let mobile = $('#mobile').val();
                if (mobile.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Telephone Number.</span> "
                    );
                    $("#mobile").focus()
                    return false;
                }
                let Place__of__birth = $('#Place__of__birth').val();
                if (Place__of__birth.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Place of birth.</span> "
                    );
                    $("#Place__of__birth").focus()
                    return false;
                }
                let Date_of_Birth = $('#Date_of_Birth').val();
                if (Date_of_Birth.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Date of Birth.</span> "
                    );
                    $("#Date_of_Birth").focus()
                    return false;
                }
                let Gender = $('#Gender').val();
                if (Gender.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Gender.</span> "
                    );
                    $("#Gender").focus()
                    return false;
                }
                let Relationship_sts = $('#Relationship_sts').val();
                if (Relationship_sts.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Relationship Status.</span> "
                    );
                    $("#Relationship_sts").focus()
                    return false;
                }
                let Civil_status = $('#Civil_status').val();
                if (Civil_status.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Civil Status.</span> "
                    );
                    $("#Civil_status").focus()
                    return false;
                }
                let Citizenship = $('#Citizenship').val();
                if (Citizenship.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Citizenship.</span> "
                    );
                    $("#Citizenship").focus()
                    return false;
                }
                let NIN = $('#NIN').val();
                if (NIN.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor National Identification Number.</span> "
                    );
                    $("#NIN").focus()
                    return false;
                }
                let Height = $('#Height').val();
                if (Height.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Height.</span> "
                    );
                    $("#Height").focus()
                    return false;
                }
                let Weight = $('#Weight').val();
                if (Weight.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Weight.</span> "
                    );
                    $("#Weight").focus()
                    return false;
                }
                let Blood_Type = $('#Blood_Type').val();
                if (Blood_Type.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Enter The Professor Blood Type.</span> "
                    );
                    $("#Blood_Type").focus()
                    return false;
                }
                let Religion = $('#Religion').val();
                if (Religion.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Religion.</span> "
                    );
                    $("#Religion").focus()
                    return false;
                }
                let Qualification = $('#Qualification').val();
                if (Qualification.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Qualification.</span> "
                    );
                    $("#Qualification").focus()
                    return false;
                }

                let formdata = new FormData();
                let photo = $("#Profile__Picture").val();
                let files = $("#Profile__Picture")[0].files;
                let extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
                let allowedExtensions = ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
                if (files.length == 0) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select Your Professor Profile Photo.!</span>"
                    );
                    $("#Profile__Picture").focus();
                    return false;
                } else if (allowedExtensions.indexOf(extension) === -1) {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Invalid file Format. Only <b>" +
                        allowedExtensions.join(', ') + "</b> are allowed.</span>");
                    $("#Profile__Picture").focus();
                    return false;
                }
                let Address = $('#Address').val();
                if (Address.trim() == "") {
                    $(".statusMsg").fadeIn().html(
                        "<span style='margin-left:30px'>Please Select The Professor Address.</span> "
                    );
                    $("#Address").focus()
                    return false;
                }
                formdata.append('id', id);
                formdata.append('surname', Surname);
                formdata.append('middlename', Middle__name);
                formdata.append('lastname', Othername);
                formdata.append('Accesscode', Accesscode);
                formdata.append('Password', Password);
                formdata.append('Email', Email);
                formdata.append('Mobile', mobile);
                formdata.append('POB', Place__of__birth);
                formdata.append('DOB', Date_of_Birth);
                formdata.append('Gender', Gender);
                formdata.append('Rel', Relationship_sts);
                formdata.append('CVS', Civil_status);
                formdata.append('CIZ', Citizenship);
                formdata.append('NIN', NIN);
                formdata.append('Height', Height);
                formdata.append('Weight', Weight);
                formdata.append('BlT', Blood_Type);
                formdata.append('Religion', Religion);
                formdata.append('QTF', Qualification);
                formdata.append('Address', Address);
                formdata.append('file', files[0]);
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    data: formdata, // our data object
                    url: base_url+"Admin/isAddNewProf", // the url where we want to POST
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
                            $(".statusMsg").fadeIn().text(errormessg);
                            $("#Profile__Picture").focus();
                            return false;
                        } else if (plub == 200) {
                            $("#messagediv").fadeIn().html(messg);
                            let delay = 1000;
                            setTimeout(() => {
                                window.location.reload(1);
                            }, delay);
                        } else {
                            $(".statusMsg").fadeIn().text(messg);
                        }
                    }
                });
            });
        });

        function ___SubmitAppointment(SSD) {
            let data = {"SSD": SSD};
            jQuery.ajax({
                url: base_url+'Admin/ProfessorAppointment',
                method: "POST",
                data: data,
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache"
                },
                success: (data) => {
                    $('body').append(data);
                    $('#___AppointmentProfessorModal').modal('show');
                },
                error: () => {
                    alert("Something went wrong..!");
                }
            });
        }
        // Fetch the post user email 
        $(document).on("click", "#myBtn", function() {
            let ids = $(this).attr('data-senderMailTo');
            let recipientdataName = $(this).attr('data-recipientName');
            $("#inputEmail").val(ids);
            $("#RecipientName").val(recipientdataName);
        });
        $(document).ready(() => {
            $("#myBtn").click(() => {
                $("#modalForm").modal();
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
                            $('#iz').fadeIn();
                            boolx.push(inputs[i].value);
                            inputs[i].checked = true;
                        } else {
                            $('#iz').hide();
                            inputs[i].checked = false;
                        }
                    }
                }
                document.getElementById("deletebadge").innerHTML = count;
                const ConsData = {
                    "DataId": boolx
                };
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
                                url: base_url+'Admin/deleteProfessor', // the url where we want to POST
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
                                    Swal.fire('Deleted!', response.message, response.status);
                                    setTimeout(function() {
                                        window.location.reload(1);
                                    }, 300);
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
                    $('#iz').fadeIn();
                    for (var i = 0; i < items.length; i++) {
                        if (items[i].checked) {
                            StringData.push(items[i].value);
                            document.getElementById("deletebadge").innerHTML = count;
                        }
                    }
                } else if (count > 1) {
                    $('#iz').fadeIn();
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
                const ConsData = {
                    "DataId": StringData
                };
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
                                url: base_url+'Admin/deleteProfessor', // the url where we want to POST
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
                                    Swal.fire('Deleted!', response.message,
                                        response.status);
                                    setTimeout(function() {
                                        window.location.reload(1);
                                    }, 300);
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
	juioDT=(SSD)=>{
		//set static array
		let boolx = [];
		//push the student id inside our array
		boolx.push(SSD);
		//nutralize data
		const ConsData = { "DataId": boolx };
		//stringify data
    	let data = JSON.stringify(ConsData);
		//asking is sure to proceed delete process
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
            // if yes button is clicked, using then & done promise callback
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: data, // our data object
                    url: base_url + 'Admin/deleteProfessor', // the url where we want to POST
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
                            text: "Delete Processing Failed..",
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
	}
