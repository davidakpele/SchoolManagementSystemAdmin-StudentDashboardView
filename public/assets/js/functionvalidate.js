        $(document).ready(function($){
            $("#Application__Type").change(function(){
              let ___ApplicationType = $("#Application__Type").val();
              let data = jQuery(this).serialize();
              $.ajax({
                url: '<?=ROOT?>Fetch__ReadArr/',
                method: 'POST',
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___ApplicationType=' + ___ApplicationType
              }).done(function(Cat){
                 //console.log(books);
                  Cat = JSON.parse(Cat);
                  $('#Faculty__Type').empty();
                  Cat.forEach(function(book){
                      $('#Faculty__Type').append('<option value="' + book.Faculty__ID + '">' + book.Faculty__name + '</option>')
                  })
              })
            });
        }); 
         $(document).ready(function($){
            $("#Faculty__Type").change(function(){
              let facultyID = $("#Faculty__Type").val();
              let data = jQuery(this).serialize();
              $.ajax({
                url: '<?=ROOT?>Respond/',
                method: 'POST',
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___ApplicationSender=' + facultyID
              }).done(function(books){
                 //console.log(books);
                  books = JSON.parse(books);
                  $('#Program__Type').empty();
                  books.forEach(function(book){
                      $('#Program__Type').append('<option value="' + book.Child__faculty__ID +'">' + book.Child__faculty__name + '</option>')
                  })
              })
            });
        });
        $(document).ready(function($){
            $("#program").change(function(){
              let ReadVal = $("#program").val();
              let data = jQuery(this).serialize();
              $.ajax({
                url: '<?=ROOT?>RouteDisplay/',
                method: 'POST',
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
                headers: {
                            'Access-Control-Allow-Methods': '*',
                            "Access-Control-Allow-Credentials": true,
                            "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                            "Access-Control-Allow-Origin": "*",
                            "Control-Allow-Origin": "*",
                            "cache-control": "no-cache"
                            //'Content-Type': 'application/json'
                        },
                data: '___RequirmentTable=' + ReadVal
              }).done(function(Read){
                 console.log(Read);
                //   Read = JSON.parse(Read);
                //   $('#RequirementDiv').empty();
                //   Read.forEach(function(Cast){
                //       $('#RequirementDiv').append('<h2 class="h-1"></h2>')
                //   })
              })
            });
        });