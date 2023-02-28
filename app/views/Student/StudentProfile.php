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
    <div class="welcome-msg pt-3 pb-4">
      <img src="<?=((!empty($data['photo']))?ROOT.$data['photo']: ASSETS.'img/avatar/profile.jpg' )?>" width="100" height="100"  class="rounded-circle mypicture" alt="<?=$_SESSION['globalname']?>" alt="Picture of <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)" title="Picture of <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)"/>
      <span style="color:#fff; vertical-align: bottom; text-align:justify; font-weight:600; font-size: 1.5rem;font-family: Arial,Verdana,Helvetica,sans-serif;line-height: 1.2;color: #000;">
      <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)
      </span>
    </div>
    <!-- modals -->
    <section class="template-cards">
      <div class="card card_border">
        <div class="clearfix"><br/></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>User details</h5><br/>
                   <h6><b>Email address</b></h6>
                   <p><a href="mailto:<?=$data['studentEmail']?>"><?=$data['studentEmail']?><a/></p>
                   <a href="<?=ROOT?>Student/EStudent"><button type="button" class="btn btn-primary btn-sm" style="margin-top:10px">Edit Profile</button></a>
                <div class="justify-content-between" style="margin-top:82px">
                   <h6><b>Privacy and policies</b></h6>
                   <p><a href="<?=ROOT?>Student/change_password/">Change Password<a/></p>
                   <p><a href="#"><i class="lnr lnr-cog"></i>Data retention summary<a/></p>
                </div>
                <div class="justify-content-between" style="margin-top:25px">
                   <h6><b>Course details</b></h6>
                   <h6 style="margin-top:10px">Course Profile</h6>
                   <span><a href="#">Course name<a/></span>
                </div>
                </div>
                <div class="col-md-auto">
                    <h5>Miscellaneous</h5><br/>
                    <p><a href="#">Blog entries<a/></p>
                    <p><a href="#">Forum posts<a/></p>
                    <p><a href="#">Forum discussions<a/></p>
                    <p><a href="#">Learning plans<a/></p>
                    <div class="justify-content-between" style="margin-top:32px">
                        <h6><b>Reports</b></h6>
                        <p><a href="#">Browser sessions<a/></p>
                        <p><a href="#">Grades overview<a/></p>
                    </div>
                    <div class="justify-content-between" style="margin-top:32px; margin-bottom:40px">
                        <h6><b>Mobile app</b></h6>
                        <h6 style="margin-top:10px"><b>QR code for mobile app access</b></h6>
                        <p>Scan the QR code with your mobile app and you <br/>will be automatically logged in. The QR code will <br/>expire in 10 minutes.</p>
                        <button type="submit" class="btn btn-primary btn-sm" style="font-weight: 500;color: #fff;background: #029443;padding: 0.4rem 1rem;border: 2px solid #029443;margin-top:20px;margin-bottom:20px">View QR Code</button>
                        <p>This site has mobile app access enabled.</p>
                        <p><a href="#">Download the mobile app<a/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
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
  