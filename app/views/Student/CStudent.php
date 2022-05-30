<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- //header-ends -->
  <!-- main content start -->
<div class="main-content" style="background: #e9ecef;">
<div id="Divloader" style="display:none">
    <div class="loading">
        <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...</div>
    </div>
</div>
  <!-- content -->
  <div class="container-fluid content-top-gap">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="<?=ROOT?>Student/Dashboard/Default">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
      </ol>
    </nav>
      <div class="welcome-msg pt-3 pb-4 text-center">
        <span style="color:#fff;font-weight:600; font-size: 2.7rem;font-family: Arial,Verdana,Helvetica,sans-serif;line-height: 1.2;color: #000;">
        <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)
        </span>
      </div>
    <div class="container" id="formcontainer" style="margin-top:10px;background:#FFF; border-radius: 5px; max-width: 540px; margin:0 auto;padding: 25px;" id="App1">
        <div id="successmessagediv" class="success-ico" style="display:none"></div>
        <div id="error" class="error-ico errormsg" style="display:none;padding-left:20px"></div>
        <form method="POST" class="form-group" autocomplete="off" action="javascript:void(0)" id="changeStudentPassword">
            <div class="row">
                 <div class="col-md-12">
                  <input type="hidden" class="form-control" id="stdid" name="stdid" value="<?=$_SESSION['student__Id']?>" >
                </div>
                <div class="col-md-12">
                  <label for="oldpassword" class="col-form-label">Current password:*</label>
                  <input type="password" class="form-control" id="oldpassword" name="oldpassword" value="">
                </div>
              <div class="col-md-12">
                  <label for="oldpassword" class="col-form-label">New password:*</label>
                  <input type="password" class="form-control" id="newpassword" name="newpassword" value="">
              </div>
             <div class="col-md-12">
                  <label for="confirmpassword" class="col-form-label">New password (again):*</label>
                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="">
              </div>
            </div>
            <span class="text-center">The password must have at least 6 characters</span>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-xs-12  col-gray-dark">
                <button class="btn btn-primary btn-sm pull-right" value="Signup" type="submit" style="margin-top:30px">Save Changes</button>
                <button class="btn btn-default btn-sm " value="Cancel" type="reset" style="color: #373a3c;background: #d7dfe3;border: 2px solid #d7dfe3;margin-top:30px">Cancel</button>
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
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://www.midtech.digital/" target="_blank" class="text-primary">MidTech Digital.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
$(document).ready(($)=> {
  $("#error").hide();
  $("#successmessagediv").hide();
  $("#Divloader").hide();
        //on submit
  $('#changeStudentPassword').submit((e)=> {
      e.preventDefault();
      $("#error").hide();
      $("#successmessagediv").hide();
    //validate the input now
      let id = $("input#stdid").val();
      let oldpass = $("input#oldpassword").val();
      if (oldpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Enter Your Current Password.!</span>");
        $("input#oldpassword").focus();
        return false;
      }
      let newpass = $("input#newpassword").val();
      if (newpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Please Your New Password.!</span>");
        $("input#newpassword").focus();
        return false;
      }
      if (newpass.length < 8) {
        $("#error").fadeIn().html("<span style='margin-left:42px; font-size:14px'>Password is too weak..it should be at least 8-12 characters</span>");
        $("input#newpassword").focus();
        return false;
      }
      let confirmpass = $("input#confirmpassword").val();
      if (confirmpass == "") {
        $("#error").fadeIn().html("<span style='margin-left:42px'>Enter The New Password (Again)</span>");
        $("input#confirmpassword").focus();
        return false;
      } 
     if(newpass != confirmpass){
        $("#error").fadeIn().html("<span style='margin-left:42px;'><b>Sorry..!</b> The two new password doesn't match</span>");
        $("input#confirmpassword").focus();
        return false;
     }
    const data = {"studentid":id, "oldpassword": oldpass, "newpassword":newpass, "confirmpassword":confirmpass };
    let RouteUserDateToPhp = JSON.stringify(data);
     $.ajax({
        type: 'POST',// define the type of HTTP verb we want to use (POST for our form)
        dataType: 'JSON',
        contentType: "application/json; charset=utf-8",
        data: RouteUserDateToPhp,// our data object
        url: "<?=ROOT?>PagesController/CStudentProcessing",// the url where we want to POST
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
        if(response.status == 200){
            const loading = document.querySelector('.loading');
            $("#successmessagediv").fadeIn().html(response.Successmessage);
            $("#Divloader").show();
            setTimeout(() => {
              loading.style.opacity = "0";
              window.location.reload(1);
              }, 2000);
        }else{
            $("#error").fadeIn().html(response.message);
        }
    }).fail((xhr, error) => {
        $("#error").fadeIn().text('Oops...Server is down! error');
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
  