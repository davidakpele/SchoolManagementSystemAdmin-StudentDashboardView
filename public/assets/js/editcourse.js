      isEditData = () => {
          let id = $('#dataid').val();
          let departmemtid = $('#departmemtid').attr('data-department_id');
          let classid = $('#classid').attr('data-class_id');
          let semester = $('#semester').attr('data-semester_id');
          let courscode = $('#courscode').val();
          let coursname = $('#coursname').val();
          let CoursesUnit = $('#CoursesUnit').val();
          let CourseStatus = $('#CourseStatus').val();

          let data = {
              'id': id,
              'departmemtid': departmemtid,
              'classid': classid,
              'semester': semester,
              'courscode': courscode,
              'coursname': coursname,
              'CoursesUnit': CoursesUnit,
              'CourseStatus': CourseStatus
          };
          let stringify = JSON.stringify(data);
          $.ajax({
              type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
              dataType: 'JSON',
              contentType: "application/json; charset=utf-8",
              data: stringify, // our data object
              url: base_url+'Admin/isEditCourse', // the url where we want to POST
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
                  $('#appname').val("");
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