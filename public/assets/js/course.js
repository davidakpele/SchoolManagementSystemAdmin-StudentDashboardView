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
        const ConsData = {"id": boolx };
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
                        url: base_url+'Admin/deleteCourse', // the url where we want to POST
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
        const ConsData = {"id": StringData};
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
                        url: base_url+'Admin/deleteCourse', // the url where we want to POST
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
                            }, 300);
                        } else {
                            Swal({
                                title: "Failed",
                                text: "Fail to delete data",
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
                                text: "Sorry..! something went wrong.!",
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
    hapus = (id)=>{
       //set static array
		let boolx = [];
		//push the student id inside our array
		boolx.push(id);
		//nutralize data
		const ConsData = {"id": boolx };
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
                    url: base_url+'Admin/deleteCourse', // the url where we want to POST
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
   
    submit =()=>{
        let departmemtid =$('#departmemtid').val();
        let classid = $('#classid').val();
        let semester = $('#semester').val();
        let courscode = $('#courscode').val();
        let coursname =$('#coursname').val();
        let CoursesUnit = $('#CoursesUnit').val();
        let CourseStatus = $('#CourseStatus').val();

        let data = {'departmemtid':departmemtid, 'classid':classid, 'semester':semester, 'courscode':courscode, 'coursname':coursname,'CoursesUnit':CoursesUnit, 'CourseStatus':CourseStatus};
        let stringify = JSON.stringify(data);
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: stringify, // our data object
            url: base_url+'Admin/addcourse', // the url where we want to POST
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
                $(".invalid").removeClass('has-error');
                $('.help-block').hide();
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
                    $('#departmemtid').focus();
                    $('.help-block1').show().html(response.message);
                } else {
                    $(".invalid1").removeClass('has-error');
                    $('.help-block1').hide();
                }
                if (response.status2 == false) {
                    $(".invalid2").addClass('has-error');
                    $('#classid').focus();
                    $('.help-block2').show().html(response.message);
                } else {
                    $(".invalid2").removeClass('has-error');
                    $('.help-block2').hide();
                }
                if (response.status3 == false) {
                    $(".invalid3").addClass('has-error');
                    $('#semester').focus();
                    $('.help-block3').show().html(response.message);
                } else {
                    $(".invalid3").removeClass('has-error');
                    $('.help-block3').hide();
                }
                if (response.status4 == false) {
                    $(".invalid4").addClass('has-error');
                    $('#courscode').focus();
                    $('.help-block4').show().html(response.message);
                } else {
                    $(".invalid4").removeClass('has-error');
                    $('.help-block4').hide();
                }
                if (response.status5 == false) {
                    $(".invalid5").addClass('has-error');
                    $('#coursname').focus();
                    $('.help-block5').show().html(response.message);
                } else {
                    $(".invalid5").removeClass('has-error');
                    $('.help-block5').hide();
                }
                if (response.status6 == false) {
                    $(".invalid6").addClass('has-error');
                    $('#CoursesUnit').focus();
                    $('.help-block6').show().html(response.message);
                } else {
                    $(".invalid6").removeClass('has-error');
                    $('.help-block6').hide();
                }
                if (response.status7 == false) {
                    $(".invalid7").addClass('has-error');
                    $('#CourseStatus').focus();
                    $('.help-block7').show().html(response.message);
                } else {
                    $(".invalid7").removeClass('has-error');
                    $('.help-block7').hide();
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
function converttoUpperCase(e){
 var pPosition = e.target.selectionStart;
 e.target.value=e.target.value.toUpperCase();
 e.target.selectionStart=pPosition;
 e.target.selectionEnd=pPosition;
}

function checkOnInput(e){
 if(hasLowerCase(e.target.value))
   converttoUpperCase(e);
}

function hasLowerCase(str){
 return (/[a-z]/.test(str));
}