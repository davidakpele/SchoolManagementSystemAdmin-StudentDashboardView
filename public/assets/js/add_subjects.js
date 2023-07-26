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