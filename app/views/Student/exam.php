<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- main content start -->
<link rel="stylesheet" href="<?=ASSETS?>students/css/examStyle.css">
<div class="main-content" style="background: #e9ecef;">

  <!-- content -->
  <div class="container-fluid content-top-gap">
    <div class="container">
        <div class="panel panel-default" style="display:none; max-width:900px; margin:auto 0;">
          <div class="panel-heading" style="background-color:#008bc6; color:#fff; font-size:18px">You're about to start this assignment...</div>
          <div class="panel-body">
            <h1 class="ins_ mt-2">Caution</h1>
            <div class="caution">
              <quote>-Once the time is up, it will automatically be submitted.<br/>
              -Once you have answered the questions, click on the ‘Submit’ button to see your score and correct answers.<br/>
              -Make sure that you do not refresh the questions page.</quote>
            </div>
            <h1 class="ins_ mt-2">Declaration</h1>
            <h1 class="ins_ mt-2">Please agree to continue</h1>
            <div class="r_a" style="background-color:#d1d1d1; ">
              <div class="d-flex" style="margin:15px">
                <input class="btn btn-primary" type="checkbox" id="check" style="margin-top:5px"/> 
                <p style="margin-left:20px">I hereby declare that i have not impersonated, or allowed myself to be impersonated by any person for the purpose of this assignment. All work submitted in this assignment will be my own work and does not involve plagiarism or teamwork</p>
              </div>
            </div>
          </div>
          <div class="panel-footer">
             <div class="_Sxddsd">
              <button type="button" class="btn btn-default" onclick="previous()">PREVIOUS</button>&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="btn btn-primary" id="btncheck" type="button" onclick="redirect()"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>agree and continue</button>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="fb-profile upper">
        <div class="header-content">
          <h3><?=(!empty($data['timestamp']->title)?$data['timestamp']->title:'')?></h3>
          <div class="section-xtr d-flex" >
            <span><i class="fa fa-question-circle-o" aria-hidden="true"style="color:white">&nbsp;</i><?=(!empty($data['iscount'])?$data['iscount']:'')?>&nbsp;problems</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><i class="fa fa-clock-o" aria-hidden="true" style="color:white">&nbsp;</i><?=(!empty($data['timestamp']->duration)?$data['timestamp']->duration:'')?></span>
          </div>
        </div>
        <div class="down">
          <div class="acct">
            <h1 class="ins">INSTRUCTION</h1>
            <ol>
              <li>This is an online Theory Exam</li>
              <li>Please make sure you're using the latest version of the browser. We recommend using Google Chrome.</li>
              <li>It's mandatory to disable all the browser extensions and enabled Add-ons and open the test in incognito mode.</li>
              <li>To know the test results figure out the next course of action, please contact your test administrator and they will guide you.</li>
            </ol>
            <p class="bestwish">Best wish from MidTech!
            <div class="processBtn">
              <button class="btn btn-primary" onclick="process();" type="button"><i class="fa fa-play" aria-hidden="true"></i> &nbsp;&nbsp; start taking this assignment</button>
            </div>
            <div class="processSection">
              <hr/>
              <p><i class="fa fa-info-circle" aria-hidden="true"></i>Please proceed to start taking this assignent.</p>
            </div>
          </div>
        </div>
    </div>
</div> <!-- /container -->  
  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard" style="position: fixed;
    bottom: 0;
    width: 100%;">
  <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"
      class="text-primary">W3layouts.</a></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  $('document').ready(function(){
    $('.panel-default').hide();
  })
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

 $(function() {
  var chk = $('#check');
  var btn = $('#btncheck');

  chk.on('change', function() {
    btn.prop("disabled", !this.checked);//true: disabled, false: enabled
  }).trigger('change'); //page load trigger event
});

  function process(){
    $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
    $('.acct').hide();
   setTimeout(function() {
     $('.upper').hide();
    //  $('.upper').remove();
      $('.panel-default').show();
      $( "#loadingDiv" ).fadeOut();
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
    }, 2000);
  }
  function previous(){
    $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
    $('.acct').show();
   setTimeout(function() {
     $('.upper').show();
     $('.upper').fadeIn();
      $('.panel-default').hide();
      $( "#loadingDiv" ).remove();
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
    }, 2000);
  }
  function redirect(){
    var url = "<?=ROOT?>Student/Examination/<?=($data['id'])?$data['id']:''?>";
    window.location.replace(url);
  }
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
  