var save_label;
var table;

$(document).ready(function() {
  ajaxcsrf();
  table = $("#kelas").DataTable({
    initComplete: function() {
      var api = this.api();
      $("#kelas_filter input")
        .off(".DT")
        .on("keyup.DT", function(e) {
          api.search(this.value).draw();
        });
    },
    dom:
      "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
      {
        extend: "copy",
        exportOptions: { columns: [1, 2] }
      },
      {
        extend: "print",
        exportOptions: { columns: [1, 2] }
      },
      {
        extend: "excel",
        exportOptions: { columns: [1, 2] }
      },
      {
        extend: "pdf",
        exportOptions: { columns: [1, 2] }
      }
    ],
    oLanguage: {
      sProcessing: "loading..."
    },
    processing: true,
    serverSide: true,
    "paging": false,
    ajax: {
      url: "http://localhost/Student/ApisController/data",
      type: "POST"
      //data: csrf
    },
    columns: [
      {
        data: "SemesterID",
        orderable: false,
        searchable: false
      }, {
        data: "Title"
      }, {
        data: "bulk_select",
        orderable: false,
        searchable: false
      }

    ],
    order: [[1, "asc"]],
    rowId: function(a) {
      return a;
    },
    rowCallback: function (row, data, iDisplayIndex) {
      var info = this.fnPagingInfo();
      var page = info.iPage;
      var length = info.iLength;
      var index = page * length + (iDisplayIndex + 1);
      $("td:eq(0)", row).html(index);
    }
  });

  table
    .buttons()
    .container()
    .appendTo("#kelas_wrapper .col-md-6:eq(0)");

  $("#myModal").on("shown.modal.bs", function() {
    $(':input[name="banyak"]').select();
  });

  $("#singlechecked").on('change', function () {
    console.log("heloooo");
  });


  $("#select_all").on("change", function () {
    if (this.checked) {
      $(".check").each(function () {
        this.checked = true;
      });
    } else {
      $(".check").each(function () {
        this.checked = false;
      });
    }
    count = 0;
    let boolx = [];
    let inputs = $(".checkboxid");
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
     const ConsData = {"id": boolx};
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

  $("#kelas tbody").on("click", "tr .checkboxid", function () {
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
    var check = $("#kelas tbody tr .checkboxid").length;
    var checked = $("#kelas tbody tr .checkboxid:checked").length;
    if (check === checked) {
      $("#select_all").prop("checked", true);
    } else {
      $("#select_all").prop("checked", false);
    }
  });
});
