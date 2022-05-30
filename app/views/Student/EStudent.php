<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- main content start -->
<div class="main-content" style="background: #e9ecef;">

  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
      </ol>
    </nav>
      <div class="welcome-msg pt-3 pb-4 text-center">
        <span style="color:#fff;font-weight:600; font-size: 2.7rem;font-family: Arial,Verdana,Helvetica,sans-serif;line-height: 1.2;color: #000;">
        <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)
        </span>
      </div>
    <div class="container"  id="formcontainer" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width:990px; margin:0 auto;padding: 25px;" id="App1">
        <div id="successmessagediv" class="success-ico" style="display:none"></div>
        <div id="error" class="error-ico errormsg" style="display:none; padding-left:20px"></div>
        <form method="POST" class="form-group" autocomplete="off" action="javascript:void(0)" id="editStudentDetails">
            <div class="row">
                <div class="col-md-6">
                  <label for="fname" class="col-form-label">First Name:*</label>
                  <input type="text" class="form-control" id="fname" name="fname" value="<?=$data['fname']?>">
                </div>
              <div class="col-md-6">
                  <label for="lname" class="col-form-label">Surname:*</label>
                  <input type="text" class="form-control" id="lname" name="lname" value="<?=$data['lname']?>">
              </div>
              <div class="col-md-6">
                  <label for="Dob" class="col-form-label">Date of Birth:*</label>
                  <input type="date" class="form-control" id="DOb" name="Dob" value="<?=$data['Dob']?>">
              </div>
              <div class="col-md-6">
                  <label for="gender" class="col-form-label">Gender:*</label>
                  <input list="GenderList" id="gender" name="gender" class="form-control" placeholder="Gender" value="<?=$data['gender']?>"/>
                  <datalist id="GenderList">
                      <option value="Male">
                      <option value="Female">
                  </datalist>
              </div>
              <div class="col-md-6">
                  <label for="email" class="col-form-label">Email:*</label>
                  <input type="email" class="form-control" id="email" value="<?=$data['email']?>" name="email">
              </div>
              <div class="col-md-6">
                  <label for="emailsettings" class="col-form-label">Email Settings:*</label>
                  <input list="emailsettings" class="form-control"  name="emailSettings" id="settings" value="<?=$data['settings']?>">
                  <datalist id="emailsettings">
                      <option value="Hide my email from none-privileged users">Hide My Email From None-privileged Users
                      <option value="Allow everyone to see my email address">Allow Everyone to see my email address
                      <option value="Allow only other course participants to see my email address">Allow only other course participants to see my email address
                  </datalist>
              </div>
              <div class="col-md-6">
                  <label for="Relationship" class="col-form-label">Relationship:*</label>
                  <input list="relationshiplist" id="relationship" name="relationship" value="<?=$data['relationship']?>" class="form-control" autocomplete="off">
                  <datalist id="relationshiplist">
                      <option value="Divored">Divored
                      <option value="Single">Single
                      <option value="Married">Married
                      <option value="Complicated">Complicated
                  </datalist>
              </div>
              <div class="col-md-6">
                  <label for="Telephone" class="col-form-label">Telephone:*</label>
                  <input type="tel" class="form-control" id="mobile" name="telephone" value="<?=$data['telephone']?>" autocomplete="off" />
              </div>
              <div class="col-md-6">
                  <label for="photo" class="col-form-label">Photo:*</label>
                  <div class="p-image">
                  <i class="fa fa-camera upload-button" id="Iconfa"></i>
                      <input class="file-upload form-control" type="file" id="photo" name="photo" value=""  accept="image/*"/>
                  </div>
              </div>
              <div class="col-sm-12 col-md-12 col-xs-12  col-gray-dark">
                  <button class="btn btn-primary btn-sm pull-right" value="Signup" type="submit" style="margin-top:30px">Save Changes</button>
              </div>
            </div>
        </form>
    <!-- //modals -->
  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="#" target="_blank" class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
$(document).ready(($)=> {
  //hide messages
  const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);;
  const emailblockReg = /^([\w-\.]+@(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;

  $("#error").hide();
  $("#successmessagediv").hide();
        //on submit
  $('#editStudentDetails').submit((e)=> {
      e.preventDefault();
      $("#error").hide();
      $("#successmessagediv").hide();
    //validate the input now
      let fname = $("input#fname").val();
      if (fname == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your First Name.!</span>");
        $("input#fname").focus();
        return false;
      }
      let lname = $("input#lname").val();
      if (lname == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Last Name.!</span>");
        $("input#lname").focus();
        return false;
      }
      let DOB = $("input#DOb").val();
      if (DOB == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Date Of Birth.</span>");
        $("input#DOb").focus();
        return false;
      } 
      let Gender = $("input#gender").val();
      if (Gender == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Select Your Gender.!</span>");
        $("input#gender").focus();
        return false;
      }
      let  email = $("input#email").val();
      if (email == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Email Address.!</span>");
        $("input#email").focus();
        return false;
      }
      let emailsettings = $("input#settings").val();
      if (emailsettings == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Select Your Email Settings.!</<span>");
        $("input#settings").focus();
        return false;
      }
      let relationship = $("input#relationship").val();
      if (relationship == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Select Your Relationship Status.!</span>");
        $("input#relationship").focus();
        return false;
      }
       let mobile = $("input#mobile").val();
      if (mobile == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Mobile Number.!</span>");
        $("input#mobile").focus();
        return false;
      }
      var formdata =new FormData();
      let photo = $("input#photo").val();
      let files =  $("#photo")[0].files;
      var extension = photo.substr(photo.lastIndexOf('.') + 1).toLowerCase();
      var allowedExtensions =  ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'];
      if (files.length ==0) {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Select Your Profile Photo.!</span>");
        $(".p-image").addClass("labelfocus");
        return false;
      }else if (allowedExtensions.indexOf(extension) === -1) {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Invalid file Format. Only <b>" + allowedExtensions.join(', ') + "</b> are allowed.</span>");
        $("input#photo").focus();
        return false;
      }
        formdata.append('file', files[0]);
        formdata.append('fname', fname);
        formdata.append('lname', lname);
        formdata.append('DOB', DOB);
        formdata.append('Gender', Gender);
        formdata.append('email', email);
        formdata.append('emailsettings', emailsettings);
        formdata.append('relationship', relationship);
        formdata.append('mobile', mobile);
        $.ajax({
            type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
            data: formdata,// our data object
            url: "<?=ROOT?>PagesController/EditStudentDataController",// the url where we want to POST
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
                $("#error").fadeIn().text(errormessg);
                $("input#photo").focus();
                return false;
              }
              else if(plub == 200){
                $("#successmessagediv").fadeIn().html(messg);
                 let delay = 1000;
                setTimeout(function () { window.location.reload(1); }, delay);
              }else{
                    $("#error").fadeIn().text(messg);
              }
          }
        });
  });
});
// upload script 
$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.mypicture').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
// end upload script 
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-3.3.1.min.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery-1.10.2.min.js"></script>

<script src="<?=ASSETS?>important__stylesheet__file/stdfile/jquery.nicescroll.js"></script>
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="<?=ASSETS?>important__stylesheet__file/stdfile/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=ASSETS?>important__stylesheet__file/stdfile/bootstrap.min.js"></script>

</body>

</html>
  