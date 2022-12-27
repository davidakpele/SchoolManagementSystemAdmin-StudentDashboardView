isEditData = () => {
    let id = $('#fname').attr('data-id');
    let fname = $('#fname').val();
    let lname = $('#lname').val();
    let email = $('#email').val();
    let gender = $('#gender').val();
    let DOB = $('#DOB').val();
    let tel = $('#tel').val();
    let Address = $('#address').val();
    const data = {"id": id,"fname": fname,"lname": lname,"email": email,"gender": gender,"DOB": DOB,"tel": tel,"address":Address};
    let c_i = JSON.stringify(data);
    let btn = $('#btn-pass');
    $.ajax({
        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        contentType: "application/json; charset=utf-8",
        data: c_i, // our data object
        url: base_url + 'mioprer', // the url where we want to POST
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
            $(".invalid3").removeClass('has-error');
            $('.help-block3').hide();
            $(".invalid4").removeClass('has-error');
            $('.help-block4').hide();
            $(".invalid5").removeClass('has-error');
            $('.help-block5').hide();
            $(".invalid6").removeClass('has-error');
            $('.help-block6').hide();
            $(".invalid7").removeClass('has-error');
            $('.help-block7').hide();
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

}
   
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
        const ConsData = {"DataId": boolx};
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
                        url: base_url + '/deleteParent', // the url where we want to POST
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
                           url: base_url + '/deleteParent', // the url where we want to POST
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
    console.log(ConsData);
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
                    url: base_url + '/deleteParent', // the url where we want to POST
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