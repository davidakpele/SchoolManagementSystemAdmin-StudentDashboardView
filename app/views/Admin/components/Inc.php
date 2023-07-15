<script>
    $('document').ready(function(){
      $('._content_page_db').click(function(){
          window.location.replace("<?=ROOT?>Admin/settings?action=tb");
      });
      $('._content_page_rp').click(function(){
          window.location.replace("<?=ROOT?>Admin/settings?action=report");
      });
      $('._content_page_sp').click(function(){
          window.location.replace("<?=ROOT?>Admin/settings?action=privacy");
      });
      $('._content_page_hs').click(function(){
          window.location.replace("<?=ROOT?>Admin/settings?action=support");
      });
        $('.viewbtn').click(function(id){
            var id = $(this).attr('data-id');
            let data = {"id": id};
            $.ajax({
                url: base_url+'Admin/data?action=view_exam&id='+id+'',
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
                    $('#modal').modal('show');
                },
                error: () => {
                    alert("Something went wrong..!");
                }
            });
        })
    })
   $('#summernote').summernote({
        codeviewFilter: false,
        codeviewIframeFilter: true,
        spellCheck: true,
        height: 320,
        toolbar: [
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        image: [
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
          ],
          link: [
            ['link', ['linkDialogShow', 'unlink']]
          ],
          table: [
            ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
            ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
          ],
          air: [
            ['color', ['color']],
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']]
          ],
          styleTags: [
              'p',
                  { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                  'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
            fontNamesIgnoreCheck: ['Merriweather'],
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0']
            
      });

      $('document').ready(function(){
        $('.btnComplains').click(function(e){
          e.preventDefault();
          var complains = $('#summernote').val();
          if ($('#summernote').summernote('isEmpty')) {
            $('.error-message').fadeIn().text('Compose Your Message..!')
            return false;
          }else{
            $('.error-message').hide();
           var formData= {"msg":complains};
            var data = JSON.stringify(formData);
            $.ajax({
              type         : 'POST',// define the type of HTTP verb we want to use (POST for our form)
              dataType     : 'JSON',
              contentType  : "application/json; charset=utf-8",
              data         : data,// our data object
              url          : "<?=ROOT?>Admin/sendComplain", // the url where we want to POST
              processData  : false,
              encode       : true,
              crossOrigin  : true,
              async        : true,
              crossDomain  : true,
              headers		 : {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers" : "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                  },
            }).then((response) => {
              if (response.status ==200) {
                
                Swal({
                    "title": "Successful",
                    "text": response.message,
                    "type": "success"
                }).then((result) => {
                  window.location.href = base_url+'Admin/settings?action=report';
                });
              }else{
              Swal({
                      "title": "Failed",
                      "text": response.message,
                      "type": "error"
                  });
                  $('#exampleModalCenter').remove();
                  $('.modal-backdrop').remove();
                  $('#exampleModalCenter').modal('hide');
              }
            }).fail((error) => {
              $('#exampleModalCenter').remove();
              $('.modal-backdrop').remove();
              $('#exampleModalCenter').modal('hide')
            })
          }
        });
    });
</script>