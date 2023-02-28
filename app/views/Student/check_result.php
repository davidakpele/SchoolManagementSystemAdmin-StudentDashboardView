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
        <li class="breadcrumb-item active" aria-current="page">Check Result</li>
      </ol>
      <div class="back">
        <a href="<?=ROOT?>Student/AuthExamination" class="btn btn-primary btn-sm">< Go Back</a>
      </div>
    </nav>
    <div class="main-wrapper" style="margin:40px">
        <div class="row">
            <div class="container">
                <div class="panel content-panel result-panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="panel-title">
                                <img src="<?=ASSETS?>img/product/1.png" class="img-responsive center" style="max-width:70px; display: block;  margin-left: auto; margin-right: auto;">
                                <h3 align="center" class="text-t">Student Result</h3>
                                <hr />
                                <span class="datalist"><b>Student Name: </b><?=$_SESSION['globalname']?></span><br/>
                                <span class="datalist"><b>Student Roll ID: </b><?=$_SESSION['Reference']?></span><br/>
                            </div>
                            <div class="panel-body p-20" style="overflow-x:auto;">
                                <table class="table table-hover table-bordered" border="1" width="100%">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th style="text-align: center">ID</th>
                                            <th style="text-align: center">Course Code</th>
                                            <th style="text-align: center">Course Name</th>
                                            <th style="text-align: center">Fail</th>
                                            <th style="text-align: center">Pass:</th>
                                            <th style="text-align: center">Total Questions:</th>
                                            <th style="text-align: center">Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="text-align: center"><?=$_GET['user'];?></th>
                                            <td style="text-align: center"><?=$data['data']->CourseCode?></td>
                                            <td style="text-align: center"><?=$data['coursename']?></td>
                                            <td style="text-align: center"><?=$data['failQuest']?></td>
                                            <td style="text-align: center"><?=$data['ActualScore']?></td>
                                            <td style="text-align: center"><?=$data['totalQuest']?></td>
                                            <td style="text-align: center"><?=$data['defaultmark']?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="5"></th>           
                                            <td style="text-align: center">Grade:</td>
                                            <td style="text-align: center"><b><?=$data['DisplayResult']?></b></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="5">Total Mark(s)</th>           
                                            <td style="text-align: center"><b></b></td>
                                            <td style="text-align: center">Score (<b><?= $data['score'];?>%</b>)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center">
                                                <i class="fa fa-print fa-2x pull-left btn btn-primary btn-xs" aria-hidden="true" id="print_att" style="cursor:pointer" ></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<noscript>
	<style>
		table.table{
			width:100%;
			border-collapse:collapse
		}
		table.table td,table.table th{
			border:1px solid
		}
		.text-center{
			text-align:center
		}
	</style>
</noscript>
<script>
	$('#print_att').click(function () {
		var _c = $('.content-panel').html();
		var ns = $('noscript').clone();
		var nw = window.open('', '_blank', 'width=900,height=600')
		nw.document.write(_c)
		nw.document.write(ns.html())
		nw.document.close()
		nw.print()
		setTimeout(() => {
			nw.close()
		}, 500);
	})
</script>

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
  