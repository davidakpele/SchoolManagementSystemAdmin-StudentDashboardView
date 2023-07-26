<?php $this->view("include/Sinclude/header",$data); ?>
<style>
  #iks{overflow: scroll;}
</style>
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
      <p style="color:#fff; vertical-align: bottom; text-align:justify; margin-top:31px; font-weight:600; font-size: 1.5rem;font-family: Arial,Verdana,Helvetica,sans-serif;line-height: 1.2;color: #000;">
      <?=$_SESSION['globalname']?> (<?=$_SESSION['Reference']?>)
      </p>
    </div>
    <!-- modals -->
    <section class="template-cards">
      <div class="card card_border">
        <div class="clearfix"><br/></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                      <h3>All the subjects in <?=((!empty($data['coursename']))?$data['coursename']: '');?></h3><br/>
                    </div>
                    <div class="pull-right">
                      <a href="<?=ROOT?>Student/Dashboard/Default" class="btn btn-secondary btn-sm">Go Back</a>
                    </div>
                    <div id="">
                      <div id="is">
                      <table id="myTable" class="table table-hover js-basic-example dataTable table-striped table_custom border-style spacing5" >
                        <thead>
                          <tr>
                            <th>Subjects name</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>E-books Link</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if(!empty($data['data'])):?>
                          <?php foreach ($data['data'] as $key):?>
                          <tr>
                            <td>
                              <a href="<?=ROOT?>Student/Mode?=grade&id=2125&user=12781">
                              <?=$key['subject_name']?>
                              </a>
                            </td>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download Material</a></th>
                          </tr>
                          <?php endforeach;?>
                          <?php else: ?>
                            <tr>
                            <td colspan="9"><h5 class="text-center" style="text-align:center">No Subject Found..!</h5></td>
                          </tr>
                          <?php endif;?>
                        </tbody>
                      </table>
                          </div>
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
  