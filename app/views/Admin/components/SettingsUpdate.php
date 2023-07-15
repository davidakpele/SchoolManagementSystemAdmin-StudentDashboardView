<div class="container-fluid">
    <div class="row mt-5 mbt-5">
        <div class="grid">
            <h3 class="ml-5">[Change Logo]</h3>
            <form action="javascript:void(0)" method="post" id="__UpdateLogoForm" class="form-group">
               <div class="d-grid gap-3" id="flexgrid">
                    <div class="img mt-3">
                        <label for="logo" style="margin-left:50px;color:gray;font-size:15px;">Current Logo</label>
                        <br/>
                        <img src="<?=LOGO_ROOT.$data['settings']->logo?>" alt="logo" class="ExistingLogo rounded img-thumbnail __logo" />
                    </div>
                    <div class="img mt-3 ml-5">
                        <label for="logo" style="margin-left:50px;color:gray;font-size:15px;">Update Preview</label>
                        <br/>
                        <img src="<?=ASSETS?>img/avatar/emptyProfile.png" alt="logo" class="_DisplayUpdatedLogo rounded img-thumbnail __logo"/>
                    </div>
               </div>
               <div class="Img_Upload_Logo mt-5 p-image">
                <input type="file" name="_logo" id="_logo" class="form-control" style="max-width:400px"  accept="image/*">
                <div class="errorimg mt-3" style="display:none; color:red;"></div>
                <div class="alert alert-success successmessagediv mt-5" style="display:none;max-width:400px">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
						<b class="msg"></b>
					</div>
                </div>
                <div class="button_class mt-5">
                    <button type="submit" class="btn btn-primary _change_logobtn">Save Changes</button>
                </div>
            </form>
            <br/>
        </div>

        <hr/>
        <div class="mt-5 __update_school_name">
           <h3 class="ml-5 mt-5">[Change School Name]</h3>
           <form action="javascript:void(0)" method="post" class="form-group">
                <div class="col-md-12">
                    <label for="name">Current Name:* </label>
                    <input type="text" disabled="disabled" name="_Oldschoolname" id="_Oldschoolname" class="_Oldschoolname form-control" style="max-width:400px"  
                    value="<?=(((!empty($data['settingsdata']) ? htmlspecialchars($data['settingsdata']->schoolname) : '' )))?>"/>
                </div>
                <div class="col-md-12 mt-5">
                    <label for="name">Set School Name:* </label>
                    <input type="text" name="_schoolname" id="_schoolname" 
                    class="_schoolname form-control" style="max-width:400px"/>
                    <div class="name_error" style="display:none; color:red;"></div>
                </div>
                <div class="button_class mt-5">
                    <button type="submit" class="btn btn-primary _change_schoolname_btn mt-5">Save Changes</button>
                </div>
           </form>
        </div>

        <div class="__backup_school_db"  style="margin-top:15rem">
           <h3 class="ml-5 mt-5">[BackUp School Database]</h3>
           <form action="javascript:void(0)" method="post" class="form-group">
                
                <div class="button_class mt-5 ml-5">
                    <button type="submit" class="btn-lg btn btn-success btn_backup mt-5"><i class="fa fa-cloud" aria-hidden="true">&nbsp;&nbsp;</i>BackUp Database Files</button>
                </div>
           </form>
        </div>
    </div>
</div>
<script>
    $('document').ready(function(){
        $('._change_schoolname_btn').click(function(e){
            e.preventDefault();
            $('.name_error').hide();
            const name = $('#_schoolname').val();
            if (name=="") {
                $('#_schoolname').focus();
                $('.name_error').fadeIn().html('<span>Required.*</span>');
                return false;
            }else{
                let data = {'_name':name,};
                let stringify = JSON.stringify(data);
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    dataType: 'JSON',
                    contentType: "application/json; charset=utf-8",
                    data: stringify, // our data object
                    url: base_url + 'Admin/ischange_school_name', // the url where we want to POST
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
                    if (response.status == 200) {
                        Swal({
                            "title": "Successful",
                            "text": response.message,
                            "type": "success"
                        });
                        setTimeout(() => {
                            window.location.reload(true);
                        }, 1000);
                        $(this).attr({'disabled':true});
                    }else{
                        Swal({
                            "title": "Error",
                            "text": response.message,
                            "type": "error"
                        });
                    }
                }).fail((xhr, error) => {
                    Swal({
                        "title": "Error",
                        "text": response.message,
                        "type": "error"
                    });
                });
            }
        });
        $('._change_logobtn').click(function(e){
            e.preventDefault();
            const formdata =new FormData();
            let photo = $("input#_logo").val();
            let files =  $("#_logo")[0].files;
            var extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
            var allowedExtensions =  ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
            if (files.length ==0) {
                $(".errorimg").fadeIn().html("<span>Please Select Your Profile Photo.!</span>");
                $(".p-image").addClass("labelfocus");
                return false;
            }else if (allowedExtensions.indexOf(extension) === -1) {
                $(".errorimg").fadeIn().html("<span>Invalid file Format. Only <b>" + allowedExtensions.join(', ') + "</b> are allowed.</span>");
                $("input#photo").focus();
                return false;
            }else{
               $(".errorimg").hide();
               formdata.append('file', files[0]);
                 $.ajax({
                    type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
                    data: formdata,// our data object
                    url: "<?=ROOT?>Admin/Action?action=change_logo",// the url where we want to POST
                    cache: false,
                    dataType: 'text',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                    var data_array = $.parseJSON(response);
                        //access your data like this:
                        var plub = data_array['status'];
                        let messg = data_array['message'];
                        let errormessg = data_array['errormsg'];
                        //continue from here...
                    if (plub == 300) {
                        $(".errorimg").fadeIn().text(errormessg);
                        $("input#photo").focus();
                        return false;
                    }
                    else if(plub == 200){
                         $(".errorimg").hide();
                        $(".successmessagediv").fadeIn();
                        $('.msg').fadeIn().html(messg);
                        let delay = 5000;
                        setTimeout(function () { window.location.reload(1); }, delay);
                    }else{
                        $(".errorimg").fadeIn().text(messg);
                    }
                }
                });
            }
        });

         $('.btn_backup').click(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: '200', // our data object
                url: base_url + 'Admin/_backup_db', // the url where we want to POST
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
            })
        });
    });

    // upload script 
$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('._DisplayUpdatedLogo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#_logo").on('change', function(){
        readURL(this);
    });
    $("._change_logobtn").on('click', function() {
        const formdata =new FormData();
        const photo = $("input#_logo").val();
        const files =  $("#_logo")[0].files;
        const extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
        const allowedExtensions =  ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
        if (files.length ==0) {
            $("#_logo").click();
            return false;
        }else if (allowedExtensions.indexOf(extension) === -1) {
            $("#_logo").click();
            return false;
        }else{
            return true;
        }
       
    });
});
</script>