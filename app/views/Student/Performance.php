<?php $this->view("include/Sinclude/header",$data); ?>
  <!-- main content start -->
  <style>
    .bg-gradient-success {background: #28a745 linear-gradient(180deg, #48b461, #28a745) repeat-x !important;color: #fff;}
    .bg-gradient-danger {background: #28a745 linear-gradient(180deg, #dd4b39, #dd4b39) repeat-x !important;color: #fff;}
    .badge {display: inline-block;padding: 0.25em 0.4em;font-size: 75%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0;transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
  </style>
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
    		<section class="content container-fluid" style="margin-top:20px">
                <div class="card">
					<div class="content container content-panel" style="max-width:900px">
						<div class="row">
							<div class="panel panel-primary" id="panel_header">
								<div class="panel-heading text-center">
                                    <?= (!empty($data['data']['student_name'])) ? $data['data']['student_name']->Surname.' '.$data['data']['student_name']->othername : '' ;?>
                                    &nbsp;Performance Record</div>
								<div class="panel-body">
									<div class="table-responsive" style="overflow-x:auto;">
                                        <table class="table table-hover table-bordered" border="1" width="100%">
											<tr>
												<th>Sn</th>
												<th class="text-center">class</th>
												<th class="text-center">semester</th>
												<th class="text-center">course</th>
												<th class="text-center">Present or Absent date</th>
											</tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
										</table>
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
  