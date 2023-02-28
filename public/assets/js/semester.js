$(document).ready(function () {
    $('#iz').hide();
    $('#chk_all').on('change', function () {
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
            "id": boolx
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
                        url: base_url + 'Admin/Deletesemester', // the url where we want to POST
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

    $('.checkboxid').on('change', function () {
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
            "id": StringData
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
                        url: base_url + 'Admin/Deletesemester', // the url where we want to POST
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

hapus = (id) => {
    //set static array
    let boolx = [];
    //push the student id inside our array
    boolx.push(id);
    //nutralize data
    const ConsData = {
        "id": boolx
    };
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
                url: base_url + 'Admin/Deletesemester', // the url where we want to POST
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

 $(document).ready(function ($) {
    $("#ClassVal").change(function () {
        let ClassVal = $("#ClassVal").val();
        let i = $('#CombinedData').val();
        let Classname1 = $("#Classname1").val();
        let Classname2 = $("#Classname2").val();
        if (ClassVal == "") {
            $("#Classname1").empty();
            $("#Classname1").val('');
        } else {
            $('#Classname1').val('(' + ClassVal + '00L)');
        }
        if (i != "") {
            let c = '('+ ClassVal + '00L)';
            $('#CombinedData').val(c + Classname2);
        }
    });
     $("#Classname2").change(function () {
        let ClassVal = $("#ClassVal").val();
        let Classname1 = $("#Classname1").val();
        let Classname2 = $("#Classname2").val();
        var parent = '';
        if (Classname2 == "") {
            $("#CombinedData").empty();
            $("#CombinedData").val('');
        } else {
        let Classname2 = $("#Classname2").val();
            $('#CombinedData').val(Classname1 + Classname2);
        }
    });
 });

function submit() {
    let ClassVal = $("#ClassVal").val();
    let Classname1 = $("#Classname1").val();
    let Classname2 = $("#Classname2").val();
    let CombinedData = $('#CombinedData').val();
   
    let data = {
        'ClassVal': ClassVal,
        'Classname1': Classname1,
        'Classname2': Classname2,
        'CombinedData': CombinedData,
    };
    let stringify = JSON.stringify(data);
    $.ajax({
        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        contentType: "application/json; charset=utf-8",
        data: stringify, // our data object
        url: base_url + 'Admin/AddSemester', // the url where we want to POST
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
        if (response.status == false) {
            $(".invalid1").addClass('has-error');
            $('#ClassVal').focus();
            $('.help-block1').show().html(response.message);
            $(".invalid2").removeClass('has-error');
            $('.help-block2').hide();
            $(".invalid3").removeClass('has-error');
            $('.help-block3').hide();
            $(".invalid4").removeClass('has-error');
            $('.help-block4').hide();
        } else if (response.status == true) {
            $(".invalid").removeClass('has-error');
            $('.help-block').hide();
            $('#ClassVal').val("");
            $('#Classname1').val("");
            $('#Classname2').val("");
            $('#CombinedData').val("");
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
                $('#ClassVal').focus();
                $('.help-block1').show().html(response.message);
            } else {
                $(".invalid1").removeClass('has-error');
                $('.help-block1').hide();
            }
            if (response.status2 == false) {
                $(".invalid2").addClass('has-error');
                $('#Classname1').focus();
                $('.help-block2').show().html(response.message);
            } else {
                $(".invalid2").removeClass('has-error');
                $('.help-block2').hide();
            }
            if (response.status3 == false) {
                $(".invalid1").addClass('has-error');
                $('#Classname2').focus();
                $('.help-block3').show().html(response.message);
            } else {
                $(".invalid3").removeClass('has-error');
                $('.help-block3').hide();
            }
            if (response.status4 == false) {
                $(".invalid4").addClass('has-error');
                $('#CombinedData').focus();
                $('.help-block4').show().html(response.message);
            } else {
                $(".invalid4").removeClass('has-error');
                $('.help-block4').hide();
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