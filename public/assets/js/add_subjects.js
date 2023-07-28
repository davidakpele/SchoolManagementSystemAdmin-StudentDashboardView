 $('document').ready(function(e){
    $("#course").change(function() {
        let _course = $("#course").val();
        if(_course == ""){
            $('#coursecode').empty();
            $('#coursecode').val('');
            $('#courseid').empty();
            $('#courseid').val('');
            return false;
        } else {
            const imsk= {"DataId": _course};
            let data = JSON.stringify(imsk);
            const Url =base_url+'ApisController/get_course_data'; // the url where we want to POST
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: data, // our data object
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
            }).done(function (response) {
                $('#coursecode').empty();
                $('#courseid').empty();
                $('#coursecode').append().val(response.result.CourseCode)
                $('#courseid').append().val(response.result.CourseID)
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        }
    });
 });
   
 submit =()=>{
        var _course = $('#course').val();
        var _course_code = $('#coursecode').val();
        var _course_id = $('#courseid').val();
        var _subject_title = $('#subject').val();
        const imsjd = {'course':_course, 'courseid': _course_id, 'course_code': _course_code, 'subject': _subject_title };
        let data = JSON.stringify(imsjd);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: data, // our data object
            url: base_url + 'Admin/addSubject', // the url where we want to POST
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
                $(".invalid1").removeClass('has-error');
                $('.help-block1').hide();
                $(".invalid2").removeClass('has-error');
                $('.help-block2').hide();
                $('#course').val("");
                $('#coursecode').val("");
                $('#courseid').val("");
                $('#subject').val("");
                Swal({
                    "title": "Successful",
                    "text": response.message,
                    "type": "success"
                });
                setTimeout(() => {
                    window.location.reload(true);
                }, 1000);
            } else {
                if (response.status1 == false) {
                    $(".invalid1").addClass('has-error');
                    $('.help-block1').show().html(response.message);
                    $('#course').focus();
                    
                }else {
                    $(".invalid1").removeClass('has-error');
                    $('.help-block1').hide();
                }
                if (response.status2 == false) {
                    $(".invalid2").addClass('has-error');
                    $('.help-block2').show().html(response.message);
                    $('#subject').focus();
                }else {
                    $(".invalid2").removeClass('has-error');
                    $('.help-block2').hide();
                }
                return false;
            }
        }).fail((xhr, error) => {
            Swal({
                "title": "Error",
                "text": response.message,
                "type": "error"
            });
        });
}

hapus = (id) => {
    //set static array
    let boolx = [];
    //push the student id inside our array
    boolx.push(id);
    //nutralize data
    const ConsData = {"DataId": boolx};
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
                url: base_url + 'Admin/delete_subject', // the url where we want to POST
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
                    setTimeout(function () {
                        window.location.reload(1);
                    }, 1000);
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
                    url: base_url+'Admin/delete_subject', // the url where we want to POST
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
                        url: base_url+'Admin/delete_subject', // the url where we want to POST
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