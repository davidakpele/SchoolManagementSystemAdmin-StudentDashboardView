 $(document).ready(function($){
            $("#fty__id").change(function(){
              var aid = $("#fty__id").val();
              var data = jQuery(this).serialize();
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
                data: 'aid=' + aid
              }).done(function(books){
                 //console.log(books);
                  books = JSON.parse(books);
                  $('#books').empty();
                  $('#program').empty();
                  books.forEach(function(book){
                      $('#books').append('<option value="' + book.Faculty__name + '">' + book.Faculty__name + '</option>');
                      $('#program').append('<option value="' + book.Child__faculty__name+ '">' + book.Child__faculty__name + '</option>')
                  })
              })
            });
        });